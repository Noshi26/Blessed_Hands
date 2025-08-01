<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Blessed Hands</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <style>
      body {
  margin: 0;
  padding: 0;
}

header, .navbar {
  margin-top: 0;
  padding-top: 0;
}


        .navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            opacity: 0;
            transform: translateY(-20px);
            animation: slideIn 0.5s forwards;
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
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .btn {
            border-radius: 15px;
            padding: 5px 15px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            transition: opacity 0.3s, transform 0.3s;
        }

        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s;
        }

        .nav-link img {
            transition: transform 0.3s ease-in-out;
        }

        .nav-link img:hover {
            transform: scale(1.1);
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-header {
            background-color: #53E4DA;
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .profile-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }

        .profile-header p {
            font-size: 1.1rem;
            color: #e2e8f0;
        }

        .container {
            padding-top: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #53E4DA;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .card-body {
            background-color: white;
            padding: 30px;
        }

        .card-body p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .btn-custom {
            background-color: #53E4DA;
            color: white;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #45c6b9;
        }

        /* Animation styles */
        .profile-header {
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .card {
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/BlessedHandslogo.png" alt="Blessed Hands Logo" style="height: 50px; margin-right: 10px;">
                Blessed Hands
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contract.php">Contact</a></li>

                    <!-- User Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle animate__animated" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-lg-inline"><?php echo $name ?? ''; ?></span>
                            <img class="rounded-circle" src="images/profile.jpeg" alt="Profile" style="height: 40px; width: 40px;">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate_animated animate_fadeInDown" id="dropdownMenu">
                            <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-fill me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php"><i class="bi bi-gear-fill me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="index.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile Header -->
    <div class="container">
        <div class="profile-header">
            <img src="images/profile.jpeg" alt="User Profile Picture">
            <h1>John Doe</h1>
            <p>Your generosity brings hope and joy to the world</p>
        </div>
    </div>

    <!-- Profile Details -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Profile Details</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Phone:</strong> +123 456 7890</p>
                        <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                        <p><strong>Joined on:</strong> January 1, 2023</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Donation History</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Donation to Palestine Zakat: Tk 5,000.00 (January 2023)</li>
                            <li>Donation for Child Food Poverty: Tk 9,000.00 (December 2022)</li>
                        </ul>
                    </div>
                </div>

                <button class="btn-custom" id="editButton" onclick="toggleEdit()">Edit Profile</button>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal (JS-controlled visibility) -->
    <div id="editProfileModal" style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="john.doe@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" value="+123 456 7890">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" value="123 Main Street, City, Country">
                                </div>
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                <button type="button" class="btn btn-danger" onclick="toggleEdit()">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2025 Blessed Hands. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript to handle the edit profile functionality -->
    <script>
        function toggleEdit() {
            const modal = document.getElementById("editProfileModal");
            modal.style.display = modal.style.display === "none" ? "block" : "none";
        }
    
        // Function to save changes and update the profile
        document.querySelector("#editProfileModal form").addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent form submission and page reload
    
            // Get updated values from input fields
            const updatedEmail = document.getElementById("email").value;
            const updatedPhone = document.getElementById("phone").value;
            const updatedAddress = document.getElementById("address").value;
    
            // Update profile details on the main page
            document.querySelector(".card-body p:nth-child(1)").innerHTML = `<strong>Email:</strong> ${updatedEmail}`;
            document.querySelector(".card-body p:nth-child(2)").innerHTML = `<strong>Phone:</strong> ${updatedPhone}`;
            document.querySelector(".card-body p:nth-child(3)").innerHTML = `<strong>Address:</strong> ${updatedAddress}`;
    
            // Close the modal
            toggleEdit();
        });
    </script>
    

</body>

</html>
