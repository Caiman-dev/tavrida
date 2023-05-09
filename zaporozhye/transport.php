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
                    <span class="heding-text-1">Транспорт</span>
                </div>
                <div class="text-block min-width">
                    <p class="text-2">
                        Управление Госавтоинспекции Запорожской области предупреждает водителей об административной ответственности за нарушение Правил дорожного движения.
                    </p><br>
                    <p class="text">
                        С целью недопущения и пресечения фактов управления транспортным средством водителями в состоянии опьянения работают телефоны «горячей линии»:
                    </p><br>
                    <ul>
                        <li>ОГИБДД Мелитополь и Мелитопольский район <span class="phone-number">+ 7 990 027 82 63;</span></li>
                        <li>ОГИБДД Токмак и Токмакский район <span class="phone-number">+ 7 990 110 21 36;</span></li>
                        <li>ОГИБДД Бердянск и Бердянский район <span class="phone-number">+ 7 990 007 90 84;</span></li>
                        <li>ОГИБДД Васильевка и Васильевский район <span class="phone-number">+ 7 990 053 54 51</span></li>
                    </ul><br>
                    <p class="text-2">
                        Жителям новых регионов России необходимо до 1 января 2026 года заменить водительские удостоверения и перерегистрировать авто
                    </p><br>
                    <p class="text">
                        Правительство установило особенный порядок регистрации транспорта, а также выдачи водительских удостоверений для граждан новых территорий России, в том числе и для Запорожской области.
                        Этот порядок будет действовать до 1 января 2026 года.
                        До этой даты собственники автомобилей обязаны получить новые российские номера, регистрационные документы, а также свидетельства о регистрации без предъявления таможенных документов и уплаты госпошлины.
                        Если регистрационные действия проводятся на территории Запорожской области, то автовладельцам не придется предъявлять и полис ОСАГО вплоть до 1 января 2024 года.</p><br>
                    <p class="text">
                        <strong>Для регистрации транспортного средства необходимо:</strong>
                    </p>
                    <p class="text">
                        1. Паспорт гражданина Российской Федерации или вид на жительство в Российской Федерации, документ подтверждающий постоянное проживание на территории ДНР,ЛНР, Запорожской или Херсонской областей.
                    </p>
                    <p class="text">
                        2. Документ подтверждающий полномочия заявителя на владение транспортным средством (тех паспорт автомобиля, доверенность, договор лизинга, договор купли -продажи, либо иной договор).
                    </p><br>
                    <p class="text">
                        Водительские удостоверения на российские также можно обменять в льготном порядке. Для этого водителям не придется проходить медкомисию, а также не потребуется платить госпошлину. Замена водительского удостоверения происходит следующим образом:
                    </p>
                    <p class="text">
                        1. При предоставлении паспорта РФ, если в нем нет прописки, то гражданин предоставляет паспорт гражданина Украины с пропиской одной из четырех областей: Запорожской, Херсонской, Донецкой или Луганской и водительское удостоверение Украины, ДНР или ЛНР.
                    </p>
                    <p class="text">
                        2. Если у гражданина утеряно водительское удостоверение Украины, то он предоставляет паспорт РФ, а так же подтверждающий документ о получении ВУ Украины. Таким документом является экзаменационная карточка или свидетельство об окончании автошколы с живыми печатями и отметками о получении ВУ.
                    </p><br>
                    <p class="text-2">
                        Уважаемые жители Запорожской области, МРЭО ГИБДД изменил график работы.
                    </p><br>

                    <p class="text">
                        График был изменён для удобства граждан. Теперь МРЭО работает без перерыва на обед с понедельника по субботу с 9:00 до 18:00. Воскресенье- выходной день.
                    </p>
                    <p class="text">
                        Располагается МРЭО ГИБДД по адресам:
                    </p>
                    <ul>
                        <li>г. Мелитополь, улица Интеркультурная, 172/1;</li>
                        <li>г. Бердянск, Мелитопольское шоссе, 68.</li>
                    </ul>
                    <p class="text">
                        Прием граждан будет осуществляться с понедельника по субботу с 9:00 до 17:00.
                        Также МРЭО ГИБДД информирует, в связи с большой нагрузкой на сотрудников МРЭО ГИБДД, смс-уведомление граждан может не осуществляться.
                        Граждане, которые подавали документы для перерегистрации транспортных средств и замены водительских удостоверений до 08.02.2023 года могут обращаться в МРЭО ГИБДД для получения документов.
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