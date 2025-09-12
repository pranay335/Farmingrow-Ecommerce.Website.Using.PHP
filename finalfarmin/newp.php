<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="checkout1.css">
    <link rel="stylesheet" href="fhome.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>

    <!--header section-->
    <header class="header">
        <a href="" class="logo"> <i class="fas fa-shopping-basket"></i>Farmingrow

        </a>
        <nav class="navbar">
            <a href="">Home</a>
            <a href="">features</a>
            <a href=""> products</a>
            <a href="">review</a>
            <a href="">categories</a>

        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menubtn"></div>
            <div class="fas fa-search" id="searchbtn"></div>
            <div class="fas fa-shopping-cart" id="cartbtn"></div>
            <a href="farminlogin.html">
                <div class="fas fa-user" id="login"> </div>
            </a>
        </div>
    </header>
    <form action="" class="search">
        <input type="search" id="searchbox" placeholder="search here..">
        <label for="searchbox" class="fas fa-search"></label>
    </form>

    <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
        <div class="text-uppercase">
            <p>Order detail</p>
        </div>
        <div class="h4">Hello Mr/Mrs. <span >Soham</span></div>
        <div class="pt-1">
            <p>Order #<span id="orderId"></span> processing</b></p>
        </div>
        <div class="btn close text-white">&times;</div>
    </div>
    <div class="wrapper bg-white">
        <section class="loginHistory">
        
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>NAME</th>
                        <th>|||QUANTITY|||</th>
                        <th>|PRICE|</th>
                        <th>TOTAL</th>
                        <th>REMOVE</th>
                    </tr>
                    <?php
                  require 'connection.php';
                     if($_SERVER["REQUEST_METHOD"]== "POST")
    {
    
    
    
    if(isset($_POST["remove_btn"]))
    { 
      $p_name= $_POST["product_id"];
    
       $sql="DELETE FROM cart WHERE id='$p_name'";
       mysqli_query($conn,$sql);
    
    }
    
    }
    $select_cart = mysqli_query($conn, "SELECT * FROM cart");
    $grand_total = 0;
    $sub_total=0;
                     
                    if(mysqli_num_rows($select_cart) >0){
                        while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                          
                     ?>
                  
                     
                     <tr>
                        
                       
                        <td> <img class="product-image" src="<?php echo $fetch_cart['image']; ?>"  ></td>
                        <td ><h1><?php echo $fetch_cart['name']; ?>    </h1></td>
                        <td>
                       <h2><?php echo $fetch_cart['quantity']; ?></h2>
                        </td>
                        <td>
                       <h2><?php echo $fetch_cart['price']; ?></h2>
                        </td>
                        <td><h2><?php  echo $sub_total = ((int)$fetch_cart['price'] * (int)$fetch_cart['quantity']);
                       $grand_total+=$sub_total; ?></h2></td>
                        <td>
                        <form id="remove"action="" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $fetch_cart['id']; ?>">
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
            <div CLASS="total">
               <h3> TOTAL ==(
                <?php echo $grand_total ?>)
               </h3>
                    </div>
        </section>
    </div>
    <div class="text-center mt-3">
        <button id="paymentButton" onclick="proceedToPayment()">Proceed to Payment</button>
    </div>

    <script>
        function proceedToPayment() {
            // Display popup box or toast
            alert("Don't refresh or go back to page while processing payment");
            // Redirect to payment page
            window.location.href = "payment.html";
        }
    </script>
</body>

</html>
