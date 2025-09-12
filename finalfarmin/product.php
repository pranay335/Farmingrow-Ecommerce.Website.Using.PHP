<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="fhome.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="product.css">

    


</head>
<?php
require_once 'connection.php';
$user=$_COOKIE["username"];
$sql ="SELECT * FROM vegetables";
$fruit="SELECT * FROM fruits";
$dryfruit="SELECT * FROM dryfruits";
$pd="SELECT * FROM dals";
$all_product =$conn->query($sql);
$f=$conn->query($fruit);
$d=$conn->query($dryfruit);
$p=$conn->query($pd);

if($_SERVER["REQUEST_METHOD"]== "POST")
{

if(isset($_POST["add_to_cart"]))
{ 
  $p_name= $_POST['product_name'];
  $p_price = $_POST['product_price'];
  $p_image = $_POST['product_image'];
  $product_quantity = 1;
   $s="SELECT * FROM `cart` WHERE name = '$p_name'";
  $select_cart = mysqli_query($conn,$s);
  

  if(mysqli_num_rows($select_cart) > 0){
     $message[] = 'product already added to cart';
  }else{
     mysqli_query($conn,"INSERT INTO `cart`  VALUES (NULL,'$p_name', '$p_price', '$p_image', '$product_quantity','$user')");
     $message[] = 'product added to cart succesfully';
  }
}
}
?>

<body>
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
    </header>

    <marquee behavior="scroll" direction="left" scrollamount="15">
      <h2 class="m"> All Vegetables, Fruits , Pulses and Dal are in KG.  and Dry Fruits are availabe according to Packets. </h2>
    </marquee>
    <style>
      .m{
        font-size: 20px;
        margin-top: 6.5%;

      }
    </style>


<!--shooping-->
<div class="veg">
<div class="form-container">   
  
<h1 class="heading" > <span>VEGETABLES</span></h1>
        
  <div class="section">
 
        <?php
            while($row = mysqli_fetch_assoc($all_product)){
              $detail=$row["product_detail"]; 
              $product_image=$row["product_image"];
              $product_name=$row["product_name"];
              $product_price= $row["product_price"];
             
         ?>
     <div class="product">
      <form method="post">
            
             <img src="<?php echo $product_image ?>" alt="">
             <h3 class="product-title"><?php echo $product_name ?></h3>
             <div class="price " > ₹<?php echo $product_price ?></div>
             <?php
require 'connection.php';

$sql = "SELECT Stock FROM vegetables WHERE product_name = '$product_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stock = $row['Stock']; // Retrieve the actual stock value from the database

// Check if stock is greater than zero
if($stock > 0) {
    $message = "In Stock";
} else {
    $message = "Out of Stock";
    // JavaScript to disable the button if out of stock
   
}
?>

<span style="color: <?php echo ($stock > 0) ? 'green' : 'red'; ?>; font-size: 20px; font-weight: bold;">
    <?php echo $message; ?>
</span>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
                 <p class="detail"><?php echo  $detail ?></p>
             </div>
             <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image?>">
           
            <input type="submit" name="add_to_cart" id="add_to_cart" class="btn" value="Add to Cart"  onclick="<?php echo ($stock < 1) ? 'alert(\'Product out of stock\'); return false;' : ''; ?>">


             


            </form>
         </div>

      
       <?php

   }
   ?>
</div>  

</div>
</div>


<div class="form-container">

        <h1 class="heading" > <span>Fruits</span></h1>
  <div class="section">
    <?php
    while($row = mysqli_fetch_assoc($f)){
      $detail=$row["product_detail"]; 
      $product_image=$row["product_image"];
      $product_name1=$row["product_name"];
      $product_price= $row["product_price"];
 ?>
<div class="product">
<form method="post">
    
     <img src="<?php echo $product_image ?>" alt="">
     <h3 class="product-title"><?php echo $product_name1 ?></h3>
     <div class="price " >₹<?php echo $product_price ?></div>
     <?php
require 'connection.php';

$sql = "SELECT Stock FROM fruits WHERE product_name = '$product_name1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stock = $row['Stock']; // Retrieve the actual stock value from the database

// Check if stock is greater than zero
if($stock > 0) {
    $message = "In Stock";
} else {
    $message = "Out of Stock";
    // JavaScript to disable the button if out of stock
   
}
?>

<span style="color: <?php echo ($stock > 0) ? 'green' : 'red'; ?>; font-size: 20px; font-weight: bold;">
    <?php echo $message; ?>
</span>
     <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <p class="detail"><?php echo  $detail ?></p>
     </div>
     <input type="hidden" name="product_name" value="<?php echo $product_name1 ?>">
    <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
    <input type="hidden" name="product_image" value="<?php echo $product_image?>">
    <input type="submit" name="add_to_cart" id="add_to_cart" class="btn" value="Add to Cart"  onclick="<?php echo ($stock < 1) ? 'alert(\'Product out of stock\'); return false;' : ''; ?>">
             
    </form>
  </div>


<?php

}
?>
</div>  

<div class="form-container">

        <h1 class="heading" > <span> Dry Fruits</span></h1>
  <div class="section">
    <?php
    while($row = mysqli_fetch_assoc($d)){
      $detail=$row["product_detail"]; 
      $product_image=$row["product_image"];
      $product_name=$row["product_name"];
      $product_price= $row["product_price"];
 ?>
<div class="product">
<form method="post">
    
     <img src="<?php echo $product_image ?>" alt="">
     <h3 class="product-title"><?php echo $product_name ?></h3>
     <div class="price " >₹<?php echo $product_price ?></div>
     <?php
require 'connection.php';

$sql = "SELECT Stock FROM dryfruits WHERE product_name = '$product_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stock = $row['Stock']; // Retrieve the actual stock value from the database

// Check if stock is greater than zero
if($stock > 0) {
    $message = "In Stock";
} else {
    $message = "Out of Stock";
    // JavaScript to disable the button if out of stock
   
}
?>

<span style="color: <?php echo ($stock > 0) ? 'green' : 'red'; ?>; font-size: 20px; font-weight: bold;">
    <?php echo $message; ?>
</span>
     <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <p class="detail"><?php echo  $detail ?></p>
     </div>
     <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
    <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
    <input type="hidden" name="product_image" value="<?php echo $product_image?>">
    <input type="submit" name="add_to_cart" id="add_to_cart" class="btn" value="Add to Cart"  onclick="<?php echo ($stock < 1) ? 'alert(\'Product out of stock\'); return false;' : ''; ?>">
            
    </form>
  </div>


<?php

}
?>
</div> 


<div class="form-container">

        <h1 class="heading" > <span> PULSES AND DAL</span></h1>
  <div class="section">
    <?php
    while($row = mysqli_fetch_assoc($p)){
      $detail=$row["product_detail"]; 
      $product_image=$row["product_image"];
      $product_name=$row["product_name"];
      $product_price= $row["product_price"];
 ?>
<div class="product">
<form method="post">
    
     <img src="<?php echo $product_image ?>" alt="">
     <h3 class="product-title"><?php echo $product_name ?></h3>
     <div class="price " >₹<?php echo $product_price ?></div>
     <?php
require 'connection.php';

$sql = "SELECT Stock FROM dals WHERE product_name = '$product_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stock = $row['Stock']; // Retrieve the actual stock value from the database

// Check if stock is greater than zero
if($stock > 0) {
    $message = "In Stock";
} else {
    $message = "Out of Stock";
    // JavaScript to disable the button if out of stock
   
}
?>

<span style="color: <?php echo ($stock > 0) ? 'green' : 'red'; ?>; font-size: 20px; font-weight: bold;">
    <?php echo $message; ?>
</span>
     <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <p class="detail"><?php echo  $detail ?></p>
     </div>
     <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
    <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
    <input type="hidden" name="product_image" value="<?php echo $product_image?>">
    <input type="submit" name="add_to_cart" id="add_to_cart" class="btn" value="Add to Cart"  onclick="<?php echo ($stock < 1) ? 'alert(\'Product out of stock\'); return false;' : ''; ?>">
             
    </form>
  </div>


<?php
}
?>
</div>    
</div>    
    </script>
  </body>
</html>
