<?php 
/* 
Template name: Свободные помещения
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
    <title>Форум РФ - Свободные помещения</title>
</head>
<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>

<section class="free__rooms__atoll">
            <div class="container">
                <div class="free__rooms__header">
                    <h1>Свободные помещения</h1>
                </div>
                <div class="rent__choice rent__choice__large">
                    <form id="table__form__free" method="post">
                        <div class="choice__rent-area">
                            <div class="choice__subheader">Площадь (м&sup2;)</div>
                            <div class="choice__input">
                                <input type="text" id="minArea" name="minArea" value="<?php echo $_POST['minArea']?>" placeholder="от" class="minArea">
                                <input type="text" id="maxArea" name="maxArea" value="<?php echo $_POST['maxArea']?>" placeholder="до" class="maxArea">
                            </div>
                            <div class="filter-main filter-circle__rent-area filter-main__free"></div>
                        </div>

                        <div class="choice__rent-pay">
                            <div class="choice__subheader">Арендная плата в <br> месяц (руб)</div>
                            <div class="choice__input">
                                <input type="text" id="minPay" name="minPay" value="<?php echo $_POST['minPay']?>" placeholder="от" class="minPay">
                                <input type="text" id="maxPay" name="maxPay" value="<?php echo $_POST['maxPay']?>" placeholder="до" class="maxPay">
                            </div>
                            <div class="filter-main filter-circle__rent-pay filter-main__free"></div>

                            <button id="submit__button__free" type="button" name="sendFormButton" class="button__orange button__orange_filter_center">Найти</button>
                        </div>
                    </form>
                </div>
                <div class="table__large__content">
                    <?php

                        $minArea = strip_tags(trim($_POST["minArea"]));
                        $maxArea = strip_tags(trim($_POST["maxArea"]));
                        $minPay = strip_tags(trim($_POST["minPay"]));
                        $maxPay = strip_tags(trim($_POST["maxPay"]));
                
                        $queryKvarc = "SELECT * FROM table_kvarc WHERE area BETWEEN $minArea AND $maxArea AND summ BETWEEN $minPay AND $maxPay";
                        $queryForum = "SELECT * FROM table_forum WHERE area BETWEEN $minArea AND $maxArea AND summ BETWEEN $minPay AND $maxPay";
                        $queryAtoll = "SELECT * FROM table_atoll WHERE area BETWEEN $minArea AND $maxArea AND summ BETWEEN $minPay AND $maxPay";
                        

                        $resultAtoll = mysqli_query($connection,$queryAtoll);
                        $resultKvarc = mysqli_query($connection,$queryKvarc);
                        $resultForum = mysqli_query($connection,$queryForum);
                        
                        echo "<table class='table table__large'>
                                <thead>
                                    <tr class='table__header'>
                                        <th>№ Помещения</th>
                                        <th>Назначение помещения</th>
                                        <th>Количество комнат</th>
                                        <th>Площадь м&sup2;</th>
                                        <th>Арендная ставка Руб/м&sup2; в месяц</th>
                                        <th>Арендная плата в месяц, руб.</th>
                                        <th>Примечание</th>
                                        <th>Этаж</th>
                                        <th>Бизнес центр</th>
                                    </tr>
                                </thead>
                                <tbody class='table__body'>"; // start a table tag in the HTML

                        while($row = mysqli_fetch_array($resultKvarc)){   //Creates a loop to loop through results
                            echo "      <tr>
                                            <td><a href='https://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-kvarc/'>" . $row['number'] . "</a></td>
                                            <td>" . $row['type'] . "</td>
                                            <td>" . $row['rooms'] . "</td>
                                            <td>" . $row['area'] . "</td>
                                            <td>" . $row['price'] . "</td>
                                            <td>" . $row['summ'] . "</td>
                                            <td>" . $row['comment'] . "</td>
                                            <td>" . $row['floor'] . "</td>
                                            <td><a href='http://www.kozhevnikov97.ru/arenda-kvarc/'>Кварц</a></td>
                                        </tr>";  //$row['index'] the index here is a field name
                        }

                        while($row = mysqli_fetch_array($resultForum)){   //Creates a loop to loop through results
                            echo "      <tr>
                                            <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-forum/'>" . $row['number'] . "</a></td>
                                            <td>" . $row['type'] . "</td>
                                            <td>" . $row['rooms'] . "</td>
                                            <td>" . $row['area'] . "</td>
                                            <td>" . $row['price'] . "</td>
                                            <td>" . $row['summ'] . "</td>
                                            <td>" . $row['comment'] . "</td>
                                            <td>" . $row['floor'] . "</td>
                                            <td><a href='http://www.kozhevnikov97.ru/arenda-forum/'>Форум</a></td>
                                        </tr>";  //$row['index'] the index here is a field name
                        }

                        while($row = mysqli_fetch_array($resultAtoll)){   //Creates a loop to loop through results
                            echo "      <tr>
                                            <td><a href='http://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-atoll/'>" . $row['number'] . "</a></td>
                                            <td>" . $row['type'] . "</td>
                                            <td>" . $row['rooms'] . "</td>
                                            <td>" . $row['area'] . "</td>
                                            <td>" . $row['price'] . "</td>
                                            <td>" . $row['summ'] . "</td>
                                            <td>" . $row['comment'] . "</td>
                                            <td>" . $row['floor'] . "</td>
                                            <td><a href='http://www.kozhevnikov97.ru/arenda-atoll/'>Атолл</a></td>
                                        </tr>";  //$row['index'] the index here is a field name
                        }
                        
                        echo "</table>
                                </tbody>"; //Close the table in HTML
                        
                        mysqli_close($connection); //Make sure to close out the database connection
                    ?>
                </div>
            </div>
        </section>

<?php 
    get_footer();
?>