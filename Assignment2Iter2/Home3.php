<!DOCTYPE html>
<html>
<head>
<title> Art Store 3.0</title>
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
</body>
<div>
</div>

<div class="row">

	<ul class="naviul">
		<li class="navili"><a class="navilia" href="Home2.html">Home</a></li>
		<li class="navili"><a class="navilia" href="About.html">About Us</a></li>
		<li class="navili"><a class="navilia" href="Blogs.html"">Blogs</a></li>
		<li class="navili" id = "cart"><a class="navilia">Shopping Cart</a></li>
	</ul>

	<div class="column left" style="background-color:#ddd;">
		<ul class="menuul">
			<li class="menulia" id="artworks">Art Works
				<ul id="artworkslist" class="dropDown">
                    <?php listArtworks();?>
					
				</ul>
			</li>
			<li class="menulia" id="artists">Artists
				<ul id="artistslist" class="dropDown">
                    <?php listArtists();?>
					
				</ul>
			</li>
			<li class="menulia" id="museums">Museums
				<ul id="museumslist" class="dropDown">
                    <?php listMuseums(); ?>
					
				</ul>
			</li>
		</ul>
	</div>
	

	<div class="column middle" style="background-color:#aaa">
		<img src="" id="preview">
	</div>
	

	<div class="column right" style="background-color:#eee" id="breifdesc">
		<p><a href="Art1.html" id="title">Title: </a></p><br>
		<p id="desc">Description: </p><br>
		<p id="price">Price: </p><br>		
		

		<div id="cartdialog" title="Shopping Cart">
			<p>Please enter details for your puschase.</p>
			<form>
				<fieldset>
					<label for="quantity">Quantity:<label>
					<input type="text" name="quantity"><br>
					<label for="shipping">Shipping</label><br>	
					<input type="radio" name="regular">Regular(1-2 weeks)<br>
					<input type="radio" name="express">Express(less than a week)<br>
					<input type="radio" name="sameday">Same-Day<br>			
				</fieldset>			
			</form>
		</div>
	</div>
	

</div>

<script src="scripts.js"></script>
<script src="jquery_scripts.js"></script>
<script src="functions.php"></script>

</body>
</html>
