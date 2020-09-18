<?php 
/* 
Template name: Блок продажа 2 правый
Template Post Type: post
*/
?>


<?php
    get_header();
?>



<section class="sale__more">
        <div class="container">
            <div class="more__wrapper">
                <div class="more__text">
                    <h2 class="more__text__header">Описание:</h2>
                    <hr>
                    <p> 
                        <?php the_field('card_8_descr', 18) ?>
                    </p>
                    <h2 class="more__text__header">Характеристики:</h2>
                    <hr>
                    <p> <b>Общая площадь:</b> — <?php the_field('card_8_area', 18) ?>
                        <br>
                        <?php the_field('card_8_feature', 18) ?>
                    </p>
                    <?php 
                        $rent = get_field('card_8_rent', 18);

                        if (!empty($rent)) {
                            ?>
                        <h2 class="more__text__header">Аренда:</h2>
                        <hr>
                        <p>
                            <?php echo $rent ?>
                        </p>
                        <?php 
                        };
                    ?>
                    <h2 class="more__text__header">Продажа:</h2>
                    <hr>
                    <p>
                        <?php the_field('card_8_sale', 18) ?>
                    </p>
                    <div class="more__text__contacts">По всем вопросам звоните по номеру</div>
                    <div class="more__text__number">
                        <a href="tel:+78125918700"><?php the_field('number_sale_1', 443) ?></a>
                    </div>
                </div>
                <div class="more__media">
                    <h2 class="more__adress"><?php the_field('card_8_adress', 18) ?></h2>
                    <div class="more__slider">
                    <?php 
                            $slide2 = get_field('card_8_slide_2', 18);
                            $slide3 = get_field('card_8_slide_3', 18);
                            $slide4 = get_field('card_8_slide_4', 18);
                            $slide5 = get_field('card_8_slide_5', 18);
                        ?>
                        <img src="<?php the_field('card_8_slide_1', 18) ?>">
                        <?php 
                            if (!empty($slide2)) {
                                ?>
                                <img src="<?php echo $slide2 ?>">
                                <?php
                            };
                        
                            if (!empty($slide3)) {
                                ?>
                                <img src="<?php echo $slide3 ?>">
                                <?php
                            };
                        
                            if (!empty($slide4)) {
                                ?>
                                <img src="<?php echo $slide4 ?>">
                                <?php
                            };
                        
                            if (!empty($slide5)) {
                                ?>
                                <img src="<?php echo $slide5 ?>">
                                <?php
                            };
                        ?>
                    </div>
                    <div class="more__map">
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCQpnMDLKC" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>
