<?php
include 'connectpatient.php';
session_start();
if (empty($_SESSION['username']) || $_SESSION['username'] =='') {
  header('location:login.php'); die();
}



if(isset($_POST['submit'])){
    $form_title=$_POST['form_title'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $maritalstatus=$_POST['maritalstatus'];
    $procedures=$_POST['procedures'];
    $ssn=$_POST['ssn'];
    $license=$_POST['license'];
    $billing=$_POST['billing'];
    $comment=$_POST['comment'];

    $sql= "INSERT INTO patients(title,firstname,middlename,lastname,dob,gender, maritalstatus,procedures, ssn,license,billing,comment) VALUES ( '$form_title','$firstname','$middlename','$lastname','$dob','$gender','$maritalstatus', '$procedures','$ssn','$license','$billing','$comment')";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted sussefully";
        header('location: display.php ');
    }else{
        die("connection failed:".mysqli_connect_error());
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Best Care</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
    </header>

    <div class="container my-3">
    <h2 class="mt-3"> BestCare EMR</h2><br>
        <form method="POST">
            <div class="form-group ">
                <label for="form_title"><strong>Title</strong></label>
                <select name="form_title" id="form_title" class="form-control mb-1" title="Title" >
                    <option value="">Unassigned</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Dr.">Other.</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label for="name"><strong>Name</strong></label>
                <input class="form-control my-1" type="text" id="firstname" name="firstname" title="Name" placeholder="First name" autocomplete="off" required> 
                <input class="form-control my-1" type="text" id="middlename" name="middlename" title="Name" placeholder="Middle name" autocomplete="off"> 
                <input class="form-control my-1 mb-1" type="text" id="lastname" name="lastname" title="Name" placeholder="Last name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="dob"><strong>Date Of Birth</strong></label>
                <input class="datepicker my-1" data-date-format="mm/dd/yyyy" type="date" id="dob" name="dob" title="Date of Birth" placeholder="dd/mm/yyyy" autocomplete="off">
            </div>
            <div class="form-group" >
                <div class="my-2" ><strong>Gender</strong>
                    <div class="form-check" >
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" required>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Other">
                        <label class="form-check-label" for="gender">
                            Other
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="my-2"><strong>Marital Status</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Single" required>
                        <label class="form-check-label" for="maritalstatus">
                            Single
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Married">
                        <label class="form-check-label" for="maritalstatus">
                            Married
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Divorced">
                        <label class="form-check-label" for="maritalstatus">
                            Divorced
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Widowed">
                        <label class="form-check-label" for="maritalstatus">
                            Widowed
                        </label>
                    </div>

                </div>
            </div>


            
            <div class="form-group">
                <div class="my-2"><strong>Procedures</strong>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Not Applicable" >
                        <label class="form-check-label" for="procedures">
                            Not Applicable
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Lab Test">
                        <label class="form-check-label" for="procedures">
                            Lab Test
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Urine Analysis">
                        <label class="form-check-label" for="procedures">
                            Urinalysis
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Others">
                        <label class="form-check-label" for="procedures">
                            Others
                        </label>
                    </div>

                </div>
            </div>

            <div class=" form-group my-3">
                <label for="ssn"><strong>Insurance Number</strong></label>
                <input class="form-control my-1" type="text" id="ssn" name="ssn" title="Insurance Number" autocomplete="off" placeholder="Insurance Number">
            </div>

            <div class="form-group">
                <label for="license"><strong>License/ID</strong></label>
                <input class="form-control my-1" type="text" id="license" name="license" title="License/ID Number" autocomplete="off" placeholder="License Number">
            </div>

            <div class="form-group my-3">
                <label  for="billing"><strong>Billing Note</strong></label>
                <input class="form-control my-1" type="text" id="billing" name="billing" title="Billing Note" autocomplete="off">
            </div>

            <div class="form-group"><br>
                <label> <strong>Comment</strong></label>
                <textarea class= "form-control" name="comment" rows="5" cols="150"></textarea>
                </br>
            </div>

            <div class="mt-4">
            <button type="submit" class="btn btn-primary" name="submit">Submit
            </button>
            <button type="submit" class="btn btn-danger" name="submit" >
            <a class="text-light" href="display.php">Close</a>
            </button>
            </div>

        </form>
    </div>



</body>

</html>