<?php
//
// Sermons
//
?>
<div class="inner">
		<div class="filter">
		<div class="layout">
			<div class="content">	
				<form name="filter" id="filter">
					<a <?php echo ((!isset($_GET['sermonauthor']) || $_GET['sermonauthor'] == "all") && !isset($_GET['dstart']) && !isset($_GET['dend'])) ? 'class="selected' : ''; ?> href="/category/sermons">Все проповеди</a>
					<a <?php echo (isset($_GET['dstart']) && isset($_GET['dend']) && $_GET['dstart'] != "" && $_GET['dend'] != "") ? 'class="selected' : ''; ?> href="#">Указать диапазон:</a>
					<input name="dstart" type="text" class="date text" id="datepicker1" value="<?php echo (isset($_GET['dstart'])) ? $_GET['dstart'] : ""; ?>">—<input name="dend" type="text" class="date text" id="datepicker2" value="<?php echo (isset($_GET['dend'])) ? $_GET['dend'] : ""; ?>">

					<script>
	
					var dstart = $('[name=dstart]').val();
					var dend = $('[name=dend]').val();
					
					$(function() {
					
						$( "#datepicker1" ).datepicker();
						$( "#datepicker1" ).datepicker( "option", $.datepicker.regional[ "ru" ] );
						$( "#datepicker1" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
						
						
						$( "#datepicker2" ).datepicker();						
						$( "#datepicker2" ).datepicker( "option", $.datepicker.regional[ "ru" ] );						
						$( "#datepicker2" ).datepicker( "option", "dateFormat", "yy-mm-dd" );						
						
						$( "#datepicker1" ).val(dstart);
						$( "#datepicker2" ).val(dend);
						
						
					});
					</script>

					<select name="sermonauthor">
					<option value="all">Все авторы</option>
					
					<?php 
					
					// $authors is generated at functions.php
				
					foreach ($authors as $key=>$val) {
						echo ( isset($_GET["sermonauthor"]) && $_GET["sermonauthor"] == $key ) ? '<option selected value="'.$key.'">'.$val.'</option>' : '<option value="'.$key.'">'.$val.'</option>';
					}
					
					?>
					</select>
					<input type="submit" class="submit" value="Фильтровать">
				</form>
			</div>
		</div>
	</div>


	
	<div class="sermons">
	<?php
	$posts = "";
        //Проверяем параметры от поиска по параметрам 
	if (isset($_GET['dstart']) && isset($_GET['dend']) && $_GET['dstart'] != "" && $_GET['dend'] != "") {
                //Функция для сбора параметров поиска
		  function filter_where($where = '') {
		    $where .= " AND post_date >= '".$_GET['dstart']."' AND post_date <= '".$_GET['dend']."'";
		    return $where;
		  }
		add_filter('posts_where', 'filter_where');
		query_posts("&post_type=sermons");
		
		$posts = array();
		
		if (have_posts()) : while (have_posts()) : the_post();  // THE LOOP
			
			if (isset($_GET['sermonauthor']) && $_GET['sermonauthor'] != "" && $_GET['sermonauthor'] != "all") {
				if (get_post_meta($post->ID, 'Автор', true) == $_GET['sermonauthor']) {
					$posts[] = $post;
				}
			}
			else { 
				$posts[] = $post;
				}
		endwhile; endif;	
		
		wp_reset_query();
		remove_filter('posts_where', 'filter_where');

	}
	else {
		if (isset($_GET['sermonauthor']) &&  $_GET['sermonauthor'] != "") {
			$posts = get_posts("&post_type=sermons&meta_key=Автор&meta_value=".$_GET['sermonauthor']."&numberposts=1000");
		}

        		if ((isset($_GET['sermonauthor']) && $_GET['sermonauthor'] == "all") || (isset($_GET['sermonauthor']) && $_GET['sermonauthor'] == "") || (!isset($_GET['sermonauthor']))) {
        			$posts = get_posts("&post_type=sermons&numberposts=1000");
        		}
	}
	
// pagination
$total_posts = count($posts);
$posts_perpage = 9;
$pages = ceil ($total_posts / $posts_perpage);
if (array_key_exists('page', $_GET)) { $current_page = $_GET['page']; } else { $current_page = 0; }
$filtered_posts=array_slice($posts, $current_page*$posts_perpage, $posts_perpage);

$posts = $filtered_posts;
	foreach ($posts as $post) {
		$toggle ="";
		echo '<div class="sermon">';
		echo '<h3><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></h3>';	
		//echo '<p>'.get_post_meta($post->ID, "Краткое описание (если нужно)", true).'</p>';
			
		if (get_post_meta($post->ID, 'Тип проповеди', true) == "Текст") {
			echo '<a href="'.get_permalink($post->ID).'">Читать дальше</a>';
		}	
			
		if (get_post_meta($post->ID, 'Тип проповеди', true) == "Аудио") {

			$toggle="details_wide";

			if (get_post_meta($post->ID, 'Внешний аудиофайл', true)){
				$mp3 = get_post_meta($post->ID, 'Внешний аудиофайл', true);
			}
			
			else {
				$mp3 = wp_get_attachment_url(get_post_meta($post->ID, 'Аудиофайл', true));
			}		
		
		echo '<object type="application/x-shockwave-flash" data="'.get_bloginfo("template_directory").'/swf/player_mp3_maxi.swf" width="235" height="20">';
		echo '<param name="movie" value="'.get_bloginfo("template_directory").'/swf/player_mp3_maxi.swf" />';
		echo '<param name="FlashVars" value="config='.get_bloginfo("template_directory").'/swf/config.txt&mp3='.$mp3.'" />';
		echo '</object><a href="'.$mp3.'"><img src="'.get_bloginfo("template_directory").'/i/audiodownload.png"></a>';
		}	

		if (get_post_meta($post->ID, 'Тип проповеди', true) == "Видео") {
		
			$video_object=get_post_meta($post->ID, "Код видео", true);
			$video_object = preg_replace('/width="\d+"/', 'width="800"' , $video_object);
			$video_object = preg_replace('/height="\d+"/', 'height="450"' , $video_object);	
		
			if  (get_post_meta($post->ID, 'Превью (110x75)', true)) {

			?>
				<div class="preview_box" style="background:url(<?=wp_get_attachment_url(get_post_meta($post->ID, 'Превью (110x75)', true));?>);">
					<a class="preview_btn fancy" href="#video_object<?=$post->ID ?>" title="<?=$post->post_title;?>"></a>
				</div>
				<div style="display:none"><div id="video_object<?=$post->ID ?>"><?=$video_object; ?></div></div>
			<?php
				
			} else {
			?>
			<div class="preview_box light" style="background:url(<?= get_bloginfo("template_directory").'/i/novideopreview.png'; ?>);">
				<a class="preview_btn fancy" href="#video_object<?=$post->ID ?>" title="<?=$post->post_title;?>"></a>
			</div>
			<div style="display:none"><div id="video_object<?=$post->ID ?>"><?=$video_object; ?></div></div>
			<?php
			}
		}			
		echo '<div class="details '.$toggle.'">';
		echo '<span class="date">'.date("d.m.Y", strtotime($post->post_date)).'</span>, ';
		if 	(getPostBySlug(get_post_meta($post->ID, 'Автор', true), "pastors", OBJECT)) {
			$author_link = '<a href="/pastors/'.get_post_meta($post->ID, 'Автор', true).'">'.$authors[get_post_meta($post->ID, 'Автор', true)].'</a>';
			}
			else {
			$author_link = $authors[get_post_meta($post->ID, 'Автор', true)];
			}
		
		echo '<span class="author">'.$author_link.'</span>';		
		echo '</div></div>';

	}

	if ($pages-1 > 0) {
	?>
	
	
		<div class="wrapper"></div>
		<div class="paginator">
			<span>Страницы: </span>
			<?php 
			$page=0;
			$request = "";

			unset ($_REQUEST["page"]);
			foreach ($_REQUEST as $key=>$val) {
				$request .='&'.$key.'='.$val;
			}
			
			if ($pages > 1) {
				while ($page <= ($pages-1)) {
					if ($page==$current_page) {
						echo '<span>'.($page+1).'</span>';
					} else {
						echo '<a href="?page='.($page).$request.'">'.($page+1).'</a>';
					}
					$page++;
				}
			}	
		}
		?>	
	</div>
	</div>
</div>