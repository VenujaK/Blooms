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
        <form id="contact" action="" method="post">
            <h3> Add Product</h3>
            <h4>Please insert product details here</h4>
            <fieldset> 
                <select name="product_cat" class="box">
                    <option value="Flower">Flowers</option>
                    <option value="Special">Special</option>
                </select>
            </fieldset>
            <fieldset>
                <input placeholder="Item Name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Item Price" type="tel" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="file" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type item description here...." tabindex="4" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>

        </form>
    </div>
</body>

</html>