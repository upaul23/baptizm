<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон сайдбара, все виджеты добавляйте из админки
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<?php dynamic_sidebar(); ?>
<div class="sidebar col-md-3 col-md-offset-1">
    <div class="widget">
        <h3 class="widget-title">Разделы</h3>
        <ul class="arrow">
            <?php 
            $args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'show_last_update'   => 0,
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '1',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => '',
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => true,
	'separator'          => '<br />',
);
           wp_list_categories( $args );
            ?>
            
        </ul>
    </div>

    <div class="widget">
        <h3 class="widget-title">Пожертвование</h3>
        <p>Все пожертвования поступают на счет церкви и будут использованы для нужд церкви.</p>
        <a href="https://vmeste.yandex.ru/baptizm" target="_blank" class="button">Пожертвовать церкви</a>
    </div>

    <div class="widget">
        <h3 class="widget-title">Наш instagram</h3>

        <div class="galery-thumb">
            <?php echo do_shortcode('[instagram-feed]') ?>
        </div>
    </div>

   
</div>
