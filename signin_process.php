<?php
include('config.php'); // Database connection

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    echo "Sign In Successful!";
    // Implement 2FA here (e.g., send OTP via email/SMS)
} else {
    echo "Invalid credentials.";
}

mysqli_close($conn);
?>