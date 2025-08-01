<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blessed Hands</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .navbar-brand {
            font-weight: bold;
            color: #53E4DA;
        }

        .navbar-nav a {
            color: #034a57;
            margin: 0 10px;
            text-decoration: none;
            font-weight: 500;
        }

        .navbar-nav .btn {
            border-radius: 15px;
            padding: 5px 15px;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #53E4DA;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(237, 232, 232, 0.1);
        }

        .about-container {
            padding: 60px 20px;
            margin-top: 20px; /* Added margin-top for spacing */
            background-color: #e9f5f4;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .about-container h3 {
            color: #033357;
            margin-bottom: 20px;
        }

        .about-container p {
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .about-container .icon-box {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .about-container .icon-box i {
            color: #53E4DA;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .about-container .icon-box h4 {
            margin: 0;
            color: #033357;
        }

        .about-container .icon-box p {
            color: #6c757d;
        }

        .about-image {
            max-height: 600px;
            overflow-y: scroll;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Additional spacing adjustments */
        .navbar-nav .nav-item {
            margin-left: 10px;
            margin-right: 10px;
        }

        .carousel-item .campaign-card {
            margin: 15px 0;
        }

        .content {
            padding: 20px;
        }

        .icon-box {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/BlessedHandslogo.png" alt="Blessed Hands Logo" style="height: 50px; margin-right: 10px;">
                Blessed Hands
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contract.php">Contact</a></li>
                    <li class="nav-item">
                        <a href="register.php" class="btn text-white" style="background-color: #53E4DA;">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="btn text-white" style="background-color: #53E4DA;">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main">
        <!-- About Section -->
        <section id="about-us" class="about-us">
            <div class="container about-container animate__animated animate__fadeInUp">
                <div class="row">
                    <div class="col-xl-6">
                        <div id="campaignCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <div class="campaign-card animate__animated animate__fadeInLeft" style="padding: 10px; background-color: white; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                        <img src="images/add2.jpg" alt="Campaign 1" style="width: 100%; border-radius: 5px;">
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <div class="campaign-card animate__animated animate__fadeInLeft" style="padding: 10px; background-color: white; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                        <img src="images/child.jpeg" alt="Campaign 2" style="width: 100%; border-radius: 5px;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="campaign-card animate__animated animate__fadeInLeft" style="padding: 10px; background-color: white; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                        <img src="images/flood_help.jpeg" alt="Campaign 3" style="width: 100%; border-radius: 5px;">
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel Controls -->
                            <a class="carousel-control-prev" href="#campaignCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#campaignCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 class="animate__animated animate__fadeInDown">About Blessed Hands</h3>
                            <p class="animate__animated animate__fadeInUp">We believe in the power of collective generosity to create lasting change. Together, we can uplift lives, foster hope, and build a brighter future.</p>
                            <div class="row">
                                <div class="col-md-6 icon-box animate__animated animate__zoomIn" style="margin-bottom: 20px;">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Quality Services</h4>
                                    <p>Providing excellent and reliable services to our customers.</p>
                                </div>
                                <div class="col-md-6 icon-box animate__animated animate__zoomIn" style="margin-bottom: 20px;">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Innovation</h4>
                                    <p>Using innovative approaches to deliver outstanding results.</p>
                                </div>
                                <div class="col-md-6 icon-box animate__animated animate__zoomIn" style="margin-bottom: 20px;">
                                    <i class="bx bx-images"></i>
                                    <h4>Creativity</h4>
                                    <p>Embracing creativity to stand out in our industry.</p>
                                </div>
                                <div class="col-md-6 icon-box animate__animated animate__zoomIn" style="margin-bottom: 20px;">
                                    <i class="bx bx-shield"></i>
                                    <h4>Trust</h4>
                                    <p>Building trust through consistent and dependable actions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center animate__animated animate__fadeInUp"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
