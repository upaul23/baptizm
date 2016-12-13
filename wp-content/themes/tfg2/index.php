<?php
get_header();
$k = get_the_category();
$k = $k[0]->cat_ID;
set_menu($k);
?> 

<div class="hero">
    <div class="slides">
        <li data-bg-image="<?php echo get_template_directory_uri(); ?>/images/slide-1.jpg">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Только Богу слава</small>
                    <h2 class="slide-title">Soli Deo gloria</h2>

                    <a href="#" class="button">Наше вероучение</a>
                </div>
            </div>
        </li>

        <li data-bg-image="<?php echo get_template_directory_uri(); ?>/images/slide-1.jpg">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Только верой</small>
                    <h2 class="slide-title">Sola fide</h2>

                    <a href="#" class="button">Как стать спасенным?</a>
                </div>
            </div>
        </li>
        <li data-bg-image="<?php echo get_template_directory_uri(); ?>/images/slide-1.jpg">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Только верой</small>
                    <h2 class="slide-title">Sola fide</h2>

                    <a href="#" class="button">See our families</a>
                </div>
            </div>
        </li>
        <li data-bg-image="<?php echo get_template_directory_uri(); ?>/images/slide-1.jpg">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Только Писание</small>
                    <h2 class="slide-title">Sola scriptura</h2>

                    <a href="#" class="button">Смотреть проповедь</a>
                </div>
            </div>
        </li>
    </div>
</div>

<main id="events" class="main-content">
    <div class="fullwidth-block">
        <div class="container">
            <h2 class="section-title">ПОСЛЕДНИЕ СОБЫТИЯ</h2>
            <?php
            $events = get_posts("&post_type=events");

            //$post  =  
            ?>


            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="news">
                        <image class="news-image" src="<?php echo get_template_directory_uri(); ?>/images/news-thumb-1.jpg"></image>
                        <h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
                        <small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news">
                        <image class="news-image" src="<?php echo get_template_directory_uri(); ?>/images/news-thumb-2.jpg"></image>
                        <h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
                        <small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news">
                        <image class="news-image" src="images/news-thumb-3.jpg"></image>
                        <h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
                        <small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news">
                        <image class="news-image" src="<?php echo get_template_directory_uri(); ?>/images/news-thumb-4.jpg"></image>
                        <h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
                        <small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- section -->

    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Upcoming events</h2>
                    <ul class="event-list">
                        <li>
                            <a href="#">
                                <h3 class="event-title">africa mission trip</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> Africa</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3 class="event-title">Bible school</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> Saint paul church</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3 class="event-title">praying for kids</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> true church</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3 class="event-title">love giving</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> St cathedral</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3 class="event-title">god ont the vacation</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> greenie lake</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3 class="event-title">homeless helping</h3>
                                <span class="event-meta">
                                    <span><i class="fa fa-calendar"></i>30 mar 2014</span>
                                    <span><i class="fa fa-map-marker"></i> Detroit city</span>

                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="button">Смотреть все события</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="section-title">Последняя проповедь</h2>
                    <?php
                    $sermons = get_posts("&post_type=sermons");

                    $post = $sermons[0];
                    setup_postdata($post);
                    ?>
                    <div class="last-sermon">
                        <div class="seremon-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="seremon-meta">
                            <div class="pastor-meta"><i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, 'Автор', true) ?></div>
                            <div class="date"><i class="fa fa-calendar"></i> <?php the_date('Y-m-d'); ?></div>
                        </div>

                        <div class="sermon-content"><?php echo wpautop($post->post_content); ?></div>
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



                        <div class="text-center">
                            <a href="<?php echo get_category_link(2)?>" class="button">Смотреть все проповеди</a>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- section -->
</main> <!-- .main-content -->
<?php
get_footer(); // Подключаем футер ?>