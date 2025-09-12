<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Invoice</title>
    <link rel="stylesheet" href="bill.css"> <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="fhome.css">
    <!-- Include necessary CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Header section -->
   
    <?php
    require "connection.php";
    $user=$_COOKIE["username"];
    if(isset($_POST["back"]))
    {
        $sql="DELETE FROM cart WHERE user='$user'";
        mysqli_query($conn,$sql);
        echo "<script>window.location.href = 'fhome.php';</script>";
    }
    ?>

   

    <!-- Bill invoice section -->
    <div class="bill">
        <!-- Thank you message -->
        <div class="thank-you">
            <h2>Thank you for purchasing from us!</h2>
        </div>

        <!-- Order information -->
        <div class="order-info">
            <h3>Order Information</h3>
            <p><strong>Item:</strong><?php
             $select_cart = mysqli_query($conn, "SELECT * FROM `orders` WHERE user='$user'");
             $select_c = mysqli_query($conn, "SELECT * FROM `orders` WHERE user='$user'");
             $select = mysqli_query($conn, "SELECT * FROM `cart` WHERE user='$user'");
             $sub_total=0;
             $d= mysqli_fetch_assoc($select);
             $f= mysqli_fetch_assoc($select_cart);
              if(mysqli_num_rows($select_cart) >=0){
                    while($fetch_cart = mysqli_fetch_assoc($select_c))
                    {
                        echo $fetch_cart["product"].",";
                      
                    }
                }?> </p>
            <p><strong>Total Amount  :</strong><?php 
             $select_c = mysqli_query($conn, "SELECT * FROM `orders` WHERE user='$user'");
             if(mysqli_num_rows($select_c) >=0){
                while($fetch_c = mysqli_fetch_assoc($select_c))
                {
                    echo $fetch_c["price"];
                }
            }?> </p>
        </div>

        <!-- Customer details -->
        <div class="customer-details">
            <h3>Customer Details</h3>
            <p><strong>Name:</strong> <?php  echo $f["name"]; ?></p>
            <p><strong>Shipping Address:</strong><?php  echo $f["address"]; ?> </p>
            <p><strong>Phone:91+</strong><?php  echo $f["phone"]; ?></p>
        </div>
        <div class="newimg">
            <img src="bill.png" height="230px" width="180px">
        </div>
        <div class="jk">
            <button onclick="window.print()" class="di" class="q">Download Invoice</button>
           <a> <form method="post" class="p"> <button  class="di" name="back" value="Back To Home Page">Back To Home Page</button></form></a>
        </div>
    </div>
    

    <!-- Your JavaScript code here -->

</body>

</html>
