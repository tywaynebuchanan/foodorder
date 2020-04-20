<?php 

session_start();

If(isset($_GET['logout']))
{
	session_destroy();
	header('Location:index.php');
}

?>