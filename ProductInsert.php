<?php

@include './config.php';

// Product insert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the update_product form field is set
  if (!isset($_POST['update_product'])) {
    // Only execute the INSERT query if the update_product form field is not set
    $product_name = mysqli_real_escape_string($conn, isset($_POST['product_name']) ? $_POST['product_name'] : '');
    $product_price = mysqli_real_escape_string($conn, isset($_POST['product_price']) ? $_POST['product_price'] : '');
    $product_des = mysqli_real_escape_string($conn, isset($_POST['product_des']) ? $_POST['product_des'] : '');
    $product_cat = mysqli_real_escape_string($conn, isset($_POST['product_cat']) ? $_POST['product_cat'] : 'Flower');
    $product_image1 = isset($_FILES['product_image1']['name']) ? $_FILES['product_image1']['name'] : '';
    $product_image_tmp_name1 = isset($_FILES['product_image1']['tmp_name']) ? $_FILES['product_image1']['tmp_name'] : '';
    $product_image_folder1 = 'uploaded_img/' . $product_image1;

    if (empty($product_name) || empty($product_price) || empty($product_des) || empty($product_cat) || empty($product_image1)) {
      $message[] = 'please fill out all';
    } else {
      try {
        $insert = "INSERT INTO item (CAT, NAME, PRICE,IMG, DES) VALUES('$product_cat', '$product_name','$product_price','$product_image1','$product_des')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
          move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
          $message[] = 'new product added successfully';
        } else {
          throw new Exception(mysqli_error($conn));
        }
      } catch (Exception $e) {
        $error = $e->getMessage();
        $message[] = "Could not add the product: $error";
      }
    }
  }
}

if(isset($_POST['update_product'])){
  $product_id = htmlspecialchars($_POST['product_id']);
  $product_name = htmlspecialchars($_POST['product_name']);
  $product_price = htmlspecialchars($_POST['product_price']);
  $product_des = htmlspecialchars($_POST['product_des']);
  $product_cat = htmlspecialchars($_POST['product_cat']);
  $product_image1 = htmlspecialchars($_FILES['product_image1']['name']);
  $product_image_tmp_name1 = htmlspecialchars($_FILES['product_image1']['tmp_name']);
  $product_image_folder1 = 'uploaded_img/' . htmlspecialchars($product_image1);
  
   if (empty($product_name) || empty($product_price) || empty($product_des) || empty($product_cat) || empty($product_image1)) {
    $message[] = 'please fill out all';
  } else {

      $update_data = "UPDATE item SET NAME='$product_name', PRICE='$product_price', DES='$product_des',CAT='$product_cat', IMG='$product_image1'  WHERE ID = '$product_id'";
      $upload1 = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload1){
         move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
         $message[] = 'new product added successfully';
         header('location:ProductInsert.php');
      }else{
         $message[] = 'Something went Wrong!'; 
      }

   }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/ProductInsert.css">
</head>
<body>
  <div class="container">
    <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <h3> Add Product</h3>
      <h4>Please insert product details here</h4>
      <fieldset> 
        <select name="product_cat" class="box">
          <option value="Flower">Flowers</option>
          <option value="Special" >Special</option>
        </select>
      </fieldset>
      <fieldset>
        <input placeholder="Item ID" name="product_id" type="text" tabindex="1"  autofocus ">
      </fieldset>
      <fieldset>
        <input placeholder="Item Name" name="product_name" type="text" tabindex="1" required autofocus ">
      </fieldset>
      <fieldset>
        <input placeholder="Item Price" name="product_price" type="tel" tabindex="2" required ">
      </fieldset>
      <fieldset>
        <input placeholder="" type="file" name="product_image1" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type item description here...." name="product_des" tabindex="4" required></textarea>
      </fieldset>

<?php if (!empty($message)): ?>
  <div class="message">
    <?php foreach ($message as $msg): ?>
      <p><?php echo $msg ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
<input type="submit" name="add_product" value="Submit" id="contact-submit">
<input type="submit" name="update_product" value="Update" id="contact-submit">
</form>
</div>
</body>
</html>

