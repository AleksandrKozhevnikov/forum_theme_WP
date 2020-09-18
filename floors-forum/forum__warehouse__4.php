<?php 
/* 
Template name: 4 Этаж склад Форум
Template Post Type: post
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум 4 Этаж (склад)</title>
</head>


<?php 
    get_header();
?>


<section class="levels__forum">
            <div class="container">
                <div class="levels__wrapper">
                    <div class="levels__text">
                        <h1 class="levels__text__header">бц форум</h1>
                        <div class="levels__text__adress">Балтийская ул., д.51</div>
                        <div class="levels__text__metro">м. Балтийская <br> м. Нарвская</div>

                        <a href="#" class="levels__text__link">Посмотреть все бизнес центры</a>
                    </div>

                    <div class="floors__building__forum">
                        <img class="floors__building__forum" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/forum.png" alt="forum__building">
                        <svg class="floors__building__forum__active">
                            <a xlink:href="<?php echo get_page_link(175) ?>"><polygon class="level__choice__forum" points="676,480 676,432 699,435 785,373 785,423 699,485" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(184) ?>"><polygon class="level__choice__forum" points="676,432 675,386 699,391 785,330 785,373 699,435" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(192) ?>"><polygon class="level__choice__forum" points="675,386 675,339 699,345 785,285 785,330 699,391" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(194) ?>"><polygon class="level__choice__forum" points="675,339 675,296 699,300 785,245 785,285 699,345" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(196) ?>"><polygon class="level__choice__forum" points="675,296 675,247 699,252 785,198 785,245 699,300" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(198) ?>"><polygon class="level__choice__forum" points="675,247 675,205 699,210 785,157 785,198 699,252" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(200) ?>"><polygon class="level__choice__forum" points="185,70 613,195 629,187 675,200 675,205 699,210 785,157 785,104 699,155 653,144 613,163 185,43" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <!-- выбор склада -->
                            <a xlink:href="<?php echo get_page_link(202) ?>"><polygon class="warehouse__choice__level" points="27,385 561,589 678,504 678,429 561,512 27,318" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(208) ?>"><polygon class="warehouse__choice__level" points="27,318 561,512 678,429 678,368 561,445 27,262" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(210) ?>"><polygon class="warehouse__choice__level" points="27,262 561,445 678,368 678,301 561,375 27,202" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(212) ?>"><polygon class="warehouse__choice__level" points="27,202 561,375 678,301 678,199 561,274 27,105" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                        </svg>
                    </div>
                </div>
                
                <div class="levels__select">Выберите этаж:</div>
                <div class="levels__header">Офисный корпус:</div>
                <div class="choice__forum__wrapper">
                    <ul>
                        <a href="<?php echo get_page_link(175) ?>"><li class="choice__level__forum">1 Этаж</li></a>
                        <a href="<?php echo get_page_link(184) ?>"><li class="choice__level__forum">2 Этаж</li></a>
                        <a href="<?php echo get_page_link(192) ?>"><li class="choice__level__forum">3 Этаж</li></a>
                        <a href="<?php echo get_page_link(194) ?>"><li class="choice__level__forum">4 Этаж</li></a>
                        <a href="<?php echo get_page_link(196) ?>"><li class="choice__level__forum">5 Этаж</li></a>
                        <a href="<?php echo get_page_link(198) ?>"><li class="choice__level__forum">6 Этаж</li></a>
                        <a href="<?php echo get_page_link(200) ?>"><li class="choice__level__forum">7 Этаж</li></a>
                    </ul>
                </div>
                <div class="levels__header">Офисно-складской корпус:</div>
                <div class="choice__kvarc__wrapper__storage">
                    <ul>
                        <a href="<?php echo get_page_link(202) ?>"><li class="choice__level__forum__warehouse">1 Этаж</li></a>
                        <a href="<?php echo get_page_link(208) ?>"><li class="choice__level__forum__warehouse">2 Этаж</li></a>
                        <a href="<?php echo get_page_link(210) ?>"><li class="choice__level__forum__warehouse">3 Этаж</li></a>
                        <a href="<?php echo get_page_link(212) ?>"><li class="choice__level__forum__warehouse">4 Этаж</li></a>
                    </ul>
                </div>

                <div class="room__wrapper">
                    <div class="room__free">Свободные помещения</div>
                    <div class="room__busy">Занятые помещения</div>
                </div>
               
                <div class="room__plan first__floor__forum">
                    <img src="<?php the_field('forum_4_warehouse', 3741); ?>" alt="plan">
                </div>
                <!-- <div class="interactive__wrapper">
                    <div class="modal__room first__modal__forum">
                        <div class="modal__wrapper">
                            <div class="modal__header">Помещения</div>
                            <div class="modal__close first__close__forum">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/close.png" alt="close__icon">
                            </div>
                        </div>
                        <hr>
                        <div class="table__content">
                            <table class="table table__modal" id="tableKvarc">
                                <thead>
                                    <tr class="table__header">
                                        <th>№ Помещения</th>
                                        <th>Количество <br> комнат</th>
                                        <th>Площадь м&sup2;</th>
                                        <th>Руб/м&sup2;</th>
                                        <th>Руб/мес.</th>
                                        <th>Примечание</th>
                                    </tr>
                                </thead>
                                <tbody class="table__body">
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                    <tr>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                        <td>тест</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="button__wrapper">
                            <button class="button__close first__button__forum">Закрыть</button>
                        </div>
                    </div>
                </div>       -->      
                

                <div class="scheme__links">
                    <a href="#">Все свободные помещения списком</a>
                    <a href="#">Посмотреть все бизнес-центры</a>
                </div>
            </div>
        </section>

<?php 
    get_footer('travel-forum');
    get_footer();
?>