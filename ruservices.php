<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>СЕРВИСЫ - Mkrtchyan Production</title>
    <link rel="stylesheet" href="css/services.css">
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
                <li><a href="ruabout.php"><i class="fa fa-users"></i>О нас</a></li>
                <!-- <li><a href="worksindex.php"><i class="fa fa-align-center"></i>Services</a></li> -->
                <li><a href="rucontactus.php"><i class="fa fa-phone"></i>Связаться с нами</a></li>
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>Язык</a>
                    <div class="dropdown-content">
                        <a href="services.php"> <img src="css/images/free-icon-united-states-197484.png" class="logoflag">English</a>
                        <a href="hyservices.php"> <img src="css/images/armenia.png" class="logoflag">Հայերեն</a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="content">

        <h1>СЕРВИСЫ</h1>
            
            <p class="big">
            Консультация - 0$</br>
            Создание музыкальных клипов - 40$</br>
            Подготовка интро - 50$</br>
            Создание других типов видео - 20$-100$</br>
            </p>
          
            <div>
            <a href="rucontactus.php">
                <button type="button" class="active" ><span></span><i class="fa fa-phone"></i> Контакт</button>
                </a>
            </div>

        </div>

    </div>

</body>

</html>