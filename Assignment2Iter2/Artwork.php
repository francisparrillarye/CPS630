<html>
<head>
<title>American Gothic</title>
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="row">
	<ul class="naviul">
		<li class="navili"><a class="navilia" href="Home2.html">Home</a></li>
		<li class="navili"><a class="navilia" href="About.html">About Us</a></li>
		<li class="navili"><a class="navilia" href="Blogs.html">Blogs</a></li>
		<li class="navili" id = "cart"><a class="navilia">Shopping Cart</a></li>
	</ul>
	<div class="column artimage">
        <?php getArtworkImage();?>
		<img src="AmericanGothic.jpg" id="fullimage">
		<div id="cartdialog" title="Shopping Cart">
			<p>Please enter details for your purchase.</p>
			<form>
				<fieldset>
					<label for="quantity">Quantity:<label>
					<input type="text" id="quantity" name="quantity" value="1"><br>
					<label for="shipping">Shipping:</label><br>	
					<input type="radio" id="delivery1" name="delivery">Regular(1-2 weeks) $5.99<br>
					<input type="radio" id="delivery2" name="delivery">Express(less than three days) $7.99<br>
					<input type="radio" id="delivery3" name="delivery">Same-Day $99.99<br>			
					<input type="button" value="Purchase" onclick="updatePrice()" id="purchase">
				</fieldset>			
			</form>	
		</div>
		<div id="totaldialog" title="Your Total">
		<br>
		<p id="orderdetails"></p>
		</br>
		<p id="shipping"></p>
		<br>
		<p id="total" color="white"> total is: </p>
		</div>
	</div>
	<div class="column artdesc">
        <?php getArtworkDesc(); ?>
		<p id="fulldesc">American Gothic is a painting by Grant Wood in the collection of the Art Institute of Chicago. Wood's inspiration came in his decision to paint what is known as the American Gothic House along with "the kind of people I fancied should live in that house." He painted it in 1930, depicting a farmer standing beside a woman who has been interpreted to be his daughter or his wife.[1][2] The figures were modeled by Wood's sister Nan Wood Graham and their dentist Dr. Byron McKeeby. The woman is dressed in a colonial print apron evoking 19th-century Americana, and the man is holding a pitchfork. The plants on the porch of the house are mother-in-law's tongue and beefsteak begonia, which are the same as the plants in Wood's 1929 portrait of his mother Woman with Plants.</p>
	
	</div>
</div>


<script src="scripts.js"></script>
<script src="jquery_scripts.js"></script>

<script src="functions.php">
</script>


</body>
</html>
