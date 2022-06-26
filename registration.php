<?php
$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);
    $sql = "SELECT * FROM user WHERE username='$username'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            //echo "Username already taken, please create another username";
            $user = 1;
        } else {
            $sql = "INSERT INTO user(firstname,lastname,email,username,password) VALUES('$firstname', '$lastname', '$email', '$username','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                //echo "Account created";
                $success = 1;

                echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Account created successfully. </strong> Go to login page and enter credentials.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

                //header('location:login.php');
            }
        }
    }
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

    <style>
        .container {
            font-weight: bold;
        }
    </style>
    <title>Doctor Registration</title>
</head>

<body>
    <?php
    if ($user) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Username is taken! </strong> Please create another username
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
     
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">BestCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">LogIn</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <form action="registration.php" method="post">
            <div class="reg">
                <div class="container">

                    <div class="row">
                        <div class=" col-sn-3">
                            <h2> New Doctor Account Registration</h2>
                            <p>Fill the form with the right information.</p>
                            <hr class="mb-3">
                            <label for="firstname"><b>First Name</b></label>
                            <input class="form-control" type="text" id="floatingInput" name="firstname" placeholder="Enter first name" autocomplete="off" required>

                            <label for="lastname"><b>Last Name</b></label>
                            <input class="form-control" type="text" name="lastname" placeholder="Enter last name" autocomplete="off" required>

                            <label for="email"><b>Email Address</b></label>
                            <input class="form-control" type="email" name="email" placeholder="Enter your email address" autocomplete="off" required>

                            <label for="username"><b>Username</b></label>
                            <input class="form-control" type="text" name="username" placeholder="Create your username" autocomplete="off" required>

                            <label for="password"><b>Password</b></label>
                            <input class="form-control" type="password" name="password" placeholder="Create Password" autocomplete="off" required>
                            <hr class="mb-3">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="create" value="Sign Up">Sign Up</button>
                    <div class="mt-4">
                        <div class="">
                            Already have an account? <a href="login.php" class="ml-2"> <b> Log In</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div>
        <p class="p-3 mb-2 mt-5 d-flex justify-content-center links bg-white text-black">© 2021 BestCare. All rights reserved.</p>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>

</html>