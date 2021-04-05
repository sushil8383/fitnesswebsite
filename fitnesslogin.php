<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style >
		body{
			height: 800px;
			
		}

		.container{

			margin-top: 10px;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			background-color:rgb(0,0,0);
			color:white;
			width: auto;
			height: auto; 
			

		}
		.container:hover{box-shadow: 10px 10px 30px black;}

		#log{
			display: none;
			width: 100%;
			float: left;
		}
		#regi{
			width: 100%;
			float: left;
		}
	

	</style>
</head>
<body class="w3-container w3-gray">

	<div class="container w3-card  ">

		<div class="row " >
			<div>
			<img class="img"  src="fitnessimage/fitness5.jpg" style="width: 100%;height: 250px;">
			<h1 class="w3-teal w3-center w3-animate-zoom  " style="position: relative; padding: 15px;text-shadow: 2px 2px 2px;">FITNESS FREAK</h1>
		
			<div class="w3-animate-zoom " id="log">
				<h4>Login</h4>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary" name="login">Login</button>
				
				</form>
			</div>
			<div class="" id="regi" >
				<h4 class="w3-xxlarge">Sign Up</h4><h5>Already registered? <a href="#log" id="hide" class="btn btn-primary" onclick="document.getElementById('log').style.display='block'">Log in</a></h5>
				<form action="registration.php" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input id="user" type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Create Password</label>
						<input id="password" type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and one lowercase letter,and at least 8 or more characters" required>
					</div>

					<div class="form-group">
						<label>Contact Number</label>
						<input id="contact" type="text" name="contact" class="form-control" pattern="(?=.*[0-9]).{10}" title="must be of 10 digits" required>
					</div>

					<div class="form-group">
						<label>Emaid-Id</label>
						<input id="email" type="email" name="email" class="form-control" required>
					</div>

					<button id="reg" type="submit" name="signup" class="btn btn-primary" onclick="regS()">Register</button>
				
				</form>
			</div>
		</div>		
	</div>
	<div class="w3-animate-zoom w3-container w3-teal w3-center w3-margin w3-card">
	
		<div class=" w3-container w3-teal w3-center w3-margin w3-card">
	<p class=" w3-panel w3-red w3-mobile"><hr>Developers Contact<br>
		<img class="w3-circle" style="width: 100px; height100px;" src="pic1.jpg"><hr>
		<p class=" w3-panel w3-mobile"><i style="cursor: pointer;" class="fa fa-instagram w3-indigo w3-card w3-round-xxlarge w3-padding">wecallit_3d</i></p>

		<i class="fa fa-phone w3-indigo w3-card w3-round-xxlarge w3-padding">+91 8383861137</i></p>
	

	<p class=" w3-panel w3-mobile"><i class="fa fa-envelope w3-indigo w3-card w3-round-xxlarge w3-padding">dddtripled5102001@gmail.com</i></p>
</div>
<div class="w3-container">
	<video width="300px" height="250px" loop autoplay >
		<source src="video.mp4" type="">
	</video>
</div>

<div class=" w3-container w3-teal w3-center w3-margin w3-padding w3-card">
	<p class=" w3-panel w3-red w3-mobile"><hr>Follow us on<br><i style="cursor: pointer;" class="fa fa-facebook w3-indigo w3-card w3-round-xxlarge w3-padding"></i>
		<i style="cursor: pointer;" class="fa fa-twitter w3-blue w3-card w3-round-xxlarge w3-padding w3-margin"></i>
		<i style="cursor: pointer;" class="fa fa-google w3-red w3-card w3-round-xxlarge w3-padding w3-margin"></i>
		<i style="cursor: pointer;" class="fa fa-instagram w3-red w3-card w3-round-xxlarge w3-padding"></i></p></div>

</div>

	</div>	
	<script>
		$(document).ready(function(){
			$("#hide").click(function(){
				$("#hide").hide();
				$("#regi").hide();
			})
		})
		
	</script>	
</body>
</html>