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
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
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
        <a href="vieworders.php" class="navbar-item">View Your Orders</a>
        <a href="#" class="navbar-item">About Us</a>
        <a href="#" class="navbar-item"><?php            
if (isset($_SESSION['Email']))
{
 echo 'Welcome '. $_SESSION['Email'];
 
}
 $res = $_SESSION['Email'];
?> 

<a href="logout.php?logout" class="navbar-item">Logout</a>
                    
      </div>
</div>
</div>
</nav>

<div class=" container" style="padding-top: 10px;">
      <button class="button is-info is-outlined" type="submit" name="submit">August</button>
      <?php 
        $res = $_SESSION['Email'];
        if (isset($_GET['submit'])) {
      
      
      $filterbymonth = "SELECT * FROM tblOrders WHERE Email1 = $res AND OrderTime = '2019-08-19'";
      $resultsfilter = mysqli_query($conn,$filterbymonth);
      $resultCheckorder = mysqli_num_rows($resultsfilter);
      
      if ($resultsfilter > 0) {
        while ($row1 = $filterbymonth->fetch_assoc()){

          echo "<tr><td>" . $row1["Meat"]. "</td><td>" . $row1["Staple"] . "</td><td>"
            . $row1["Side"]. "</td><td>".$row1["PaymentMethod"]."</td></tr>";
          echo "</table>";
      }
    }else{
        echo "0 results";
      }
    
  }
?>

  
  </div>



<div style="padding-top: 10px;">
 <table class="table container  is-bordered is-striped is-narrow is-hoverable" >
  <thead>
     <caption><strong>

     </strong></caption>
     <tr>
      <th>Lunch Order Detials</th>
       <tr><th> <?php echo date('M j Y')?></th></tr>
    </tr>
  </thead>   
 
<tbody>
     <?php 


      
			$qryView ="SELECT * FROM tblOrders WHERE Email1 = '$res';";
			$result = mysqli_query($conn,$qryView);
			$resultCheck = mysqli_num_rows($result);
			 if ($resultCheck > 0){
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["Meat"]. "</td><td>" . $row["Staple"] . "</td><td>". $row["Side"]. "</td><td>".$row["OrderTime"]. "</td><td>". $row["PaymentMethod"]."</tr></td>";
						
					} 

					}
					else {echo "<tr><td> 0 results </td></tr>";}

			
?>
</tbody>
</table>

</div>


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