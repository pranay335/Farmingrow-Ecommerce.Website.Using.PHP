<?php 
if($_SERVER["REQUEST_METHOD"]== "POST")
{
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

    

if(isset($_POST["signin"]))
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farmingrow";
    $uname=$_POST['user'];
    $pass=$_POST["pass"];
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows) {
            // User exists, redirect to home page or do further processing
            setcookie("username",$uname,time()+60*60);
            echo "<script>window.location.href = 'fhome.php';</script>";
           
            exit;
        } else {
            
echo "<script>alert('Wrong  Username and Password ');</script>";
        }
    
}
}

 
?>
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
                  <h2 class="title">Sign In</h2>  
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

                <form action="" class="sigupform" name="signup" method="post">
                    <h2 class="title">Sign Up</h2>  
                    <div class="inputfield">
                   <i class="fas fa-user"></i>
                   <input type="text" placeholder="Username" name="username">
                    </div>

                    <div class="inputfield">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email">
                         </div>

                    <div class="inputfield">
                      <i class="fas fa-lock"></i>
                      <input type="password" placeholder="Password" name="password" >
                    </div>
                    <input type="submit" value="Sign Up" name="signup" class="btn solid" >
                    <p class="socail-text">Or sign Up with socail platform</p>
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
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <button class="btn transparent" id="signupbtn">Sign Up</button>
                </div>
                <img src="undraw_sign_up_n6im.svg" class="image">
            </div>

            <!--new-->

            <div class="panel rightpanel">
                <div class="content">
                    <h3>Welcome Back</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <button class="btn transparent" id="siginpbtn">Sign In</button>
                </div>
                <img src="undraw_secure_login_pdn4.svg" class="image">
            </div>
        </div>
    </div>
    <script src="pr.js"></script>
</body>



   




</html>