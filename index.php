<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <?php @include('./Components/Header.php'); ?>
    <!-- Hero Section -->
    <div class="container text-center">
        <div class="row">
            <div class="col" style="float: left;">
                <div class="hero" style="float: left;">
                    <h2>Blooming Beauties: The Best Selection of Flowers Online</h2>
                    <img class="img-fluid hero-img" src="./Images/BOOMS (3).png" alt="">
                </div>
            </div>
            <div class="col herodes">
                <p> we offer a wide selection of fresh flowers and plants, perfect for any occasion. Our team of experienced florists carefully curates our collection to bring you the most beautiful blooms and greenery available.</p>
                <button type="button" class="btn btn-success" onclick="window.location.replace('./FlowersPage.php')" style="background-color:#54A232;border: none; width: 150px;font-family: 'Chivo Mono', monospace;">Explore</button>
            </div>
        </div>
    </div>
    <!-- Hero section end -->
    <!-- About Us Section -->
    <div class="container text-center" id="about">
        <div class="row">
            <div class="col">
                <img src="./Images/BOOMS (7).png" alt="">
            </div>
            <div class="col abtcontent">
                <h2 class="abthead">About Us</h2>
                <p>We are a family-owned business that has been providing high-quality flowers and plants to our customers for over 25 years. Our mission is to make it easy and convenient for you to find the perfect flowers for any occasion, whether it's
                    a special event or just to brighten up your home. We offer a wide selection of fresh flowers and plants, as well as custom arrangements and delivery services.</p>
                <button type="button" onclick="window.location.replace('./ContactUs.html')" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 150px;font-family: 'Chivo Mono', monospace; float: left; ">Contact Us</button>

            </div>

        </div>
    </div>
    <!-- About Us Section end-->
    <!-- Footer -->
    <?php @include('./Components/Footer.php'); ?>
</body>

</html>