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
                        <span class="heding-text-2">Запорожская область</span>
                    </div>
                    <div>
                        <img src="../assets/images/emblem_zaporozhie.png" alt="zaporozhye" class="img-minimal" />
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
                    <span class="heding-text-1">Финансы</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">Межрайонная ИФНС России № 1 по Запорожской области</p><br>
                    <p class="text">
                        Запорожская область, м.р-н Мелитопольский, г.п. Мелитопольское, г. Мелитополь, ул. Кирова, д. 31
                    </p><br>
                    <p class="text">
                        Адрес для направления корреспонденции
                        г. Мелитополь, ул. Беляева, 57/а
                    </p><br>
                    <p class="text">
                        Контакты<br>
                        ТЕЛЕФОН ПРИЕМНОЙ:<br>
                        <span class="phone-number">+7 (990) 033-92-04</span><br>
                        КОНТАКТ-ЦЕНТР:<br>
                        <span class="phone-number">8-800-222-22-22</span><br><br>
                        Межрайонная ИФНС России № 2 по Запорожской области<br>
                    </p>
                    <p class="text">
                        Запорожская область, м.р-н Бердянский, г.п. Бердянское, г. Бердянск, пр-кт Труда, д. 20
                        <br><br>
                        Адрес для направления корреспонденции
                        г. Бердянск, Проспект Труда,20
                        <br><br>
                        Контакты<br>
                        ТЕЛЕФОН ПРИЕМНОЙ:<br>
                        <span class="phone-number">+7 (990) 045-08-72</span>
                        КОНТАКТ-ЦЕНТР:<br>
                        <span class="phone-number">8-800-222-22-22</span>
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