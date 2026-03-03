<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact - SweetTooth Bakery</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h1>Contact Us</h1>
  <nav>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="products.html">Products</a>
    <a href="contact.php" class="active">Contact</a>
  </nav>
</header>

<section class="contact">
  <h2>We’d Love to Hear From You!</h2>
  <p>Have a question or feedback? Send us a message below.</p>

  <form method="POST" action="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
    <button type="submit" name="send">Send Message</button>
  </form>

  <div class="contact-info">
    <h3>Contact Details</h3>
    <p>Email: sweettoothbakery@gmail.com</p>
    <p>Phone: +254 712 345 678</p>
    <p>Location: Nairobi, Kenya</p>
  </div>
</section>

<footer>© 2025 SweetTooth Bakery</footer>
</body>
</html>

<?php
// Handle form submission
if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert into database
  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql)) {
    echo "<script>alert('Message sent successfully! Thank you for contacting us.');</script>";
  } else {
    echo "<script>alert('Error sending message. Please try again.');</script>";
  }
}
?>
