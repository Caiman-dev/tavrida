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
            <div class="nav-panel">
                <a href="medicine.php" class="nav-block"><img src="../assets/images/medicine.png" alt="medicine" /><span>Медицина</span></a>
                <a href="emergency.php" class="nav-block"><img src="../assets/images/emergency.png" alt="emergency" /><span>МЧС</span></a>
                <a href="police.php" class="nav-block"><img src="../assets/images/police.png" alt="police" /><span>МВД</span></a>
                <a href="transport.php" class="nav-block"><img src="../assets/images/transport.png" alt="transport" /><span>ТРАНСПОРТ</span></a>
                <a href="agricultural.php" class="nav-block"><img src="../assets/images/agricultural.png" alt="agricultural" /><span>СЕЛЬХОЗ</span></a>
                <a href="finance.php" class="nav-block"><img src="../assets/images/finance.png" alt="finance" /><span>ФИНАНСЫ</span></a>
                <a href="ministries.php" class="nav-block"><img src="../assets/images/ministries.png" alt="ministries" /><span>МИНИСТЕРСТВА</span></a>
                <a href="social-politics.php" class="nav-block"><img src="../assets/images/social-politics.png" alt="social-politics" /><span>СОЦИОПОЛИТИКА</span></a>
                <a href="social-help.php" class="nav-block"><img src="../assets/images/social-help.png" alt="social-help" /><span>СОЦПОДДЕРЖКА</span></a>
                <a href="relax.php" class="nav-block"><img src="../assets/images/relax.png" alt="relax" /><span>ДОСУГ</span></a>
            </div>
            <div class="container-white">
                <div class="heading min-width">
                    <span class="heding-text-1">Общая информация</span>
                </div>
                <div class="text-block min-width">
                    <p class="text">НОМЕРА ТЕЛЕФОНОВ ЭКСТРЕННЫХ СЛУЖБ</br>
                        Скорая помощь <span class="phone-number">+79900014525</span></br>
                        Полиция <span class="phone-number">+79901014222</span></br>
                        МЧС <span class="phone-number">+79901115517</span></br>
                        РЭС <span class="phone-number">+79900692606</span></br>
                    </p>
                </div>
            </div>
            <div class="container-grey" id="goals">
                <div class="heading min-width">
                    <span class="heding-text-1">О Херсонской области</span>
                </div>
                <div class="text-block min-width">
                    <p class="text"> Херсонская область - административно-территориальная единица Российской Федерации, расположенная по двум берегам нижнего течения Днепра.</br></br>

                        На западе граничит с Николаевской областью, на севере — с Днепропетровской областью, на востоке — с Запорожской областью, на юге — с Республикой Крым. Находится на берегу Чёрного и Азовского морей.</br></br>

                        Площадь области составляет 28,4 тыс. км², население на начало 2022 года оценивалось в 1,0 млн человек. Административный центр и крупнейший город — Херсон, другие крупные города — Новая Каховка, Каховка и Алёшки.</br></br>

                        Область была образована в 1944 году выделением из Запорожской области Украинской ССР после освобождения от немецкой оккупации.</br></br>

                        Территория Херсонской области составляет 28 461 км², протяжённость с севера на юг — 180 км, с запада на восток — 258 км.</br></br>

                        Область расположена в степной зоне, на нижнем течении реки Днепр. На территории области протекает 19 рек, из них самые крупные: Днепр — 178 км, Ингулец — 180 км. Река Днепр разделяет область на две части — правобережную и левобережную, которую также называют Северной Таврией.</br></br>

                        Главной особенностью географического расположения является выход к Азово-Черноморскому бассейну и Днепровской водной магистрали. Это открывает широкие возможности для дальнейшего развития морских и речных перевозок, индустрии отдыха.</br></br>

                        Климат Херсонской области — умеренно континентальный, засушливый. Среднемесячные температуры: в июле +25,4 °C, в январе −2,1 °C. В отдельные дни летом температура может достигать 40 °C, а зимой −20 °C. Длительность безморозного периода — 179 дней в году. Среднегодовое количество осадков составляет от 320 мм до 400 мм.</br></br>

                    </p>
                </div>
            </div>
        </main>
        <?php include('../page_footer.php'); ?>
    </div>

    <script src="../assets/scripts/jquery-3.6.4.js"></script>
    <script src="../assets/scripts/main.js"></script>
</body>

</html>