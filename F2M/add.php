<?php
    session_start();

    include_once 'includes/connection.php';

    $productCategory = $_POST['category'];
    $productName = $_POST['product_name'];
    $productQty = $_POST['qty'];

    if(isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true). ".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: create.php?uploadsuccess");
                }
                else{
                    echo "File too big!";
                }
            }
            else{
                echo "Error occured";
            }
        }
        else{
            echo "File type not recognized.";
        }
    }
    
    $sql = "INSERT INTO products(product_category, product_name, product_image, product_quantity) VALUES ('$productCategory', '$productName', '$fileNameNew', '$productQty');";
    mysqli_query($conn, $sql);

    header("Location: create.php?productuploadsuccessfully");
?>