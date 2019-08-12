<?php
	
	require 'config.php';

	if (isset($_POST['submit'])){

		$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');
	

						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$answer4 = $_POST['answer4'];
						$answer1 = $_POST['answer1'];
						$answer2 = $_POST['answer2'];
						$answer3 = $_POST['answer3'];
						
						$usercheck = $firstname;

						$usercheck = "SELECT * FROM tblOrder1 WHERE Firstname = $usercheck;";
						$resultusercheck = mysqli_query($conn,$usercheck);

						$yes = count($resultusercheck);
						if ($yes>0){

							header('Location:/foodorder/error.php');
							echo "You have placed your order already";

						}	

						else{				
					
					$sql1 = "INSERT into tblOrder1 (Firstname,Lastname,Institution,Meat,Staple,Side) values ('$firstname','$lastname','$answer4','$answer1','$answer2','$answer3');";

					if(mysqli_query($conn,$sql1))
					{
						echo "Your lunch order was placed. Thank you";
					}

					else
					{
						echo "Failed to enter data";
					}

					mysqli_close($conn);

					
				}

					
}
	

	
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
     
      </h1>
      <h2 class="subtitle">
       

      </h2>
    </div>
  </div>
</section>


<div class="container">
	<div class="buttons are-medium is-outlined is-info">
  <a class="button" href="index.php">Place order</a>
  
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>