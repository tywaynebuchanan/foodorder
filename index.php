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
</head>
<body>


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
					


			



					?>

      </h2>
    </div>
  </div>
</section>
<div class="container is-widescreen">
  
</div>
<?php

if()	

		
if (isset($_POST['submit'])){
						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$answer1 = $_POST['answer1'];
						$answer2 = $_POST['answer2'];
						$answer3 = $_POST['answer3'];

						$sql1 = "INSERT into tblOrder1 (Firstname,Lastname,Meat,Rice,Side) values ('$firstname','$lastname','$answer1','$answer2','$answer3');";

					if(mysqli_query($conn,$sql1))
					{
						echo "Record added Successfully";
					}

					else
					{
						echo "Failed to enter data";
					}

					mysqli_close($conn);
}
						
					
					



		

						

	
	
	
?>

<div>
	<form action="index.php" method="POST">
	<div style="padding-top: 10px;">
		<div class="container is-widescreen">
			
				<label class="label"> First Name </label>
				<input class="input" type="text" name="firstname"  placeholder="Place your first name here">
			
		</div>
	</div>

	<div style="padding-top: 10px;">
		<div class="container is-widescreen">
		
				<label class="label"> Last Name </label>
				<input class="input" type="text" name="lastname" placeholder="Place your last name here" >
			
		</div>
	</div>

	<div class="control container" style="padding-top:10px;">
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
	  <label class="radio">
	    <input type="radio" name="answer2" value="Rice and Peas">
	    Rice and Peas
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer2" value="Plain Rice">
	    Plain Rice
	  </label>
	</div>

	<div class="control container" style="padding-top:10px;">
	  <label class="radio">
	    <input type="radio" name="answer3" value="Mac and Cheese">
	    Mac and Cheese
	  </label>
	  <label class="radio">
	    <input type="radio" name="answer3" value="Vegetables">
	   Vegetables
	  </label>
	</div>

	<div class="control container" style="padding-top: 10px;">
  		<button class="button is-primary" name="submit">Submit</button>
	</div>

</form>
	
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>