<?php require 'config.php';

if (isset($_POST['submit'])){

	$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
	mysqli_select_db($conn,$mysql_db) or die('Not such database present');
	

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$intname = $_POST['institution'];
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
						
	$sql2 = "INSERT into tblOrder1 (Firstname,Lastname,Institution, Meat,Staple,Side) values ('$firstname','$lastname','$intname','$answer1','$answer2','$answer3');";
}?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Order</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css.map">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>

<nav class="navbar is-info">
<div class="container">
<div class="navbar-brand">
      <a class="navbar-item" href="index.php" style="font-weight:bold;">
        <img src="images/ordering.png" width="50" height="50">
        DCS Lunch Ordering System
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
<div id="navMenu" class="navbar-menu">
<div class="navbar-end">
        <a href="index.php" class="navbar-item is-active">Home</a>
        <a href="#" class="navbar-item">About Us</a>
       
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
    </script>



<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
     <?php if(mysqli_query($conn,$sql2))
		{
			echo $firstname." ".$lastname." ";
			echo "Your lunch order was placed";
		}else{
				echo "Failed to enter data";
					}
?>
      </h1>
      <h2 class="subtitle">
     </h2>
    </div>
  </div>
</section>
<div class="container" style="padding-top: 10px;">
	<div class="buttons are-medium is-outlined is-info">
  <a class="button" href="index.php">Place order</a>
  
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<div style="padding-top: 10px;">
<footer class="footer" >
  <div class="content has-text-centered is-info">
    <p>
      <strong>Lunch Ordering System</strong> by Tywayne Buchanan </a>

    </p>
  </div>
</footer>
<div>
</html>