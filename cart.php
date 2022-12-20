<!DOCTYPE html>

<?php
session_start();
include('config.php');

if (!isset($_SESSION['username'])) {
  header("Location: UserLogin.php");
}

$user_id =  $_SESSION['user_id'];




?>

<html>

<head>
  <title>Product Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./CSS/AllProducts.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <style>
    /* .tbl{
      background-color: #54A232;
      color: white;
      text-align: center;
      border: none;
    } */
    /* body {
    min-height: 100vh;
    width: 100%;
    background-image: url(./Images/Untitled\ design\ \(47\).png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: local;
    display: flex;
    
} */
  </style>
</head>
<?php
if (isset($_GET['remove'])) {
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
  mysqli_query($conn, "ALTER TABLE cart AUTO_INCREMENT = 1");
  header('location:cart.php');
};

?>

<body>
  <?php @include('header.php');
  @include('config.php') ?>
  <div class="container-fluid">
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-12" align="center">
        <h3 style="color:#54A232">Product Cart</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <table class="table table-bordered">
          <thead class="tbl">
            <tr>
              <th scope="col" class="first">No</th>
              <th scope="col" class="second">Image</th>
              <th scope="col" class="third">Name</th>
              <th scope="col" class="third">Price</th>
              <th scope="col" class="fifth">QTY</th>
              <th scope="col" class="fourth">Total </th>
              <th scope="col" class="fourth">Actions</th>
            </tr>

          </thead>
          <tbody>
            <?php
            $cartTotal = 0;
            $products = array();
            $sql = "SELECT * FROM cart LEFT JOIN item ON cart.pid=item.ID WHERE user_id=$user_id";
            if ($result = mysqli_query($conn, $sql)) {
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  $cartTotal += $row['qty'] * $row['PRICE'];

                  echo "<form method =POST>";
                  echo "<tr>";
                  echo "<td class='first'>" . $row['ID'] . "</td>";
                  echo "<td scope='row' class='second'> <img src='./uploaded_img/{$row['IMG']}' width='50'></td>";
                  echo "<td class='third'>" . $row['NAME'] . "</td>";
                  echo "<td class='third'>" . $row['PRICE'] . "</td>";
                  echo "<td class='fifth'>" . $row['qty'] . "</td>";
                  echo "<td class='fourth'>" . $row['qty'] * $row['PRICE'] . "</td>";
                  echo "<td class='fourth' ><a href='cart.php?remove=$row[id]' class='btn btn-success btn-sm' name='remove' >Remove</a></td>";
                  echo "</tr>";
                  echo "</form>";
                }
              } else {
                echo "";
              }
            } else {
              echo "Cart is empty";
            }



            ?>



            <tr>
              <th scope="row"></th>
              <td colspan="3">TOTAL (LKR)</td>
              <td><?php echo $cartTotal; ?></td>
              <td></td>
            </tr>
            <tr>
            <th scope="row"></th>
              <td colspan="6"><a href='Checkout.php' class='btn btn-success btn-sm'>Proceed To Pay</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>