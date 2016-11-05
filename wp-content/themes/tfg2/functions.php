<?php

add_shortcode('gallery2', 'gallery_shortcode2');

function gallery_shortcode2($attr) {
	global $post, $wp_locale;

	static $instance = 0;
	$instance++;


	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'dl',
		'icontag'    => 'dt',
		'captiontag' => 'dd',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => ''
	), $attr));

	$id = intval($id);

	if ( !empty($include) ) {
		$include = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

	if (trim($attachment->post_title) != "thumbnail"){

	?>

		<img src='<?php echo pos(wp_get_attachment_image_src($id, 'full', false)); ?>' alt="" />

	<?php
	}
	}
}





//Building pastors list
$pastors =array();
$posts = get_posts ("&post_type=pastors&numberposts=1000");
foreach ($posts as $post) {
	$pastors["".get_post_meta($post->ID, 'Псевдоним для проповедей', true).""] = $post->post_title;
}

//building authors list
$posts = get_posts ("&post_type=sermons&numberposts=1000");
$authors = array();
foreach ($posts as $post) {
	$authors["".get_post_meta($post->ID, 'Автор', true).""] = get_post_meta($post->ID, 'Автор', true);
}
	$authors = array_unique($authors);

//combining pastors and authors using slugs for pastors

foreach ($tmpauthors = $authors as $key=>$val) {
	if (isset($pastors ["$key"])) {
		$authors["$key"] = $pastors ["$key"];
		}
}

asort ($authors);


function getPostBySlug($postName, $type="post", $output = OBJECT)
{
global $wpdb;
$post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type='".$type."'", $postName ));
if ( $post ){
return get_post($post, $output);
}
return false;
}

function print_r_pre ($input) {
	echo "<pre>";
	print_r ($input);
	echo "</pre>";
}


function  set_menu($activeMenu){
echo '<div class="site-content main-navigation">';
echo '          <button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>';                        
echo '                        <ul class="menu">';
$currentMenu = 1;
$home = get_home_url();
echo "<li class=\"menu-item ".isActive($activeMenu, $currentMenu)."\"><a href='".$home."#about'>О ЦЕРКВИ <small>About church</small></a></li>";
echo '<li class="menu-item"><a href="#events">События<small>Events</small></a></li>';
echo '                           <li class="menu-item"><a href="#">ПАСТОРЫ <small>Pastors</small></a></li>';
$currentMenu = 2;
echo "<li class='menu-item ".isActive($activeMenu, $currentMenu)."'><a href=".get_category_link($currentMenu).">ПРОПОВЕДИ <small>Sermons</small></a></li>";
echo '                           <li class="menu-item"><a href="events.html">СЛУЖЕНИЯ<small>Services</small></a></li>';
$currentMenu = 6;
echo "                           <li class=\"menu-item ".isActive($activeMenu, $currentMenu)."\"><a href=\"".get_category_link($currentMenu)."\">ТРАНСЛЯЦИЯ<small>Watch live</small></a></li>";
echo '                        </ul>
                    </div>

                    <div class="mobile-navigation">
        </div>
</header> <!-- .site-header -->';
}



function isActive($activeMenu, $currentMenu){
        if($activeMenu == $currentMenu)
            return 'current-menu-item';
        else echo "";
    }
    
    function getYoutubeDataXml($id) {
    // Ключ для запросов
    $api_key = 'AIzaSyA86frs4rm2u14AP0gxtuGlXwvfqztU1_M';
    
    // специальный адрес, отвечающий за выдачу фида
    $url = 'https://www.googleapis.com/youtube/v3/search?part=snippet'
         . '&channelId=' . $id
         . '&order=date'    // упорядочивать по дате добавления
         . '&maxResults=5'  // за раз получать не более 5 результатов
         . '&fields=items/id/videoId'  // нам нужны только идентификаторы видео
         . '&key=' . $api_key;
    $buf = file_get_contents($url);
    
    // декодируем JSON данные
    $json = json_decode($buf, 1);
    
    return $json;
}


