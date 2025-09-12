<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="adminnavbar.css">
    <link rel="stylesheet" href="adminpro.css">
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
                <i class="ri-user-line"></i>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="navbar.html" >
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="product.html" class="active">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="#">
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
    <h1>Admin Panel - ADD PULSES</h1>
</header>



    <!-- Navigation bar -->
    <div id="navigationBar"class="subon">
        <button onclick="location.href='vegetables.php'" >Vegetables</button>
        <button onclick="location.href='pulses.php'">Pulses</button>
        <button onclick="location.href='fruits.php'">Fruits</button>
        <button onclick="location.href='dryfruits.php'">DryFruits</button>
    </div>

    <!-- Form to add product name for Vegetables -->
    <form  method="POST" name="addvege" enctype="multipart/form-data">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" step="0.01" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" ></textarea><br><br>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <label for = "stock">Stock:</label>
        <input type ="text" id="stock" name="stock" required><br><br>

        <button type="submit" name="addvege" onclick="return alert('product aaded successfully');">Add Product</button>
    </form>


  
</div>
</section>


    


</body>
</html>
<?php
// add_product.php
require "connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"]== "POST") 
{
    
    if(isset($_POST["addvege"]))
    {
        // Include database connection file
    

    // Retrieve form data
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $stock = $_POST['stock'];
   
    $targetFile =  basename($_FILES["image"]["name"]);

            $sql = "INSERT INTO `dals` (`product_id`, `product_name`, `product_price`, `product_image`, `product_detail`,`Stock`)  VALUES  (NULL,'$name', '$price', ' $targetFile','$description','$stock')";
            if ($conn->query($sql) === TRUE) {
                echo "Product added successfully.";
                
            }
           
        
    }
      
   
   
}

    // Close database connection
 

?>

