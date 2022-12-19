<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/FlowerPage.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <?php @include('./Components/Header.php');
    @include('config.php');
    $db = ''; ?>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-4">
    <?php
              try {
                $sql = "SELECT * FROM `item` WHERE CAT='Flower' ORDER by rand() LIMIT 24  ";
                if ($result = mysqli_query($conn, $sql)) {
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                      echo '<div class="col">';
                      echo '<div class="card h-100">';
                      echo ' <img src="./uploaded_img/' . $row['IMG'] . '" class="card-img-top" alt="...">';
                      echo ' <div class="card-body">';
                      echo ' <h5 class="card-title">' . $row['NAME'] . '</h5>';
                      echo '<p class="card-text">' . $row['NAME'] . ' </p>';
                      echo '<p class="card-text">for ' . $row['PRICE'] . '/= </p>';
                      echo ' <button type="button" class="btn btn-success abtbtn" onclick="loadProduct(' . $row['ID'] . ')" style="background-color:#54A232;border: none; width: 120px;font-family: "Chivo Mono", monospace; float: left; ">Purchase</button>';
                      echo ' </div>';
                      echo '</div>';
                      echo '</div>';
                    }
                  }
                }
              } catch (Exception $e) {
                echo 'An error occurred: ' . $e->getMessage();
              }
        ?>
    </div>
    <?php @include('./Components/Footer.php'); ?>
</body>
<script>
    productID = $productID;
    // to transfer the product id via url
    function loadProduct(productID) {
        // console.log(productID);
        var origin = window.location.origin;
        window.location.href = origin + "/Blooms/ProductInfo.php?product_id=" + productID;

        // console.log(origin);

    }
</script>
</html>