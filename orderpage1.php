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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  
  <script>
  $('.navbar-item').each(function(e) {
    $(this).click(function(){
      if($('#navbar-burger-id').hasClass('is-active')){
        $('#navbar-burger-id').removeClass('is-active');
        $('#navbar-menu-id').removeClass('is-active');
      }
    });
  });


  $('#navbar-burger-id').click(function () {
    if($('#navbar-burger-id').hasClass('is-active')){
      $('#navbar-burger-id').removeClass('is-active');
      $('#navbar-menu-id').removeClass('is-active');
    }else {
      $('#navbar-burger-id').addClass('is-active');
      $('#navbar-menu-id').addClass('is-active');
    }
  });

</script>

</head>
<body>

<nav class="navbar is-info" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
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
        <a href="#" class="navbar-item is-active is-info">Home</a>
        <a href="#" class="navbar-item">View Your Orders</a>
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

<div class="container" style="padding-top: 10px;">
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
     What you like to do today?
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
 
  <footer class="card-footer">
    <a href="orderpage.php" class="card-footer-item">Place an Order</a>
    <a href="logout.php?logout" class="card-footer-item">Logout</a>
    
    
  </footer>
</div>
</div>




<div class="container">
  <div class="tile is-parent">
    <article class="tile is-child notification is-info">
      <div class="content">
        <p class="title">Your Lunch Order</p>
        <div class="title">
         <?php 
      
    
      $res = $_SESSION['Email'];
      $qryorder = "SELECT * FROM tblOrders WHERE Email1 = '$res' AND OrderTime = CURDATE()";
      $resultorder = mysqli_query($conn,$qryorder);
      $resultCheckorder = mysqli_num_rows($resultorder);
       if ($resultCheckorder > 0){
        while($row1 = $resultorder->fetch_assoc()) {
          echo $row1["Meat"]." with ".$row1["Staple"]." and ".$row1["Side"];
          echo "<br>";
          echo " Payment Method: ".$row1['PaymentMethod'];

          echo "<br>";
          echo "<br>";



          }
            
          } else { echo "You have not placed a lunch order"; }
          
          mysqli_close($conn);
?>
        </div>
      </div>
    </article>
  </div>
</div>
</div>
</div>



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