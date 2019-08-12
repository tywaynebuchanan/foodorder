<?php 
require 'config.php';

?>



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


<nav class="navbar container" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      <img src="images/ordering.png" width="" height="">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu cont">
    <div class="navbar-start">
      <a class="navbar-item" href="#">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
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


						$sql ="SELECT * FROM tblChefInput;";
						$result = mysqli_query($conn,$sql);
						$resultCheck = mysqli_num_rows($result);
						if ($resultCheck > 0){

						while($row = $result->fetch_assoc()) {
						echo "<h4> Meat: ". $row["Meat"]."</h4>";
						echo "<h4> Rice: " . $row["Rice"]. "</h4>";
						echo "<h4> Groud Provision: " . $row["Ground Provision"]. "</h4>";
						}
						
						} else { echo "0 results"; }
					
						$sql1 = "SELECT Institution FROM tblInstitution;";
						$resultSet = mysqli_query($conn,$sql1);




					?>

      </h2>
    </div>
  </div>
</section>
<div class="container is-widescreen">
  
</div>


<div>
	<form action="insert.php" method="POST">
	<div style="padding-top: 10px;">
		<div class="container is-widescreen">
			
				<label class="label"> First Name </label>
				<input class="input" type="text" name="firstname"  placeholder="Place your first name here" required>
			
		</div>
	</div>

	<div style="padding-top: 10px;">
		<div class="container is-widescreen">
		
				<label class="label"> Last Name </label>
				<input class="input" type="text" name="lastname" placeholder="Place your last name here" required >
			
		</div>
	</div>

	

	</div>

	<div class="control container" style="padding-top:10px;">
	  
	</div>

	<div class="control container" style="padding-top:10px;">
	  <label class="label"> Please select meat</label>
	  <label class="radio">

	    <input type="radio" name="answer1" value="Chicken" >
	    Chicken
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer1" value="Curry Goat">
	    Curry Goat
	  </label>
	</div>

	<div class="control container" style="padding-top:10px;">
	 
	 <label class="label"> Please select your staple</label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Rice and Peas">
	    Rice and Peas
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Plain Rice">
	    Plain Rice
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Ground Provision">
	    Ground Provision
	  </label>
	</div>

	<div class="control container" style="padding-top:10px;">
	   <label class="label"> Please select your side order</label>
	  <label class="radio">
	    <input type="radio" name="answer3" value="Mac and Cheese">
	    Mac and Cheese
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer3" value="Vegetables">
	   Vegetables
	  </label>
	</div>


<div class="container" style="padding-top: 10px;">
<div class="select is-rounded">
  <select name = "institution" class="container">
  	<option>Please select the institution where you work</option>
    <option value = "Metcalfe Street">Metcalfe Street</option>
    <option value = "Richmond Farm">Richmond Farm</option>
    <option value = "General Penitentiary">General Penitentiary</option>
    <option value = "Prison Oval">Prison Oval</option>
    <option value = "South Camp">South Camp (Girls)</option>
    <option value = "Horizon Remand Centre">Horizon Remand Centre</option>
    <option value = "Fort Augusta(South Camp">Fort Augusta</option>
    
  </select>
</div>
</div>
	<div class="control container" style="padding-top: 10px;">
  		<button class="button is-info is-outlined" name="submit">Submit</button>
	</div>

</form>
</div>
<div class="container">

	
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>