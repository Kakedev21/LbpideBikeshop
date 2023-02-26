<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>About us - Lbpride Bike Shop</title>
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
<!---- about us ---->
<div class="main-body">
<div class="about-contain">
	<center>
		<h1>About Us...</h1>
		<div class="abimg">
		</div>
		<p>We are happy that you are here at Lb pride Bike Shop. Our primary objective is to help more and more people engage in bicycles given that they’re functional, eco friendly, awesome to ride, and offer great adventure! From full-suspension bikes to long lasting city commuters to carbon road bicycles, these are all the things that we love.

There are so many people who message us everyday and inquire what our shop is all about, and therefore we believe an introduction is needed. We’re a customer-friendly, service oriented bike shop expert in dealing with all kinds of your biking needs. We simply do our very best to ensure that our shop is a comfortable zone for people especially those who are new to cycling to learn more, and additionally for experienced cyclists to update their skills and get the most up-to-date bike parts.

Here, we care about each of our clients – average bicycle commuter or leisure rider, it doesn’t matter what type of bicycle they want to ride, or in what way they want to ride it. As such, we supply bicycles and accessories which make riding a bike functional and truly enjoyable, it doesn’t matter what you ride or where it will lead you. Check out our Bike Tour page to learn a little more about a few of the locations we’re currently having.

At Life Cycle Bike Shop we sell what we should ride. In case it’s not sufficiently good for us, then it isn’t sufficiently good for you as well! It is our commitment to provide you with the best value for your purchase and will be offering the best quality parts and equipment designed for your style of riding. Our company specializes on customized hand-built wheels, customized bike builds, bike modifications, bike fitting, retrofitting, and many more. Drop by to our shop and discover!
</p>
<a href="index.php #feature1"><button class="about-btn">Explore Now</button></a>
	</center>
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
