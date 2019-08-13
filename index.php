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
        <img src="images/ordering.png" width="50" height="50">
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
					
						$qryInt = "SELECT Institution FROM tblInstitution;";
						$resultSet = mysqli_query($conn,$qryInt);
						mysqli_close($conn);
?>

      </h2>
    </div>
  </div>
</section>

</div>
 


<div>
	<form action="insert.php" method="POST">
		<div style="padding-top: 10px;">
			<div class="container is-widescreen">
					<label class="label"> First Name </label>
					<input class="input is-rounded" type="text" name="firstname"  placeholder="Place your first name here" required>
			</div>
		</div>
			<div style="padding-top: 10px;">
				<div class="container is-widescreen">
					<label class="label"> Last Name </label>
					<input class="input is-rounded" type="text" name="lastname" placeholder="Place your last name here" required >
			</div>
		</div>
	</div>

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
<div class="container" style="padding-top: 10px;">
	<div class="select is-rounded">
	  <select name = "institution" class="container" required>
	  	<option selected disabled>Please select the institution where you work</option>
	    <option value = "Metcalfe Street" >Metcalfe Street</option>
	    <option value = "Richmond Farm" >Richmond Farm</option>
	    <option value = "General Penitentiary" >General Penitentiary</option>
	    <option value = "Prison Oval" >Prison Oval</option>
	    <option value = "South Camp" >South Camp (Girls)</option>
	    <option value = "Horizon Remand Centre" >Horizon Remand Centre</option>
	    <option value = "Fort Augusta(South Camp" >Fort Augusta</option>
	   </select>
	</div>
</div>
	<div class="control container" style="padding-top: 10px;">
  		<button onclick="myFunction()" class="button is-info is-outlined" name="submit">Submit</button>
	</div>
</form>
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