<?php require 'config.php';
session_start();
$error = "";

If(isset($_POST['submit'])){

	if(empty($_POST['username']) || empty($_POST['password'])){

		$error = "User Name or Password is invalid";
		}

		else{

			$user = $_POST['username'];
			$password = $_POST['password'];
			$qry = "SELECT * FROM tblusers WHERE Email = '$user' AND Password ='$password';";
			$result = mysqli_query($conn,$qry);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck ==1){
				$_SESSION['Email'] = $_POST['username'];
				header("Location:orderpage.php");
			}
			else
			{
				$error= "User name or Password is Invalid";
			}
			mysqli_close($conn);
		}
}


?>


