<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Donations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: #ecf0f1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeInLeft 1s ease-in-out;
        }
        .sidebar h3 {
            font-size: 1.5rem;
            text-transform: uppercase;
            font-weight: bold;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #ecf0f1;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: #3E8E7E;
            color: #fff;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
            animation: fadeInUp 1s ease-in-out;
        }
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            padding: 15px 20px;
            border-radius: 10px;
            color: #fff;
            animation: fadeInDown 1s ease-in-out;
        }
        .topbar h2 {
            font-weight: bold;
            margin: 0;
        }
        .topbar .profile {
            display: flex;
            align-items: center;
        }
        .topbar img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .card h4, .card h3 {
            color: #2c3e50;
            font-weight: 600;
        }
        .btn-primary, .btn-danger, .btn-success {
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .btn-primary:hover, .btn-danger:hover, .btn-success:hover {
            opacity: 0.9;
        }
        .table {
            margin-top: 10px;
        }
        .badge {
            font-size: 0.9rem;
        }
        .form-label {
            font-weight: 500;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-center py-4">Admin Panel</h3>
        <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-hand-holding-heart"></i> Manage Donations</a>
        <a href="admin_user_update.php"><i class="fas fa-users"></i> Users</a>
        <a href="#"><i class="fas fa-cogs"></i> Settings</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="content">
        <!-- Topbar -->
        <div class="topbar">
            <h2>Donation Management</h2>
            <div class="profile">
                <img src="images/profile.jpeg" alt="Admin Profile">
                <span>Admin</span>
            </div>
        </div>

        <!-- Dashboard Overview Section -->
        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <h4>Total Donations</h4>
                            <h2>৳ 50,000</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <h4>Pending Approvals</h4>
                            <h2>10</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <h4>Approved Donations</h4>
                            <h2>25</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donation Statistics Section -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Donation Statistics</h3>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 300px;">
                        <canvas id="donationChart" style="max-width: 300px; max-height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Donations Section -->
        <div class="card mt-4">
            <div class="card-header">
                <h3>Manage Donations</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Donor Name</th>
                            <th>Donation Amount</th>
                            <th>Campaign</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>৳ 10,000</td>
                            <td>Education Fund</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-success btn-sm">Approve</button>
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>৳ 5,000</td>
                            <td>Medical Aid</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <button class="btn btn-secondary btn-sm" disabled>No Actions</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('donationChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Education Fund', 'Medical Aid', 'Others'],
                datasets: [{
                    data: [40, 30, 30],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffcd56']
                }]
            },
            options: {
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    </script>
</body>
</html>
