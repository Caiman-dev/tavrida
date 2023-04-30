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
                    <span class="heding-text-1">Министерства</span>
                </div>
                <div class="text-block min-width">
                    <div class="text">
                        <p class="text-2">
                            Министерство промышленности и энергетики
                        </p>
                        minprom@zapgov.ru<br>
                        г.Мелитополь<br><br>
                        <p class="text-2">
                            Министерство здравоохранения
                        </p>
                        minzdrav@zapgov.ru<br>
                        г. Мелитополь, просп. Богдана Хмельницкого, д. 46<br><br>
                        <p class="text-2">
                            Министерство по молодежной политике
                        </p>
                        minmol@zapgov.ru<br>
                        г. Мелитополь,ул. Интеркультурная, д. 2<br><br>
                        <p class="text-2">
                            Запорожский областной суд
                        </p>
                        oblsud@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство труда и социальной политики
                        </p>
                        <span class="phone-number">+7 (949) 753-71-10</span><br>
                        mintrud@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство имущественных и земельных отношений
                        </p>
                        <span class="phone-number">+7 (990) 064-95-66</span><br>
                        mio@zapgov.ru<br>
                        г. Мелитополь, ул. Интеркультурная (Дзержинского), 58<br><br>
                        <p class="text-2">
                            Министерство транспорта
                        </p>
                        mintrans@zapgov.ru<br>
                        г. Мелитополь, пл. Победы, 4<br><br>
                        <p class="text-2">
                            Министерство природных ресурсов и экологии
                        </p>
                        mineco@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство АПК и продовольственной политики
                        </p>
                        minapk@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство образования и науки
                        </p>
                        <span class="phone-number">+7 (990) 095-17-27</span><br>
                        minobraz@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство экономического развития
                        </p>
                        <span class="phone-number">+7 (990) 058-38-74</span><br>
                        mineconom@zapgov.ru<br>
                        г. Мелитополь<br><br>
                        <p class="text-2">
                            Министерство по тарифам и ценовому регулированию
                        </p>
                        mintariff@zapgov.ru<br>
                        г. Мелитополь
                        </p>
                    </div>
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