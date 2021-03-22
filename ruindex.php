 <?php include 'sendemail.php'; ?> 

<!DOCTYPE html>
<html lang= "ru-RU">
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />

<title>ГЛАВНАЯ СТРАНИЦА - Mkrtchyan Production</title>    
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/progresbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="progressbar"></div>
    <div id="scollPath"></div>
    
    <div class="banner">
        <div class="navbar">
            <a href="ruindex.php"> <img src="css/images/mkrtchyan-production-logo.png"  class="logo"></a> 
                <ul>
                    <!-- <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a></li> -->
                    <!-- <li class="dropdownmobile"><a href="#"> <img src="images/menue.png"> </a>  </li> -->
                    <li><a href="ruabout.php"><i class="fa fa-users"></i>О нас</a></li>
                    <li><a href="ruservices.php"><i class="fa fa-align-center"></i>Сервисы</a></li>
                    <li><a href="rucontactus.php"><i class="fa fa-phone"></i>Связаться с нами</a></li>
                    <li class="dropdown" ><a href="#"><i class="fa fa-language"></i>Язык</a>
                <div class="dropdown-content">
                    <a href="index.php"> <img src="css/images/free-icon-united-states-197484.png"  class="logoflag">English</a> 
                     <a href="hyindex.php"> <img src="css/images/armenia.png" class="logoflag" >Հայերեն</a>
                </div></li>
                 </ul>
        </div>

        <div class="content">
            <h1>СДЕЛАЙТЕ СВОЕ ВИДЕО <br>С НАМИ</h1>
            <p><i class="fa fa-angle-double-down"></i>  Мы в социальных сетях  <i class="fa fa-angle-double-down"></i>
            </p>
            <div>
                <a href="https://www.youtube.com/c/GorProductions" target="_blank">
                <button type="button" class="active" ><span></span><i class="fa fa-youtube-play"></i></button>
                </a>
                <a href="https://www.facebook.com/gorproductionsgm" target="_blank">
                <button type="button"><span></span><i class="fa fa-facebook"></i></button>
                </a>
                <a href="https://www.instagram.com/gorproductionsgp/" target="_blank">
                <button type="button"><span></span><i class="fa fa-instagram"></i></button>
                </a>
                
            </div>
        </div>
    
    </div>

    
</body>
</html>