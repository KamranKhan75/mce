<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/css/animate.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/services.css">
    <link rel="stylesheet" href="resources/css/footer.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3 navbar-white bg-white shadow-sm fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <!-- Logo Image -->
                <img src="Resources/img/logo.png" width="100" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold textnav">Motasim Tariq Hamoua Cont. Est.</span>
            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active"><a href="index.php" class="nav-link textnav font-weight-bold">Home <span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="index.php #about" class="nav-link textnav font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="index.php #sr" class="nav-link textnav font-weight-bold">Services</a></li>
                    <li class="nav-item"><a href="index.php #footer" class="nav-link textnav font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- slider -->
    <section>
        <div id="slider-animation" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
                <li data-target="#slider-animation" data-slide-to="1"></li>
                <li data-target="#slider-animation" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7)), url(Resources/img/construction1.jpg); background-size:cover; height:100vh; width:100%;">
                    <div class="text-box">
                        <h2 class="wow slideInRight" data-wow-duration="2s">Motasim Tariq Hamoua Const. Est.</h2>
                        <p class="wow slideInLeft" data-wow-duration="2s">We work hard and we work smart because
                            Construction is an important front for solidifying the foundations of a thriving country and
                            creating bases for the people's happy life. </p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7)), url(Resources/img/construction2.jpg); background-size:cover; height:100vh; width:100%;">
                    <!-- <img src="Resources/img/construction2.jpg" alt="construction2" class="slider-back"> -->
                    <div class="text-box">
                        <h2 class="wow slideInUp" data-wow-duration="4s">Motasim Tariq Hamoua Const. Est.</h2>
                        <p class="wow fadeInDown" data-wow-duration="4s">The road to our success is always under
                            construction </p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7)), url(Resources/img/construction3.jpg); background-size:cover; height:100vh; width:100%;">
                    <!-- <img src="Resources/img/construction3.jpg" alt="construction3" class="slider-back"> -->
                    <div class="text-box">
                        <h2 class="wow fadeInUp" data-wow-duration="4s">Motasim Tariq Hamoua Const. Est.</h2>
                        <p class="wow fadeInUp" data-wow-duration="2s">Be able to read blueprints, diagrams, floorplans,
                            and other diagrams used in the construction process. </p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider-animation" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </section>