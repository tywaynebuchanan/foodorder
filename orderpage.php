<?php require 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Order</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css.map">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	<link rel="shortcut icon" type="image/png" href="images/ordering.png"/>
</head>
<body>

<nav class="navbar is-info">
<div class="container">
<div class="navbar-brand">
      <a class="navbar-item" href="index.php" style="font-weight:bold;">
        <img src="images/ordering.png" width="25" height="25">
        Lunch Ordering System
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
<div id="navMenu" class="navbar-menu">
<div class="navbar-end">
        <a href="#" class="navbar-item is-active">Home</a>
        <a href="vieworders.php" class="navbar-item">View Orders</a>
        <a href="#" class="navbar-item">About Us</a>
        <a href="#" class="navbar-item"><?php            
if (isset($_SESSION['Email']))
{
 echo 'Welcome '. $_SESSION['Email'];
 
}
 else
 {
 		header('Location:index.php');
 }

?> 

<a href="logout.php?logout" class="navbar-item">Logout</a>
                    
      </div>
</div>
</div>
</nav>
<script type="text/javascript">
      (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);

        burger.addEventListener('click', function(){
          burger.classList.toggle('is-active');
          nav.classList.toggle('is-active');
        });
      })();


function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}
</script>

     

<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Menu for the Day
      </h1>
      <h2 class="subtitle">
        <?php 

			$qryMenu ="SELECT * FROM tblChefInput;";
			$result = mysqli_query($conn,$qryMenu);
			$resultCheck = mysqli_num_rows($result);
			 if ($resultCheck > 0){
				while($row = $result->fetch_assoc()) {
					echo "<h4> Meat: ". $row["Meat"]."</h4>";
					echo "<h4> Rice: " . $row["Rice"]. "</h4>";
					echo "<h4> Groud Provision: " . $row["Ground Provision"]. "</h4>";
					}
						
					} else { echo "0 results"; }
					
						
						
?>

      </h2>
    </div>
  </div>
</section>

</div>

<div  class="container" style="padding-top: 10px;">
<nav class="level-left">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Your Lunch Order</p>
      <p class="title">
      	
			<?php 
			
			$res = $_SESSION['Email'];
			$qryorder = "SELECT * FROM tblOrders WHERE Email1 = '$res'";
			$resultorder = mysqli_query($conn,$qryorder);
			$resultCheckorder = mysqli_num_rows($resultorder);
			 if ($resultCheckorder > 0){
				while($row1 = $resultorder->fetch_assoc()) {
					echo $row1["Meat"]." with ".$row1["Staple"]." and ".$row1["Side"];

					}
						
					} else { echo "You have not placed a lunch order"; }
					
					mysqli_close($conn);
?>



      </p>
     
    </div>
  </div>
</nav>
</div>

<div>
	<form autocomplete="off" action="insert.php" method="POST">
		<div style="padding-top: 10px;">
		<div class="control container" style="padding-top:10px;">
	  <label class="label"> Please select meat</label>
	  	<label class="radio">
	    <input type="radio" name="answer1" value="Chicken" required>
	    Chicken
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer1" value="Curry Goat" required>
	    Curry Goat
	  </label>
	</div>

	<div class="control container" style="padding-top:10px;">
	  <label class="label"> Please select your staple</label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Rice and Peas" required>
	    Rice and Peas
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Plain Rice" required>
	    Plain Rice
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Ground Provision" required>
	    Ground Provision
	  </label>
	</div>

	<div class="control container" style="padding-top:10px;">
	   <label class="label"> Please select your side order</label>
	  <label class="radio">
	    <input type="radio" name="answer3" value="Mac and Cheese" required>
	    Mac and Cheese
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer3" value="Vegetables" required>
	   Vegetables
	  </label>
	</div>

	<div class="control container" style="padding-top: 10px;">
  		<button onclick="myFunction()" class="button is-info is-outlined" name="submit">Place Order</button>
	</div>
</form>
</div>



<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</body>

<div style="padding-top: 10px;">
<footer class="footer" >
  <div class="content has-text-centered is-info">
    <p>
      <strong>Lunch Ordering System</strong> by LADs</p>
  </div>
</footer>
<div>
</html>