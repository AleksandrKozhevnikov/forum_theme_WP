    <?php 
        wp_head();
    ?>
<section class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="header__phones">
                    <a href="tel:+78125918888"><?php the_field('number_rent_1', 443) ?></a>
                    <a href="tel:+79118494971"><?php the_field('number_rent_2', 443) ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">
        <div class="container">
            <ul class="menu__wrapper">
                <span></span>
                <li><a href="<?php echo get_page_link(12) ?>">
                        <div class="menu__link">о компании</div>
                    </a></li>
                <span></span>
                <li><a href="<?php echo get_page_link(14) ?>">
                        <div class="menu__link">аренда</div>
                    </a></li>
                <span></span>
                <li><a href="<?php echo get_page_link(16) ?>">
                        <div class="menu__link">покупка</div>
                    </a></li>
                <span></span>
                <li><a href="<?php echo get_page_link(18) ?>">
                        <div class="menu__link">продажа</div>
                    </a></li>
                <span></span>
                <li><a id="contacts" href="#">
                        <div class="menu__link">контакты</div>
                    </a></li>
                <span></span>
            </ul>
        </div>
    </section>

    <section class="menu__mobile">
        <div class="container">
            <ul class="menu__mobile__wrapper">
                <li>
                    <a class="menu__link__mobile" href="<?php echo get_page_link(12) ?>">о компании</a>
                </li>
                <li>
                    <a class="menu__link__mobile" href="<?php echo get_page_link(14) ?>">аренда</a>
                </li>
                <li>
                    <a class="menu__link__mobile" href="<?php echo get_page_link(16) ?>">покупка</a>
                </li>
                <li>
                    <a class="menu__link__mobile" href="<?php echo get_page_link(18) ?>">продажа</a>
                </li>
                <li>
                    <a class="menu__link__mobile" href="#">контакты</a>
                </li>
            </ul>
            <div class="button__mobile">
                <span></span>
            </div>
        </div>
            
    </section>