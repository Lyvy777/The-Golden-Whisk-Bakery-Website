<?php include('db_connect.php'); session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - The Golden Whisk Bakery</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="auth-container">
  <h2>Login</h2>
  <form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Login</button>
    <p>Don’t have an account? <a href="register.php">Sign up</a></p>
  </form>
</div>

<?php
if (!isset($_SESSION['attempt'])) $_SESSION['attempt'] = 0;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $db_link->query("SELECT * FROM users WHERE email='$email'");
    if ($query->num_rows == 1) {
        $user = $query->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['fullname'];
            $_SESSION['attempt'] = 0;
            echo "<script>alert('Welcome, " . $user['fullname'] . "!'); window.location='index.html';</script>";
        } else {
            $_SESSION['attempt']++;
            if ($_SESSION['attempt'] >= 3) {
                echo "<script>alert('Too many failed attempts! Try again later.');</script>";
            } else {
                echo "<script>alert('Wrong password! Attempts: {$_SESSION['attempt']}');</script>";
            }
        }
    } else {
        echo "<script>alert('User not registered!');</script>";
    }
}
?>
</body>
</html>
