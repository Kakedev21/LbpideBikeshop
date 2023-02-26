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
<body>

<div class="container">
	<div class="navbar">
 	<div class="logo">
 		<img src="assets/log1.png" width="125px">
 	</div>
 	<nav>
 		<ul id="MenuItems">
 			<li><a href="index.php" style="color: #555;">Home</a></li>
 			<li><a href="products.php" style="color: #555;">Products</a></li>
 			<li><a href="aboutus.php" style="color: #555;">About</a></li>
 			<li><a href="contact.php" style="color: #555;">Contact</a></li>
 			<li><a href="account.php" style="color: #555;">Account</a></li>
 		</ul>
 	</nav>
 	<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
 	<img src="images/menumenu.png" class="menu-icon" onclick="menutoggle()">
 </div>
</div>

<!---- single product details--->
<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="assets/p6.jpg" width="100%" id="ProductImg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="assets/g1.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="assets/g2.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="assets/g3.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="assets/g4.jpg" width="100%" class="small-img">
				</div>
			</div>

		</div>
		<div class="col-2">
			<p style="color: #555;">HOME/MOUNTAIN BIKE</p>
			<h1>Mountain Bike 2021</h1>
			<h4>$500.00</h4>
			<select>
				<option>Select Color</option>
				<option>Red</option>
				<option>Black</option>
				<option>Assorted</option>
			</select>
			<input type="number" value="1">
			<a href="cart.php" class="btn2">Add to Cart</a>
			<h3>Product Details <i class="fa fa-indent"></i></h3>
			<br>
			<p style="color: #555;">FRAME: BRANDON TOSEEK 27.5
HYDRAULIC SHOCK
LOCK OUT FORK SUSPENSION
HYDRAULIC DISC BRAKES
FORK: TOSEEK FORK SUSPENSION
GEARS: 1X8 SPEED
SHIFTER: X-SPARK MX9
RIMS: CTS ALLOY DOUBLE WALL
TIRE: KENDA SKIN 27.5
GROUPSET: MX8
SEATPOST : TOSEEK ALLOYING</p>
		</div>
	</div>
</div>
<!--- title --->
<div class="small-container">
	<div class="row row2">
		<h2>Related Products</h2>
		<p style="color: #555">View More</p>
	</div>
</div>


<div class="small-container">
	<div class="row">
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
				<i class="fa fa-star-o"></i>
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
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$500.00</p>
		</div>
		<div class="col-4">
			<img src="assets/p10.jpg">
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
<!---- js for product ---->
<script>
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function()
{
	ProductImg.src = SmallImg[0].src;
}
SmallImg[1].onclick = function()
{
	ProductImg.src = SmallImg[1].src;
}
SmallImg[2].onclick = function()
{
	ProductImg.src = SmallImg[2].src;
}
SmallImg[3].onclick = function()
{
	ProductImg.src = SmallImg[3].src;
}



</script>
</body>
</html>