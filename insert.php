<?php require 'config.php';
session_start();

$id = $_SESSION['Email'];
$error = "";
$success = "";
if (isset($_POST['submit'])){


    $answer = htmlentities($_POST['answer1']);
    $answer1 = htmlentities($_POST['answer2']);
    $answer2 = htmlentities($_POST['answer3']);
    $payment = htmlentities($_POST['payment']);
   

	$sql = "INSERT INTO tblOrders (Email1,Meat,Staple,Side,PaymentMethod) VALUES ('$id','$answer','$answer1','$answer2','$payment')";





   if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Your lunch order was placed'); 
    window.location ='orderpage1.php'</script>";
    
} else {
     echo "<script> alert('Your lunch order was not placed'); 
    window.location ='orderpage.php'</script>";
     
}

}

     

mysqli_close($conn); ?>
