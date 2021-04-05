<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {

  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  justify-content: center;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;

}

input[type=text],input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body class="w3-teal w3-text-black">
<div class="w3-top">
      <button class="w3-teal w3-card "><a style="text-decoration: none;" href="home.php"><i class=" w3-text-red fa fa-backward">Back to home</i></a></button>
    </div>
<div class="row ">

  <div class="col-55">
    
    <div class="container w3-card">
      <form class="" action="home.php" method="post">
      
        
          <div class="col-50 ">
            <h3 class="w3-card w3-center w3-panel">Payment to Fitness Freak</h3>
            

            <label for="fname">Accepted Cards</label>
            <div class="icon-container">

              <i class="fa fa-cc-paypal" style="color:navy;"></i>
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input class="w3-card" type="text" id="cname" name="cardname" placeholder="Cardname" required>
            <label for="ccnum">Credit card number</label>
            <input class="w3-card" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input class="w3-card" type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input class="w3-card" type="text" id="expyear" name="expyear" placeholder="2022" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input class="w3-card" type="password" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> confirm
        </label> -->
        <button id="pay" onclick="payNow()" type="submit" value="Proceed to pay" class="btn w3-card">Proceed to pay</button>
      </form>
    </div>
  </div>
  
</div>

<script>
  function payNow() {
    var cname = document.getElementById("cname").value;
    var ccnum = document.getElementById("ccnum").value;
    var expmonth = document.getElementById("expmonth").value;
    var expyear = document.getElementById("expyear").value;
    var cvv = document.getElementById("cvv").value;
    if(cname=="" || ccnum=="" || expmonth=="" || expyear=="" || cvv=="")
      {  }
      else{
        
        alert("Payment Successfully Done");

      
      }
  
  }

</script>




</body>
</html>