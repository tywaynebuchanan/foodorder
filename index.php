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










<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>