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

        .carousel-item {
            height: 430px;
        }

        .carousel-item img {
            height: 430px;
        }

        .content h2 {
            font-weight: bold; font-family: 'Times New Roman', Times, serif;
            font-style: italic;
            margin-bottom: 20px;
        }

        .content p2 {
            margin-bottom: 30px;
            color: green;
            font-weight: bold;
        }

        .content p3 {
            margin-bottom: 30px;
            color: green;
            font-weight: bold;
        }

        .carousel-caption h2 {
            font-weight: bold;
            font-style: italic;
        }

        .carousel-caption {
            font-weight: bold; font-size: large;
            font-family: 'Times New Roman', Times, serif;
        }
        .p-3{
            font-weight: 400; 
        }
        .foot{
            font-weight: 400; color: white; background-color: grey; font-family:  serif;
        }
    </style>
    <title>BestCare</title>
</head>

<body>
    <div class=''>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container ">
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
                            <a class="nav-link active" href="login.php">LogIn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\doctor-6701410__480.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h2>Payment Plans Available</h2>
                        <p>Part of caring for our communities includes helping with the cost. <br>We know that emergencies can be expensive, <br>so we offer payment plans available to help.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\hospital-840135__480.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h2>BestCare ER</h2>
                        <p2>Why use a BestCare ER?
                            At BestCare Emergency Center, <br>we have highly experienced emergency room staff, <br>including board-certified doctors who specialize in emergency medicine. <br>Plus, we’re open 24/7/365, so you can always get the emergency care you need,<br> close to home.</p2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\woman-2141808__480.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h2>Health Information You Can Trust</h2>
                        <p>Did you know we have a blog? <br>We write articles every month with health tips, <br>insurance information, local activities, and health news you can use..<br></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container ">
            <div class="content my-5">

                <h2>Why use a BestCare ER?</h2>
                <p2>
                    At BestCare Emergency Center, we have highly experienced emergency room staff, including board-certified doctors who specialize in emergency medicine. Plus, we’re open 24/7/365, so you can always get the emergency care you need, close to home.</br>
                </p2>
                <h2></h2>
                <p3>
                    Our Emergency Centers provide around-the-clock adult and pediatric emergency care when you need it most. We understand that no one sees us on their best day, but we’re here to make it better. Whatever your emergency, you can expect our emergency center to be open now.

                    Visit any of our locations to receive 24-hour emergency health care from our compassionate medical staff. We’re not just your local emergency room; we’re your neighbors.<br>
                </p3><br><br>

                <h2>24/7 Emergency Services</h2>
                <p3>
                    Emergency situations are never easy. At BestCare Emergency Centers, we want to relieve as much stress as possible, even after patients have received their care. There is little or no time to wait. At BestCare we offer personalized attention from board-certified proffesionals who are supported by a range of medical specialities. Whatever your needs be we are there for you. Whether you need advanced diagnostic imaging, lab tests, specialized cardiac procedures or just excellent nursing support, we got you covered. For compassionate attention, professional medical specialities, and neighbourhood convenience you can count on us. When you have a medical need, call or visit any of our locations.<br><br><br>
                </p3>

            </div>
        </div>

            <div class="foot text-center ">
                <p3>BestCare GmbH <br>Bradenburg. 22 Straße 45677 Pfarrkirchen <br> Tel. 786 4569 - 0 </p3>
            </div>

    </div>

    <div>
        <p class="p-3 mb-2 mt- d-flex justify-content-center text-center links bg-secondary text-white"> © 2021 BestCare. All rights reserved.</p>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>