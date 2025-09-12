
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="farminlogin.css">
    <link rel="stylesheet" href="pr.js">
   <link rel="Website Icon " href="logo.png">
    

    <title>Farmingrow Login</title>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <div class="signin-signup">
                <form action="" class="siginform" name="signin" method="post">
                  <h2 class="title">Admin Login</h2>  
                  <div class="inputfield">
                 <i class="fas fa-user"></i>
                 <input type="text" placeholder="Username" name="user">
                  </div>
                  <div class="inputfield">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="pass">
                  </div>
                  
                  <input type="submit" value="login" class="btn solid" name="signin">
                
                  <p class="socail-text">Or sign in with socail platform</p>
                  <div class="socail-mdeia">
                    <a href="https://www.facebook.com/login/" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://in.linkedin.com/?src=go-pa&trk=sem-ga_campid.14650114788_asid.151761418307_crid.657403558715_kw.linkedin+login_d.c_tid.kwd-12704335873_n.g_mt.e_geo.9300430&mcid=6844056167778418689&cid=&gclid=Cj0KCQjwj5mpBhDJARIsAOVjBdq3g9OC687FYUapvfg65mRb0vQUZg5NbyMqGV7evpl5VylMlSHfi-caAjGgEALw_wcB&gclsrc=aw.ds&original_referer=https%3A%2F%2Fwww.google.com%2F" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F&ec=GAlAwAE&hl=en_GB&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S2131217441%3A1697028370539893&theme=glif" class="social-icon1">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/accounts/login/" class="social-icon">
                        <i class="fab fa-apple"></i>
                    </a>
                  </div>
                </form>

                
            </div>
        </div>
        <div class="panel-container">
            <div class="panel leftpanel">
              
                <img src="farm.png" class="image" >
            </div>

            <!--new-->

            
        </div>
    </div>
    <script src="pr.js"></script>
</body>



   
<?php 
if($_SERVER["REQUEST_METHOD"]== "POST")
{
if(isset($_POST["signin"]))
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farmingrow";
    $uname=$_POST['user'];
    $pass=$_POST["pass"];
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM adminlogin WHERE adminname='$uname' AND password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows) {
            // User exists, redirect to home page or do further processing
            echo "<script>alert('Preparing for login ');</script>";
            echo "<script>window.location.href = 'navbar.php';</script>";
            exit;
        } else {
            
echo "<script>alert('Wrong  Username and Password ');</script>";
        }
    
}
}

 
?>



</html>