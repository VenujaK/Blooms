<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Checkout </title>
    <link rel="stylesheet" href="./CSS/Checkout.css">
   </head>
<body>
<?php
@include('config.php');
    if (isset($_POST['proceed1'])) {
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $province = htmlspecialchars($_POST['postalcode']);
        $no = htmlspecialchars($_POST['no']);
        
      $message="Please fill all the information or check the data again";
      //to cal the number count = strlen
      if($name==0 || $address==0 || $province==0 || $no==0){
        echo '<span class="message">' . $message . '</span>';
      }else{
        mysqli_query($conn, "INSERT INTO ordertbl (UserID,ProductID,Quantity,CNAME,ADDRESS,POSTAL,CONTACT) SELECT  user_id, pid , qty, '$name', '$address', '$province', '$no' FROM cart");
        mysqli_query($conn, "ALTER TABLE ordertbl AUTO_INCREMENT = 1");
        mysqli_query($conn, "DELETE From cart");
        echo "<script>window.location = './index.php';</script>";
      }
    };
  ?>
  <div class="wrapper">
    <h2>Checkout</h2>
    <form action="#" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your Address" name="address" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your Postal Code" name="postalcode" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your Contact no" name="no" required>
      </div>
      
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name="proceed1" value="Confirm Order">
      </div>
     
    </form>
  </div>
</body>
</html>
