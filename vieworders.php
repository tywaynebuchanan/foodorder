<?php require 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Order</title>
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
        <a href="#" class="navbar-item">View Orders</a>
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



<div style="padding-top: 10px;">
 <table class="table container  is-bordered is-striped is-narrow is-hoverable" >
  <thead>
    <tr>
     
      <th>First Name</th>
      <th>Last Name</th>
      <th>Institution</th>
      <th>Meat</th>
      <th>Staple</th>
      <th>Side</th>
 
    </tr>
  </thead>   
 
<tbody>
     <?php 

			$qryView ="SELECT * FROM tblOrder1;";
			$result = mysqli_query($conn,$qryView);
			$resultCheck = mysqli_num_rows($result);
			 if ($resultCheck > 0){
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"] . "</td><td>". $row["Institution"]. "</td><td>".$row["Meat"]. "</td><td>". $row["Staple"]."</td><td>". $row["Side"]."</td></tr>";
						
					} 

					}
					else {echo "0 resuls";}

			
?>
</tbody>
</table>

</div>





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