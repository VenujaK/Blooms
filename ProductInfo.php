<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    @include('config.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info</title>
    <link rel="stylesheet" href="./CSS/ProductInfo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" hrf="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<?php  @include './Components/Header.php';


$product_id = htmlspecialchars($_GET['product_id']);
$productInfo;
$errorQTYMSG = "";
$successMSG = "";
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
}
if (isset($_POST["add_to_cart_btn"])) {
    if (isset($_SESSION['user_id'])) {
        $inputQTY =  $_POST['qty_input'];
        $sql = "INSERT INTO cart (pid, user_id,qty) VALUES('$product_id', '$user_id','$inputQTY')";
        $sqlResult = mysqli_query($conn, $sql);
        if ($sqlResult) {
            $successMSG = "Product added to cart";
        } else {
            $errorQTYMSG = "Something went wrong!";
        }
    } else {
        $errorQTYMSG = "Please login";
    }
}



?>
    <!-- header ends -->
    <!-- product -->

    <form method="POST">
        <?php

        $sql = "SELECT * FROM item WHERE ID=$product_id";
        $sqlResult = mysqli_query($conn, $sql);
        if (mysqli_num_rows($sqlResult)) {
            $productInfo = mysqli_fetch_assoc($sqlResult);
        } else {
            echo "0 results";
        }
        ?>
        <section class="container sproduct my-1 pt-2">
            <div class="row mt-4 ">
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid pb-1" width="80%" src="./uploaded_img/<?php echo $productInfo['IMG'] ?>" id="MainImg" alt="">
                   
                </div>

                <div class="col-lg-6 col-md-12 col-12 text">
                    <h3 class="py-4"><?php echo $productInfo['NAME'];?>(<?php echo $productInfo['CAT']; ?>)</h3>
                    <h2><?php echo $productInfo['PRICE']; ?> LKR</h2>
                    <input type="number" value="1" name="qty_input">
                    <button class="buy-btn" name="add_to_cart_btn">Add to Cart</button>
                    <p style="color: green;"><?php echo $successMSG; ?></p>
                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span style="color: grey; text-align:left" class="text"><?php echo $productInfo['DES']; ?></span>
                </div>
    </form>
    </div>
    </section>
   <!-- related products -->
   <form method="POST">
        <div class="small-container">
            <h1 class="headings">RECENT PRODUCTS</h1>

            <div class="row">
        <?php
                $sql = "SELECT * FROM `item` ORDER by rand() LIMIT 3";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo ' <div class="col4">';
                            echo ' <img src="./uploaded_img/' . $row['IMG'] . '" alt="" onclick="loadProduct(' . $row['ID'] . ')">';
                            echo ' <h4>' . $row['NAME'] . '</h4>';
                            echo '<p>' . $row['PRICE'] . ' LKR</p>';
                            echo '</div>';
                        }
                    } else {
                        echo "No Products found";
                    }
                } else {
                    echo "Products not found";
                }

                ?>
          
            <!-- 3 -->
        </div>
        </div>
    </form>
    <!-- Footer -->
    <?php @include('footer.php') ?>

    <script>
        // to transfer the product id via url
        function loadProduct(productID) {
            // console.log(productID);
            var origin = window.location.origin;
            window.location.href = origin + "/Blooms/ProductInfo.php?product_id=" + productID;
            // console.log(origin);

        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./productinfo.js"></script>