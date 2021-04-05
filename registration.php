<?php
session_start();
//header('location:fitnesslogin.php');


		$host = "localhost:8111";
		$user = "root";
		$password = "";
		$db_name = "userregistration";

		$con = mysqli_connect($host, $user,$password,$db_name);

		mysqli_select_db($con,"userregistration");

		$name = $_POST['user'];
		$pass = $_POST['password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];


		$s ="select * from logintable where name = '$name'";

		$result = mysqli_query($con, $s);

		$num = mysqli_num_rows($result);


		if($num == 1)
		{
		
			echo '<script>
		alert("data already taken");
		location.replace("fitnesslogin.php");
		
			</script>';

			
		}else{
			$reg = "insert into logintable(name , password , contact , email ) values('$name', '$pass', '$contact', '$email') ";
			mysqli_query($con, $reg);

			echo '<script>
		alert("registered successfully");
		location.replace("fitnesslogin.php");
			</script>';

			
		}



	



?>