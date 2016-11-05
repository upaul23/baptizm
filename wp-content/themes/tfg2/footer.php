<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон футера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
wp_footer(); // Необходимо для нормальной работы плагинов
?>
<footer class="site-footer">
    <div id="about" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget-title">Расписание богослужений:</h3>
                    <ul class="shedule">

                        <li class="shedule-head">Каждое оскресенье:</li>
                        <ul class="shedule">
                            <div><li class="fa fa-calendar"></li> Утренее богослужение 10:00</div>
                            <div><li class="fa fa-calendar"></li> Вечернее богослужение 17:00</div>
                        </ul>
                        <li class="shedule-head">Каждую пятницу:</li>
                        <ul class="shedule">
                            <div><li class="fa fa-calendar"></li> Молитвенное богослужение 10:00</div>
                        </ul>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Наши контакты</h3>
                    <ul class="address">

                        <li><i class="fa fa-map-marker"></i> 443023, г. Самара, ул. Перекопская 30</li>
                        <li><i class="fa fa-phone"></i> (846) 262-89-09</li>
                        <li><i class="fa fa-envelope"></i> info@baptizm.ru</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget-title">О Церкви</h3>  
                    <ul class="bullet">
                        <li><a href="#">Наше вероучение</a></li>
                        <li><a href="#">Наша история</a></li>
                        <li><a href="#">Фильмы о истории церкви</a></li> 
                        <li><a href="#">Кто такие бапстисты?</a></li>
                        <li><a href="#">О союзе Евангельских-Христиан Баптистов</a></li> 
                        <li><a href="#">О протестантах</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=c4MwhUJxBxPd3cQ27bSmbMDxpJ1mf-OP&amp;width=308&amp;height=350&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                </div>
            </div>
        </div> <!-- .row -->
        <div class="socials">
            <a class="link-soc" href="http://www.youtube.com/channel/UCswJOTilEstJrT6Z_JQxLWQ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.png">
            </a>
            <a class="link-soc" href="http://vk.com/tcyouth">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-rss1.png">
            </a>
            <a class="link-soc" href="https://www.instagram.com/church_preobrazhenie/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png">
            </a>
        </div>
        <div class="colophon">© 2016 Церковь ЕХБ г. Самары «Преображение»</div>
    </div><!-- .container -->
</footer> <!-- .site-footer -->

</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>

</html>
