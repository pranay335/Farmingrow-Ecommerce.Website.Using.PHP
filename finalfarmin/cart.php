

<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cart.css">
<?php
require 'connection.php';


if($_SERVER["REQUEST_METHOD"]== "POST")
{

if(isset($_POST["update_btn"]))
{  
   $pname=$_POST["product_name"];

  $p_id= $_POST["product_id"];
  $p_quantity= $_POST['update_quantity'];
  $vegetable =mysqli_query($conn,"SELECT * FROM vegetables WHERE product_name='$pname'");
  $fruit=mysqli_query($conn,"SELECT * FROM fruits WHERE product_name='$pname'");
  $dryfruit=mysqli_query($conn,"SELECT *  FROM dryfruits WHERE product_name='$pname'");
  $dal=mysqli_query($conn,"SELECT * FROM dals WHERE product_name='$pname'");
 

  if(mysqli_num_rows($vegetable) > 0)
  {  
   while($v=mysqli_fetch_assoc($vegetable))
   {
   if($v["Stock"] >= $p_quantity )
   {
   $sql="UPDATE cart SET  quantity='$p_quantity'  WHERE id='$p_id '";
   mysqli_query($conn,$sql);
   }
   else
   {
      echo '<script>alert("NOT ENOUGH STOCK")</script>'; 
   }
  } 
  }
  else if(mysqli_num_rows($fruit) > 0)
  {  
   while($f=mysqli_fetch_assoc($fruit))
   {
   if($f["Stock"] >= $p_quantity )
   {
   $sql="UPDATE cart SET  quantity='$p_quantity'  WHERE id='$p_id '";
   mysqli_query($conn,$sql);
   }

   if(mysqli_num_rows($dal) > 0)
   {  
    while($d=mysqli_fetch_assoc($dal))
    {
    if($d["Stock"] >= $p_quantity )
    {
    $sql="UPDATE cart SET  quantity='$p_quantity'  WHERE id='$p_id '";
    mysqli_query($conn,$sql);
    }
    else
    {
       echo '<script>alert("NOT ENOUGH STOCK")</script>'; 
    }
   } 
   }

   if(mysqli_num_rows($dryfruit )> 0)
   
  {  
   while($dry=mysqli_fetch_assoc($dryfruit))
   {
   if($dry["Stock"] >= $p_quantity )
   {
   $sql="UPDATE cart SET  quantity='$p_quantity'  WHERE id='$p_id '";
   mysqli_query($conn,$sql);
   }
   else
   {
      echo '<script>alert("SOMETHING WENT WRONG")</script>'; 
   }
  } 
  }

  } 
  }
  
}

if(isset($_POST["remove_btn"]))
{ 
  $p_name= $_POST["product_id"];

   $sql="DELETE FROM cart WHERE id='$p_name '";
   mysqli_query($conn,$sql);

}
if(isset($_POST["deleteall_btn"]))
{ 
  

   $sql="TRUNCATE TABLE cart";
   mysqli_query($conn,$sql);

}
}

?>
</head>
<body>



<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
        require 'connection.php';
        $user=$_COOKIE["username"];
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user='$user'");
         $grand_total = 0;
         $sub_total=0;
        
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
              
         ?>
      
         
         <tr>
            <td><img src="<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td ><?php echo $pname=$fetch_cart['name']; ?></td>
            <td><?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
            <form action="" method="post">
            <input type="hidden" name="product_id" value="<?php echo $fetch_cart['id']; ?>">  
            <input type="hidden" name="product_name" value="<?php echo $pname; ?>">  
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_btn">
                  </form> 
            </td>
            <td>₹<?php echo $sub_total = ((int)$fetch_cart['price'] * (int)$fetch_cart['quantity']);
            $grand_total+=$sub_total; ?>/-</td>
            <td>
            <form action="" method="post">
            <input type="hidden" name="product_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="submit" value="remove" name="remove_btn" class="fas fa-trash " onclick="return confirm('remove item from cart?')">
                
            </form>
            </td>
         </tr>
          
         <?php
          
            };
         };
         
         ?>
         <tr class="table-bottom">
            <td><a href="product.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>₹<?php echo $grand_total; ?>/-</td>
            <td>
            <form action="" method="post">
            
            <input type="submit" value="Delete ALL" name="deleteall_btn" class="fas fa-trash " onclick="return confirm('are you sure you want to delete all items?');">
                
            </form>  </td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="payment1.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

<style>

</style>
</body>
</html>