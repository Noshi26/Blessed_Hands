<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blessed_Hands";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['password'])
         { $_SESSION['email'] = $email; 
            echo "Login successful!";
            header("Location: admin_home.php");
         } 
         else {
            echo "Invalid email or password!";
        }
    } else {
        echo "Invalid email or password!";
    }
}

$conn->close();
?>
