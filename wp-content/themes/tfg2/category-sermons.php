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
    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h2 class="section-title">Upcoming seremons</h2>
                    <ul class="seremon-list large">
                        <li>
                            <img src="images/thumb-1-120.png" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">I believe in god with all my heart</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam molestiae doloribus deserunt minus a dicta labore beatae maiores assumenda. Laudantium nihil, maxime molestiae soluta doloribus magnam eum. Nesciunt, ea, sint.</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/thumb-2-120.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> David Clark</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos corporis quidem at nobis impedit perspiciatis, accusantium qui natus amet sapiente voluptate doloribus laboriosam officia deserunt possimus cumque inventore. Ipsum.</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/thumb-3-120.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">Love your kids</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nisi rem est amet, ducimus, aut, atque error accusantium facilis ab adipisci! Cumque, corrupti sapiente dolores saepe adipisci dignissimos quod unde.</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/thumb-2-120.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> David Clark</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos corporis quidem at nobis impedit perspiciatis, accusantium qui natus amet sapiente voluptate doloribus laboriosam officia deserunt possimus cumque inventore. Ipsum.</p>
                            </div>
                        </li>
                    </ul>

                    <h2 class="section-title">Latest seremons</h2>
                    <ul class="seremon-list">
                        <li>
                            <img src="images/small-thumb-1.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">I believe in god with all my heart</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/small-thumb-2.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> David Clark</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/small-thumb-3.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">Love your kids</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); // Подключаем футер ?>