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
<?php @include('./Components/Header.php'); ?>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-4">
        <div class="col">
            <div class="card h-100">
                <img src="./Images/BOOMS (9).png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <button type="button" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 120px;font-family: 'Chivo Mono', monospace; float: left; ">Purchase</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./Images/BOOMS (10).png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                    <button type="button" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 120px;font-family: 'Chivo Mono', monospace; float: left; ">Purchase</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./Images/BOOMS (11).png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <button type="button" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 120px;font-family: 'Chivo Mono', monospace; float: left; ">Purchase</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./Images/BOOMS (12).png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-success abtbtn" style="background-color:#54A232;border: none; width: 120px;font-family: 'Chivo Mono', monospace; float: left; ">Purchase</button>
                </div>
            </div>
        </div>
    </div>
    <?php @include('./Components/Footer.php'); ?>
</body>

</html>