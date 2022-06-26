<?php
include 'connectpatient.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM patients WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted succesfully ";
        header('location:display.php');
    }else{
        die("connection failed:".mysqli_connect_error());
    }
}



?>