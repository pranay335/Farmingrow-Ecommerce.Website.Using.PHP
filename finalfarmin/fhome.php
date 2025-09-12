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
        <h2 ><?php echo $_COOKIE["username"]; ?> </h2>
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
            <div class="total"></div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
</header>

<marquee behavior="scroll" direction="left" scrollamount="15">
      <h2 class="m"> Our new products are arvived with revised offers, you can check in product section. and new stock will come soon , thank you </h2>
    </marquee>
    <style>
      .m{
        font-size: 18px;
        margin-top:0%;

      }
    </style>
    

<!--home section-->
<!--Slider-->

<script language="Javascript" type="text/javascript">
    Banners = new Array('VEG.jpg','FRUITS (2).jpg','dryyy.jpg','Dal.jpg');
    
    CurrentBanner = 0;
    NumOfBanners = Banners.length;

    

    function DisplayBanners() {
      if (document.images) {
        CurrentBanner++;
        if (CurrentBanner == NumOfBanners) {
          CurrentBanner = 0;
        }
        document.RotateBanner.src = Banners[CurrentBanner];
        setTimeout("DisplayBanners()", 2000);
      }
    }
  </script>

  <style>
    body {
      margin: 0;
      margin-top: 110px;
    margin-left: 10px;    
 }

    center {
      display: block; 
      text-align: center;
    }

    img {
        margin-top: 30px;
      width: 1300px; 
      height: 450px; 
    }
  </style>

</head>

<body onload="DisplayBanners();">
  <div>
    

  </div>
  <center>
    <a href="javascript: LinkBanner()">
      <img src="VEG.jpg" name="RotateBanner" />
    </a>
  </center>
</body>

</html>



<!--features-->
<section class="features" id="features">
    <h1 class="heading">our <span>Features</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="Online Groceries-cuate.png" alt="">
            <h3>Fresh and Organic</h3>
            <p>We delivered fresh and organic vegetables and grocerires to our customers</p>
            <a href="" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="Free shipping-cuate.png" alt="">
            <h3>Free Delivery </h3>
            <p>We deliver order within 24 hours</p>
            <a href="" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="Mobile payments-cuate.png" alt="">
            <h3>Easy Payment</h3>
            <p>Customer can pay with cash , card or UPI or any other application</p>
            <a href="" class="btn">read more</a>
        </div>


    </div>
</section>

<!--product section-->
<section class="product" id="product">
    <h1 class="heading" > our <span>Products</span></h1>

    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="watermelon.jpg" alt="">
                <h3>Watermelon</h3>
                <div class="price">Rupees 30/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 2 -->
            <div class="swiper-slide box">
                <img src="Apple.jpg" alt="">
                <h3>Fresh Apple</h3>
                <div class="price">Rupees 140/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 3-->
            <div class="swiper-slide box">
                <img src="almond.jpg" alt="">
                <h3> Almond</h3>
                <div class="price">rupees 770/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 4-->
            <div class="swiper-slide box">
                <img src="cashew.jpg" alt="">
                <h3>Cashew</h3>
                <div class="price">Rupees 800/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>
            <!--item5-->
            <div class="swiper-slide box">
                <img src="tomato.jpg" alt="">
                <h3>Tomato</h3>
                <div class="price">Rupees 30/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

        </div>
    </div>



    <!--new prodcut-->
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class=" swiper-slide box">
                <img src="cabage.jpg" alt="">
                <h3>Cabage</h3>
                <div class="price">Rupees 35/kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 2 -->
            <div class="swiper-slide box">
                <img src="Kesar.jpeg" alt="">
                <h3>Kesar</h3>
                <div class="price">Rupees 400/Gram</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 3-->
            <div class=" swiper-slide box">
                <img src="milk.jpg" alt="">
                <h3>Milk</h3>
                <div class="price">Rupees 58/Lit. </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>

            <!--item 4-->
            <div class=" swiper-slide box">
                <img src="paneer.jpg" alt="">
                <h3>Paneer</h3>
                <div class="price">Rupees 435/Kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>  

            
            <!--item 5-->


            <div class="swiper-slide box">
                <img src="Apple.jpg" alt="">
                <h3>Apple</h3>
                <div class="price">Rupees 100/Kg</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="product.php" class="btn">Shop Now</a>
            </div>
<!-- slider sthi ek extra ietm takava lagto tar slide hota -->
        </div>
    </div>
</section>


<!--cateogires-->
<section class="categories" id="categories">
<h1 class="heading"> Product <span>categories</span></h1>
<div class="box-conatiner">
    <div class=" swiper-slide box">
       <img src="vegetable categories 1.jpg" alt="">
        <h3>Vegetable</h3>
        <p>upto <span class="discount">20%</span> off</p>
        <a href="product.php" class="btn">Shop now</a>
    </div>

    <!--item2 -->
    <div class="swiper-slide box">
        <img src="fruits.jpg" alt="">
        <h3>Fruits</h3>
        <p>upto 10% off</p>
        <a href="product.php" class="btn">Shop now</a>
    </div>

    <!--item3-->
    <div class="swiper-slide box">
        <img src="dairy product.jpg" alt="">
        <h3>Dairy Product</h3>
        <p>upto 10% off</p>
        <a href="product.php" class="btn">Shop now</a>
    </div>

    <!--ietm 4-->
    <div class="swiper-slide box">
        <img src="pulses and Dal.jpg" alt="">
        <h3>Pulses and Dal</h3>
        <p>upto <span class="discount">40%</span>off</p>
        <a href="product.php" class="btn">Shop now</a>
    </div>
</div>
</section>



    <!--Footer-->
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
        margin-left: -20px;
        background-color: black;
    }
</style>








    <!-- script file-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
    <script src="mainscript.js"></script>
    <script src="loader.js"></script>

</body>
</html>