<?php
include "connectpatient.php";
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}



//echo "Welcome ".$_SESSION['username'];
//$_SESSION['id'] ;

if (isset($_POST['display'])) {
    $table = '<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">S/No</th>
        <th scope="col">Firstname</th>
        <th scope="col">Last Name</th>
        <th scope="col">SSN</th>
        <th scope="col">Action</th>
      </tr>
    </thead>';
    $sql = "SELECT * FROM patients ";
    $result = mysqli_query($con, $sql);
    $number = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $ssn = $row['ssn'];
        //concatenate the table row
        $table .= '<tr>
        <td scope="row">' . $number . '</td>
        <td>' . $firstname . '</td>
        <td>' . $lastname . '</td>
        <td>' . $ssn . '</td>
        <td>
        <button class="btn btn-dark" onclick="update(' . $id . ')">Update</button>
        <button class="btn btn-danger"  onclick="deletepatient('.$id.')">Delete</button>
        
        </td>
      </tr>';
        $number++; //auto increase the serial number
    }
    $table .= '</table>';
    echo $table;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Patients</title>
  </head>
  <body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Best Care</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3 btn-secondary" href="dashboard.php">Dashboard</a>
            </div>
        </div>
    </header>

  <div class="container">
  <h3 class="mt-3"> BestCare EMR</h3>
    <button class="btn btn-dark my-3"><a href="patient.php" class="text-light">Add Patient</a>
      </button>

      <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">S/No</th>
        <th scope="col">Firstname</th>
        <th scope="col">Last Name</th>
        <th scope="col">Insurance Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
     $sql = "SELECT * FROM patients ";
     $result = mysqli_query($con, $sql);
     $number = 1;
     while ($row = mysqli_fetch_assoc($result)) {
         $id = $row['id'];
         $firstname = $row['firstname'];
         $lastname = $row['lastname'];
         $ssn = $row['ssn'];
         //concatenate the table row
         echo '<tr>
         <td scope="row">' . $number . '</td>
         <td>' . $firstname . '</td>
         <td>' . $lastname . '</td>
         <td>' . $ssn . '</td>
         <td>
         <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
         <button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
         
         </td>
       </tr>';
         $number++; //auto increase the serial number
     }
    


    ?>

    </tbody>

  </div>

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>