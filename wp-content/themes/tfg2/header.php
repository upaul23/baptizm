<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<!-- Loading third party fonts -->
<link href="<?php echo get_template_directory_uri(); ?>/fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->

     
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>
<body>
	<div class="site-content">
            <header class="site-header">
                
                <div class="container">
                    <div id="logo">
                    <a href="<?php bloginfo('home'); ?>" class="branding">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="logo">
                        
                        <div class="site-title">«ПРЕОБРАЖЕНИЕ»</div>
                        <div style="color: #acacb1">церковь енвагельских-христиан баптистов</div>
                        
                    </a>
                    </div>
<?php
//$k = get_the_category();
//$k = $k[0]->cat_ID;
//set_menu($k); ?>
 