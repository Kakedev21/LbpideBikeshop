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
 			<li><a href="index.php" style="color: black;">Home</a></li>
 			<li><a href="products.php" style="color: black;">Products</a></li>
 			<li><a href="aboutus.php" style="color: black;">About</a></li>
 			<li><a href="contact.php" style="color: black;">Contact</a></li>
 			<li><a href="account.php" style="color: black;">Account</a></li>
 		</ul>
 	</nav>
 	<img src="images/cart.png" width="30px" height="30px">
 	<img src="images/menumenu.png" class="menu-icon" onclick="menutoggle()">
 </div>
</div>
<!-- cart item details--->
<div class="cartset">
	<div class="small-container">
<table>
	<tr>
		<th>Product</th>
		<th>Quantity</th>
		<th>Subtotal</th>
	</tr>
	<tr>
		<td>
			<div class="cart-info">
				<img src="assets/p6.jpg">
				<div>
					<p style="color: #555;">Mountain Bike</p>
					<small style="color: #555">Price:$500.00</small>
					<br>
					<a href="">Remove</a>
				</div>
			</div>
		</td>
		<td><input type="number" value="1"></td>
		<td>$500.00</td>
	</tr>
	<tr>
		<td>
			
		</td>
		
	</tr>
	<tr>
		<td>
			
		</td>
		
	</tr>
</table>
<div class="total-price">
	<table>
		<tr>
			<td>SubTotal</td>
			<td>500.00</td>
		</tr>
		<tr>
			<td>Shipping Fee</td>
			<td>50.24</td>
		</tr>
		<tr>
			<td>SubTotal</td>
			<td>550.24</td>
		</tr>
		<tr>
			<td>Mode of Payment: <select>
				<option>Cash on Delivery</option>
				<option>Credit/Debit card</option>
				<option>Gcash</option>
				<option>Cryto</option>
			</select></td>
			<td><button class="">Add more</button></td>
			<td><button class="btn">Place Order</button></td>
		</tr>
	</table>
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
</body>
</html>