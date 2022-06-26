<?php

$con=new mysqli('localhost', 'root', '','bestcare');



if(!$con){
    die("connection failed:".mysqli_connect_error());
}


?>