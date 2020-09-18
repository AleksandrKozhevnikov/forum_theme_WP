<?php 
/* 
Template name: Цокольный Этаж Кварц
Template Post Type: post
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кварц Цокольный Этаж </title>
</head>

<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>


<section class="levels">
        <section class="levels__kvarc">
            <div class="container">
                <div class="levels__wrapper">
                    <div class="levels__text">
                        <h1 class="levels__text__header">дц кварц</h1>
                        <div class="levels__text__adress">Пискаревский пр-т, д.63, лит.А</div>
                        <div class="levels__text__metro">м. Площадь Мужества <br> м. Академическая</div>

                        <a href="#" class="levels__text__link">Посмотреть все бизнес центры</a>
                    </div>

                    <div class="floors__building__kvarc">
                        <img class="floors__building__kvarc__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/kvarc.jpg" alt="kvarc__building">
                        <svg class="floors__building__kvarc__active" preserveAspectRatio="none">
                            <a xlink:href="<?php echo get_page_link(88) ?>"><polygon class="floor__choice__level" points="15,282 290,329 774,236 774,247 290,343 15,295" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(94) ?>"><polygon class="floor__choice__level" points="11,249 290,289 768,205 768,238 290,333 15,283" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(70) ?>"><polygon class="floor__choice__level" points="9,215 290,252 768,179 765,210 290,287 10,247" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(120) ?>"><polygon class="floor__choice__level" points="69,189 290,218 466,195 466,208 481,211 662,181 662,167 769,152 769,179 290,252 71,223" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(126) ?>"><polygon class="floor__choice__level" points="68,159 285,182 462,163 462,163 481,168 668,145 668,135 769,125 769,152 668,167 662,181 471,211 462,208 462,195 290,218 69,189" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(128) ?>"><polygon class="floor__choice__level" points="66,127 285,148 463,129 481,132 665,113 665,108 771,98 771,125 668,136 668,145 480,167 461,163 461,163 290,183 68,159" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                            <a xlink:href="<?php echo get_page_link(130) ?>"><polygon class="floor__choice__level" points="64,98 285,115 461,98 479,101 665,86 651,82 772,72 772,97 665,108 665,112 480,132 462,129 462,129 287,147 66,128" style="fill: rgba(22,40,111, 0.5);"></polygon></a>
                        </svg>
                    </div>
                </div>
                
                <div class="levels__select">Выберите этаж:</div>
                <div class="levels__header">Офисный корпус:</div>
                <div class="choice__kvarc__wrapper">
                    <ul>
                        <a href="<?php echo get_page_link(88) ?>"><li class="choice__level__kvarc">Цокольный</li></a>
                        <a href="<?php echo get_page_link(94) ?>"><li class="choice__level__kvarc">1 Этаж</li></a>
                        <a href="<?php echo get_page_link(70) ?>"><li class="choice__level__kvarc">2 Этаж</li></a>
                        <a href="<?php echo get_page_link(120) ?>"><li class="choice__level__kvarc">3 Этаж</li></a>
                        <a href="<?php echo get_page_link(126) ?>"><li class="choice__level__kvarc">4 Этаж</li></a>
                        <a href="<?php echo get_page_link(128) ?>"><li class="choice__level__kvarc">5 Этаж</li></a>
                        <a href="<?php echo get_page_link(130) ?>"><li class="choice__level__kvarc">6 Этаж</li></a>
                    </ul>
                </div>
                <div class="levels__header">Офисно-складской корпус:</div>
                <div class="choice__kvarc__wrapper__storage">
                    <ul>
                        <a href="<?php echo get_page_link(132) ?>"><li class="choice__level__kvarc">1 Этаж</li></a>
                        <a href="<?php echo get_page_link(135) ?>"><li class="choice__level__kvarc">2 Этаж</li></a>
                        <a href="<?php echo get_page_link(140) ?>"><li class="choice__level__kvarc">3 Этаж</li></a>
                        <a href="<?php echo get_page_link(142) ?>"><li class="choice__level__kvarc">4 Этаж</li></a>
                    </ul>
                </div>

                <div class="room__wrapper">
                    <div class="room__free">Свободные помещения</div>
                    <div class="room__busy">Занятые помещения</div>
                </div>

                <div class="room__plan first__floor__kvarc">
                    <img src="<?php the_field('kvarc_0', 3743); ?>" alt="plan">
                </div>
                <div class="interactive__wrapper">
                    <div class="modal__room first__modal__kvarc">
                        <div class="modal__wrapper">
                            <div class="modal__header">Помещения</div>
                            <div class="modal__close first__close__kvarc">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/close.png" alt="close__icon">
                            </div>
                        </div>
                        <hr>
                        <div class="table__content">
                            <?php
                                $query = "SELECT * FROM table_kvarc WHERE floor = 'цоколь'"; //You don't need a ; like you do in SQL
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
                            <button class="button__close first__button__kvarc">Закрыть</button>
                        </div>
                    </div>
                </div> 
        </section>

<?php
    get_footer('travel-kvarc');
    get_footer();
?>