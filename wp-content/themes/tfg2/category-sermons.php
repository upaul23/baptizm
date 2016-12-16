<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон вывода постов в категории(рубрике)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
set_menu(2);
// Подключаем хедер 
?>


<main class="main-content">
    <div class="page-head" data-bg-image="<?php echo get_template_directory_uri(); ?>/images/page-head-1.jpg" style="background-image: url(&quot;images/page-head-1.jpg&quot;);">
        <div class="container">
            <h2 class="page-title">Проповеди</h2>
        </div>
    </div>
    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h2 class="section-title">Последние проповеди</h2>
                    <ul class="seremon-list large">
                        <?php
                        global $post;
                        $posts = get_posts("&post_type=sermons");
                        // pagination                        
                        $total_posts = count($posts);
                        $posts_perpage = 5;
                        $pages = ceil($total_posts / $posts_perpage);
                        if (array_key_exists('page', $_GET)) {
                            $current_page = $_GET['page'];
                        } else {
                            $current_page = 0;
                        }
                        $filtered_posts = array_slice($posts, $current_page * $posts_perpage, $posts_perpage);
// записываем $post во временную переменную $tmp_post
                        $tmp_post = $post;
//                        $args = array('posts_per_page' => 5, 'offset' => 1, 'category' => 3);
                        ?>
                        <?php
                        foreach ($posts as $post) {
                            setup_postdata($post);
                            ?>
                            <li>

                                <div class="seremon-detail">
                                    <div class="seremon-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div class="seremon-meta">
                                        <div class="pastor-meta"><i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, 'Автор', true) ?></div>
                                        <div class="date"><i class="fa fa-calendar"></i> <?php the_date('Y-m-d'); ?></div>
                                    </div>
                                    <p><?php echo get_post_meta($post->ID, 'Краткое описание (если нужно)', true) ?></p>
                                    <div><?php echo wpautop($post->post_content); ?></div>

                                    <?php
                                    if (get_post_meta($post->ID, "Тип проповеди", true) == "Аудио") {

                                        if (get_post_meta($post->ID, 'Внешний аудиофайл', true)) {
                                            $mp3 = get_post_meta($post->ID, 'Внешний аудиофайл', true);
                                        } else {
                                            $mp3 = wp_get_attachment_url(get_post_meta($post->ID, 'Аудиофайл', true));
                                        }
                                        //echo do_shortcode('[mp3t track="'.$mp3.'"]');
                                        //echo $mp3;
                                    }
                                    ?> 
                                </div>
                            </li>
                            <?php
                        }

// возвращаем былое значение $post
                        $post = $tmp_post;
                        ?>
                    </ul>
                    <?php
                    if ($pages - 1 > 0) {
                        $page = 0;
                        $request = "";

                        unset($_REQUEST["page"]);
                        foreach ($_REQUEST as $key => $val) {
                            $request .= '&' . $key . '=' . $val;
                        }

                        if ($pages > 1) {
                            while ($page <= ($pages - 1)) {
                                if ($page == $current_page) {
                                    echo '<span>' . ($page + 1) . '</span>';
                                } else {
                                    echo '<a href="?page=' . ($page) . $request . '">' . ($page + 1) . '</a>';
                                }
                                $page++;
                            }
                        }
                    }
                    ?>	
                </div>
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); // Подключаем футер ?>