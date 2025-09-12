<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmingRow Payment Page</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="marquee-container">
        <marquee behavior="scroll" direction="left" scrollamount="7">
            <h2 class="marquee">*Do not refresh the screen or don’t go back while making payment*</h2>
        </marquee>
    </div>
    
    <?php 
        require 'connection.php';
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         $sub_total=0;
        
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
              
         ?>
            <?php 
            }
        }
        ?>
    <div class="container">
        <div class="left-panel">
            <h2>Bill Information</h2>
            <form>
                <div class="input-group">
                    <label 
                    <label for="product-name"><h3>
                    <?php 
        require 'connection.php';
        $user=$_COOKIE["username"];
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user='$user'");
         $grand_total = 0;
         $sr=1;
         $prod=array();
         $sub_total=0;
        
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                echo $sr;
                $sr++;?>) <?php
                echo $pn=$fetch_cart['name']; 
                  ?>:<?php   echo $fetch_cart['quantity']; ?>==> ₹   <?php echo $sub_total = ((int)$fetch_cart['price'] * (int)$fetch_cart['quantity']);
                  $grand_total+=$sub_total; ?>
                <br>
              <?php
             array_push($prod,$pn);
            }
        }
              
         ?> </h3> </label>
                    
                </div>
                <div class="total">
                    <label for="quantity"><h3>Total Price:
                    <?php
                      echo $grand_total;
                    ?></h3>
                    </label>
                    
                </div>
              
            </form>
        </div>
     
        <div class="divider"></div>
        <div class="right-panel">
            <h2>Payment Details</h2>
               
<form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone No:</label>
        <input type="text" id="phone" name="phone" required></textarea>
        <label for="address">Shipping Address:</label>
        <textarea id="address" name="address" required></textarea>
        
        <label>
            <input type="checkbox"  value="cash_on_delivery"> Cash on Delivery
        </label>
       
        <input type="hidden"  name="payment_method" value="cash_on_delivery">
        <button type="submit" name="submit"class="btn-pay" onclick="return confirm('are you sure you want to Place order?');">Pay Now</button>
    </form>
        </div>
    </div>
    <?php 

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(isset($_POST["submit"]))
    {   $stock=0;
       $quant=0;
       $user=$_COOKIE["username"];
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user='$user'");
        while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $quant=$fetch_cart['quantity']+$quant;
            $pname=$fetch_cart['name'];
        }
        $vegetable =mysqli_query($conn,"SELECT * FROM vegetables WHERE product_name='$pname'");
        $fruit= mysqli_query ($conn,"SELECT * FROM fruits WHERE product_name='$pname'");
        $dryfruit=mysqli_query($conn,"SELECT * FROM dryfruits WHERE product_name='$pname'");
        $dal=mysqli_query($conn,"SELECT * FROM dals WHERE product_name='$pname'");
        
        if ($v = mysqli_fetch_assoc($vegetable)) {
            $s = $v["Stock"];
            $s -= $quant;
            $stock = $s;
            $table = "vegetables";
        }
        elseif ($f = mysqli_fetch_assoc($fruit)) {
            $s = $f["Stock"];
            $s -= $quant;
            $stock = $s;
            $table = "fruits";
        } elseif ($d = mysqli_fetch_assoc($dal)) {
            $s = $d["Stock"];
            $s -= $quant;
            $stock = $s;
            $table = "dals";
        } elseif ($dry = mysqli_fetch_assoc($dryfruit)) {
            $s = $dry["Stock"];
            $s -= $quant;
            $stock = $s;
            $table = "dryfruits";
        }
        $update_stock="UPDATE $table SET Stock='$stock' WHERE product_name='$pname'";
        mysqli_query($conn,$update_stock);
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $payment=$_POST["payment_method"];
        $pn=implode(",",$prod);
        $date=date('Y/m/d');
        $sql="INSERT INTO `orders` VALUES (NULL,'$name','$phone','$address','$email','$pn','$quant','$grand_total','$user','$date')";
        $result = mysqli_query($conn, $sql);
        echo "<script>window.location.href = 'bill.php';</script>";
      

        
    }
}
    ?>
    

   
</body>

</html>
