<?php
get_header();
set_menu(6);
?> 
<main class="main-content">
    <div class="page-head" data-bg-image="<?php echo get_template_directory_uri(); ?>/images/4.jpg" style="background-image: url(&quot;images/4.jpg&quot;);">
        <div class="container">
            <h2 class="page-title">Трансляция</h2>
        </div>
    </div>
    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="watchlive-block">
                    <div class="video-border">
                        <iframe width="720" height="512" src="https://www.youtube.com/embed/Po4Il8akP6c" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>