<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
set_menu(0);
// Подключаем хедер
?> 
<?php if (have_posts()) while (have_posts()) : the_post(); // Начало цикла    ?>
        <div class="page-head" data-bg-image="<?php echo get_template_directory_uri(); ?>/images/page-head-1.jpg" style="background-image: url(&quot;images/page-head-1.jpg&quot;);">
            <div class="container">
                <h2 class="page-title"><?php the_title(); // Заголовок    ?></h2>
            </div>
        </div>
        <div class="fullwidth-block">        
            <div class="container">
                <div class="row">

                    <?php the_content(); // Содержимое страницы ?>
                <?php endwhile; // Конец цикла ?>     
            <?php get_sidebar(); // Подключаем сайдбар  ?>
        </div>
    </div>
</div>
<?php
get_footer(); // Подключаем футер ?>