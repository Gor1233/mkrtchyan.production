<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="hy-AM">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="utf-8">
    <title>ԿԱՊ ՄԵԶ ՀԵՏ - Mkrtchyan Production</title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/progresbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="progressbar"></div>
    <div id="scollPath"></div>

    <div class="banner">
        <div class="navbar">
            <a href="hyindex.php"> <img src="css/images/mkrtchyan-production-logo.png" class="logo"></a>
            <ul>
                <li class="active"><a href="hyindex.php"><i class="fa fa-home"></i>ԳԼԽԱՎՈՐ ԷՋ</a></li>
                <!-- <li class="dropdownmobile"><a href="#"> <img src="images/menue.png"> </a>  </li> -->
                <li><a href="hyabout.php"><i class="fa fa-users"></i>ՄԵՐ ՄԱՍԻՆ</a></li>
                <li><a href="hyservices.php"><i class="fa fa-align-center"></i>ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</a></li>
                <!-- <li><a href="contact.php"><i class="fa fa-phone"></i>Contant</a></li> -->
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>ԼԵԶՈՒՆԵՐ</a>
                    <div class="dropdown-content">
                        <a href="rucontactus.php"> <img src="css/images/free-icon-russia-197408.png" class="logoflag">Русский </a>
                        <a href="contactus.php"> <img src="css/images/free-icon-united-states-197484.png" class="logoflag">English</a>
                    </div>
                </li>
            </ul>
        </div>


        <section> 
<!--alert messages start-->
<?php echo $alert; ?>
<!--alert messages end-->

<!--contact section start-->
<div class="contact-section">
  <div class="contact-info">
    <div><i class="fa fa-envelope"></i>mkrtchyanproductions@gmail.com</div>
    <div><i class="fa fa-clock-o"></i>Երկ - Շաբ 12:00 AM to 9:00 PM</div>
    <div><i class="fa fa-clock-o"></i>Կիրակի 9:00 AM to 10:00 PM</div>
  </div>
  <div class="contact-form">
    <h2>ԿԱՊ ՄԵԶ ՀԵՏ</h2>
    <form class="contact" action="" method="post">
      <input type="text" name="name" class="text-box" placeholder="Ձեր Անունը" required>
      <input type="email" name="email" class="text-box" placeholder="Ձեր էլեկտրոնային Հասցեն" required>
      <textarea name="message" rows="5" placeholder="Ձեր Նամակը" required></textarea>
      <input type="submit" name="submit" class="send-btn" value="Ուղարկել">
    </form>
  </div>
</div>
<!--contact section end-->

<script type="text/javascript">
if(window.history.replaceState){
  window.history.replaceState(null, null, window.location.href);
}


</script>

</body>

</html>