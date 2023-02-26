<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="style1.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
<div class="container">
	<div class="navbar">
 	<div class="logo">
 		<img src="assets/log1.png" width="125px">
 	</div>
 	<nav>
 		<ul id="MenuItems">
 			<li><a href="index.php" style="color: gainsboro;">Home</a></li>
 			<li><a href="products.php" style="color: gainsboro;">Products</a></li>
 			<li><a href="aboutus.php" style="color: gainsboro;">About</a></li>
 			<li><a href="contact.php" style="color: gainsboro;">Contact</a></li>
 			<li><a href="account.php" style="color: gainsboro;">Account</a></li>
 		</ul>
 	</nav>
 	<img src="images/cart.png" width="30px" height="30px">
 	<img src="images/menumenu.png" class="menu-icon" onclick="menutoggle()">
 </div>
</div>
</div>
<!---- contact page ---->
<div class="contact-page">
	<div class="contactform">
	<h1>Contact Us</h1>
	<form id="contact-form" method="post" action="message.php">
		<div class="txtb">
		<label>Full Name: </label>
		<input type="text" name="name" placeholder="Enter Name">
	</div>
	<div class="txtb">
		<label>Email: </label>
		<input type="email" name="email" placeholder="Enter Email">
	</div>
	<div class="txtb">
		<label>Concern: </label>
		<textarea name="message" row="4" placeholder="Enter your Message here"></textarea>
	</div>
	<button class="btn" type="submit">Submit</button>
	</form>
</div>
</div>
<!---- footer ---->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download our App</h3>
				<p>Download App for Android and IOS Mobile Phone</p>
				<div class="app-logo">
					<img src="images/play-store.png">
					<img src="images/app-store.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="assets/realogo.png">
				<p>Our purpose is to sustainability make the pleasure and benefits of sports accessible to many</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>coupons</li>
					<li>blogpost</li>
					<li>return policy</li>
					<li>join affliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>Youtube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copy Right 2021 - LBpride Bike Shop</p>
	</div>
</div>
<!---- js for toggle menu ---->
<script>
	var MenuItems = document.getElementById("MenuItems");

	MenuItems.style.maxHeight = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>
<!---- js for log in ---->
<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator")

function login(){
	RegForm.style.transform = "translateX(300px)";
	LoginForm.style.transform = "translateX(300px)";
	Indicator.style.transform = "translateX(0px)";
}
function register(){
	RegForm.style.transform = "translateX(0px)";
	LoginForm.style.transform = "translateX(0px)";
	Indicator.style.transform = "translateX(100px)";
}
</script>
</body>
</html>
