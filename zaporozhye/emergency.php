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
                    <span class="heding-text-1">МЧС</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">
                        ПОЖАРНАЯ СЛУЖБА и МЧС:
                    </p><br>
                    <p class="text">
                        <span class="phone-number">101</span><br>
                        <span class="phone-number">+79900922481</span><br>
                        <span class="phone-number">+78609290120</span><br>
                        <span class="phone-number">+78609290121</span><br>
                    </p><br>
                    <p class="text-2">
                        Телефоны коммунальных служб:
                    </p><br>
                    <p class="text">
                        Аварийная служба по лифтам: <span class="phone-number">+79900727269</span>
                    </p><br>
                    <p class="text">
                        КП "Комфорт" - КРУГЛОСУТОЧНО: сантехники и электрики <span class="phone-number">+79900974249</span>
                    </p><br>
                    <p class="text">
                        Диспетчер теплосетей: <span class="phone-number">+7(990)121-20-15</span>
                    </p><br>
                    <p class="text">
                        Отдел сбыта теплосетей: <span class="phone-number">+7(990)121-20-19</span>
                    </p><br>
                    <p class="text">
                        Диспетчер водоканала: <span class="phone-number">+7(990)097-43-10</span>
                    </p><br>
                    <p class="text">
                        Контролеры водоканала: <span class="phone-number">+7(990)121-20-16</span>
                    </p><br>
                    <p class="text">
                        Васильевский РЭС: <span class="phone-number">+7(990)056-95-32, +79901055897</span>
                    </p><br>
                    <p class="text">
                        Аварийная служба Мелитопольгаза: <span class="phone-number">+7 990 027 73 62</span>
                    </p><br>
                    <p class="text">
                        Приёмный покой СМСЧ Энергодара: <span class="phone-number">+7 990 044 59 24</span>
                    </p><br>
                    <p class="text">
                        МЧС Бердянск: <span class="phone-number">+7 990 009 12 01, +7 990 028 76 91</span>
                    </p><br>
                    <p class="text">
                        МЧС в пгт. Кирилловка: <span class="phone-number">+79900414706</span>
                    </p>
                </div>
                <div>
                    <img src="../assets/images/table-1.png" alt="table-1">
                </div><br><br><br>
            </div>
        </main>
        <?php include('../page_footer.php'); ?>
    </div>

    <script src="../assets/scripts/jquery-3.6.4.js"></script>
    <script src="../assets/scripts/main.js"></script>
    <script src="../assets/scripts/nav_bar.js"></script>
</body>

</html>