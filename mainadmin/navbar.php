
<?php
require 'connection.php';
$date=date("Y-m-d");
if(isset($_POST["datebtn"]))
{
    $d=$_POST["date"];
    $date=date('Y-m-d', strtotime($d));

  
}
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
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
                    <a href="#" class="active">
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
                    <a href="stock.php" >
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



        <div class="main--container">
            <div class="section--title">
                <h3 class="title">Welcome back, Admin</h3>
                <form method="post">
                    <select name="date" id="date">
                        <option value="-7 day">Last 7 days</option>
                        <option value="-14 day">Last 14 days</option>
                        <option value="-21 day">Last 21 days</option>
                        <option value="-1 month">Last month</option>
                      
                    </select>
                    <button name="datebtn" type="submit">APPLY </button> 
                </form>
            </div>
            <div class="cards">
                <div class="card card-1">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-shopping-bag-2-line"></i></span>
                        <span>Sales</span>
                    </div>
                    <h3 class="card--value"><?php
                        
                        $sql = "SELECT * FROM orders WHERE  date >= '$date'";
                        $result = mysqli_query($conn,$sql);
                        $gt=0;
                        while($r=mysqli_fetch_assoc($result))
                        {
                           $gt=$gt+$r["price"];
                        }
                        echo $gt;
                        ?>  <i class="ri-arrow-up-circle-fill up"></i></h3>
                    <h5 class="more">4,234 more than usual</h5>
                    <div class="chart">
                        <canvas class="line" id="sales"></canvas>
                    </div>
                </div>
                <div class="card card-2">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-gift-line"></i></span>
                        <span>Orders</span>
                    </div>
                    <h3 class="card--value">1 <i class="ri-arrow-down-circle-fill down"></i></h3>
                    <h5 class="less">2344 less than usual</h5>
                    <div class="chart">
                        <canvas class="line" id="order"></canvas>
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-handbag-line"></i></span>
                        <span>Products</span>
                    </div>
                    <h3 class="card--value">1<i class="ri-arrow-up-circle-fill up"></i></h3>
                    <h5 class="more">23 more than usual</h5>
                    <div class="chart">
                        <canvas  class="line" id="products"></canvas>
                    </div>
                </div>
                <div class="card card-4">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-user-line"></i></span>
                        <span>Customers</span>
                    </div>
                    <h3 class="card--value"><?php
                        
                          $sql = "SELECT * FROM users";
                          $result = mysqli_query($conn,$sql);
                          $count = mysqli_num_rows($result);
                          echo $count;
                          ?> <i class="ri-arrow-down-circle-fill down"></i></h3>
                    <h5 class="less">34 less than usual</h5>
                    <div class="chart">
                        <canvas class="line" id="customers"></canvas>
                    </div>  
                </div>
            </div>
            <div class="chart-container">
                <canvas id="lineChart"></canvas>
            </div>
            
            <div class="charts"> 
            <div class="table">
                <div class="section--title">
                    <h3 class="title">Top products</h3>
                    <div></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Orderer name</th>
                            <th>Order ID</th>
                            <th>Total Bill</th>
                            <th>quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        
                        $sql="SELECT * from orders WHERE  date >= '$date'";
                        $F=mysqli_query($conn,$sql);
                        $gt=0;
                        while($row=mysqli_fetch_assoc($F))
                        {
                        ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo  $r = $row["price"]; $gt=+$r; 
                            ?></td>
                              
                            <td><?php echo $row["quantity"]; ?></td>
                           
                        </tr>
                        <?php
                        }
                       ?>                 
                   </tbody>
                </table>
                
            </div>

            


            

            
            <!--chart pie-->
           
            <div class="chart doughnut-chart">
                <h2>PRODUCTS DETAILS</h2>
                <div class="pie">
                    <canvas class="sp" id="doughnut" height="200" width="456" style="display: block; box-sizing: border-box; height: 69.6px; width: 364.8px;"></canvas>
                </div>
            </div>
            
        </div>

    </section>
   
    <script src="main.js"></script>
    <script src="sales.js"></script>
    <script src="product.js"></script>
    <script src="tarsale.js"></script>
    <script src="order.js"></script>
    <script src="customer.js"></script>
    <script src="chart2.js"></script>
   <script src="newline.js"></script>
   <script src="logout.js"></script>
   <script>
   


   </script>
    
    <!--<script src="line.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="ine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="linechart.js"></script> -->
</body>
</html>