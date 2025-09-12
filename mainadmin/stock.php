<?php require 'connection.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="logout1.js"></script>
    <link rel="stylesheet" href="stock.css">
    <link rel="stylesheet" href="customer.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <style>
        .ta{
            margin-left: 30%;
        }
        .formcon{
            margin-top: 5%;
            margin-left: 10%;
        }
        /* Style for form container */
.formcon {
    margin-bottom: 20px;
}

/* Style for select dropdown */
#date {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Style for apply button */
button[name="datebtn"] {
    padding: 8px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for table */
.ta {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Style for table header */
.ta th {
    background-color: #69cd6c;
    color: #fff;
    padding: 10px;
    text-align: left;
}

/* Style for table rows */

/* Style for table data */
.ta td {
    padding: 10px;
}

/* Style for update button */
button[name="update_btn"] {
    padding: 5px 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/* Style for number input */
input[type="number"] {
    padding: 5px;
    width: 60px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

    </style>
    
    
    <title>Farmingrow</title>
</head>
<?php

 if(isset($_POST["datebtn"]))
 {
     $table=$_POST["table"];
     $_SESSION["t"]=$table;
 
 }
 

 if(isset($_POST["update_btn"]))
{  $sess=$_SESSION['t'];
     $p1=$_POST["product_id"];
    $quant=$_POST["update_quantity"];
    $sql="UPDATE $sess SET Stock='$quant' WHERE product_name='$p1' ";
    mysqli_query($conn,$sql);
}

?>
<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <h2><span>Farmin</span> Grow.</h2>
        </div>
        <div class="header--items">
            <i class="ri-search-2-line"></i>
            <div class="dark--theme--btn">
                <i class="ri-moon-line moon"></i>
                <i class="ri-sun-line sun"></i>
            </div>
            <i class="ri-notification-2-line"></i>
            <i class="ri-wechat-2-line chat"></i>
            <div class="profile">
                <a href="farminlogin.php" ><i class="ri-user-line"></i></a>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="navbar.php">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="vegetables.php">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="customer.php">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="order.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
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
                    <a href="#" onclick="logout()" >
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item" >Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="his">
        <header class="banner">
            <h1>Stock update</h1>
            
        </header>
        </div>
       
    <div class="formcon">
    <form method="post">
                    <select name="table" id="date">
                        <option value="vegetables">VEGETABLES</option>
                        <option value="fruits">FRUITS</option>
                        <option value="dals">DAL</option>
                        <option value="dryfruits">DRY FRUITS</option>
                      
                    </select>
                    <button name="datebtn" type="submit">APPLY </button> 
                </form>
    </div>
</div>
<div class="ta">
<table>

  <tr>
    <th>Product Name</th>
    <th>Current Stock Value</th>
    <th></th>
  </tr>
  <tr>
    
  <?php 
  $st=$_SESSION['t'];
$q = "SELECT * FROM $st";
$s = mysqli_query($conn, $q);


    while ($row = mysqli_fetch_assoc($s)) {
        ?>
      <tr>
      <td><?php echo  $pn=$row['product_name'] ; ?></td>
      <td><?php echo $st=$row['Stock'] ; ?></td>
      <td> 
        <form method="post">
            <input type="hidden" name="product_id" value="<?php echo $pn; ?>">  
             
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $st; ?>" >
                  <button type="submit"  name="update_btn">Update</button>
                  </form> 
     </td>

  </tr>
      <?php
    }
    
?>
 
</table>
</div>

    </section>
       


      