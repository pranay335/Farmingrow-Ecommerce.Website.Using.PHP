<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="adminnavbar.css">
    <link rel="stylesheet" href="product1.css">
    <link rel="stylesheet" href="customer.css">
    <script src="logout1.js"></script>
   
    
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    

    <title>Farmingrow</title>
    

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
            <div class="profile">
                <a href="#" onclick="logout()"><i class="ri-user-line"></i></a>
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
                    <a href="#" class="active">
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
                    <a href="#" >
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
                        <div class="sidebar--item" >Logout</div>
                    </a>
                </li>
            </ul>
        </div>
  <?php 
     require 'connection.php';
     ?>

    <div class="his"><header class="banner">
        <h1>Total USERS: <span id="visitorCount"><?php
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
  echo $count;
  ?></span></h1>
    </header>

    <section class="loginHistory">
        <h2>Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>REMOVE</th>
                </tr>
                <?php
              
                 if($_SERVER["REQUEST_METHOD"]== "POST")
{



if(isset($_POST["remove_btn"]))
{ 
  $p_name= $_POST["product_id"];

   $sql="DELETE FROM users WHERE sr_no='$p_name'";
   mysqli_query($conn,$sql);

}

}
                 $select_cart = mysqli_query($conn, "SELECT * FROM `users`");
                if(mysqli_num_rows($select_cart) >0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                      
                 ?>
              
                 
                 <tr>
                    
                    <td ><?php echo $fetch_cart['sr_no']; ?></td>
                    <td><?php echo $fetch_cart['username']; ?></td>
                   
                    <td>$$$$$$$$</td>
                    <td><?php echo $fetch_cart['email']; ?></td>
                    <td>
                    <form id="remove"action="" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $fetch_cart['sr_no']; ?>">
                    <input type="submit" value="REMOVE" name="remove_btn" class="fas fa-trash " onclick="return confirm('REMOVE USER?')">
                        
                    </form>
                    </td>
                 </tr>
                  
                 <?php
                  
                    };
                 };
                 
                 ?>
            </thead>
            <tbody id="loginHistoryBody">
                <!-- User login history rows will be dynamically added here -->
            </tbody>
        </table>
    </section>
</div>
<div id="chartContainer" class="ui" ></div>
</section> 
        
<script>
   

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Customer Visited (month)"
	},
	axisY: {
		title: "no of Visitors "
	},
	data: [{        
		type: "column",  
		 
		
		
		dataPoints: [      
			{ y: 300878, label: "Jan" },
			{ y: 266455,  label: "Feb" },
			{ y: 169709,  label: "March" },
			{ y: 158400,  label: "April" },
			{ y: 142503,  label: "May" },
			{ y: 101500, label: "Junet" },
			{ y: 97800,  label: "July" },
			{ y: 80000,  label: "Aug" }
		]
	}]
});
chart.render();

}
</script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        </body>
        </html>
