<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - SweetTooth Bakery</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="auth-container">
  <h2>Create Account</h2>
  <form method="POST" action="">
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </form>
</div>

<?php
if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Email already registered!');</script>";
    } else {
        $sql = "INSERT INTO users(fullname, email, password) VALUES('$fullname','$email','$password')";
        if ($conn->query($sql)) {
            echo "<script>alert('Registration successful! Login now.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Error during registration');</script>";
        }
    }
}
?>
</body>
</html>
