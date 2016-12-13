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

// записываем $post во временную переменную $tmp_post
                        $tmp_post = $post;
                        $args = array('posts_per_page' => 5, 'offset' => 1, 'category' => 3);
                        $myposts = get_posts("&post_type=sermons");
                        ?>
                        <?php
                        foreach ($myposts as $post) {
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
                </div>
                        <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); // Подключаем футер ?>