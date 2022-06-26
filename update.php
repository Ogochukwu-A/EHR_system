<?php
include 'connectpatient.php';



$id = $_GET['updateid'];
$sql = "SELECT * FROM patients WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);



//$form_title = $row['form_title'];
$firstname = $row['firstname'];
$middlename = $row['middlename'];
$lastname = $row['lastname'];
$dob = $row['dob'];
$gender = $row['gender'];
$maritalstatus = $row['maritalstatus'];
$procedures = $row['procedures'];
$ssn = $row['ssn'];
$license = $row['license'];
$billing = $row['billing'];
$comment = $row['comment'];





if (isset($_POST['submit'])) {
    $form_title = $_POST['form_title'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $maritalstatus = $_POST['maritalstatus'];
    $procedures = $_POST['procedures'];
    $ssn = $_POST['ssn'];
    $license = $_POST['license'];
    $billing = $_POST['billing'];
    $comment = $_POST['comment'];

    $sql = "UPDATE patients set id='$id', title='$form_title', firstname='$firstname', middlename='$middlename', lastname='$lastname', dob='$dob', gender='$gender',  maritalstatus='$maritalstatus', procedures='$procedures', ssn='$ssn', license='$license', billing='$billing',comment='$comment' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data updated sussefully";
        header('location: display.php ');
    } else {
        die("connection failed:" . mysqli_connect_error());
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
                <select name="form_title" id="form_title" class="form-control mb-1" title="Title" <?php echo $form_title; ?>>
                    <option value="">Unassigned</option>
                    <option value="Mr." >Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Dr.">Other.</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label for="name"><strong>Name</strong></label>
                <input class="form-control my-1" type="text" id="firstname" name="firstname" title="Name" placeholder="First name" autocomplete="off" value=<?php echo $firstname; ?>>
                <input class="form-control my-1" type="text" id="middlename" name="middlename" title="Name" placeholder="Middle name" autocomplete="off" value=<?php echo $middlename; ?>>
                <input class="form-control my-1 mb-1" type="text" id="lastname" name="lastname" title="Name" placeholder="Last name" autocomplete="off" value=<?php echo $lastname; ?>>
            </div>
            <div class="form-group">
                <label for="dob"><strong>Date Of Birth</strong></label>
                <input class="datepicker my-1" data-date-format="mm/dd/yyyy" type="date" id="dob" name="dob" title="Date of Birth" placeholder="dd/mm/yyyy" autocomplete="off" value=<?php echo $dob; ?>>
            </div>
            <div class="form-group">
                <div class="my-2"><strong>Gender</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" <?php if ($gender == 'Male') echo 'checked="checked"'; ?>required>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" <?php if ($gender == 'Female') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Other" <?php if ($gender == 'Other') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="gender">
                            Other
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="my-2"><strong>Marital Status</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Single" <?php if ($maritalstatus == 'Single') echo 'checked="checked"'; ?> required>
                        <label class="form-check-label" for="maritalstatus">
                            Single
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Married" <?php if ($maritalstatus == 'Married') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="maritalstatus">
                            Married
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Divorced" <?php if ($maritalstatus == 'Divorced') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="maritalstatus">
                            Divorced
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="maritalstatus" id="maritalstatus" value="Widowed" <?php if ($maritalstatus == 'Widowed') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="maritalstatus">
                            Widowed
                        </label>
                    </div>

                </div>
            </div>



            <div class="form-group">
                <div class="my-2"><strong>Procedures</strong>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Not Applicable" <?php if ($procedures == 'Not Applicable') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="procedures">
                            Not Applicable
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Lab Test" <?php if ($procedures == 'Lab Test') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="procedures">
                            Lab Test
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Urine Analysis" <?php if ($procedures == 'Urine Analysis') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="procedures">
                            Urinalysis
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="procedures" id="procedures" value="Others" <?php if ($procedures == 'Others') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="procedures">
                            Others
                        </label>
                    </div>

                </div>
            </div>

            <div class=" form-group my-3">
                <label for="ssn"><strong>Insurance Number</strong></label>
                <input class="form-control my-1" type="text" id="ssn" name="ssn" title="Insurance Number" autocomplete="off" placeholder="Insurance Number" value=<?php echo $ssn; ?>>
            </div>

            <div class="form-group">
                <label for="license"><strong>License/ID</strong></label>
                <input class="form-control my-1" type="text" id="license" name="license" title="License/ID Number" autocomplete="off" placeholder="License Number" value=<?php echo $license; ?>>
            </div>

            <div class="form-group my-3">
                <label  for="billing"><strong>Billing Note</strong></label>
                <input class="form-control my-1" type='text' id="billing" name="billing" title="Billing Note" autocomplete="off" value=<?php echo $billing; ?> >
            </div>

            <div class="form-group"><br>
                <label> <strong>Comment</strong></label>
                <textarea class="form-control" name="comment" <?php echo $comment; ?>rows="5" cols="150"><?php echo $comment; ?></textarea>
                </br>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary" name="submit">Update
                </button>
                <button type="submit" class="btn btn-danger" name="submit">
                    <a class="text-light" href="display.php">Close</a>
                </button>
            </div>

        </form>
    </div>



</body>

</html>