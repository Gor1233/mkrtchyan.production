<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>About Us - Mkrtchyan Production</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/progresbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="progressbar"></div>
    <div id="scollPath"></div>

    <div class="banner">
        <div class="navbar">
            <a href="index.php"> <img src="css/images/mkrtchyan-production-logo.png" class="logo"></a>
            <ul>
                <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <!-- <li class="dropdownmobile"><a href="#"> <img src="images/menue.png"> </a>  </li> -->
                <!-- <li><a href="aboutusindex.php"><i class="fa fa-users"></i>About Us</a></li> -->
                <li><a href="services.php"><i class="fa fa-align-center"></i>Services</a></li>
                <li><a href="contactus.php"><i class="fa fa-phone"></i>Contant</a></li>
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>Language</a>
                    <div class="dropdown-content">
                        <a href="ruabout.php"> <img src="css/images/free-icon-russia-197408.png" class="logoflag">Русский </a>
                        <a href="hyabout.php"> <img src="css/images/armenia.png" class="logoflag">Հայերեն</a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="content">

            <h1>ABOUT US</h1>
            <p>Mkrtchyan Production was founded in 2021 by Gor Mkrtchyan.<br>
                Mkrtchyan Production makes videos with the same design as the customer wants.<br>
                The video is made with Adobe Premiere Pro, Sony Vegas Pro, After Effect</p>
            <video class="video" width="400" controls autoplay>
                <source src="css/videos/logo shine.mp4" type="video/mp4">
            </video>

        </div>

    </div>

</body>

</html>