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
                    <span class="heding-text-1">Транспорт</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">Номер горячей линии:</p>
                    <p class="text">
                        Эвакуация</br>
                        <span class="phone-number">+7(990)104-32-51</span></br></br>

                        Министерство транспорта</br>
                        <span class="phone-number">+7(990)200-38-01</span></br></br>

                        "Херсонская железная дорога":</br>
                        <span class="phone-number">+79900014248</span></br></br>

                        Телефон для справок а/с Геническая</br>
                        <span class="phone-number">+7 990 228 11 56</span></br></br>

                        Телефон для справок а/с Ивановская</br>
                        <span class="phone-number">+7 990 228 12 64</span></br></br>

                        Телефон для справок а/с Скадовская</br>
                        <span class="phone-number">+7 990 228 12 65</span></br>
                    </p></br>

                    <p class="text-2">Адреса отделений МРЭО ГИБДД:</p></br>
                    <p class="text">
                        г. Геническ, ул. Возрождения, 170</br>
                        телефон для справок <span class="phone-number">+79900221275</span></br></br>

                        пгт. Чаплинка, ул. Парковая, 30а</br>
                        телефон для справок <span class="phone-number">+79900692561</span></br></br>

                        Для замены водительского удостоверения необходимо предоставить паспорт гражданина Российской Федерации и водительское удостоверение. При отсутствии последнего – подтверждение обучения в автошколе.</br>
                        Для регистрации автотранспорта нужно предоставить его для осмотра с целью идентификации и проверки соответствия конструкции представленным документам, паспорт гражданина РФ и регистрационный документ владельца транспорта. В случае наличия нотариальной доверенности – паспорт доверенного лица.</br>
                        Медицинские справки о прохождении комиссии и оплата госпошлины НЕ ТРЕБУЮТСЯ.</br>
                        Режим работы отделений МРЭО ГИБДД: с 09:00 до 18:00, выходные дни: воскресенье, понедельник.</br>

                    </p>
                </div>
                <div><img src="../assets/images/table-2.png" alt="table-2"></div>
            </div>
        </main>
        <?php include('../page_footer.php'); ?>
    </div>

    <script src="../assets/scripts/jquery-3.6.4.js"></script>
    <script src="../assets/scripts/main.js"></script>
    <script src="../assets/scripts/nav_bar.js"></script>
</body>

</html>