<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
    <title>Информационный портал</title>
</head>

<body>
    <div class="wrapper">
        <?php include('index_header.php'); ?>
        <main>
            <div class="container-white">
                <div class="home-heading min-width">
                    <span class="heding-text-1">ПЕРВЫЙ ИНФОРМАЦИОННЫЙ ПОРТАЛ</span>
                    <span class="heding-text-2">ТАВРИЧЕСКИЙ КРАЙ</span>
                </div>
            </div>
            <div class="container-white">
                <div class="cards min-width">
                    <a href="herson/herson.php" class="card">
                        <div class="card-img">
                            <img src="assets/images/emblem_herson.png" alt="Херсонская область" />
                        </div>
                        <span class="card-text">Херсонская<br>область</span>
                    </a>
                    <div disabled="true">
                        <a href="crimea/crimea.php" class="card disabled">
                            <div class="card-img">
                                <img src="assets/images/emblem_crimea.png" alt="Республика Крым" />
                            </div>
                            <span class="card-text">Республика<br>Крым</span>
                            <span>*в разработке</span>
                        </a>
                    </div>
                    <a href="zaporozhye/zaporozhye.php" class="card">
                        <div class="card-img">
                            <img src="assets/images/emblem_zaporozhie.png" alt="Запорожская область" />
                        </div>
                        <span class="card-text">Запорожская<br>область</span>
                    </a>
                </div>
            </div>
            <div class="container-grey" id="goals">
                <div class="heading min-width">
                    <span class="heding-text-1">О нас и целях проекта</span>
                </div>
                <div class="text-block min-width">
                    <p class="text">
                        Добро пожаловать на сайт «Таврический Край»!</br>
                        Эта платформа создана для отражения справочной информации в новых регионах Российской Федерации.</br></br>

                        У нас удобный и простой интерфейс для поиска информации. Справочники разделены по регионам: Запорожская и Херсонская области, а в будущем и АР Крым.</br></br>

                        Мы приглашаем всех не только использовать этот сайт, но и принять участие в нашей гражданской инициативе. Через телеграм-бот @TavrisBot Вы можете сообщать актуальную информацию для обновления этого сайта, свои пожелания и замечания.</br></br>

                        Мы собираем информацию:
                    <ul>
                        <li>об экономике;</li>
                        <li>образовании;</li>
                        <li>культуре;</li>
                        <li>здравоохранении;</li>
                        <li>транспорте</li>
                    </ul>
                    </p>
                    <p class="text">
                        и многом другом, что может помочь людям сориентироваться в новых условиях.</br></br>


                        «Таврический Край» – это не просто справочник, это целый проект, созданный для поддержки жителей новых регионов России. Мы сотрудничаем с экспертами и специалистами в различных областях, чтобы отражать максимально точную и актуальную информацию для наших пользователей.</br></br>

                        Все сведения на сайте «Таврический край» собраны из открытых официальных источников, поэтому мы не можем отвечать за работу того или иного ведомства, если их данные содержат неточности. Но мы гарантируем, что будем делать всё возможное, чтобы читатели «Таврического края» могли доверять информации на этом сайте.</br>
                    </p>
                </div>
            </div>
        </main>
        <?php include('index_footer.php'); ?>
    </div>

    <script src="assets/scripts/jquery-3.6.4.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>