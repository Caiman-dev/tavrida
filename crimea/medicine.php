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
                        <span class="heding-text-2">Республика Крым</span>
                    </div>
                    <div>
                        <img src="../assets/images/emblem_crimea.png" alt="crimea" class="img-minimal" />
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
                    <span class="heding-text-1">Медицина</span>
                </div>
                <div class="text-block min-width">
                    <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                </div>
            </div>
        </main>
        <?php include('../page_footer.php'); ?>
    </div>

    <script src="../assets/scripts/jquery-3.6.4.js"></script>
    <script src="../assets/scripts/main.js"></script>
</body>

</html>