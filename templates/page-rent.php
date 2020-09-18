<?php 
/* 
Template name: Аренда 
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
    <title>Форум РФ - Аренда</title>
</head>
<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>

<section class="rent">
        <section class="rent__choise__block">
            <div class="container">
                <div class="rent__choice__wrapper">
                    <div class="rent__choice">
                        <div class="choice__header">
                            Подобрать помещение <br> в аренду
                        </div>
                        <form method="post" action="<?php echo get_page_link(36) ?>">
                            <div class="choice__rent-area">
                                <div class="choice__subheader">Площадь (м&sup2;)</div>
                                <div class="choice__input">
                                    <input type="text" name="minArea" required placeholder="от" class="minArea">
                                    <input type="text" name="maxArea" required placeholder="до" class="maxArea">
                                </div>
                                <div class="filter-main filter-circle__rent-area filter-main__choice"></div>
                            </div>
        
                            <div class="choice__rent-pay">
                                <div class="choice__subheader">Арендная плата в <br> месяц (руб)</div>
                                <div class="choice__input">
                                    <input type="text" name="minPay" required placeholder="от" class="minPay">
                                    <input type="text" name="maxPay" required placeholder="до" class="maxPay">
                                </div>
                                <div class="filter-main filter-circle__rent-pay filter-main__choice"></div>
        
                                <button type="submit" class="button__orange button__orange_filter_center">Найти</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="rent__map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aec5b48f85705019174a36b8ad4c2e23f5b8176798bc4aff0004b872dd6102d51&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="rent__kvarc__block">
            <div class="container">
                <div class="rent__wrapper">
                    <div class="rent__kvarc__wrapper">
                        <a class="kvarc__link" href="<?php echo get_page_link(20) ?>">
                            <div class="kvarc__header">
                                <div class="kvarc__subheader">дц кварц</div>
                                <div class="kvarc__adress">Пискаревский пр-т, д.63, лит.А</div>
                                <div class="kvarc__metro">
                                    <img class="kvarc__metro_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/metro.png" alt="metro">
                                    <div>Площадь Мужества</div>
                                </div>
                                <div class="kvarc__metro">
                                    <img class="kvarc__metro_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/metro.png" alt="metro">
                                    <div>Академическая</div>
                                </div>
                            </div>
                        </a>
                        
                        <?php
                            $query = "SELECT * FROM table_kvarc LIMIT 0,9"; //You don't need a ; like you do in SQL
                            $result = mysqli_query($connection,$query);
                            
                            echo "<table class='table'>
                                    <thead>
                                        <tr class='table__header'>
                                            <th>Помещение</th>
                                            <th>Площадь м&sup2</th>
                                            <th>Руб/м&sup2</th>
                                            <th>Руб/мес.</th>
                                            <th>Этаж</th>
                                        </tr>
                                    </thead>
                                    <tbody class='table__body'>"; // start a table tag in the HTML
                                    
                            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                            echo "      <tr>
                                            <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-kvarc/'>" . $row['number'] . "</a></td>
                                            <td>" . $row['area'] . "</td>
                                            <td>" . $row['price'] . "</td>
                                            <td>" . $row['summ'] . "</td>
                                            <td>" . $row['floor'] . "</td>
                                        </tr>";  //$row['index'] the index here is a field name
                            }
                            
                            echo "</table>
                                    </tbody>"; //Close the table in HTML
                            
                         
                        ?>
                        <a href="<?php echo get_page_link(28) ?>" class="rent__another-room">Посмотреть все свободные помещения</a>
                    </div>
                    
        
                    <div class="kvarc__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/5.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/6.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/7.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/8.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/9.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/10.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/11.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/kvarc/12.jpg" alt="slider"></div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="rent__forum__block">
            <div class="container">
                <div class="rent__wrapper">
                    <div class="rent__forum__wrapper">
                        <a class="forum__link" href="<?php echo get_page_link(22)?>">
                            <div class="forum__header">
                                <div class="forum__subheader">бц форум</div>
                                <div class="forum__adress">Балтийская ул., д.51</div>
                                <div class="forum__metro">
                                    <img class="forum__metro_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/metro.png" alt="metro">
                                    <div>Балтийская</div>
                                </div>
                                <div class="forum__metro">
                                    <img class="forum__metro_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/metro.png" alt="metro">
                                    <div>Нарвская</div>
                                </div>
                            </div>
                        </a>
                            <?php
                                $query = "SELECT * FROM table_forum LIMIT 0,9"; //You don't need a ; like you do in SQL
                                $result = mysqli_query($connection,$query);
                                
                                echo "<table class='table'>
                                        <thead>
                                            <tr class='table__header'>
                                                <th>Помещение</th>
                                                <th>Площадь м&sup2</th>
                                                <th>Руб/м&sup2</th>
                                                <th>Руб/мес.</th>
                                                <th>Этаж</th>
                                            </tr>
                                        </thead>
                                        <tbody class='table__body'>"; // start a table tag in the HTML
                                        
                                while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                echo "      <tr>
                                                <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-forum/'>" . $row['number'] . "</a></td>
                                                <td>" . $row['area'] . "</td>
                                                <td>" . $row['price'] . "</td>
                                                <td>" . $row['summ'] . "</td>
                                                <td>" . $row['floor'] . "</td>
                                            </tr>";  //$row['index'] the index here is a field name
                                }
                                
                                echo "</table>
                                        </tbody>"; //Close the table in HTML
                                
                            ?>
                        <a href="<?php echo get_page_link(30) ?>" class="rent__another-room">Посмотреть все свободные помещения</a>
                    </div>
                    <div class="forum__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/5.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/6.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/7.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/forum/8.jpg" alt="slider"></div>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="rent__atoll__block">
            <div class="container">
                <div class="rent__wrapper">
                    <div class="rent__atoll__wrapper">
                        <a class="atoll__link" href="<?php echo get_page_link(24)?>">
                            <div class="atoll__header">
                                <div class="atoll__subheader">бц атолл</div>
                                <div class="atoll__adress">Учительская ул., д.23, лит.А</div>
                                <div class="atoll__metro">
                                    <img class="atoll__metro_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/metro.png" alt="metro">
                                    <div>Гражданский пр-т</div>
                                </div>
                            </div>
                        </a>
                            <?php
                                $query = "SELECT * FROM table_atoll LIMIT 0,9"; //You don't need a ; like you do in SQL
                                $result = mysqli_query($connection,$query);
                                
                                echo "<table class='table'>
                                        <thead>
                                            <tr class='table__header'>
                                                <th>Помещение</th>
                                                <th>Площадь м&sup2</th>
                                                <th>Руб/м&sup2</th>
                                                <th>Руб/мес.</th>
                                                <th>Этаж</th>
                                            </tr>
                                        </thead>
                                        <tbody class='table__body'>"; // start a table tag in the HTML
                                        
                                while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                echo "      <tr>
                                                <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-atoll/'>" . $row['number'] . "</a></td>
                                                <td>" . $row['area'] . "</td>
                                                <td>" . $row['price'] . "</td>
                                                <td>" . $row['summ'] . "</td>
                                                <td>" . $row['floor'] . "</td>
                                            </tr>";  //$row['index'] the index here is a field name
                                }
                                
                                echo "</table>
                                        </tbody>"; //Close the table in HTML
                                
                                mysqli_close($connection); //Make sure to close out the database connection
                            ?>
                        <a href="<?php echo get_page_link(32) ?>" class="rent__another-room">Посмотреть все свободные помещения</a>
                    </div>
                    <div class="atoll__slider">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/1.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/2.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/3.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/4.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/5.jpg" alt="slider"></div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bc/atoll/6.jpg" alt="slider"></div>
                    </div>
                </div>
                <div class="rent__terms"><p>Условия аренды</p></div>
                <div class="interactive__wrapper">
                    <div class="modal__rent">
                        <div class="modal__wrapper">
                            <div class="modal__header">Условия аренды</div>
                            <div class="modal__close">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/close.png" alt="close__icon">
                            </div>
                        </div>
                        <hr>
                        <div class="modal__text">
                            <p>Обращаем Ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.</p>
                            <p>Договор аренды заключается на 11 месяцев. По его истечении, в случае согласия сторон, заключается договор на новый срок.</p>
                            <p>Уборка помещений оплачивается по отдельному договору.</p>
                            <p>В связи с тем, что арендодатель использует упрощённую систему налогообложения, все платежи производятся с формулировкой «НДС не облагается».</p>
                            <p>Телекоммуникационные услуги оказывает ООО «Форум-Телеком».</p>
                            <p>Для получения подробной информации о помещениях, их наличии и стоимости, пожалуйста, обращайтесь к менеджерам Отдела аренды.</p>
                        </div>
                        <hr>
                        <div class="button__wrapper">
                            <button class="button__close">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

<?php 
    get_footer();
?>