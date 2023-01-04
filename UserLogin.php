<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/UserLogin.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="#" method="post">
        <div class="field">
          <input type="email" name="email" required placeholder="Email Address">
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="./UserRegister.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>