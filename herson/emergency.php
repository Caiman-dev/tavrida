<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/styles/main.css">
    <title>Республика Крым</title>
</head>

<body>
    <div class="wrapper">
        <?php include('../page_header.php'); ?>
        <main>
            <div class="container-white">
                <div class="main-banner">
                    <div class="home-heading min-width">
                        <span class="heding-text-1">ПЕРВЫЙ ИНФОРМАЦИОННЫЙ ПОРТАЛ</span>
                        <span class="heding-text-2">Херсонская область</span>
                    </div>
                    <div>
                        <img src="../assets/images/emblem_herson.png" alt="herson" class="img-minimal" />
                    </div>
                </div>
            </div>
            <div class="nav-panel" id="nav_bar">
                <a href="medicine.php" class="nav-block"><img src="../assets/images/medicine.png" alt="medicine" /><span>Медицина</span></a>
                <a href="emergency.php" class="nav-block"><img src="../assets/images/emergency.png" alt="emergency" /><span>МЧС</span></a>
                <a href="police.php" class="nav-block"><img src="../assets/images/police.png" alt="police" /><span>МВД</span></a>
                <a href="transport.php" class="nav-block"><img src="../assets/images/transport.png" alt="transport" /><span>ТРАНСПОРТ</span></a>
                <a href="agricultural.php" class="nav-block"><img src="../assets/images/agricultural.png" alt="agricultural" /><span>СЕЛЬХОЗ</span></a>
                <a href="finance.php" class="nav-block"><img src="../assets/images/finance.png" alt="finance" /><span>ФИНАНСЫ</span></a>
                <a href="ministries.php" class="nav-block"><img src="../assets/images/ministries.png" alt="ministries" /><span>МИНИСТЕРСТВА</span></a>
                <a href="social-politics.php" class="nav-block"><img src="../assets/images/social-politics.png" alt="social-politics" /><span>СОЦИОПОЛИТИКА</span></a>
                <a href="social-help.php" class="nav-block"><img src="../assets/images/social-help.png" alt="social-help" /><span>СОЦПОДДЕРЖКА</span></a>
                <a href="relax.php" class="nav-block disabled"><img src="../assets/images/relax.png" alt="relax" /><span>ДОСУГ</span></a>
            </div>
            <div class="container-white">
                <div class="heading min-width">
                    <span class="heding-text-1">МЧС</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">МЧС</p></br>
                    <p class="text">
                        <span class="phone-number">+79901115517</span></br>
                        <span class="phone-number">+79900167501</span></br></br>

                        Генический р-н, г. Геническ, ул. Парижской Коммуны, д. 82</br>
                        Руководитель</br>
                        ВРИО начальника</br>
                        Павленко Иван Юрьевич</br>
                        с 30 декабря 2022 г.</br>

                        Херсонгаз: <span class="phone-number">+79900167504</span></br>

                        Херсоноблэнерго: <span class="phone-number">+79900167505; +79900594140</span></br>

                        Аварийная служба «Херсонлифт»: <span class="phone-number">+79900045939</span></br>
                    </p></br>
                    <p class="text-2">Администрация Херсонской области напоминает контактные телефоны пожарно-спасательных подразделений в Херсонской области</p></br></br>
                    <p class="text">
                        • Новая Каховка: <span class="phone-number">+7990-111-55-19</span></br>

                        • Алешки: <span class="phone-number">+7990-111-55-13</span></br>

                        • Голая Пристань: <span class="phone-number">+7990-111-55-14; +7990-096-59-62</span></br>

                        • Скадовск: <span class="phone-number">+7990-111-55-16; +7990-016-75-01</span></br>

                        • Каховка: <span class="phone-number">+7990-111-55-12</span></br>

                        • Геническ: <span class="phone-number">+7990-111-55-06</span></br>

                        • Чаплынка: <span class="phone-number">+7990-111-55-18; +7990-053-58-43</span></br>

                        • Великая Лепетиха: <span class="phone-number">+7990-111-55-04</span></br>

                        • Горностаевка: <span class="phone-number">+7990-111-55-09</span></br>

                        • Новотроицкое: <span class="phone-number">+7990-111-55-08; +7990-041-98-59</span></br>

                        • Нижние Серогозы: <span class="phone-number">+7990-111-55-07; +7990-041-98-57</span></br>

                        • Каланчак: <span class="phone-number">+7990-111-55-17; +7990-104-12-86</span></br>

                        • Верхний Рогачик: <span class="phone-number">+7990-111-55-03; +7990-086-83-29</span></br>

                        • ЦППС: <span class="phone-number">+7990-111-55-21; +7990-111-55-22</span></br>

                        • Оперативный дежурный: <span class="phone-number">+7990-074-85-27</span></br>

                        • 101/112: <span class="phone-number">+7990-053-70-41; +7990-053-70-59</span></br>
                    </p>
                </div>
            </div>
        </main>
        <?php include('../page_footer.php'); ?>
    </div>

    <script src="../assets/scripts/jquery-3.6.4.js"></script>
    <script src="../assets/scripts/main.js"></script>
    <script src="../assets/scripts/nav_bar.js"></script>
</body>

</html>