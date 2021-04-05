<?php
session_start();
header('location:home.php');
?>

<?php
if(isset($_POST['login']))
{

$host = "localhost:8111";
$user = "root";
$password = "";
$db_name = "userregistration";

$con = mysqli_connect($host, $user,$password,$db_name);

mysqli_select_db($con,"userregistration");

$name = $_POST['user'];
$pass = $_POST['password'];



$s ="select * from logintable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['user_name']=$name;
	$_SESSION['user_pass']=$pass;
	header('location:home.php');
	
}
else{

		echo '<script>
		alert("data not found");
		location.replace("fitnesslogin.php");
			</script>';

	//header('location:fitnesslogin.php');

	}

}



?>