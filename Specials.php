<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Specials</title>
  <link rel="stylesheet" href="./CSS/Specials.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
  <?php @include('./Components/Header.php');
  @include('config.php');
  $db = ''; ?>

  <div class="container text-center">
    <div class="row row-cols-2">
      <!-- col -->
      <?php
       try {
      $sql = "SELECT * FROM `item` WHERE CAT='Special' ORDER by rand() LIMIT 24  ";
      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
            echo '<div class="col">';
            echo '<div class="card mb-3" style="max-width: 540px;">';
            echo '<div class="row g-0">';
            echo '<div class="col-md-4">';
            echo '<img src="./uploaded_img/' . $row['IMG'] . '" class="img-fluid rounded-start" alt="...">';
            echo '</div>';
            echo '<div class="col-md-8">';
            echo '<div class="card-body text-start">';
            echo '<h5 class="card-title" style="color: #54A232; font-weight: bold;">' . $row['NAME'] . '</h5>';
            echo '<p class="card-text">' . $row['DES'] . '</p>';
            echo '<button type="button" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 120px;font-family: "Chivo Mono", monospace; float: left; ">Purchase</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
      }
    } catch (Exception $e) {
      echo 'An error occurred: ' . $e->getMessage();
    }
      ?>
      <!-- col ends here -->

    </div>
  </div>
</body>

</html>