<?php require 'config.php';
session_start();

if (isset($_POST['submit'])){

	

}

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
        <a href="index.php" class="navbar-item is-active">Home</a>
        <a href="vieworders.php" class="navbar-item">View Orders</a>
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
   Your order was placed
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

<section class="section">
    <div class="container">
      <section class="section">
    <div class="container">
      <h1 class="title"></h1>
      <h2 class="subtitle">
        
      </h2>
    </div>
  </section>
    </div>
  </section>



<?php mysqli_close($conn); ?>
</body>
<div style="padding-top: 10px;">
<footer class="footer" >
  <div class="content has-text-centered is-info">
    <p>
      <strong>Lunch Ordering System</strong> by LADs </a>

    </p>
  </div>
</footer>
<div>
</html>