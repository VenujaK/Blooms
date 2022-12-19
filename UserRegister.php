<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    $cpassword = md5(mysqli_real_escape_string($conn, $_POST['cpassword']));

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: index.php");
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }

    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="./CSS/UserLogin.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Registration Form</div>
      <form action="#" method="post">
        <div class="field">
          <input type="text" name="username" required placeholder="Username">
          <label>Username</label>
        </div>
        <div class="field">
          <input type="email" name="email" required placeholder="Email Address">
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" required placeholder="Password">
          <label>Password</label>
        </div>
        <div class="field">
          <input type="password" name="cpassword" required placeholder="Password">
          <label>Confirm Password</label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Register">
        </div>
        <div class="signup-link">Already a member? <a href="./UserLogin.php">Login now</a></div>
      </form>
    </div>
  </body>
</html>
