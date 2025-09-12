<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="contact.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="fhome.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="loader.css">
    <script src="loader.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.js">
    <link rel="stylesheet" href="mainscript.js">
</head>
<?php 
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(isset($_POST["submit"]))
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "farmingrow";
        
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        $sql="INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email','$subject', '$message')";
        $result = mysqli_query($conn, $sql);

    }
}
    ?>
<body>
<div class="preloader">
        <div class="spinner"></div>
    </div>
    
  <!--navbar-->
      <!--header section-->

      <header class="header">
    <a href="" class="logo"> <i class="fas fa-shopping-basket"></i>Farmingrow

    </a>
    <nav class="navbar">
    <a href="fhome.php" >Home</a>
        <a href="aboutusfarmin.php">About Us</a>
        <a href="product.php"> Products</a>
        <a href="R.php">Review</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="menubtn"></div>
        <div class="fas fa-search" id="searchbtn"></div>
        <div class="shopping">
          
          <a href="cart.php"><i class="fas fa-shopping-cart" id="cartbtn"></i></a>
          <span class="quantity"><?php require "connection.php";
  $sql = "SELECT * FROM cart";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
  echo $count;
  ?></span>
      </div>
      <!-- Add the phone call icon after the user icon -->
<a href="tel:yourphonenumber">
  <div class="fas fa-phone" id="phone"></div>
</a>


        <a href="farminlogin.php">
        <div class="fas fa-user" id="login"> </div> </a>
        <h2 ><?php echo $_COOKIE["username"]; ?> </h2>
    </div>

    <form action="" class="search">
        <input type="search" id="searchbox" placeholder="search here..">
        <label for="searchbox" class="fas fa-search"></label>
    </form>
    </header>


  <section class="contact" id="contact">
    <div class="container">
        <div class="heading text-center">
            <div class="ci">
                <img src="contact us.jpg" alt="">
            </div>  
            <div class="ov">
                <h2>Contact
                <span> Us </span></h2>
             <p>Get in touch with us! We value your feedback and inquiries. Whether you have a question, suggestion, <br>
              or just want to say hello, feel free to reach out. Our team is here to assist you. Connect with us through <br>
              phone, email, or drop by our office. We look forward to hearing from you!
              </div>

<section class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15070.479906989198!2d72.9441180028172!3d19.211793776337462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b973a439c34f%3A0xf632560311527312!2sYashodhan%20Nagar%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra%20400606!5e0!3m2!1sen!2sin!4v1695663421792!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
                
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="title">
                    <h3>Contact detail</h3>
                    <p>Follwing are the Phone Number,Email and Address,
                      <br>You can Contact Us via this Resources.
                    </p>
                </div>
                <div class="content">
                    <!-- Info-1 -->
                    <div class="info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4 class="d-inline-block">PHONE :
                            <br>
                           +12457836913 , +12457836913
</h4>
                    </div>
                    <!-- Info-2 -->
                    <div class="info">
                        <i class="far fa-envelope"></i>
                        <h4 class="d-inline-block">EMAIL :
                            <br>
                            example@info.com/h4>
                    </div>
                    <!-- Info-3 -->
                    <div class="info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4 class="d-inline-block">ADDRESS :<br>
                            6743 last street , Abcd, Xyz</h4>
                    </div>
                </div>
            </div>
  
            <div class="col-md-7">
  
                <form class="form1" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control1" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control2" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control3" name="subject" placeholder="Subject About?">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="Textarea" class="form-control4" rows="5" name="message" id="comment" placeholder="Message Type...."></textarea>
                    </div>
                    <button class="newbtn" name="submit" type="submit" onclick="return confirm('Responce has been submitted')">Send Now!</button>
                </form>
            </div>
        </div>
    </div>
  </section>
  <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3><i class="fas fa-shopping-basket"></i> Shopping Cart</h3>
            <p class="social_media"> Some description about shopping cart</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#home" class="links"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#" class="links"><i class="fas fa-phone"></i> +123-111-7880</a>
            <a href="#" class="links"><i class="fas fa-envelope"></i> sanakarejay@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-map-marker-alt"></i> Mumbai, India-400104</a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="fhome.html" class="links"><i class="fas fa-home"></i> Home</a>
            <a href="aboutusfarmin.html" class="links"><i class="fas fa-award"></i>About us</a>
            <a href="#product" class="links"><i class="fas fa-cart-shopping"></i> Products</a>
            <a href="R.html" class="links"><i class="fas fa-comment"></i> Review</a>
            <a href="contact.html" class="links"><i class="fas fa-phone"></i>Contact</a>
        </div>

    </section>
    <style>
        .footer{
            background-color: black;
        }
    </style>
<script src="loader.js"></script>
</body>
</html>