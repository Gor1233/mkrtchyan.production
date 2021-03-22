<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Contact Us - Mkrtchyan Production</title>
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
            <a href="index.php"> <img src="css/images/mkrtchyan-production-logo.png" class="logo"></a>
            <ul>
                <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <!-- <li class="dropdownmobile"><a href="#"> <img src="images/menue.png"> </a>  </li> -->
                <li><a href="about.php"><i class="fa fa-users"></i>About Us</a></li>
                <li><a href="services.php"><i class="fa fa-align-center"></i>Services</a></li>
                <!-- <li><a href="contact.php"><i class="fa fa-phone"></i>Contant</a></li> -->
                <li class="dropdown"><a href="#"><i class="fa fa-language"></i>Language</a>
                    <div class="dropdown-content">
                        <a href="rucontactus.php"> <img src="css/images/free-icon-russia-197408.png" class="logoflag">Русский </a>
                        <a href="hycontactus.php"> <img src="css/images/armenia.png" class="logoflag">Հայերեն</a>
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
    <div><i class="fa fa-clock-o"></i>Mon - Sat 12:00 AM to 9:00 PM</div>
    <div><i class="fa fa-clock-o"></i>Sunday 9:00 AM to 10:00 PM</div>
  </div>
  <div class="contact-form">
    <h2>Contact Us</h2>
    <form class="contact" action="" method="post">
      <input type="text" name="name" class="text-box" placeholder="Your Name" required>
      <input type="email" name="email" class="text-box" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <input type="submit" name="submit" class="send-btn" value="Send">
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