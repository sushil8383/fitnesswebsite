<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<style>
	.fa{cursor: pointer;}
</style>
</head>
<body>
	<div class="w3-container w3-teal w3-margin w3-animate-zoom w3-card w3-padding-48  ">
		<div class="w3-half">
			<button class="w3-btn"><a style="text-decoration: none;" href="home.php"><i class="fa fa-backward"> BACK TO HOME</i></a></button>
			<header class="w3-panel w3-card w3-center w3-padding w3-xxlarge">Fitness Freak</header>
			<div class="w3-container">
				<strong>To Pay Fitness Freak <br>Scan this QR-CODE<i class="fa fa-forward w3-padding"></i></strong>
			</div>
		</div>
		<div class="w3-half ">
			<img class="w3-card " style="width: 50%;height: 50%;" src="IMG_20201108_123153.jpg">
			<div class="w3-container">
				<p>or pay using </p>

              <i class="fa fa-cc-paypal" style="color:navy;"></i>
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
              <button id="click" onclick="clicMe()"; class="w3-btn w3-border-none"><a style="text-decoration: none;" href="#payment.php"> click here</a></button>
			</div>
			
		</div>
		

		</div>
		</div>
		
		</div>

		<div class="w3-container">
			<div class="w3-container w3-black w3-padding">
				<footer class="w3-panel w3-center">Follow Us on <i class="fa fa-facebook w3-card w3-round-xxlarge w3-padding w3-indigo"></i>
				<i class="fa fa-twitter w3-card w3-round-xxlarge w3-padding w3-blue"></i>
			<i class="fa fa-google w3-card w3-round-xxlarge w3-padding w3-red"></i>
		<i class="fa fa-instagram w3-card w3-round-xxlarge w3-padding w3-pink "></i></footer>
			</div>
		
		<script>
			function clicMe() {
				document.getElementById('click');

				location.replace("payment.php");
				
				//alert("Sorry! for inconvenience we are working on it.")
			}


		</script>

			
	
</body>
</html>