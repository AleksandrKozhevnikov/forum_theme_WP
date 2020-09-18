<?php 
/* 
Template name: Продажа
*/
?>

<?php 
    get_header();
    $card3 = get_field('card_3_sold');
    $card4 = get_field('card_4_sold');
    $card5 = get_field('card_5_sold');
    $card6 = get_field('card_6_sold');
    $card7 = get_field('card_7_sold');
    $card8 = get_field('card_8_sold');
    $card9 = get_field('card_9_sold');
    $card10 = get_field('card_10_sold');
    $card11 = get_field('card_11_sold');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум РФ - Продажа</title>
</head>

<section class="sale">
        <div class="container">
            <div class="sale__content">
                <div class="sale__block__left">
                    <div class="left__first_card">
                        <div class="left__first_card__header">отдел<br>продаж</div>
                        <div class="left__first_card__contacts">
                            <a href="tel:+78125918700"><?php the_field('number_sale_1', 443) ?></a>
                            <a href="tel:+79111088201"><?php the_field('number_sale_2', 443) ?></a>
                            <a class="left__first_card__contacts_mail" href="mailto:206@fgr.ru"><?php the_field('email_sale', 443) ?></a>
                        </div>
                    </div>

                    <a href="<?php echo get_page_link(41) ?>" class="left__second_card">
                        <div class="left__second_card__text"> <?php the_field( 'card_2_text', 18) ?></div>
                    </a>
                    <?php 
                        if ($card3 == 'Да') {
                            ?>
                            <a href="#" class="left__third_card">
                            <?php 
                            } else {
                                ?>
                                <a href="<?php echo get_page_link(3818) ?>" class="left__third_card">
                            <?php   
                            };
                    ?>
                        <img class="left__third_card__image" src="<?php the_field('card_3_image', 18) ?>">
                        <img class="left__third_card__sold" src="<?php the_field('card_sold', 18) ?>"
                        style="
                            <?php 
                                if ($card3 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                            
                        <div class="left__third_card__text">
                            <div class="left__third_card__header"><?php the_field('card_3_appointment', 18) ?></div>
                            <div class="left__third_card__adress"><?php the_field('card_3_adress', 18) ?></div>
                            <div class="left__third_card__descr">Общая площадь - <?php the_field('card_3_area', 18) ?> <br> <?php the_field('card_3_metro', 18) ?></div>
                        </div>
                    </a>
                                    
                    <?php 
                        if ($card4 == 'Да') {
                            ?>
                            <a href="#" class="left__fourth_card">
                            <?php 
                            } else {
                                ?>
                                <a href="<?php echo get_page_link(3820) ?>" class="left__fourth_card">
                            <?php   
                            };
                    ?>
                        <img class="left__fourth_card__image" src="<?php the_field('card_4_image', 18) ?>">
                        <img class="left__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card4 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                        <div class="left__fourth_card__text">
                            <div class="left__fourth_card__header"><?php the_field('card_4_appointment', 18) ?></div>
                            <div class="left__fourth_card__adress"><?php the_field('card_4_adress', 18) ?></div>
                            <div class="left__fourth_card__descr">Общая площадь - <?php the_field('card_4_area', 18) ?> <br> <?php the_field('card_4_metro', 18) ?></div>
                        </div>
                    </a>

                    <?php 
                            if ($card5 == 'Да') {
                                ?>
                                <a href="#" class="left__fifth_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3822) ?>" class="left__fifth_card">
                                <?php   
                                };
                    ?>
                        <div class="left__fifth_card__text">
                            <div class="left__fifth_card__header"><?php the_field('card_5_appointment', 18) ?></div>
                            <div class="left__fifth_card__adress"><?php the_field('card_5_adress', 18) ?></div>
                            <div class="left__fifth_card__descr">Общая площадь -  <?php the_field('card_5_area', 18) ?> <br> <?php the_field('card_5_metro', 18) ?></div>
                        </div>
                        <img class="left__fifth_card__image" src="<?php the_field('card_5_image', 18) ?>">
                        <img class="right__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card5 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                    </a>

                    <?php 
                            if ($card6 == 'Да') {
                                ?>
                                <a href="#" class="left__six_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3824) ?>" class="left__six_card">
                                <?php   
                                };
                    ?>
                        <img class="left__six_card__image" src="<?php the_field('card_6_image', 18) ?>">
                        <img class="left__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card6 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                        <div class="left__six_card__text">
                            <div class="left__six_card__header"><?php the_field('card_6_appointment', 18) ?></div>
                            <div class="left__six_card__adress"><?php the_field('card_6_adress', 18) ?></div>
                            <div class="left__six_card__descr">Общая площадь - <?php the_field('card_6_area', 18) ?> <br> <?php the_field('card_6_metro', 18) ?> </div>
                        </div>
                    </a>
                </div>

                <div class="sale__block__right">
                    <?php 
                            if ($card7 == 'Да') {
                                ?>
                                <a href="#" class="right__first_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3826) ?>" class="right__first_card">
                                <?php   
                                };
                    ?>
                        <img class="right__first_card__image" src="<?php the_field('card_7_image', 18) ?>">
                        <img class="top__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card7 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                        <div class="right__first_card__text">
                            <div class="right__first_card__header"><?php the_field('card_7_appointment', 18) ?></div>
                            <div class="right__first_card__adress"><?php the_field('card_7_adress', 18) ?></div>
                            <div class="right__first_card__descr">Общая площадь - <?php the_field('card_7_area', 18) ?> <br> <?php the_field('card_7_metro', 18) ?>
                            </div>
                        </div>
                    </a>

                    <?php 
                            if ($card8 == 'Да') {
                                ?>
                                <a href="#" class="right__second_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3828) ?>" class="right__second_card">
                                <?php   
                                };
                    ?>
                        <div class="right__second_card__text">
                            <div class="right__second_card__header"><?php the_field('card_8_appointment', 18) ?></div>
                            <div class="right__second_card__adress"><?php the_field('card_8_adress', 18) ?></div>
                            <div class="right__second_card__descr">Общая площадь - <?php the_field('card_8_area', 18) ?> <br> <?php the_field('card_8_metro', 18) ?></div>
                        </div>
                        <img class="right__second_card__image" src="<?php the_field('card_8_image', 18) ?>">
                        <img class="bottom__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card8 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                    </a>

                    <?php 
                            if ($card9 == 'Да') {
                                ?>
                                <a href="#" class="right__third_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3830) ?>" class="right__third_card">
                                <?php   
                                };
                    ?>
                        <img class="right__third_card__image" src="<?php the_field('card_9_image', 18) ?>">
                        <img class="top__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card9 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                        <div class="right__third_card__text">
                            <div class="right__third_card__header"><?php the_field('card_9_appointment', 18) ?></div>
                            <div class="right__third_card__adress"><?php the_field('card_9_adress', 18) ?></div>
                            <div class="right__third_card__descr">Общая площадь - <?php the_field('card_9_area', 18) ?> <br> <?php the_field('card_9_metro', 18) ?></div>
                        </div>
                    </a>

                    <?php 
                            if ($card10 == 'Да') {
                                ?>
                                <a href="#" class="right__fourth_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3832) ?>" class="right__fourth_card">
                                <?php   
                                };
                    ?>
                        <div class="right__fourth_card__text">
                            <div class="right__fourth_card__header"><?php the_field('card_10_appointment', 18) ?></div>
                            <div class="right__fourth_card__adress"><?php the_field('card_10_adress', 18) ?></div>
                            <div class="right__fourth_card__descr">Общая площадь - <?php the_field('card_10_area', 18) ?> <br> <?php the_field('card_10_metro', 18) ?> </div>
                        </div>
                        <img class="right__fourth_card__image" src="<?php the_field('card_10_image', 18) ?>">
                        <img class="bottom__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card10 == 'Да') {

                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                    </a>

                    <?php 
                            if ($card11 == 'Да') {
                                ?>
                                <a href="#" class="right__fifth_card">
                                <?php 
                                } else {
                                    ?>
                                    <a href="<?php echo get_page_link(3834) ?>" class="right__fifth_card">
                                <?php   
                                };
                    ?>
                        <img class="right__fifth_card__image" src="<?php the_field('card_11_image', 18) ?>">
                        <img class="left__image_card__sold" src="<?php the_field('card_sold', 18) ?>" 
                            style="
                            <?php 
                                if ($card11 == 'Да') {
                                    ?>
                                    display: block
                                <?php 
                                    }
                                ?>
                                ">
                        <div class="right__fifth_card__text">
                            <div class="right__fifth_card__header"><?php the_field('card_11_appointment', 18) ?></div>
                            <div class="right__fifth_card__adress"><?php the_field('card_11_adress', 18) ?></div>
                            <div class="right__fifth_card__descr">Общая площадь - <?php the_field('card_11_area', 18) ?> <br> <?php the_field('card_11_metro', 18) ?> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer('partners'); 
?>

<?php 
    get_footer();
?>