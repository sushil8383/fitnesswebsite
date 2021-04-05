 <?php
session_start();
//echo "welcome".$_SESSION['user_name'];
if($_SESSION['user_name']==true && $_SESSION['user_pass']==true )
{

}
else
{
  header('location:fitnesslogin.php');
}

?>

<?php

//$insert = false;

//if(isset($_POST['Name'])){
error_reporting(0);


  $server = "localhost:8111";
  $username = "root";
  $password = "";
  $db_name = "contactform";


  $con = mysqli_connect($server, $username, $password, $db_name);

  if(!$con)
  {
    die("connection to this database failed due to" .
    mysqli_connect_error());
  }

  //echo "success connecting to db";

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];
  

  $sql = "INSERT INTO contactform.contacttab( Name, Email, Message) VALUES ( '$name', '$email', '$message');";

  //echo $sql;



  if($con->query($sql) == true){
  //echo "successfully inserted";
  //$insert = true;
  }

  else{
    echo "ERROR: $sql <br> $con->error";

  }

  $con->close();



?>



<!DOCTYPE html>
<html>
<title>FitnessFreakHome</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
  <style>

    /*html{scroll-behavior: smooth;}*/
  
    .example{position: absolute;text-align: center;right: 300px; top: 100px;color: white;font-size: 40px;text-shadow: 2px 2px 2px;}

    @media screen and (max-width: 700px)
    {
      .example{position: absolute;text-align: center;right: 80px; top: 100px;color: white;font-size: 20px;text-shadow: 2px 2px 2px;}
    }
    @media screen and (max-width: 700px)
    {
      #navDemo{background-color: gray;}
    }

    #mySidebar{width: 100%;height: 300px;}

    #day4, #day5{display: none;}
    


  </style>
</head>
<body id="myPage">


<!-- Navbar -->
<div class="w3-top w3-xlarge ">
 <div class="w3-bar w3-theme-d2 w3-left-align" style="background-color: black;color: white;">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>FinessFreak</a>
  <!-- <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a> -->
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Workout</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Plan</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <a href="javascript:void(0)" style="cursor: context-menu;text-decoration: none;color:yellow " 
  class="w3-bar-item w3-text-decoration-none" name="welcome" ><?php echo "Welcome ".$_SESSION['user_name'];   ?></a>

   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" name="out" style="float: right; color: red;">Logout</a>

    <div class="w3-dropdown-hover w3-hide-small">
    <!-- <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button> -->     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
 
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-animate-right">
    
    <!-- <a href="#team" class="w3-bar-item w3-button">Team</a> -->
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Plan</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="logout.php" class="w3-bar-item w3-button">logout</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity" id="top">
  <img src="fitnessimage/fitness5.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
 
  <div class="example w3-animate-zoom">Fitness Freak</div>

</div>


<!-- Team Container 
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - our collage friends:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img  src="pic1.jpg" alt="Boss" style="width:45%; color: red;" class="w3-circle w3-hover-opacity">
  <h3>Sushil Kumar</h3>
  <p> Web Developer,Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="kushagra.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kushagra parmar</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="grace.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Grace Kabwe</h3>
  <p>Web Developer, Web Designer & Fixer</p>
</div>

<div class="w3-quarter">
  <img src="abhimanyu.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Abhimanyu Sharma</h3>
  <p>Support</p>
</div>

</div>
</div> -->

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Workout</h2>
<p>A healthy body and mind are essential to achieve complete wellbeing. If we are healthy, we can resist our bodies from being attacked by germs. Our bodies are really sensitive and therefore, must be handled with necessary precautions. We can develop healthy habits like eating and sleeping on time to boost our overall health. This helps in becoming a healthier version of ourselves. Holistic growth can be achieved if we focus on all the aspects of our health. Such as nutrition, wellness, spirituality, and mental health. There are plenty of exercises that will boost our physical health and help us to become stronger. A stronger body would lead to less fatigue while performing any activity.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white ">
  <!-- <img src="fitnessimage/fitness6.jpg" alt="Snow" style="width:100%"> -->
  <iframe src="https://www.youtube.com//embed//bBIH-0OvTYg"></iframe>
  <div class="w3-container">

  <h4>Day 1</h4>
  <p>Flat bench barbell press - 4 sets of 8 - 12 reps<br>
        Incline dumbbell press - 4 sets of 8 - 12 reps<br>
        Incline dumbbell flies - 3 sets of 10 reps<br>
        Cable crossovers - 3 sets of 15 reps<br>
        Push-ups - 4 sets of 20 reps</p><br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <!-- <img src="fitnessimage/fitness3.jpg" alt="Lights" style="width:100%"> -->
  <iframe src="https://www.youtube.com//embed//PUPiRVDTAEk"></iframe>
  <div class="w3-container">

  <h4>Day 2</h4>
  <p>
Seated dumbbell shoulder press – 4 sets of 12 reps<br>
Standing barbell military press – 4 sets of 10 -12 reps<br>
Dumbbell lateral raises – 4 sets of 12 reps<br>
Rear deltoid flyes – 3 sets of 15 reps<br>
EZ bar upright rows – 4 sets of 15 reps<br> 
        </p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <iframe src="https://www.youtube.com//embed//JjK1f6ubieo"></iframe>
  <div class="w3-container">
  <h4>Day 3</h4>
  <p>
Barbell squatBarbell squats – 4 sets of 8 – 10 reps<br>
Hack squats – 4 sets of 10 reps<br>
Leg press machine – 3 sets of 10 reps<br>
Leg extension machine – 3 sets of 10 reps<br>
Hamstring curls – 3 sets of 10 reps<br>
Calf raises – 3 sets of 20 reps
        </p>
  </div>
  </div>
</div>


<div id="day4" class="w3-quarter">
<div class="w3-card w3-white">
  <iframe src="https://www.youtube.com//embed//wTX5ya6zuYs"></iframe>
  <div class="w3-container">

  <h4>Day 4</h4>
  <p>
Pull Ups – 4 sets of 10 reps with 30-45 sec break<br>
Lat Pull Down – 4 sets of 10 reps<br>
Chest Press(Barbell) – 4 sets of 10 reps<br>
Chest Press(Dumbbell) – 4 sets of 10 reps<br>
Dumbbell Fly – 4 sets of 10 reps<br>
Squats – 4 sets of 15 reps
        </p>
  </div>
  </div>
</div>


<div id="day5" class="w3-quarter">
<div class="w3-card w3-white">
  <iframe src="https://www.youtube.com//embed//-SwqeFpf26Y"></iframe>
  <div class="w3-container">
  <h4>Day 5</h4>
  <p>
Alternate Dumbbell Curl – 4 sets of 8 – 10 reps<br>
Alternate Hammer Curl – 4 sets of 10 reps<br>
Barbell Curl(Ez Bar) – 3 sets of 10 reps<br>
Tricep Push Down – 4 sets of 10 reps<br>
Bench Dips – 4 sets of 10 reps<br>
Wrist Curls(Barbell) – 3 sets of 25 reps
        </p>
  </div>
  </div>
</div>






</div>

<!-- Container -->
 <div class="w3-container " style="position:relative">
  <a onclick="w3_open()" onclick="w3_close()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>
 
<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>Join Fitness Freak</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Gold Plan</p>
        </li>
        <li class="w3-padding-16">Access classes</li>
        <li class="w3-padding-16">Access to any classes</li> 
        <li class="w3-padding-16">Access to any 6 classes</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 90</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button id="gold" onclick="goldPlan()" class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Join Now</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Silver Plan</p>
        </li>
        <li class="w3-padding-16">unlimited gym access</li>
        <li class="w3-padding-16">Access to classes</li>
        <li class="w3-padding-16">valid for 6 months</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 75</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button id="sil" onclick="silverPlan()" class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i>Join Now</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Trial Membership</p>
        </li>
        <li class="w3-padding-16">Unlimited gym access</li>
        
        <li class="w3-padding-16">Access to all classes</li>
        <li class="w3-padding-16">valid for one month</li> 
        
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 35</h2>
          <span class="w3-opacity">1 month of unlimited service for 50% off!</span>
          
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button id="tr" onclick="trialMem()" class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i>Join Now</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-xxlarge">Contact Us</div>
    <div class="w3-col m5">
    

      <div class="w3-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.547479950197!2d77.30090721440381!3d28.49317159712688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce72750764457%3A0x1f2cb38f04a4dd7b!2sBadarpur%20Border!5e0!3m2!1sen!2sin!4v1605445555748!5m2!1sen!2sin" width="100%" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="#" method="POST">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>


<iframe src="https://www.youtube.com//embed//PUPiRVDTAEk" style="width: 100%;height: 350px;"></iframe>


<!-- Footer -->
<footer class="w3-container w3-padding w3-theme-d1 w3-center" style="background-color: black; color: white;">
  <h4 style="color: white;">Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Instagram"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Developed by: Sushil</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("day4");
  var y = document.getElementById("day5");
  x.style.display = "block";
  y.style.display = "block";
}


// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  x.style.display="block";
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }

}

  function trialMem(){
    document.getElementById("tr").innerHTML="processing..";
    location.replace("scantopay.php");

  }

  function silverPlan(){
    document.getElementById("sil").innerHTML="processing..";
    location.replace("scantopay.php");
  }

  function goldPlan(){
    document.getElementById("gold").innerHTML="processing..";
    location.replace("scantopay.php");
  }

  
</script>

</body>
</html>
