<?php
    session_start();

    include_once 'includes/connection.php';

    $result = mysqli_query($conn, "SELECT * FROM products");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css?v=1">
        <title>Products Data</title>
    </head>
    <body>
        <div class = "header">
            <div class = "inner-header">
                <div class = "logo-container">
                    <a href="index.php"><h1>F2M<span>PREMIUM</span></h1></a>
                </div>
                <div>
                    <a href="index.php"><input type ="submit" class = "logout" value = "HOME"></a>
                </div>   
            </div>
        </div>
        <div>
            <br><br>
            <?php
                if(mysqli_num_rows($result)>0){
                    ?>
                    <table>
                        <tr>
                            <td class = "form-body">Product Category: </td>
                            <td class = "form-body">Product Name: </td>  
                            <td class = "form-body">Product Image: </td>  
                            <td class = "form-body">Product Quantity: </td>
                            <td class = "form-body">Actions: </td>

                        </tr>      
                    
                            <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)){
                                ?>
                        <tr>
                            <td class = "form-body"><?php echo $row['product_category'];?></td>
                            <td class = "form-body"><?php echo $row['product_name'];?></td>
                            <td class = "form-body"><?php echo $row['product_image'];?></td>
                            <td class = "form-body"><?php echo $row['product_quantity'];?></td>
                            <td class = "form-body"><a href="update.php?id=<?php echo $row['product_id'];?>">Update</a></td>
                            <td class = "form-body"><a href="delete.php?id=<?php echo $row['product_id'];?>">Delete</a></td>
                        </tr>

                                <?php
                                $i++;
                            }
                            ?>
                    </table>
                    <?php
                }
                else{
                    echo "No result found";
                }
            ?>
        </div>
        

    </body>
</html>