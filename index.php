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
                    <!-- <a href="crimea/crimea.php" class="card">
                        <div class="card-img">
                            <img src="assets/images/emblem_crimea.png" alt="Республика Крым" />
                        </div>
                        <span class="card-text">Республика<br>Крым</span>
                    </a> -->
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
                    <span class="text">ГРАЖДАНСКАЯ ИНИЦИАТИВА, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                </div>
            </div>
            <div class="container-white">
                <div class="heading min-width">
                    <span class="heding-text-1">О Таврическом Крае</span>
                </div>
                <div class="text-block min-width">
                    <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                </div>
            </div>
        </main>
        <?php include('index_footer.php'); ?>
    </div>

    <script src="assets/scripts/jquery-3.6.4.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>