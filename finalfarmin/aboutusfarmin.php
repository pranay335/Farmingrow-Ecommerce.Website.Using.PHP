<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmingrow</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="fhome.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.js">
    <link rel="stylesheet" href="absfar.css">
    <link rel="stylesheet" href="mainscript.js">
    <link rel="stylesheet" href="contact.css">
    
    <link rel="stylesheet" href="loader.css">
</head>

<body>
    <div class="preloader">
        <div class="spinner"></div>
    </div>
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
          <span class="quantity"><?php
          require 'connection.php';
          $user=$_COOKIE["username"];
            $sql = "SELECT * FROM cart WHERE user='$user'";
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
        <h3 ><?php echo $_COOKIE["username"]; ?> </h3>
    </div>

    <form action="" class="search">
        <input type="search" id="searchbox" placeholder="search here..">
        <label for="searchbox" class="fas fa-search"></label>
    </form>
    <div class="card">
        <h1>Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
</header>
<section class="new">
<h1 class="newh1">
About Farmingrow..
</h1>
<div class="space">
<h1 class="heading" > Why <span>Us?</span></h1></div>
<div class="info">
    <div class="about-col">
        <div class="container1">
        <p>FarminGrow is an e-commerce company based in Mumbai, India, specializing in the online sale of groceries. Founded with a vision to revolutionize the way people shop for essential food items, FarminGrow offers a convenient platform for customers to purchase a wide range of fresh produce, pantry staples, and household essentials from the comfort of their homes.</p>
        <br>
        <h2>Our main Goal</h2>
        <p>Our Main Goal is to provide quality product t our customers and satisfy theri needs... <br> as we import all our product from direct farmer or well knowned farmhouses.</p>
    
        <p>The project is driven by the need to modernize and streamline the agricultural sector, ensuring that farmers have access to a broader market and consumers can make informed, sustainable choices.  <br>
        </p>
    </div>
    </div>
    <div class="about-col">
        <img src="farm.png" >
    </div>
    
</div>

<section class="ni">
    <div class="info">
        <div class="simg">
            <img src="https://media.istockphoto.com/id/641941258/photo/rural-women-carrying-animal-silage.jpg?s=612x612&w=0&k=20&c=0vrFBwaf0cFO1YnDtBXVl0DJ0GJ_KHIvHwpCH_QVBV0=" >
        </div>
        <div class="about-col">
        
            <div class="container2">
            <br>
            <h2>Our main Goal</h2>
            <p>Our Main Goal is to provide quality product t our customers and satisfy theri needs... <br> as we import all our product from direct farmer or well knowned farmhouses.</p>
        
            <p>The project is driven by the need to modernize and streamline the agricultural sector, ensuring that farmers have access to a broader market and consumers can make informed, sustainable choices.  <br>
            </p>
        </div>
        </div>
        
    </div>
</section>



<h1 class="heading" > Vision <span>& Mission</span></h1></div>
<section class="vision-mission">
    <div class="mission-content">
        <div class="back11">
            <h1>VISION</h1>
            <h3>To be the forefront provider of premium quality agricultural products, connecting discerning consumers with local farmers through sustainable and ethical practices. We envision a future where every household enjoys fresh, wholesome, and responsibly sourced produce, fostering a thriving and interconnected community of farmers and consumers.Hi this is farmingrow website this for checking purpose.</h3>
        </div>
        <div class="back22">
            <h1>MISSION</h1>
            <h3>Quality Excellence: Curating a selection of products that consistently meets and exceeds the expectations of our customers.
                Supporting Local Farmers: Cultivating strong partnerships with local farmers, ensuring fair compensation, and promoting sustainable agricultural practices.
                Freshness Assurance: Guaranteeing the freshness and peak quality of every product, from farm to table.</h3>
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
                <a href="#" class="links"><i class="fas fa-envelope"></i> farmingrow@gmail.com</a>
                <a href="#" class="links"><i class="fas fa-map-marker-alt"></i> Thane, India-400606</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="fhome.php" class="links"><i class="fas fa-home"></i> Home</a>
                <a href="aboutusfarmin.php" class="links"><i class="fas fa-award"></i>About us</a>
                <a href="product.php" class="links"><i class="fas fa-cart-shopping"></i> Products</a>
                <a href="R.php" class="links"><i class="fas fa-comment"></i> Review</a>
                <a href="contact.php" class="links"><i class="fas fa-phone"></i>Contact</a>
            </div>
    
        </div>
    </section>

<style>
    .footer{
        margin-top: 10px;
        margin-left: -12%;
        width: 122%;
        background-color: black;
    }
    .footer .box-box-container .box p{
        color: white;
    }
</style>

      
      <script src="loader.js"></script>


</body>
</html>



    
