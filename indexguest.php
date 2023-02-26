<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: account.php');
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Lbpride Bike Shop</title>
	<link rel="stylesheet" href="style1.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="preloader">
	</div>
<div class="header">
<div class="container">
	<div class="navbar">
 	<div class="logo">
 		<a href="index.php"><img src="assets/log1.png" width="125px"></a>
 	</div>
 	<nav>
 		<ul id="MenuItems">
 			<li><a href="index.php">Home</a></li>
 			<li><a href="products.php">Products</a></li>
 			<li><a href="aboutus.php">About</a></li>
 			<li><a href="contact.php">Contact</a></li>
 			<li><a href="account.php">Account</a></li>
 		</ul>
 	</nav>
 	<a href="cart.php"><img src="assets/card.png" width="30px" height="30px"></a>
 	<img src="images/menu1.png" class="menu-icon" onclick="menutoggle()">
 </div>
 <div class="row">
 	<div class="col-2">
 		<h1 style="color: gainsboro;">Welcome Guest</h1>
 		<h1 style="color: gainsboro;">It never gets easier,<br> you just go faster</h1>
 		<p>The road ahead may be long and winding<br> but you'll make it there safe and sound.</p>
 		<a href="#feature" class="btn">Explore Now &#8594;</a>
 	</div>
 	<div class="col-2">
 		<img src="assets/logop.png">
 	</div>
 </div>
</div>
</div>
<!----- featured categories ----->
<div class="categories" id="feature">
	<div class="small-container">
		<div class="row">
		<div class="col-3">
			<img src="assets/a1.jpg">
		</div>
		<div class="col-3">
			<img src="assets/a2.jpg">
		</div>
		<div class="col-3">
			<img src="assets/a3.jpg">
		</div>
	</div>
	</div>
</div>
<!---- featured products ---->
<div class="small-container" id="feature1">
	<h2 class="title">Featured Products</h2>
	<div class="row">
		<div class="col-4">
			<a href="product-detail.php"><img src="assets/p6.jpg"></a> 
			<a href="product-detail.php"><h4>Road Bike</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p7.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p8.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p9.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>$500.00</p>
		</div>
	</div>
	<h2 class="title">Latest Products</h2>
	<div class="row">
		<div class="col-4">
			<img src="assets/p6.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p7.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p8.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p9.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="row">
		<div class="col-4">
			<img src="assets/p10.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p11.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p12.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p13.jpg">
			<h4>Road Bike</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>$500.00</p>
		</div>
	</div>
	</div>
</div>
<!---offer--->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="assets/ff1.png" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusive in Lbpride bike Shop</p>
				<h1>2021 Canyon Road Bike</h1>
				<small>Built around an aluminium frame, carbon fork and a Fazua Evation 1.0 motor,the Endurace:ON weighs a respectable 15.2kg, and offers 250 watts of motorised assistance to your ride.</small>
				<a href="" class="btn">Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>
<!-- testimonial -->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu iaculis lacus. Ut semper, lectus ac condimentum suscipit, diam purus dapibus leo, tempor pharetra ex lorem quis mi. In hac habitasse platea dictumst. Curabitur sit amet consectetur ex. Nulla facilisi. Fusce ut tincidunt nulla. Ut tristique elit quis orci dictum, ac sodales sem finibus. Morbi odio leo, rutrum ut erat eu, tempus placerat dolor.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			    </div>
			    <img src="assets/k1.jpg">
			    <h3>Romeo Gobriel</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Nam eget mauris quis eros eleifend rhoncus. Cras vehicula congue lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer tempus enim sed cursus sagittis. Aliquam hendrerit ipsum sed dolor facilisis, et lacinia enim tristique. Suspendisse potenti. Phasellus gravida efficitur urna id bibendum. Pellentesque rhoncus est vel dui lacinia ornare.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			    </div>
			    <img src="assets/k2.jpg">
			    <h3>Carl Dolores</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu iaculis lacus. Ut semper, lectus ac condimentum suscipit, diam purus dapibus leo, tempor pharetra ex lorem quis mi. In hac habitasse platea dictumst. Curabitur sit amet consectetur ex. Nulla facilisi. Fusce ut tincidunt nulla. Ut tristique elit quis orci dictum, ac sodales sem finibus. Morbi odio leo, rutrum ut erat eu, tempus placerat dolor.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			    </div>
			    <img src="assets/k3.jpg">
			    <h3>Christopher Lasala</h3>
			</div>
		</div>
	</div>
</div>
<!---- Brands ---->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="images/logo-godrej.png">
			</div>
			<div class="col-5">
				<img src="images/logo-oppo.png">
			</div>
			<div class="col-5">
				<img src="images/logo-coca-cola.png">
			</div>
			<div class="col-5">
				<img src="images/logo-paypal.png">
			</div>
			<div class="col-5">
				<img src="images/logo-philips.png">
			</div>
		</div>
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
<!---- preloader ---->.
<script>
	var loader = document.getElementById("preloader");

	window.addEventListener("load", function(){
		loader.style.display = "none";
	})


</script>
</body>
</html>