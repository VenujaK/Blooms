<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/AllProducts.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
</head>

<body>
  <?php include './Components/Header.php';
  include 'Config.php';
  $select = mysqli_query($conn, "SELECT * FROM ordertbl ");
if (!$select) {
    die("Error: " . mysqli_error($conn));
}

 
  ?>
  <table>
    <thead>
      <tr>
        
        <th class="first">Customer</th>
        <th class="second">Contact</th>
        <th class="third">Postal Code</th>
        <th class="fourth">Address</th>
        <th class="fifth">Product ID</th>
        <th class="fifth">User ID</th>
        <th class="fifth">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($select)) { ?>
        <tr>
         
          <td class="second"><?php echo $row['CNAME']; ?></td>
          <td class="third"><?php echo $row['CONTACT']; ?></td>
          <td class="third"><?php echo $row['POSTAL']; ?></td>
          <td class="third"><?php echo $row['ADDRESS']; ?></td>
          <td class="fourth"><?php echo $row['ProductID']; ?></td>
          <td class="fourth"><?php echo $row['UserID']; ?></td>
          <td class="fourth"><?php echo $row['Quantity']; ?></td>
          
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php include './Components/Footer.php'; ?>
</body>

</html>