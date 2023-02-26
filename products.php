<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>All Products - Lbpride Bike Shop</title>
	<link rel="stylesheet" href="style1.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: radial-gradient(#404040,#000000);">
<div class="container">
	<div class="navbar">
 	<div class="logo">
 		<img src="assets/log1.png" width="125px">
 	</div>
 	<nav>
 		<ul id="MenuItems">
 			<li><a href="index.php" style="color: #gainsboro;">Home</a></li>
 			<li><a href="products.php" style="color: #gainsboro;">Products</a></li>
 			<li><a href="aboutus.php" style="color: #gainsboro;">About</a></li>
 			<li><a href="contact.php" style="color: #gainsboro;">Contact</a></li>
 			<li><a href="account.php" style="color: #gainsboro;">Account</a></li>
 		</ul>
 	</nav>
 	<a href="cart.php"><img src="assets/card.png" width="30px" height="30px"></a>
 	<img src="images/menumenu.png" class="menu-icon" onclick="menutoggle()">
 </div>
</div>
<div class="small-container">
	<div class="row row-2">
		<h2 style="color: gainsboro;">All Products</h2>
		<select>
			<option>Default</option>
			<option>Sort by Price</option>
			<option>Sort by Popularity</option>
			<option>Sort by Rating</option>
		</select>
	</div>
	
	<div class="row">
		<div class="col-4">
			<img src="assets/p6.jpg">
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Road Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
			<h4 style="color: gainsboro;">Mountain Bike</h4>
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
<div class="page-btn">
	<span>1</span>
	<span>2</span>
	<span>3</span>
	<span>4</span>
	<span>&#8594;</span>
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
</body>
</html>
