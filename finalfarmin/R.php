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
    <link rel="stylesheet" href="loader.css">
    <script src="loader.js"></script>
    <link rel="stylesheet" href="mainscript.js">
    <link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="RS.css">
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
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
</header>
<body>

	<div class="j">
    <h1 class="heading">Leave <span>Comment</span></h1>
</div>

	<form id="comment-form" method="post">
		<label for="name"><h3>Name:</h3></label>
		<input type="text" id="name" name="name" required>
		<label for="email"><h3>Email:</h3></label>
		<input type="email" id="email" name="email" required>
		<label for="comment"><h3>Comment:</h3></label>
		<textarea id="comment" name="comment" required></textarea>
		<button type="submit" name="submit"  onclick="return confirm('Review has been submitted')">Submit</button>
	</form>
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
        $subject=$_POST["comment"];
        $sql="INSERT INTO `review` (`name`, `email`, `comment`, `id`) VALUES ('$name', '$email', '$subject', NULL)";
        $result = mysqli_query($conn, $sql);

    }
}
    ?>

<div class="q">
	<h1 class="heading">Customer <span>Reviews</span></h1>
</div>
	<div id="comments">
		<div class="comment">
			<h2>Great Product!</h2>
			<p>I absolutely love this product! It is exactly what I was looking for and the <br> quality is excellent. <br> I would highly recommend it to anyone.</p>
			<p>- John Doe</p>
            <div class="stars">★★★★★</div>
		</div>
		<div class="comment">
			<h2>So Happy!</h2>
			<p>I am so happy with my purchase! The product arrived quickly and in perfect condition. I will definitely be buying from this company again.</p>
			<p>- Jane Smith</p>
            <div class="stars">★★★★☆</div>
		</div>
		<div class="comment">
			<h2>Would Not Recommend</h2>
			<p>I was very disappointed with this product. It did not meet my expectations and I would not recommend it to others.</p>
			<p>- Bob Johnson</p>
            <div class="stars">★☆☆☆☆</div>
		</div>
       
        
       
	</div>

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
            <a href="#" class="links"><i class="fas fa-envelope"></i> abc@gmail.com</a>
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

    </div>
</section>


	<script src="script.js"></script>
    <script>// Get the comments container
        const commentsContainer = document.getElementById('comments');
        
        // Add event listener for mouse wheel to scroll horizontally
        commentsContainer.addEventListener('wheel', (event) => {
            event.preventDefault();
            commentsContainer.scrollLeft += event.deltaY;
        });
        </script>
        
</body>
</html>