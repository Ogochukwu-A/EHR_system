<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'connect.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  //$id = $_POST['id'];

  $password = md5($password);
  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";

  $result = mysqli_query($con, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      $login = 1;
      session_start();
      $_SESSION['username'] = $username;
      //$_SESSION['id'] = $id;

      header('location:dashboard.php');
    } else {
      $invalid = 1;
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
  <title>Login Page</title>
</head>

<body class="text-center">
  <?php
  if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Welcome User</strong> Log In successful.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }
  ?>
  <?php
  if ($invalid) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong> Invalid credentials.
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
            <a class="nav-link active" href="registration.php">Register</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="form-signin mt-5">
    <form action="login.php" method="post" style="max-width: 300px;margin:auto">
      <div class="mb-4" class="user_card">

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" autocomplete="off" required>
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3 my-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2021</p>
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            Don't have an account? <a href="registration.php" class="ml-3"> <b> Sign Up</b></a>
          </div>
        </div>
      </div>
    </form>
    <div>

  </main>





</body>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>