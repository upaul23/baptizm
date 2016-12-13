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
                        <li><a href="<?php echo get_permalink(9) ?>">Наше вероучение</a></li>
                        <li><a href="<?php echo get_permalink(16) ?>">Наша история</a></li>
                        <li><a href="#">Фильмы о истории церкви</a></li> 
                        <li><a href="#">Кто такие бапстисты?</a></li>
                        <li><a href="#">О союзе Евангельских-Христиан Баптистов</a></li> 
                        <li><a href="#">О протестантах</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget-title">Ссылки на ресурсы</h3>  
                    <ul class="link-list">
                        <li><i class="fa fa-net"> </i><a target="_blank" href="http://www.propovedi.ru/">Сайт propovedi.ru</a></li>
                        <li><i class="fa fa-net"> </i><a href="http://ryagusov.ru/" target="_blank">Сайт проповедей Рягузова В.С.</a></li>
                        <li><i class="fa fa-net"> </i><a href="http://alex-pro-1.livejournal.com/" target="_blank">Блог Алексея Прокопенко</a></li> 
                        <li><i class="fa fa-net"> </i><a href="http://www.gotquestions.org/Russian/" target="_blank">Библейские ответы на разные вопросы gotquestions.org</a></li>
                        <li><i class="fa fa-net"> </i><a href="http://slovo.org/" target="_blank">"Слово Благодати" миссия Алексея Коломейцева</a></li> 
                     </ul>
                </div>
            </div>
        </div> <!-- .row -->
        <div class="socials">
            <a class="link-soc" target="_blank" href="http://www.youtube.com/channel/UCswJOTilEstJrT6Z_JQxLWQ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.png">
            </a>
            <a class="link-soc" target="_blank" href="http://vk.com/tcyouth">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-rss1.png">
            </a>
            <a class="link-soc" target="_blank" href="https://www.instagram.com/church_preobrazhenie/">
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
