<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blessed Hands</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .show-password {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .show-password:hover {
            color: #53E4DA;
        }

        .nav-tabs .nav-link {
            color: #6c757d;
        }

        .nav-tabs .nav-link.active {
            color: #53E4DA;
            font-weight: bold;
        }

        .tab-pane {
            padding: 20px 0;
        }

        .btn-outline-secondary img {
            margin-right: 10px;
        }

        .right-section {
            background: linear-gradient(45deg, #53E4DA, #5ff386);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .right-section h3 {
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: bold;
        }

        .right-section img {
            max-width: 90%;
            height: auto;
        }

        .form-section {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            margin-bottom: 20px;
            color: #53E4DA;
            text-align: center;
        }

        .btn-primary {
            background-color: #53E4DA !important;
            border-color: #53E4DA !important;
        }

        .btn-primary:hover {
            background-color: #47C8C0 !important;
            border-color: #47C8C0 !important;
        }

        .google-btn {
            border: 1px solid #cccccc;
            background: #ffffff;
            color: #6c757d;
            font-weight: bold;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        .google-btn:hover {
            background: #f8f9fa;
        }

        .terms {
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
        }

        .terms a {
            color: #53E4DA;
            text-decoration: none;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .blessed-hands-text {
            font-size: 36px;
            font-weight: bold;
            color: #53E4DA;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            color: #53E4DA;
            margin: 20px 0;
        }

        .animate-slide-in {
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <!-- Left Section -->
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center px-5 animate-slide-in">
                <!-- Navbar with Logo -->
                <a class="navbar-brand" href="#">
                    <img src="images/BlessedHandslogo.png" alt="Blessed Hands Logo" class="animate-fade-in">
                    <span class="blessed-hands-text">Blessed Hands</span>
                </a>

                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs mb-3" id="loginTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reset-tab" data-bs-toggle="tab" data-bs-target="#reset" type="button" role="tab" aria-controls="reset" aria-selected="false">Reset</button>
                    </li>
                </ul>
                
                <!-- Tab Content -->
                <div class="tab-content w-100" id="loginTabContent">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="form-section animate-fade-in">
                            <form action="login_data.php" method="POST">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="mb-3 position-relative">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    <span class="show-password" onclick="togglePassword()">Show</span>
                                </div>
                                <p>By continuing, you agree to our <a href="#">Terms</a> | <a href="#">Policy</a></p>
                                <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                                <button type="button" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center">
                                    <img src="https://img.icons8.com/color/48/google-logo.png" alt="Google Logo"> Continue with Google
                                </button>
                                <button type="button" class="btn btn-outline-secondary w-100 mt-3">Continue as a Guest</button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Sign Up Form -->
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <div class="form-section animate-fade-in">
                            <form action="register_data.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>
                                <button type="button" class="btn google-btn w-100 d-flex align-items-center justify-content-center">
                                    <img src="https://img.icons8.com/color/48/google-logo.png" alt="Google Logo"> Sign Up with Google
                                </button>
                                <p class="terms mt-3">By continuing, you agree to our <a href="#">Terms</a> | <a href="#">Privacy Policy</a></p>
                            </form>
                        </div>
                    </div>

                    <!-- Reset Password Form -->
                    <div class="tab-pane fade" id="reset" role="tabpanel" aria-labelledby="reset-tab">
                        <div class="form-section animate-fade-in">
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-3">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Section -->
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center right-section">
                <div class="text-center animate-fade-in">
                    <h3>We Make Giving Easy</h3>
                    <img src="images/signlogo.png" alt="Illustration">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[type="password"]');
            const showPasswordText = document.querySelector('.show-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                showPasswordText.textContent = 'Hide';
            } else {
                passwordField.type = 'password';
                showPasswordText.textContent = 'Show';
            }
        }
    </script>
</body>
</html>
