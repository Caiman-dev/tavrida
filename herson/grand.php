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
                    <span class="heding-text-1">Социальная поддержка пенсионерам и ветеранам</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">Ежемесячные выплаты пенсионерам</p></br>
                    <p class="text">
                        1. Ежемесячная выплата пенсионерам предоставляется гражданам являющимся в соответствии с законодательством Украины получателями трудовой пенсии по возрасту, трудовой пенсии по инвалидности, трудовой пенсии по потери кормильца, пенсии за выслугу лет, социальной пенсии по старости, а также достигшим возраста 60 лет (для мужчин и женщин), или являющимся получателями государственной социальной помощи в связи с потерей кормильца.</br></br>

                        2. Ежемесячная выплата пенсионерам устанавливается в размере 10 000 рублей.</br></br>

                        3. Право на ежемесячную выплату пенсионерам предоставляется на основании документа, подтверждающего статус пенсионера или получателя государственной социальной помощи, выданного уполномоченным органом Украины (справка, выданная органом Пенсионного фонда Украины или органом социальной защиты населения Украины, пенсионное удостоверение, свидетельство о рождении нетрудоспособного члена семьи, свидетельство о смерти кормильца и другие документы, выданные в соответствии с законодательством Украины).</br></br>

                        4. Гражданам, являющимся инвалидами, одновременно имеющим право на установление ежемесячной выплаты инвалидам и ежемесячной выплаты пенсионерам, устанавливается одна из указанных выплат по выбору гражданина.</br></br>

                        Оформить выплату можно по адресам:</br>
                    <ul>
                        <li>г. Херсон, ул. 28 Армии, 6;</li>

                        <li>г. Каховка, ул. Соборности, 36;</li>

                        <li>г. Новая Каховка, ул. К.Маркса, 14;</li>

                        <li>Алешки, ул. Пролетарская, 52;</li>

                        <li>г. Геническ, пр. Мира, 43;</li>

                        <li>г. Голая Пристань, ул. Горького, 20;</li>

                        <li>пгт Белозёрка, ул. Свободы, 85.</li>
                    </ul></br>
                    <p class="text">
                        Тел. «горячей линии» Пенсионного фонда – <span class="phone-number">+7 (990) 034-07-64</span></br>
                        Режим работы Пенсионного фонда: с 8.00 до 17.00 (понедельник — пятница).</br>

                        Выплаты и доставка пособий будет осуществляться через органы соцзащиты, «Почтой Херсона».
                    </p>
                    </p></br>
                    <p class="text-2">Ежемесячная выплата ветеранам Великой Отечественной войны:</p></br>
                    <p class="text">
                        1. Ежемесячная выплата ветеранам Великой Отечественной войны предоставляется гражданам признанным в соответствии с действующим законодательством, законодательством Украины, а также законодательством СССР, участниками боевых действий, инвалидами войны, участниками войны, принимавшими участие в Великой Отечественной войне 1941-1945 годов.</br></br>

                        2. Ежемесячная выплата ветеранам Великой Отечественной войны устанавливается в размере 5000 руб.</br></br>

                        3. Право на ежемесячную выплату ветеранам Великой Отечественной войны предоставляется на основании удостоверения или иного документа, подтверждающего статус лиц, указанных в пункте 34 настоящих Правил, установленного в соответствии с действующим законодательством, законодательством Украины и выданного уполномоченным органом Украины, а также установленного законодательством СССР.</br></br>

                        Оформить выплату можно по адресам:</br>
                    <ul>
                        <li>Управление труда и социальной политики в г.Херсоне. Адрес: г.Херсон, ул.Репина 1</li>

                        <li>Управление труда и социальной политики в Херсонском районе Херсонской области. Адрес: пгт. Белозерка, ул.Свободы 89. Контактные данные: <span class="phone-number">+79900340822</span></li>

                        <li>Управление труда и социальной политики в г. Голая Пристань Херсонской области. Адрес: г. Голая Пристань, ул. Покрышева 41. Контактные данные: <span class="phone-number">+79900189397, upravsocgopr@mail.ru</span></li>

                        <li>Управление труда и социальной политики в Геническом районе Херсонской области. Адрес: г. Геническ, пр-т Мира 43. Контактные данные: <span class="phone-number">udspgenichesk@yandex.ru</span></li>

                        <li>Управление труда и социальной политики в г. Новая Каховка Херсонской области. Адрес: г. Новая Каховка, ул. Историческая (Ленина) 18. Контактные данные: <span class="phone-number">+79900997513, socpolitikank@mail.ru</span></li>

                        <li>Управление труда и социальной политики в г. Олешки Херсонской области. Адрес: г. Олешки, ул.Гвардейская 6</li>

                        <li>Управление труда и социальной политики в Скадовском районе Херсонской области. Адрес: г. Скадовск, ул.Александровская 32</li>
                    </ul></br>
                    <p class="text">Выплаты и доставка пособий будет осуществляться через органы соцзащиты, «Почтой Херсона».</p>
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