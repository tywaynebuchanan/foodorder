<? php 

require 'config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];

	$sql = "INSERT into tblOrder1 (Firstname,Lastname,Meat,Rice,Side) values ('$firstname','$lastname','$answer1','$answer2','$answer3');";
	
	mysqli_query($conn,$sql);

	echo "Data entered";



?>