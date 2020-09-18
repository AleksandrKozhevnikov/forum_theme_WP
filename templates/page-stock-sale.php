<?php 
/* 
Template name: Акция в блоке Продажа
*/
?>

<?php 
    get_header();
?>

<section class="action action__spring">
        <div class="container">
            <div class="action__wrapper">
                <div class="action__text">
                    <h2 class="action__text__header">
                        <?php the_field('stock_sale_header') ?>
                    </h2>
                    <?php the_field('stock_sale_text') ?>
                    <p>Телефон отдела продаж: </p>
                    <p>
                        <a class="action__text__number" href="tel:+78125918700"><?php the_field('number_sale_1', 443) ?></a>
                        <br>
                        <a class="action__text__number" href="tel:+79111088201"><?php the_field('number_sale_2', 443) ?></a>
                        <br><br>
                        <a class="action__text__number" href="mailto:206@fgr.ru"><?php the_field('email_sale', 443) ?></a>
                    </p>
                </div>
                <div class="action__image">
                    <img src="<?php the_field('stock_sale_image') ?>">
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer('lease');
?>

<?php 
    get_footer();
?>