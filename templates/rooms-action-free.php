
<?php         

require __DIR__ . '/../connection.php';


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
                                                <td><a href='https://forum/arenda-forum/'>Кварц</a></td>
                                            </tr>";  //$row['index'] the index here is a field name
                            }
    
                            while($row = mysqli_fetch_array($resultForum)){   //Creates a loop to loop through results
                                echo "      <tr>
                                                <td><a href='https://forum/pomeshhenie-" . $row['number'] . "-forum/'>" . $row['number'] . "</a></td>
                                                <td>" . $row['type'] . "</td>
                                                <td>" . $row['rooms'] . "</td>
                                                <td>" . $row['area'] . "</td>
                                                <td>" . $row['price'] . "</td>
                                                <td>" . $row['summ'] . "</td>
                                                <td>" . $row['comment'] . "</td>
                                                <td>" . $row['floor'] . "</td>
                                                <td><a href='https://forum/arenda-forum/'>Форум</a></td>
                                            </tr>";  //$row['index'] the index here is a field name
                            }
    
                            while($row = mysqli_fetch_array($resultAtoll)){   //Creates a loop to loop through results
                                echo "      <tr>
                                                <td><a href='https://forum/pomeshhenie-" . $row['number'] . "-atoll/'>" . $row['number'] . "</a></td>
                                                <td>" . $row['type'] . "</td>
                                                <td>" . $row['rooms'] . "</td>
                                                <td>" . $row['area'] . "</td>
                                                <td>" . $row['price'] . "</td>
                                                <td>" . $row['summ'] . "</td>
                                                <td>" . $row['comment'] . "</td>
                                                <td>" . $row['floor'] . "</td>
                                                <td><a href='https://forum/arenda-forum/'>Атолл</a></td>
                                            </tr>";  //$row['index'] the index here is a field name
                            }
                            
                            echo "</table>
                                    </tbody>"; //Close the table in HTML
                            
                            mysqli_close($connection); //Make sure to close out the database connection

?>
