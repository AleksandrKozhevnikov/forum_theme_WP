<?php 
/* 
Template name: Аренда Атолл
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
    <title>Форум РФ - Аренда Атолл</title>
</head>

<?php 
    get_header();
?>

<section class="atoll">
        <section class="atoll__promo__block">
            <div class="container">
                <div class="atoll__promo__wrapper">
                    <div class="promo__text">
                        <h1 class="promo__text__header">бц атолл</h1>
                        <div class="promo__text__adress">Учительская ул., д.23, лит.А</div>
                        <div class="promo__text__metro">м. Гражданский проспект</div>
                        <div class="promo__text__area">Общая площадь: 14 т. м² <br> Этажей: 7 <br> Парковочных мест: 110</div>
                    </div>
                    <div class="atoll__page__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/6.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/5.jpg" alt="slider"></div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="atoll__stock__block">
            <div class="container">
                <div class="atoll__stock">
                    <div class="atoll__stock__content">
                        <div class="atoll__stock__title">
                            <div class="atoll__stock__title__text">Акция</div>
                        </div>
                        <div class="atoll__stock__descr">
                            <div class="atoll__stock__descr__text">2 месяца аренды в ПОДАРОК!</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="atoll__floors__block">
            <div class="container">
                <div class="atoll__floors">
                    <div class="floors__title">Выберите этаж:</div>
                    <div class="floors__wrapper">
                        <div class="floors__choice__atoll">
                            <ul>
                                <a href="<?php echo get_page_link(214) ?>"><li class="choice__floor__atoll">1 Этаж</li></a>
                                <a href="<?php echo get_page_link(223) ?>"><li class="choice__floor__atoll">2 Этаж</li></a>
                                <a href="<?php echo get_page_link(225) ?>"><li class="choice__floor__atoll">3 Этаж</li></a>
                                <a href="<?php echo get_page_link(227) ?>"><li class="choice__floor__atoll">4 Этаж</li></a>
                                <a href="<?php echo get_page_link(229) ?>"><li class="choice__floor__atoll">5 Этаж</li></a>
                                <a href="<?php echo get_page_link(231) ?>"><li class="choice__floor__atoll">6 Этаж</li></a>
                                <a href="<?php echo get_page_link(233) ?>"><li class="choice__floor__atoll">7 Этаж</li></a>
                            </ul>
                        </div>
                        <div class="floors__building for_atoll">
                            <img class ="floors__building__atoll" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll.png" alt="atoll__building">
                            <svg class="floors__building__atoll__active">
                                <a xlink:href="<?php echo get_page_link(214) ?>">
                                    <polygon class="floor__choice__atoll" points="103,395 169,395 615,384 725,382 772,378 773,424  725,457 637,456 627,454 617,448 613,439 160,427 102,427" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(223) ?>">
                                    <polygon class="floor__choice__atoll" points="104,372 169,372 615,343 725,338 771,338 772,378 725,382 615,384 169,395 103,395" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(225) ?>">
                                    <polygon class="floor__choice__atoll" points="104,347 169,347 615,300 725,291 770,291 771,338 725,338 615,343 169,372 104,372" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(227) ?>">
                                    <polygon class="floor__choice__atoll" points="106,312 169,312 615,245 725,231 770,237 770,291 725,291 615,300 169,347 105,347" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(229) ?>">
                                    <polygon class="floor__choice__atoll" points="106,283 169,283 615,194 724,175 769,185 770,237 725,231 615,245 169,312 106,312" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(231) ?>">
                                    <polygon class="floor__choice__atoll" points="109,241 169,241 615,121 724,95 767,112 769,185 724,175 615,194 169,283 106,283" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                                <a xlink:href="<?php echo get_page_link(233) ?>">
                                    <polygon class="floor__choice__atoll" points="109,218 159,209 165,209 175,212 183,219 223,227 618,121 618,90 621,81 628,73 632,70 721,35 767,98 767,112 721,96 618,121 168,241 109,241" style="fill: rgba(22,40,111, 0.5);"></polygon>
                                </a>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="atoll__more">
                    <a href="#">Посмотреть все свободные помещения</a>
                    <a href="#">Посмотреть все бизнес центры</a>
                </div>
            </div>
        </section>

        <section class="atoll__about__block">
            <div class="container">
                <div class="buildings__header">
                    <h2 class="buildings__title">бц атолл</h2>
                </div>
                <div class="about__text__wrapper">
                    <div class="about__text">
                        Доступная аренда офисов и складов в Санкт-Петербурге: улица Учительская, дом 23. Бизнес-центр "Атолл" расположен в пешеходной          доступности от ст. м. «Гражданский проспект». Близость метро, остановок общественного транспорта и наличие
                        удобных подъездных путей позволяют нашим арендаторам и их партнерам без труда добраться до бизнес-центра из любой точки города. Непосредственно к бизнес-центру прилегает круглосуточная охраняемая стоянка на 110 машиномест. Общая площадь
                        здания бизнес-центра составляет более 14 000 кв. м. На семи этажах основного корпуса расположены офисные помещения различной планировки, торговые и складские площади. Бизнес-центр оснащен всем необходимым для комфортной и эффективной работы
                        наших арендаторов.
                        <br><br>
                        Ваши преимущества при аренде офиса или складского помещения в Бизнес центре «Атолл»:
                        </div>
        
                    <div class="about__advantages">
                        <ul>
                            <li>- аренда без посредников;</li>
                            <li>- кафе для арендаторов и посетителей;</li>
                            <li>- наличие двух пассажирских и двух грузовых (1 и 2 тонны) лифтов;</li>
                            <li>- видеонаблюдение, электронная система контроля доступа;</li>
                            <li>- круглосуточная охрана;</li>
                            <li>- удобная транспортная доступность;</li>
                            <li>- охраняемая парковка.</li>
                        </ul>
                    </div>

                    <div class="about__text">
                        Если Вас интересует аренда офиса, торговых площадей и/или склада в Санкт-Петербурге, ждем Вас в бизнес-центре "Атолл". 
                    </div>
                </div>
            </div>
        </section>

        
    </section>

<?php 
    get_footer('travel-atoll');
    get_footer();
?>