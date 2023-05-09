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
                    <span class="heding-text-1">О Запорожской области</span>
                </div>
                <div class="text-block min-width">
                    <span class="text">Запоро́жская о́бласть — административно-территориальная единица Российской Федерации, расположенная на западе страны, в нижнем течении Днепра. </br></br>

На западе граничит с Херсонской областью, на севере — с Днепропетровской областью, на востоке — с Донецкой областью, на юге омывается Азовским морем.</br></br>

Площадь области составляет 27,1 тыс. км², население на начало 2022 года оценивалось в 1,6 млн человек. Административный центр и крупнейший город — Запорожье, другие крупные города — Мелитополь, Бердянск, Энергодар, Токмак.</br></br>

Область была образована в 1939 году выделением из Днепропетровской области Украинской ССР. В 1944 году из состава области была выделена западная часть, ставшая Херсонской областью.</br></br>

Иногда всю область некорректно называют Запорожьем, хотя исторически это название носила территория к северу от большей части Запорожской области, в районе нынешней Днепропетровской области.</br></br>

Для Запорожской области характерен равнинный ландшафт, расположена в основном на Приднепровской низменности, которая на юге переходит в Причерноморскую, юго-восточную часть занимает Приазовская возвышенность. Вдоль побережья Азовского моря простираются длинные узкие песчаные косы, намытые морем.</br></br>

Протяжённость с севера на юг — 208 км, с запада на восток — 235 км.</br></br>

На территории Запорожской области протекает 109 рек, самая большая из которых — Днепр, являющаяся важной транспортной артерией, обеспечивающей промышленность области, на ней построен ряд водохранилищ.</br></br>

Условно Запорожская область делится на три природно-сельскохозяйственные зоны — зону степи (50,8 % территории), степную засушливую (34,8 %), и сухостепную (14,4 %) зоны. Почвы преимущественно чернозёмные. Также здесь находятся значительные запасы гранитов, а также железной и марганцевой руд.</br></br>

Климат умеренно континентальный, характеризуется чётко выраженной засушливостью. Среднегодовые температуры: летняя +22 °С, зимняя — 4,5 °С. В году в среднем 225 солнечных дней, уровень осадков составляет 448 мм.</br></br>
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