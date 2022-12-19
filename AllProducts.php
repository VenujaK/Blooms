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
  $select = mysqli_query($conn, "SELECT * FROM item ");

  // Delete option
  if (isset($_POST['del'])) {
    $id = $_POST['del'];
    $result = mysqli_query($conn, "DELETE FROM item WHERE ID = $id");

    if ($result) {
      mysqli_query($conn, "ALTER TABLE item AUTO_INCREMENT = 1");
      header('location:AllProducts.php');
    } else {
      // the DELETE query failed, display an error message
      echo 'Error deleting item: ' . mysqli_error($conn);
    }
  }
  ?>
  <table>
    <thead>
      <tr>
        <th class="first">IMG</th>
        <th class="first">ID</th>
        <th class="second">Name</th>
        <th class="third">Category</th>
        <th class="fourth">Details</th>
        <th class="fifth">Price</th>
        <th class="fifth">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($select)) { ?>
        <tr>
          <td class="first"><?php echo "<img src='./uploaded_img/{$row['IMG']}' width='50'>" ?></td>
          <td class="second"><?php echo $row['ID']; ?></td>
          <td class="third"><?php echo $row['NAME']; ?></td>
          <td class="third"><?php echo $row['CAT']; ?></td>
          <td class="fifth"><?php echo substr($row['DES'], 0, 20); ?>..</td>
          <td class="fourth"><?php echo $row['PRICE']; ?></td>
          <td class="fourth">
            <form method="post">
              <input type="hidden" name="del" value="<?php echo $row['ID']; ?>">
              <input type="submit" class="btn-delete" value="Delete" >
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php include './Components/Footer.php'; ?>
</body>

</html>