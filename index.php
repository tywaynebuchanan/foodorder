<?php 
require 'config.php';

if(isset($_POST['submit'])){

	$FirstName=$_POST['firstname'];
	$LastName=$_POST['lastname'];
	$Inst=$_POST['InstOption'];

	$sql_query ="INSERT into tblCustomer (FirstName,LastName,Institution) VALUES ($FirstName,$LastName,$Inst);";

	if(mysqli_query($conn,$sql_query))
	{
		echo "Your Lunch Order was Placed";

	}
	else
	{
		echo "No lunch for you today";
	}

}
	


?>



<!DOCTYPE html>
<html>
<head>
	<title>Food Order</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

<div class="container" style="margin-top: 10px;">
<div class="card">
  <div class="card-header">
    <h3>Menu for the day </h3>
  </div>
  <div class="card-body">
       <p class="card-text">
    	
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




    </p>
   
  </div>
</div>
</div>


<div class="container">
	<form style="padding-top: 10px; margin: 0 auto;" action="index.php" method="post">
	  <div class="form-group">
	    First Name
	    <input type="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter your name">
	  </div>
	  <div class="form-group">
	    Last Name
	    <input type="lastname" class="form-control" id="exampleInputPassword1" placeholder="Please enter last name">
	  </div>
	</form>


    <div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="institution">
	  <label class="form-check-label" for="inlineCheckbox1">Metcalfe Street</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="institution">
	  <label class="form-check-label" for="inlineCheckbox2">Richmond</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="institution">
	  <label class="form-check-label" for="inlineCheckbox3">General Penitentiary</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="institution">
	  <label class="form-check-label" for="inlineCheckbox3">Prison Oval</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="institution">
	  <label class="form-check-label" for="inlineCheckbox3">South Camp</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="institution">
	  <label class="form-check-label" for="inlineCheckbox3">Horizon Remand Center</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="institution">
	  <label class="form-check-label" for="inlineCheckbox3">Fort Augusta (south camp)</label>
	</div>

</div>



<div class="container">

	<h4> Select Meat</h4>
</div>
<div class="container" style="margin-top:10px;">

<div class="form-group form-check">
		  <div class="form-check form-check-inline">

		<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="menoption">
	  <label class="form-check-label" for="inlineCheckbox3">Fried Chicken</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="menoption">
	  <label class="form-check-label" for="inlineCheckbox3">Curry Goat</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="menoption">
	  <label class="form-check-label" for="inlineCheckbox3">Chicken Chop Suey</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="menoption">
	  <label class="form-check-label" for="inlineCheckbox3">Chicken</label>
	</div>
		</div>
	  </div>


<div class="container">

	<h4> Select Staple </h4>
</div>


 <form action="" name="formName">
            <input type="radio" name="level" value="8">Plain Rice<br> 
            <input type="radio" name="level" value="4">Rice<br>
            <input type="radio" name="level" value="2">Ground Provision<br>        
          </form>  

<button type="submit" class="btn btn-primary">Submit</button>
</div>




</div>







<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>