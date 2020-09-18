
<?php 
/* 
Template name: Удалить помещение Атолл
*/
?>



<?php 
    get_header();
?>

<?php require 'connection.php' ?> 

<div class="container">
    <h2 class="add__header">Удалить помещение: Атолл</h2>
    <div class="add__wrapper">
        <form class="add__office__form" id="ajax-contact" method="post">
            <div class="add__field">
                <label for="number">Номер помещения:</label><br>
                <input type="text" id="number" name="number">
            </div>


            <div class="add__field">
                <button class="button__orange" type="submit">Удалить помещение</button>
            </div>
        </form>
    </div>
</div>

<?php
$number = strip_tags(trim($_POST["number"]));
$bc = strip_tags(trim($_POST["bc"]));
$query = "DELETE FROM table_atoll WHERE number = '$number'";

mysqli_query($connection, $query);

?>


<?php 
    get_footer();
?>