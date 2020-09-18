<?php 
/* 
Template name: Аренда Кварц
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
    <title>Форум РФ - Аренда Кварц</title>
</head>

<?php 
    get_header();
?>

<section class="kvarc">
        <section class="kvarc__promo__block">
            <div class="container">
                <div class="kvarc__promo__wrapper">
                    <div class="promo__text">
                        <h1 class="promo__text__header">дц кварц</h1>
                        <div class="promo__text__adress">Пискаревский пр-т, д.63, лит.А</div>
                        <div class="promo__text__metro">м. Площадь Мужества <br> м. Академическая</div>
                        <div class="promo__text__area">Общая площадь: 23 т. м² <br> Этажей: 6 <br> Парковочных мест: 140</div>
                    </div>
                    <div class="kvarc__page__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/title-img.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/5.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/6.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/7.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/8.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/9.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/10.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/11.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/12.jpg" alt="slider"></div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="kvarc__stock__block">
            <div class="container">
                <div class="kvarc__stock">
                    <div class="kvarc__stock__content">
                        <div class="kvarc__stock__title">
                            <div class="kvarc__stock__title__text">Акция</div>
                        </div>
                        <div class="kvarc__stock__descr">
                            <div class="kvarc__stock__descr__text">2 месяца аренды в ПОДАРОК!</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="kvarc__floors__block">
            <div class="container">
                <div class="kvarc__floors">
                    <div class="floors__title">Выберите этаж:</div>
                    <div class="floors__wrapper">
                        <div class="floors__choice__kvarc">
                            <div class="floors__header">Офисный <br> корпус:</div>
                            <ul>
                                <a href="<?php echo get_page_link(88) ?>"><li class="choice__floor__kvarc">Цокольный</li></a>
                                <a href="<?php echo get_page_link(94) ?>"><li class="choice__floor__kvarc">1 Этаж</li></a>
                                <a href="<?php echo get_page_link(70) ?>"><li class="choice__floor__kvarc">2 Этаж</li></a>
                                <a href="<?php echo get_page_link(120) ?>"><li class="choice__floor__kvarc">3 Этаж</li></a>
                                <a href="<?php echo get_page_link(126) ?>"><li class="choice__floor__kvarc">4 Этаж</li></a>
                                <a href="<?php echo get_page_link(128) ?>"><li class="choice__floor__kvarc">5 Этаж</li></a>
                                <a href="<?php echo get_page_link(130) ?>"><li class="choice__floor__kvarc">6 Этаж</li></a>
                            </ul>
                        </div>
                        <div class="floors__choice__kvarc">
                            <div class="floors__header">Складской <br> корпус:</div>
                            <ul>
                                <a href="<?php echo get_page_link(132) ?>"><li class="choice__floor__kvarc">1 Этаж</li></a>
                                <a href="<?php echo get_page_link(135) ?>"><li class="choice__floor__kvarc">2 Этаж</li></a>
                                <a href="<?php echo get_page_link(140) ?>"><li class="choice__floor__kvarc">3 Этаж</li></a>
                                <a href="<?php echo get_page_link(142) ?>"><li class="choice__floor__kvarc">4 Этаж</li></a>
                            </ul>
                        </div>
                        <div class="floors__building__kvarc">
                            <img class="floors__building__kvarc__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/kvarc.jpg" alt="kvarc__building">
                            <svg class="floors__building__kvarc__active" preserveAspectRatio="none">
                                <a xlink:href="<?php echo get_page_link(88) ?>"><polygon class="floor__choice" points="15,282 290,329 774,236 774,247 290,343 15,295" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(94) ?>"><polygon class="floor__choice" points="11,249 290,289 768,205 768,238 290,333 15,283" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(70) ?>"><polygon class="floor__choice" points="9,215 290,252 768,179 765,210 290,287 10,247" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(120) ?>"><polygon class="floor__choice" points="69,189 290,218 466,195 466,208 481,211 662,181 662,167 769,152 769,179 290,252 71,223" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(126) ?>"><polygon class="floor__choice" points="68,159 285,182 462,163 462,163 481,168 668,145 668,135 769,125 769,152 668,167 662,181 471,211 462,208 462,195 290,218 69,189" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(128) ?>"><polygon class="floor__choice" points="66,127 285,148 463,129 481,132 665,113 665,108 771,98 771,125 668,136 668,145 480,167 461,163 461,163 290,183 68,159" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                                <a xlink:href="<?php echo get_page_link(130) ?>"><polygon class="floor__choice" points="64,98 285,115 461,98 479,101 665,86 651,82 772,72 772,97 665,108 665,112 480,132 462,129 462,129 287,147 66,128" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="kvarc__more">
                    <a href="#">Посмотреть все свободные помещения</a>
                    <a href="#">Посмотреть все бизнес центры</a>
                </div>
            </div>
        </section>

        <section class="kvarc__about__block">
            <div class="container">
                <div class="buildings__header">
                    <h2 class="buildings__title">дц кварц</h2>
                </div>
                <div class="about__text__wrapper">
                    <div class="about__text">Доступная аренда офисов и складов в Санкт-Петербурге: Пискаревский пр., 63 (Красногвардейский район). Деловой центр «Кварц» — это современный деловой центр, распложенный в северной части Петербурга на пересечении Пискарёвского проспекта и проспекта Непокоренных, в непосредственной близости от основной транспортной магистрали города — 150м до КАД. Здание общей площадью более 23 000 кв. м. состоит из офисного и складского корпусов. В офисной части выполнен современный высококачественный ремонт офисов и мест общего пользования. Отличительной особенностью делового центра «Кварц» является расположенный на его верхних этажах атриум, увенчанный стеклянным куполом, который максимально пропускает дневной свет в холл, оборудованный местами для отдыха арендаторов. Большая часть офисов атриума имеет панорамные окна, обеспечивающие прекрасный обзор городских пейзажей и уютную атмосферу.
                        <br><br>
                        Ваши преимущества при аренде офиса или складского помещения в Деловом центре «Кварц»:
                        </div>
        
                    <div class="about__advantages">
                        <ul>
                            <li>- аренда без посредников, только от собственника;</li>
                            <li>- 2 кафе для арендаторов и посетителей;</li>
                            <li>- ресепшен-сервис;</li>
                            <li>- конференц-зал на 30 мест;</li>
                            <li>- видеонаблюдение, электронная система контроля доступа;</li>
                            <li>- круглосуточная охрана;</li>
                            <li>- охраняемая парковка.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       
    </section>

<?php 
    get_footer('travel-kvarc');
    get_footer();
?>