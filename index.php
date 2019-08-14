<?php require 'authen.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Order Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css.map">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	<link rel="shortcut icon" type="image/png" href="images/ordering.png"/>
	<script src="https://kit.fontawesome.com/aa5a4845ec.js"></script>
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


function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}
</script>

<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="" method = "post" class="box">
            <div class="field">
            	<label for="" class="label">Enter Login </label>
              <label for="" class="label">ID Number </label>
              <div class="control has-icons-left">
                <input type="text" name = "username" placeholder="Enter your Username" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-user-circle"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" name = "password" placeholder="" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            
            <div class="field">
              <button type="submit" class="button is-success" name = "submit">
                Login
              </button>
              
            </div>
          </form>
       <span><?php echo $error; ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

<div style="padding-top: 10px;">
<footer class="footer" >
  <div class="content has-text-centered is-info">
    <p>
      <strong>Lunch Ordering System</strong> by LADs</p>
  </div>
</footer>
<div>
</div>

</html>



