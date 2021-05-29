<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css?v=1">
        <title>Admin Login Page</title>
    </head>
    <body>
        <div class = "header">
            <div class = "inner-header">
                <div class = "logo-container">
                    <a href="index.php"><h1>F2M<span>PREMIUM</span></h1></a>
                </div>
                <div>
                    <a href="logout.php"><input type = "submit" class = "logout" value = "LOGOUT"></a>
                </div>
            </div>
        </div>
        <div class = "body">
            <div class = "form-body">
                <div class = "admin-logo">
                    <h1>PRODUCTS</h1></a>
                </div>   
            
                <form action="add.php" method = "POST" enctype = "multipart/form-data" class = "form-container">
                    <div>
                        Product Category:<input type="text" name ="category" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        Product Name: <input type="text" name = "product_name" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        Product Image: <input type="file" name = "file">
                    </div>
                    <br>
                    <div>
                        Product Quantity: <input type="number" name = "qty" placeholder = "Type here">
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="submit" value="SUBMIT">
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>
