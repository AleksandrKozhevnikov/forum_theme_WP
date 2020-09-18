<?php 
/* 
Template name: 5 Этаж Атолл
Template Post Type: post
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Атолл 5 Этаж</title>
</head>


<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>


<section class="levels__atoll">
            <div class="container">
                <div class="levels__wrapper">
                    <div class="levels__text">
                        <h1 class="levels__text__header">бц атолл</h1>
                        <div class="levels__text__adress">Учительская ул.д.23, лит.А</div>
                        <div class="levels__text__metro">м. Гражданский проспект</div>

                        <a href="#" class="levels__text__link">Посмотреть все бизнес центры</a>
                    </div>

                    <div class="floors__building for_atoll">
                        <img class ="floors__building__atoll" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll.png" alt="atoll__building">
                        <svg class="floors__building__atoll__active">
                            <a xlink:href="<?php echo get_page_link(214) ?>">
                                <polygon class="floor__choice__atoll__level" points="103,395 169,395 615,384 725,382 772,378 773,424  725,457 637,456 627,454 617,448 613,439 160,427 102,427" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(223) ?>">
                                <polygon class="floor__choice__atoll__level" points="104,372 169,372 615,343 725,338 771,338 772,378 725,382 615,384 169,395 103,395" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(225) ?>">
                                <polygon class="floor__choice__atoll__level" points="104,347 169,347 615,300 725,291 770,291 771,338 725,338 615,343 169,372 104,372" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(227) ?>">
                                <polygon class="floor__choice__atoll__level" points="106,312 169,312 615,245 725,231 770,237 770,291 725,291 615,300 169,347 105,347" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(229) ?>">
                                <polygon class="floor__choice__atoll__level" points="106,283 169,283 615,194 724,175 769,185 770,237 725,231 615,245 169,312 106,312" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(231) ?>">
                                <polygon class="floor__choice__atoll__level" points="109,241 169,241 615,121 724,95 767,112 769,185 724,175 615,194 169,283 106,283" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                            <a xlink:href="<?php echo get_page_link(233) ?>">
                                <polygon class="floor__choice__atoll__level" points="109,218 159,209 165,209 175,212 183,219 223,227 618,121 618,90 621,81 628,73 632,70 721,35 767,98 767,112 721,96 618,121 168,241 109,241" style="fill: rgba(22,40,111, 0.5);"></polygon>
                            </a>
                        </svg>
                    </div>
                </div>
                
                <div class="levels__select">Выберите этаж:</div>
                <div class="levels__header">Офисный корпус:</div>
                <div class="choice__atoll__wrapper">
                    <ul>
                        <a href="<?php echo get_page_link(214) ?>"><li class="choice__level__atoll">1 Этаж</li></a>
                        <a href="<?php echo get_page_link(223) ?>"><li class="choice__level__atoll">2 Этаж</li></a>
                        <a href="<?php echo get_page_link(225) ?>"><li class="choice__level__atoll">3 Этаж</li></a>
                        <a href="<?php echo get_page_link(227) ?>"><li class="choice__level__atoll">4 Этаж</li></a>
                        <a href="<?php echo get_page_link(229) ?>"><li class="choice__level__atoll">5 Этаж</li></a>
                        <a href="<?php echo get_page_link(231) ?>"><li class="choice__level__atoll">6 Этаж</li></a>
                        <a href="<?php echo get_page_link(233) ?>"><li class="choice__level__atoll">7 Этаж</li></a>
                    </ul>
                </div>

                <div class="room__wrapper">
                    <div class="room__free">Свободные помещения</div>
                    <div class="room__busy">Занятые помещения</div>
                </div>
               
                <div class="room__plan first__floor__atoll">
                    <img src="<?php the_field('atoll_5', 3746); ?>" alt="plan">
                </div>
                <div class="interactive__wrapper">
                    <div class="modal__room first__modal__atoll">
                        <div class="modal__wrapper">
                            <div class="modal__header">Помещения</div>
                            <div class="modal__close first__close__atoll">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/close.png" alt="close__icon">
                            </div>
                        </div>
                        <hr>
                        <div class="table__content">
                            <?php
                                $query = "SELECT * FROM table_atoll WHERE floor = '5'"; //You don't need a ; like you do in SQL
                                $result = mysqli_query($connection,$query);
                                
                                echo "<table class='table table__modal'>
                                        <thead>
                                            <tr class='table__header'>
                                                <th>№ Помещения</th>
                                                <th>Количество комнат</>
                                                <th>Площадь м&sup2;</th>
                                                <th>Арендная ставка Руб/м&sup2; в месяц</th>
                                                <th>Арендная плата в месяц, руб.</th>
                                                <th>Примечание</th>
                                            </tr>
                                        </thead>
                                        <tbody class='table__body'>"; // start a table tag in the HTML
                                        
                                while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                echo "      <tr>
                                                <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-kvarc/'>" . $row['number'] . "</a></td>
                                                <td>" . $row['rooms'] . "</td>
                                                <td>" . $row['area'] . "</td>
                                                <td>" . $row['price'] . "</td>
                                                <td>" . $row['summ'] . "</td>
                                                <td>" . $row['comment'] . "</td>
                                            </tr>";  //$row['index'] the index here is a field name
                                }
                                
                                echo "</table>
                                        </tbody>"; //Close the table in HTML
                                
                                mysqli_close($connection); //Make sure to close out the database connection
                            ?>
                        </div>
                        <hr>
                        <div class="button__wrapper">
                            <button class="button__close first__button__atoll">Закрыть</button>
                        </div>
                    </div>
                </div> 

                <div class="scheme__links">
                    <a href="#">Все свободные помещения списком</a>
                    <a href="#">Посмотреть все бизнес-центры</a>
                </div>
            </div>
        </section>
    </section>

<?php
    get_footer('travel-atoll');
    get_footer();
?>