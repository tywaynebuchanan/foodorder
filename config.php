<?php
$conn_error = "Could not connect";
$db_host = 'remotemysql.com';
$db_user ='6MSDbfszCd';
$db_password ='Hcb9hnZTph';

$mysql_db ='6MSDbfszCd';

$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');


?>