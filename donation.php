<?php 
include("connection.php");
?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
    margin-top: 80px; /* Adjust this value as needed */
}


        .navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            animation: fadeInDown 1s ease-in-out;
        }

        .navbar-brand {
            font-weight: bold;
            color: #53E4DA;
            animation: bounceIn 1.5s;
        }

        .navbar-nav a {
            color: #034a57;
            margin: 0 10px;
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        .navbar-nav a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #53E4DA;
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav a:hover::after {
            width: 100%;
        }

        .navbar-nav .btn {
            border-radius: 15px;
            padding: 5px 15px;
            background-color: #53E4DA;
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #53E4DA;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            animation: bounce 2s infinite;
        }

        .info-wrap .info i {
            color: #53E4DA;
            font-size: 2rem;
        }

        .form-section {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            animation: slideIn 1s ease-in-out;
            width: 600px;
        }

        .form-section h4 {
            font-size: 1.5rem;
            color: #53E4DA;
        }

        .form-section .form-control {
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-section .form-control:hover {
            transform: scale(1.05);
            transition: transform 0.2s;
        }

        .btn-submit {
            background-color: #53E4DA;
            border-radius: 8px;
            padding: 12px;
            font-size: 1.1rem;
            color: white;
            transition: transform 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #41C4C3;
            transform: translateY(-5px);
        }

        #image-preview img {
            border: 2px solid #53E4DA;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(83, 228, 218, 0.5);
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            0% { box-shadow: 0 0 15px rgba(83, 228, 218, 0.5); }
            100% { box-shadow: 0 0 30px rgba(83, 228, 218, 0.8); }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blessed Hands</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#contact">Contact</a></li>
                    <li class="nav-item"><a href="login.html" class="btn">Sign Up</a></li>
                    <li class="nav-item"><a href="register.html" class="btn">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container d-flex justify-content-center align-items-center vh-100" data-aos="fade-up">
    <div class="form-section">
        <h4 id="animated-header"></h4>
        <form method="post" enctype="multipart/form-data" action="donation_data.php">
            <label for="cash" data-aos="fade-right">$ Goal Amount:</label>
            <input type="text" name="cash" id="cash" class="form-control" required data-aos="fade-left">

            <label for="title" data-aos="fade-right">Campaign Title:</label>
            <input type="text" name="title" id="title" class="form-control" required data-aos="fade-left">

            <label for="select" data-aos="fade-right">Category:</label>
            <select name="select" id="select" class="form-control" required data-aos="fade-left">
                <option value="" disabled selected>SELECT ONE</option>
                <option value="Emergency">Support Palestine with Your Zakat and Sadaqah</option>
                <option value="Medical">Child Food Poverty: Nutrition deprivation in early childhood</option>
                <option value="Medical">Flood situation in Bangladesh</option>
                <option value="Medical">Invest in Education, Transform Lives.</option>
            </select>

            <label for="loc" data-aos="fade-right">Country:</label>
            <input type="text" name="loc" id="loc" class="form-control" required data-aos="fade-left">

            <label for="file" data-aos="fade-right">Upload Image:</label>
            <input type="file" name="file" id="file" class="form-control" required data-aos="fade-left">
            
            <div id="image-preview"></div>

            <label for="textarea" data-aos="fade-right">Description:</label>
            <textarea name="textarea" id="textarea" class="form-control" rows="6" required data-aos="fade-left"></textarea>

            <button type="submit" name="submit" id="submit" class="btn btn-submit" data-aos="zoom-in">Submit</button>
        </form>
    </div>
</div>


    <a href="#" class="back-to-top"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
        
        let text = "A Little From You, A Lot For Them.";
        let index = 0;
        function typeEffect() {
            if (index < text.length) {
                document.getElementById("animated-header").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 100);
            }
        }
        typeEffect();

        document.getElementById('file').addEventListener('change', function (e) {
            var file = e.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('image-preview').innerHTML = '<img src="' + e.target.result + '" width="200" height="150">';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
