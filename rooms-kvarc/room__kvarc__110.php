<?php 
/* 
Template name: Помещение 110 Кварц
Template Post Type: post
*/
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помещение 110 Кварц</title>
</head>


<?php 
    get_header();
    require __DIR__ . '/../connection.php';
?>

<?php 
    $query = "SELECT * FROM table_kvarc WHERE number = '110'"; //You don't need a ; like you do in SQL
    $result = mysqli_query($connection,$query);

    $row = mysqli_fetch_array($result);

    


    mysqli_close($connection); //Make sure to close out the database connection
?>

<section class="room">
        <div class="container">
            <div class="room__back__link">
                <a href="<?php echo get_page_link(28)?>">Назад к таблице</a>
            </div>

            <div class="room__header">
                <div class="room__header__text">
                    <div class="room__text__block">
                        <div class="room__rent__descr">Аренда помещения <?php echo  $row['number'] ?> в <br> ДЦ "Кварц"</div>
                        <div class="room__rent__adress">
                            <img class="room__rent__icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/sort/adres.png" alt="adress__icon">
                            <div class="room__rent__text">Пискаревский пр-т, д.63, лит.А</div>
                        </div>
                    </div>
                    <div class="room__text__block">
                        <div class="room__number">
                            <a href="tel:78125918888"><?php the_field('number_rent_1', 443) ?></a>
                        </div>
                        <div class="room__number">
                            <a href="tel:+79118494971"><?php the_field('number_rent_2', 443) ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room__info">
                <div class="room__info__block">
                    <div class="room__info__descr"><?php echo $row['floor'] ?></div>
                    <div class="room__info__header">Этаж</div>
                </div>
                <div class="room__info__block">
                    <div class="room__info__descr"><?php echo $row['area'] ?></div>
                    <div class="room__info__header">площадь  м&sup2;</div>
                </div>
                <div class="room__info__block">
                    <div class="room__info__descr"><?php echo $row['price'] ?></div>
                    <div class="room__info__header">Арендная ставка, <br> руб./м&sup2; в месяц</div>
                </div>
                <div class="room__info__block">
                    <div class="room__info__descr"><?php echo $row['summ'] ?></div>
                    <div class="room__info__header">Арендная плата в <br> месяц, руб.</div>
                </div>
                <div class="room__info__block">
                    <div class="room__info__descr"><?php echo $row['type'] ?></div>
                    <div class="room__info__header">Назначение помещения</div>
                </div>
                <div class="room__info__block room__info__block_last">
                    <div class="room__info__descr"><?php echo $row['rooms'] ?></div>
                    <div class="room__info__header">Количество комнат</div>
                </div>
            </div>

            <div class="divider__room"></div>

            <div class="room__plan__image__wrapper">
                <img class="room__plan__image" src="<?php the_field('kvarc_110', 351) ?>" alt="room_plan">
            </div>
            
            <div class="divider__room"></div>

            <div class="room__note">
                <ul>
                    <?php echo "<li>" . $row['comment'] . "</li>" ?>
                    <?php echo "<li>" . $row['commentmore'] . "</li>" ?>
                </ul>
            </div>

            <div class="room__contacts">
                <div class="room__questions">
                    Остались вопросы? <br> Звоните!
                </div>
                <div class="room__numbers">
                    <a href=":tel+78125918888"><?php the_field('number_rent_1', 443) ?></a>
                    <a href=":tel+79118494971"><?php the_field('number_rent_2', 443) ?></a>
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer();
?>
