<?php 
/* 
Template name: Акция в блоке Аренда
*/
?>

<?php 
    get_header();
?>

<section class="action">
        <div class="container">
            <div class="action__wrapper">
                <div class="action__text">
                <h2 class="action__text__header">
                    <?php the_field('stock_rent_header') ?>
                    </h2>
                    <?php the_field('stock_rent_text') ?>
                    <p>Телефон отдела аренды: </p>
                    <p>
                        <a class="action__text__number" href="tel:+78125918700"><?php the_field('number_rent_1', 443) ?></a>
                        <br>
                        <a class="action__text__number" href="tel:+79111088201"><?php the_field('number_rent_2', 443) ?></a>
                    </p>
                </div>
                <div class="action__image">
                    <img src="<?php the_field('stock_rent_image') ?>">
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