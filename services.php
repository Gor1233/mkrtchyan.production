<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Services - Mkrtchyan Production</title>
    <link rel="stylesheet" href="css/services.css">
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
                <li><a href="about.php"><i class="fa fa-users"></i>About Us</a></li>
                <!-- <li><a href="worksindex.php"><i class="fa fa-align-center"></i>Services</a></li> -->
                <li><a href="contactus.php"><i class="fa fa-phone"></i>Contant</a></li>
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>Language</a>
                    <div class="dropdown-content">
                        <a href="ruservices.php"> <img src="css/images/free-icon-russia-197408.png" class="logoflag">Русский </a>
                        <a href="hyservices.php"> <img src="css/images/armenia.png" class="logoflag">Հայերեն</a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="content">

        <h1>SERVICES</h1>
            
            <p class="big">
                Consultation - 0$</br>
                Making Music Videos - 40$</br>
                Preparation Of Intros - 50$</br>
                Making Other Types Of Videos - 20$-100$</br>
            </p>
          
            <div>
            <a href="contactus.php">
                <button type="button" class="active" ><span></span><i class="fa fa-phone"></i> Contact</button>
                </a>
            </div>

        </div>

    </div>

</body>

</html>