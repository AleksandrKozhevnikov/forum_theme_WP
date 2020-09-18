    <footer id="contacts" class="footer">
        <div class="divider__footer"></div>
        <div class="divider__footer_small"></div>
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__block">
                    <div class="footer__logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/logo-footer.png" alt="logo__footer">
                    </div>
                    <div class="footer__links">
                        <a href="<?php echo get_page_link(12) ?>" class="footer__link">О Компании</a>
                        <a href="<?php echo get_page_link(14) ?>" class="footer__link">Аренда помещений</a>
                    </div>
                </div>
                
                <div class="footer__block">
                    <h3 class="footer__title">Отдел аренды</h3>
                    <div class="footer__descr">
                        <div class="footer__numbers">
                            <div class="footer__number">
                                <a href="tel:+78125918888"><?php the_field('number_rent_1', 443) ?></a>
                            </div>
                            <div class="footer__number">
                                <a href="tel:+78125918888"><?php the_field('number_rent_2', 443) ?></a>
                            </div>
                        </div>
                        <div class="footer__email">
                            <a href="mailto:arenda@forumestate.ru"><?php the_field('email_rent', 443) ?></a>
                        </div>
                    </div>
                </div>

                <div class="footer__block">
                    <h3 class="footer__title">Отдел продаж</h3>
                    <div class="footer__descr">
                        <div class="footer__numbers">
                            <div class="footer__number">
                                <a href="tel:+78125918700"><?php the_field('number_sale_1', 443) ?></a>
                            </div>
                            <div class="footer__number">
                                <a href="tel:+79111088201"><?php the_field('number_sale_2', 443) ?></a>
                            </div>
                        </div>
                        <div class="footer__email">
                            <a href="mailto:206@fgr.ru"><?php the_field('email_sale', 443) ?></a>
                        </div>
                    </div>
                </div>

                <div class="footer__block">
                    <div class="footer__stock__wrapper">
                        <h3 class="footer__stock">Акция</h3>
                        <div class="footer__stock__logo">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/actions.png" alt="footer__actions">
                        </div>
                    </div>
                    <div class="footer__links">
                        <a href="<?php echo get_page_link(16) ?>" class="footer__link">Покупка</a>
                        <a href="<?php echo get_page_link(18) ?>" class="footer__link">Продажа</a>
                    </div>
                </div>
            </div>

            <!-- footer mobile  -->
            
            <div class="footer__mobile__wrapper">
                <div class="footer__block__first">
                    <div class="footer__logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/logo-footer.png" alt="logo__footer">
                    </div>
                    <div class="footer__links__up">
                        <a href="<?php echo get_page_link(12) ?>" class="footer__link__up">О Компании</a>
                        <a href="<?php echo get_page_link(14) ?>" class="footer__link__up">Аренда помещений</a>
                    </div>
                </div>
                <div class="footer__mobile__middle__wrapper">
                    <div class="footer__block__second">
                        <h3 class="footer__title">Отдел аренды</h3>
                        <div class="footer__descr">
                            <div class="footer__numbers">
                                <div class="footer__number">
                                    <a href="tel:+78125918888"><?php the_field('number_rent_1', 443) ?></a>
                                </div>
                                <div class="footer__number">
                                    <a href="tel:+79118494971"><?php the_field('number_rent_2', 443) ?></a>
                                </div>
                            </div>
                            <div class="footer__email">
                                <a href="mailto:arenda@forumestate.ru"><?php the_field('email_rent', 443) ?></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="footer__block__third">
                        <h3 class="footer__title">Отдел продаж</h3>
                        <div class="footer__descr">
                            <div class="footer__numbers">
                                <div class="footer__number">
                                    <a href="tel:+78125918700"><?php the_field('number_sale_1', 443) ?></a>
                                </div>
                                <div class="footer__number">
                                    <a href="tel:+79111088201"><?php the_field('number_sale_2', 443) ?></a>
                                </div>
                            </div>
                            <div class="footer__email">
                                <a href="mailto:206@fgr.ru"><?php the_field('email_sale', 443) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="footer__block__fourth">
                    <div class="footer__stock__wrapper">
                        <h3 class="footer__stock">Акция</h3>
                        <div class="footer__stock__logo">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/actions.png" alt="footer__actions">
                        </div>
                    </div>
                    <div class="footer__links__down">
                        <a href=<?php echo get_page_link(16) ?>" class="footer__link__down">Покупка</a>
                        <a href="<?php echo get_page_link(18) ?>" class="footer__link__down">Продажа</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php 
        wp_footer();
    ?>