
<?php 
/* 
Template name: Добавить помещение Атолл
*/
?>



<?php 
    get_header();
?>

<?php require 'connection.php' ?> 

<div class="container">
    <h2 class="add__header">Добавить помещение: Атолл</h2>
    <div class="add__wrapper">
        <form class="add__office__form" id="ajax__contact" method="post">
            <div class="add__field">
                <label for="number">Номер помещения:</label><br>
                <input type="text" id="number" name="number">
            </div>

            <div class="add__field">
                <label for="type">Назначение помещения:</label><br>
                <select name="type" id="type">
                    <option value="Офис">Офис</option>
                    <option value="Склад">Склад</option>
                    <option value="Офисно-складское">Офисно-складской блок</option>
                    <option value="Ангар">Ангар</option>
                    <option value="Универсальное">Универсального назначения</option>
                    <option value="Производство">Производство</option>
                    <option value="Торгово-складское">Торгово-складское</option>
                    <option value="Другое">Другое</option>
                </select>
            </div>

            <div class="add__field">
                <label for="rooms">Количество комнат:</label><br>
                <input type="text" id="rooms" name="rooms">
            </div>

            <div class="add__field">
                <label for="area">Площадь:</label><br>
                <input type="text" id="area" name="area">
            </div>

            <div class="add__field">
                <label for="price">Стоимость за квадратный метр:</label><br>
                <input type="text" id="price" name="price">
            </div>

            <div class="add__field">
                <label for="summ">Суммарная стоимость за месяц:</label><br>
                <input type="text" id="summ" name="summ">
            </div>

            <div class="add__field">
                <label for="comment">Примечание:</label><br>
                <textarea id="comment" name="comment"></textarea>
            </div>

            <div class="add__field">
                <label for="comment">Примечание на карточке помещения:</label><br>
                <textarea id="commentmore" name="commentmore"></textarea>
            </div>

            <div class="add__field">
                <label for="floor">Этаж:</label><br>
                <input type="text" id="floor" name="floor">
            </div>



            <div class="add__field">
                <button class="button__orange" type="submit">Добавить помещение</button>
            </div>
        </form>
    </div>
</div>
<?php
$number = strip_tags(trim($_POST["number"]));
$type = strip_tags(trim($_POST["type"]));
$rooms = strip_tags(trim($_POST["rooms"]));
$area = strip_tags(trim($_POST["area"]));
$price = strip_tags(trim($_POST["price"]));
$summ = strip_tags(trim($_POST["summ"]));
$comment = strip_tags(trim($_POST["comment"]));
$commentmore = strip_tags(trim($_POST["commentmore"]));
$floor = strip_tags(trim($_POST["floor"]));
$query = "
INSERT INTO table_atoll (number, type, rooms, area, price, summ, comment, commentmore, floor)
VALUES ('".$number."', '". $type ."', '".$rooms."', '".$area."', '".$price."', '".$summ."', '".$comment."','".$commentmore."', '".$floor."')";

mysqli_query($connection, $query);

?>



<?php 
    get_footer();
?>