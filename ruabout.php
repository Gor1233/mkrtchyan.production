<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="ru-Ru">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>О НАС - Mkrtchyan Production</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/progresbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="progressbar"></div>
    <div id="scollPath"></div>

    <div class="banner">
        <div class="navbar">
            <a href="ruindex.php"> <img src="css/images/mkrtchyan-production-logo.png" class="logo"></a>
            <ul>
                <li class="active"><a href="ruindex.php"><i class="fa fa-home"></i>ГЛАВНАЯ СТРАНИЦА</a></li>
                <!-- <li class="dropdownmobile"><a href="#"> <img src="images/menue.png"> </a>  </li> -->
                <!-- <li><a href="aboutusindex.php"><i class="fa fa-users"></i>About Us</a></li> -->
                <li><a href="ruservices.php"><i class="fa fa-align-center"></i>Сервисы</a></li>
                <li><a href="rucontactus.php"><i class="fa fa-phone"></i>Связаться с нами</a></li>
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>Язык</a>
                    <div class="dropdown-content">
                        <a href="about.php"> <img src="css/images/free-icon-united-states-197484.png" class="logoflag">English </a>
                        <a href="hyabout.php"> <img src="css/images/armenia.png" class="logoflag">Հայերեն</a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="content">

            <h1>О НАС</h1>
            <p>Mkrtchyan Production была основана в 2021 году Гор Мкртчяном.<br>
                Mkrtchyan Production делает видео с тем же дизайном, что и заказчик.<br>
                Видео будет снято с использованием Adobe Premiere Pro Sony Vegas Pro After Effect.</p>
            <video class="video" width="400" controls autoplay>
                <source src="css/videos/logo shine.mp4" type="video/mp4">
            </video>

        </div>

    </div>

</body>

</html>