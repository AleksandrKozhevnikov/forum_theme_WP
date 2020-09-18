<?php 
/* 
Template name: Аренда Форум
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        wp_head();
    ?>
    <title>Форум РФ - Аренда Форум</title>
</head>
<?php 
    get_header();
?>

<section class="forum">
        <section class="forum__promo__block">
            <div class="container">
                <div class="forum__promo__wrapper">
                    <div class="promo__text">
                        <h1 class="promo__text__header_forum">бц форум</h1>
                        <div class="promo__text__adress">Балтийская ул., д.51</div>
                        <div class="promo__text__metro">м. Балтийская <br> м. Нарвская</div>
                        <div class="promo__text__area">Общая площадь: 10 т. м² <br> Этажей: 7 <br> Парковочных мест: 30</div>
                    </div>
                    <div class="forum__page__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/forum.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/5.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/6.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/7.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/8.jpg" alt="slider"></div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="forum__stock__block">
            <div class="container">
                <div class="forum__stock">
                    <div class="forum__stock__content">
                        <div class="forum__stock__title">
                            <div class="forum__stock__title__text">Акция</div>
                        </div>
                        <div class="forum__stock__descr">
                            <div class="forum__stock__descr__text">2 месяца аренды в ПОДАРОК!</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="forum__floors__block">
            <div class="container">
                <div class="forum__floors">
                    <div class="floors__title">Выберите этаж:</div>
                    <div class="floors__wrapper">
                        <div class="floors__choice__forum">
                            <div class="floors__header">Офисный <br> корпус:</div>
                            <ul>
                                <a href="<?php echo get_page_link(175) ?>"><li class="choice__floor__forum">1 Этаж</li></a>
                                <a href="<?php echo get_page_link(184) ?>"><li class="choice__floor__forum">2 Этаж</li></a>
                                <a href="<?php echo get_page_link(192) ?>"><li class="choice__floor__forum">3 Этаж</li></a>
                                <a href="<?php echo get_page_link(194) ?>"><li class="choice__floor__forum">4 Этаж</li></a>
                                <a href="<?php echo get_page_link(196) ?>"><li class="choice__floor__forum">5 Этаж</li></a>
                                <a href="<?php echo get_page_link(198) ?>"><li class="choice__floor__forum">6 Этаж</li></a>
                                <a href="<?php echo get_page_link(200) ?>"><li class="choice__floor__forum">7 Этаж</li></a>
                            </ul>
                        </div>
                        <div class="floors__choice__forum__warehouse">
                            <div class="floors__header">Складской <br> корпус:</div>
                            <ul>
                                <a href="<?php echo get_page_link(202) ?>"><li class="choice__warehouse__forum">1 Этаж</li></a>
                                <a href="<?php echo get_page_link(208) ?>"><li class="choice__warehouse__forum">2 Этаж</li></a>
                                <a href="<?php echo get_page_link(210) ?>"><li class="choice__warehouse__forum">3 Этаж</li></a>
                                <a href="<?php echo get_page_link(212) ?>"><li class="choice__warehouse__forum">4 Этаж</li></a>
                            </ul>
                        </div>
                        <div class="floors__building__forum">
                            <img class="floors__building__forum" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/forum.png" alt="forum__building">
                            <svg class="floors__building__forum__active">
                                <a xlink:href="<?php echo get_page_link(175) ?>"><polygon class="floor__choice__forum" points="676,480 676,432 699,435 785,373 785,423 699,485" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(184) ?>"><polygon class="floor__choice__forum" points="676,432 675,386 699,391 785,330 785,373 699,435" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(192) ?>"><polygon class="floor__choice__forum" points="675,386 675,339 699,345 785,285 785,330 699,391" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(194) ?>"><polygon class="floor__choice__forum" points="675,339 675,296 699,300 785,245 785,285 699,345" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(196) ?>"><polygon class="floor__choice__forum" points="675,296 675,247 699,252 785,198 785,245 699,300" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(198) ?>"><polygon class="floor__choice__forum" points="675,247 675,205 699,210 785,157 785,198 699,252" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(200) ?>"><polygon class="floor__choice__forum" points="185,70 613,195 629,187 675,200 675,205 699,210 785,157 785,104 699,155 653,144 613,163 185,43" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <!-- выбор склада -->
                                <a xlink:href="<?php echo get_page_link(202) ?>"><polygon class="warehouse__choice" points="27,385 561,589 678,504 678,429 561,512 27,318" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(208) ?>"><polygon class="warehouse__choice" points="27,318 561,512 678,429 678,368 561,445 27,262" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(210) ?>"><polygon class="warehouse__choice" points="27,262 561,445 678,368 678,301 561,375 27,202" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(212) ?>"><polygon class="warehouse__choice" points="27,202 561,375 678,301 678,199 561,274 27,105" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="forum__more">
                    <a href="#">Посмотреть все свободные помещения</a>
                    <a href="#">Посмотреть все бизнес центры</a>
                </div>
            </div>
        </section>

        <section class="forum__about__block">
            <div class="container">
                <div class="buildings__header">
                    <h2 class="buildings__title">бц форум</h2>
                </div>
                <div class="about__text__wrapper">
                    <div class="about__text">Доступная аренда офисов и складов в Санкт-Петербурге: улица Балтийская, дом 51. (Кировский район). Бизнес-центр "Форум" расположен в пешеходной доступности от станций метро Нарвская, Балтийская. Здание общей площадью более 10 000 кв. м. состоит из офисного и складского корпусов. В офисной части выполнен современный высококачественный ремонт офисов и мест общего пользования. Наличие двух пассажирских и двух грузовых лифтов (3 тонны) создает комфортные условия для бизнеса и бесперебойной работы наших арендаторов. Для обеспечения безопасности бизнес-центр оборудован современными системами контроля доступа и видеонаблюдения. Если Вас интересует аренда офиса и/или склада в Санкт-Петербурге, ждем Вас в бизнес-центре "Форум".
                        <br><br>
                        Ваши преимущества при аренде офиса или складского помещения в Бизнес центре «Форум»:
                        </div>
        
                    <div class="about__advantages">
                        <ul>
                            <li>- пешеходная доступность от станций метрополитена;</li>
                            <li>- кафе для арендаторов и посетителей;</li>
                            <li>- круглосуточная охрана;</li>
                            <li>- охраняемая парковка;</li>
                            <li>- офисы и склады в одном здании;</li>
                            <li>- современный дизайн помещений;</li>
                            <li>- ресепшен-сервис;</li>
                            <li>- IP-телефония, широкополосный доступ в интернет;</li>
                            <li>- видеонаблюдение, электронная система контроля доступа;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        
    </section>

<?php 
    get_footer('travel-forum');
    get_footer();
?>
