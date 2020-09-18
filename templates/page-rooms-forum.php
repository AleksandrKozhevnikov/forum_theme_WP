<?php 
/* 
Template name: Свободные помещения Форум
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
    <title>Форум РФ - Помещения Форум</title>
</head>
<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>

<section class="free__rooms__forum">
            <div class="container">
                <div class="free__rooms__header">
                    <h1>БЦ Форум <br> Свободные помещения</h1>
                </div>
                <div class="rent__choice rent__choice__large">
                    <div class="choice__header">
                        Подобрать помещение <br> в аренду
                    </div>
                    <form id="table__form__forum" method="post">
                        <div class="choice__rent-area">
                            <div class="choice__subheader">Площадь (м&sup2;)</div>
                            <div class="choice__input">
                                <input type="text" id="minArea" name="minArea" value="11"  placeholder="от" class="minArea">
                                <input type="text" id="maxArea" name="maxArea" value="500" placeholder="до" class="maxArea">
                            </div>
                            <div class="filter-main filter-circle__rent-area filter-main__free"></div>
                        </div>

                        <div class="choice__rent-pay">
                            <div class="choice__subheader">Арендная плата в <br> месяц (руб)</div>
                            <div class="choice__input">
                                <input type="text" id="minPay" name="minPay" value="5250"  placeholder="от" class="minPay">
                                <input type="text" id="maxPay" name="maxPay" value="125860"  placeholder="до" class="maxPay">
                            </div>
                            <div class="filter-main filter-circle__rent-pay filter-main__free"></div>

                            <button id="submit__button__forum" type="button" name="sendFormButton" class="button__orange button__orange_filter_center">Найти</button>
                        </div>
                    </form>
                </div>
                <div class="table__large__content">
                    <?php 

                            $query = "SELECT * FROM table_forum WHERE area BETWEEN 11 AND 500 AND summ BETWEEN 5250 AND 125860";
                            $result = mysqli_query($connection,$query);
                            
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
                                    
                            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                            echo "      <tr>
                                            <td><a target='_blank' href='https://www.kozhevnikov97.ru/pomeshhenie-" . $row['number'] . "-kvarc/'>" . $row['number'] . "</a></td>
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