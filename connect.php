<?php

$hostname= "localhost";
$db_username = "root";
$db_password = "";
$db_name = "bestcare";

//creating a connection
$con=mysqli_connect($hostname,$db_username,$db_password,$db_name);


$error = mysqli_error($con);
print("".$error);



?>