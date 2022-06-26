<?php
include "connectpatient.php";
session_start();
if (empty($_SESSION['username']) || $_SESSION['username'] =='') {
  header('location:login.php'); die();
}

extract($_POST);

if(isset($_POST['titleAdd_']) && isset($_POST['firstnameAdd_']) && isset  ($_POST['middlenameAdd_']) && isset($_POST['lastnameAdd_'])  && isset($_POST['dobAdd_']) && isset($_POST['sexAdd_'])  && isset($_POST['ssnAdd_']) && isset($_POST['licenseAdd_']) && isset($_POST['billingAdd_'])){

    $sql="INSERT INTO patient (title,firstname,middlename,lastname,dob,sex,ssn,license,billing)  VALUES ('$titleAdd_','$firstnameAdd_','$middlenameAdd_','$lastnameAdd_','$dobAdd_','$sexAdd_','$ssnAdd_','$licenseAdd_','$billingAdd_')";

    $result=mysqli_query($con,$sql);

}



?>