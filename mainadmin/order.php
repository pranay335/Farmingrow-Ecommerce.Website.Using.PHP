<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="adminnavbar.css">
    <link rel="stylesheet" href="adminpro.css">
     <link rel="stylesheet" href="user.css">
     <script src="logout1.js"></script>
   
  
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    

    <title>Farmingrow</title>
<?php
if(isset($_POST["datebtn"]))
{
    $d=$_POST["date"];
    $date=date('Y-m-d', strtotime($d));

  
}
 if(isset($_POST["signup"]))
 {
$servername = "localhost";
$username = "root";
$password = "";
$database = "farmingrow";


$conn = mysqli_connect($servername, $username, $password, $database);

$uname=$_POST['username'];
$email=$_POST["email"];
$pass=$_POST["password"];

$sql="INSERT INTO `users` (`sr_no`, `username`, `password`, `email`) VALUES (NULL, '$uname', '$pass', '$email')";
$result = mysqli_query($conn, $sql);

}
?>
</head>

<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <h2><span>Farmin</span> Grow.</h2>
        </div>
        <div class="header--items">
            <i class="ri-search-2-line"></i>
            
            <i class="ri-notification-2-line"></i>
            <i class="ri-wechat-2-line chat"></i>
            <div class="profile" onclick="logout()">
                <i class="ri-user-line"></i>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="navbar.php" >
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="vegetables.php" >
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="customer.php" >
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="stock.php">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Stock</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="logout()">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        
<header class="newheader">
    <h1>Admin Panel - ORDERS</h1>
</header>
<?php
require 'connection.php';


if($_SERVER["REQUEST_METHOD"]== "POST")
{



if(isset($_POST["remove_btn"]))
{ 
  $p_name= $_POST["product_id"];
  $sql="DELETE FROM orders WHERE id='$p_name'";
   mysqli_query($conn,$sql);

}

}

?>
</head>
<body>



<div class="container">
<form method="post">
                    <select name="date" id="date">
                        <option value="-7 day">Last 7 days</option>
                        <option value="-14 day">Last 14 days</option>
                        <option value="-21 day">Last 21 days</option>
                        <option value="-1 month">Last month</option>
                      
                    </select>
                    <button name="datebtn" type="submit">APPLY </button> 
                </form>

<section class="shopping-cart">


   <table>

      <thead class="thread">
      <th>_Name__</th>
         <th>_PHONE______</th>
         <th>ADDRESS_______    </th>
         <th>____PRODUCT____ </th>
         
         <th>_QUANTITY__</th>
         <th>_PRICE__</th>
         <th>REMOVE<th>
       
      </thead>

      <tbody>

         <?php 
        require 'connection.php';
         $select_cart = mysqli_query($conn, "SELECT * FROM `orders` WHERE date >= '$date' ");
         $grand_total = 0;
         $sub_total=0;
        
         if(mysqli_num_rows($select_cart) >0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
              
         ?>
      
         
         <tr>
            
            <td ><?php echo $fetch_cart['name']; ?></td>
            <td><?php echo $fetch_cart['phone']; ?></td>
            <td><?php echo $fetch_cart['address']; ?></td>

            
            <td><?php echo $fetch_cart['product']; ?></td>
            <td><?php echo $fetch_cart['quantity']; ?></td>
            <td><?php echo $fetch_cart['price']; ?></td>
           
            <td>
            <form id="remove"action="" method="post">
            <input type="hidden" name="product_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="submit" value="REMOVE" name="remove_btn" class="fas fa-trash " onclick="return confirm('REMOVE order?')">
                
            </form>
            </td>
         </tr>
          
         <?php
          
            };
         };
         
         ?>
         

      </tbody>

   </table>
   
</section>


</div>






<div class="form-popup" id="myForm" >
  <form action="" method="post" class="form-container">
    <h1>ADD USER</h1>
    <input type="text" placeholder="Username" name="username">
                
                     <input type="text" placeholder="Email" name="email">
                      <input type="password" placeholder="Password" name="password" >
                   
                    <input type="submit" value="ADD USER" name="signup" class="btn solid" >
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


<!-- custom js file link  -->


</body>
<style>
    .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  
  right: 900px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 40px;
  left:400px;
  border: 1px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
 width: 700px;
  height:600px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
   
</html>