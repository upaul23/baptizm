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
                                      
                                <li class="shedule-head">Воскресенье:</li>
								<ul class="shedule">
									<li>Утренее богослужение 10:00</li>
									<li>Вечернее богослужение 17:00</li>
								</ul>
								<li class="shedule-head">Пятница:</li>
								<ul class="shedule">
									
									<li>Молитвенное богослужение 10:00</li>
								</ul>
                            </ul>
                        </div>
                            <div class="widget">
                                <h3 class="widget-title">Наши контакты</h3>
                                <ul class="address">
                                    
                                    <li><i class="fa fa-phone"></i> (846) 262-89-09</li>
                                    <li><i class="fa fa-envelope"></i> info@baptizm.ru</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">Topics from last meeting</h3>  
                                <ul class="bullet">
                                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#">Consectetur adipisicing elit quis nostrud</a></li>
                                    <li><a href="#">Eiusmod tempor incididunt ut labore et dolore magna</a></li> 
                                    <li><a href="#">Ut enim ad minim veniam cillum</a></li>
                                    <li><a href="#">Exercitation ullamco laboris nisi ut aliquip</a></li> 
                                    <li><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">Contact form</h3>
                                <form action="#" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" placeholder="Your name..."></div>
                                        <div class="col-md-6"><input type="text" placeholder="Email..."></div>
                                    </div>
                                    
                                    <textarea name="" placeholder="Your message..."></textarea>
                                    <div class="text-right"><input type="submit" value="Send message"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div> <!-- .row -->

                    <p class="colophon">© 2016 Церковь ЕХБ г.Самары «Преображение»</p>
                </div><!-- .container -->
            </footer> <!-- .site-footer -->

        </div>
        
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    </body>

</html>
