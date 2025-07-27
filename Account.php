<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $email && $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);

        header("Location: Account.php?success=1");
        exit;
    } else {
        header("Location: Account.php?error=1");
        exit;
    }
}
 
 ?>

 <?php
if (isset($_GET['error'])) {
    echo "<p class='error'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
}
if (isset($_GET['success'])) {
    echo "<p class='success'>Registration successful. Please login.</p>";
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>All Product - Elegancestore | Ecommerce Website Design</title>
 <link rel="stylesheet" href="style.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
 </head>
 <body>
 <div class="header">
<div class="container">
 <div class="navbar">
 <div class="logo">
  <a href="index.html"></a>

 <img src="images/logostore.png"width="125px" style="mix-blend-mode:multiply;">
 </div>
 <nav>
 <ul id="MenuItems">
 <li><a href="index.html">Home</a></li>
 <li><a href="product.html">Products</a></li>
 <li><a href="">About</a></li>
 <li><a href="">Contact</a></li>
 <li><a href="Account.html">Account</a></li>
 </ul>
 </nav>
   <a href="cart.html">
 <img src="images/icon.webp"width="30px",height="30px"></a>
<img src="images/menu-icon.png"class="menu-icon"onclick="menutoggle()">
 </div>
 </div>
 </div>
<!------------------Account page----------------->
<div class="account-page">
<div class="container">
<div class="row">
<div class="col-2">
<img src="images/Accountpage.png">
</div>
<div class="col-2">
<div class="form-container">
<div class="form-btn">
<span onclick="login()">Login</span>
<span onclick="Register()">Register</span>
<hr id="Indicator">
</div>
<form id="loginform">
Name<input type="text" name="username">
Password<input type="password" name="password">
<button type="submit" class="btn">Login</button>
<a href="">Forget Password</a>
</form>

<form  action="register.php" method="POST" id="regform">
 <label for="fname"> Name</label>
<input type="text" name="username">
 <label for="email">Email</label>
<input type="email" name="email">
 <label for="password">Password</label>
<input type="password" name="password">
<button type="submit" class="btn">Register</button>
<a href="">Forget Password</a>
</form>
</div>
</div>
</div>
</div>
</div>


<!----------------footer------------------->
<div class="footer">
<div class="container">
<div class="row">
<div class="footer-col-1">
<h3>Download Our App</h3>
<p>Download App for Android and ios mobile phone.</p>
<div class="app-logo">
<img src="images/applogo1.png">
<img src="images/applogo2.png">
</div>
</div>
<div class="footer-col-2">
<img src="images/222.png">
<p>Our Purpose Is To sustainably Make the pkeasure and Benefits of sports Accessible to the Many.</p>
</div>
<div class="footer-col-3">
<h3>Useful Links</h3>
<ul>
<li>Coupons</li>
<li> Blog Post</li>
<li>Return Policy</li>
<li>Join Affiliate</li>
</ul>

</div>
<div class="footer-col-4">
<h3>Follow Us </h3>
<ul>
<li>Facebook</li>
<li> Twitter</li>
<li>Instagram</li>
<li>YouTube</li>
</ul>

</div>
</div>
<hr>
<p class="copyright">Copyright 2025 - Easy Tutorials</p>
</div>
</div>
<!-------js for toggle menu--------------->
<script>
var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";
function menutoggle(){
if(MenuItems.style.maxHeight == "0px")
{
MenuItems.style.maxHeight = "200px";
}
else
{
MenuItems.style.maxHeight = "0px";
}
}
</script>


<!----------js for toggle form--------->


<script>
var loginform = document.getElementById("loginform");
var regform = document.getElementById("regform");
var Indicator = document.getElementById("Indicator");

 function Register(){
 regform.style.transform = "translateX(0px)";
 loginform.style.transform = "translateX(0px)";
  Indicator.style.transform = "translateX(100px)";

 }
 
 function login(){
 regform.style.transform = "translateX(300px)";
  loginform.style.transform = "translateX(300px)";
  Indicator.style.transform = "translateX(0px)";

 }




</script>
</body>
</html>
