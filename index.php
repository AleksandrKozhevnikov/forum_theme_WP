<?php 
/* 
Template name: Главная
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
    <title>Форум РФ - Главная</title>
</head>
<body>

    <?php 
        get_header();
    ?>

    <section class="promo">
        <div class="container">
            <div class="promo__wrapper">
                <div class="promo__titles">
                    <h1 class="promo__title">Управляем<br>cобственной<br>недвижимостью</h1>
                    <div class="promo__links">
                        <a href="<?php echo get_page_link(16) ?>" class="promo__link">Покупаем</a>
                        <a href="<?php echo get_page_link(14) ?>" class="promo__link">Сдаем в аренду</a>
                        <a href="<?php echo get_page_link(18) ?>" class="promo__link">Продаем</a>
                    </div>
                </div>
                <div class="promo__image">
                    <a href="<?php echo get_page_link(39) ?>""><img src="<?php echo bloginfo('template_url'); ?>/assets/img/stocks/rent/stock.jpg" alt="promo" class="promo__img"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="pickup">
        <div class="container">
            <div class="pickup__wrapper">
                <div class="pickup__buildings">
                    <div class="pickup__buildings__card">
                        <div class="card__header">
                            <p>Подобрать помещение в аренду</p>
                        </div>
                        <form method="post" action="<?php echo get_page_link(36) ?>">
                            <div class="card__content">
                                <div class="content__rent-area">
                                    <div class="content__header">Площадь (м&sup2;)</div>
                                    <div class="content__input">
                                        <input type="text" name="minArea" required placeholder="от" class="minArea">
                                        <input type="text" name="maxArea" required placeholder="до" class="maxArea">
                                    </div>
                                    <div class="filter-main filter-circle__rent-area"></div>
                                </div>

                                <div class="content__rent-pay">
                                    <div class="content__header">Арендная плата в <br> месяц (руб)</div>
                                    <div class="content__input">
                                        <input type="text" name="minPay" required placeholder="от" class="minPay">
                                        <input type="text" name="maxPay" required placeholder="до" class="maxPay">
                                    </div>
                                    <div class="filter-main filter-circle__rent-pay"></div>
            

                                    <button type="sumbit" class="button__orange button__orange_filter_right">Найти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pickup__buildings__card">
                        <div class="card__header">
                            <a href="<?php echo get_page_link(20) ?>"><p>ДЦ Кварц</p></a>
                        </div>
                        <div class="card__content">
                            <div class="card__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/kvarc.jpg" alt="kvarc">
                                <a href="<?php echo get_page_link(20) ?>">
                                    <button class="button__orange button__orange_left">Подробнее</button>
                                </a>
                            </div>
                            <div class="card__more">
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/adres.png" alt="adress" class="card__icon">
                                    <div class="card__descr">Пискаревский пр-т,д.63, лит.А</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/way.png" alt="way" class="card__icon">
                                    <div class="card__descr">150м от КАД</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/parking.png" alt="parking" class="card__icon">
                                    <div class="card__descr">Собственная парковка</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/sklad.png" alt="stock" class="card__icon card__icon_margin">
                                    <div class="card__descr">Офисные и складские помещения</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/cofe.png" alt="cofe" class="card__icon">
                                    <div class="card__descr">2 кафе</div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="pickup__buildings__card">
                        <div class="card__header">
                            <a href="<?php echo get_page_link(22) ?>"><p>БЦ Форум</p></a>
                        </div>
                        <div class="card__content">
                            <div class="card__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/forum.jpg" alt="forum">
                                <a href="<?php echo get_page_link(22) ?>">
                                    <button class="button__orange button__orange_left">Подробнее</button>
                                </a>
                            </div>
                            <div class="card__more">
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/adres.png" alt="adress" class="card__icon">
                                    <div class="card__descr">Балтийская ул., д.51</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/metro.png" alt="way" class="card__icon card__icon_margin">
                                    <div class="card__descr">Пешая доступность м.Балтийская, м.Нарвская</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/parking.png" alt="parking" class="card__icon">
                                    <div class="card__descr">Охраняемая парковка</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/sklad.png" alt="stock" class="card__icon card__icon_margin">
                                    <div class="card__descr">Офисные и складские помещения</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/cofe.png" alt="cofe" class="card__icon">
                                    <div class="card__descr">Кафе</div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="pickup__buildings__card">
                        <div class="card__header">
                            <a href="<?php echo get_page_link(24) ?>"><p>БЦ Атолл</p></a>
                        </div>
                        <div class="card__content">
                            <div class="card__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/atoll.jpg" alt="atoll">
                                <a href="<?php echo get_page_link(24) ?>">
                                    <button class="button__orange button__orange_left">Подробнее</button>
                                </a>
                            </div>
                            <div class="card__more">
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/adres.png" alt="adress" class="card__icon">
                                    <div class="card__descr">Учительская ул., д.23, лит.А</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/metro.png" alt="way" class="card__icon card__icon_margin">
                                    <div class="card__descr">Пешая доступность м.Гражданский пр-т</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/parking.png" alt="parking" class="card__icon">
                                    <div class="card__descr">Охраняемая парковка</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/sklad.png" alt="stock" class="card__icon card__icon_margin">
                                    <div class="card__descr">Офисные и складские помещения</div>
                                </div>
                                <div class="card__items">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/cofe.png" alt="cofe" class="card__icon">
                                    <div class="card__descr">Кафе</div>
                                </div>
                            </div>
                        </div> 
                    </div>
            </div>
            <div class="pickup__map">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map-23-10.jpg" alt="map">
                <svg class="pickup__map__active">
                    <a href="<?php echo get_page_link(24) ?>">
                        <circle class="circle__atoll" r="50" cx="150" cy="215"></circle>
                    </a>
                    <a href="<?php echo get_page_link(20) ?>">
                        <circle class="circle__kvarc" r="50" cx="390" cy="350"></circle>
                    </a>
                    <a href="<?php echo get_page_link(22) ?>">
                        <circle class="circle__forum" r="50" cx="220" cy="650"></circle>
                    </a>
                </svg>
            </div>
        </div>
    </section>

    <section class="lease">
        <div class="divider">
            <h2 class="divider__title">Отдел аренды</h2>
        </div>
        <div class="container">
            <div class="lease__wrapper">
                <div class="lease__number">
                    <a href="tel:+78125918888"><?php the_field('number_rent_1', 443) ?></a>
                </div>
                <div class="lease__number lease__number_center">
                    <a href="tel:+79118494971"><?php the_field('number_rent_2', 443) ?></a>
                </div>
                <div class="lease__email">
                    <a href="mailto:arenda@forumestate.ru"><?php the_field('email_rent', 443) ?></a>
                </div>
            </div>
            <div class="lease__subtitle">Наши бизнес центры:</div>
            <div class="lease__adresses">
                <div>— ДЦ Кварц (Пискаревский пр., 63 лит. А)</div>
                <div>— БЦ Атолл (ул. Учительская, 23, лит. А)</div>
                <div>— БЦ Форум (ул. Балтийская, 51)</div>
            </div>
        </div>
    </section>

    <?php 
        get_footer('partners'); 
    ?>

    <?php 
        get_footer(); 
    ?>

    <?php 
        wp_footer();
    ?>
</body>
</html>


