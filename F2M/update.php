<?php
    session_start();

    include_once 'includes/connection.php';

    $id = $_POST['id'];
    $category = $_POST['category'];
    $name = $_POST['product_name'];
    $image = $_POST['image_file'];
    $quantity = $_POST['qty'];

    $query = "UPDATE `products` SET `product_category`='".$category."',`product_name`='".$name."',`product_image`='".$image."',`product_quantity`='".$quantity."' WHERE id=$id";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css?v=1">
        <title>Update Products</title>
    </head>
    <body>
        <div class = "header">
            <div class = "inner-header">
                <div class = "logo-container">
                    <a href="index.php"><h1>F2M<span>PREMIUM</span></h1></a>
                </div>
                <div>
                    <a href="logout.php"><input type = "submit" class = "logout" value = "LOGOUT"></a>
                    <a href="retrieve.php"><input type = "submit" class = "logout" value = "PRODUCTS"></a>
                </div>
            </div>
        </div>
        <div class = "body">
            <div class = "form-body">
                <div class = "admin-logo">
                    <h1>UPDATE PRODUCT</h1></a>
                </div>
                <div>
                    <?php
                        if(isset($message)) {echo $message; }
                    ?>
                </div>   
            
                <form action="update.php" method = "POST" enctype = "multipart/form-data" class = "form-container">
                    <div>
                        <input type="hidden" name = "id" value = "<?php echo $row['product_id']?>">
                    </div>
                    <div>
                        Product Category:<input type="text" name ="category" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        Product Name: <input type="text" name = "product_name" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        Product Image: <input type="file" name = "image_file">
                    </div>
                    <br>
                    <div>
                        Product Quantity: <input type="number" name = "qty" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="submit" value="UPDATE">
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>
