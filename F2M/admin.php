<?php
    session_start();

    include_once 'includes/connection.php';

    $error = "";
    if(isset($_POST['username'])){
        $uName = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE user='".$uName."' AND pass='".$password."' limit 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck == 1){
            header("Location: create.php");
            die;
        }
        if (empty($uName && $password)) {
            $error = "*Fields Cannot Be Blank";
        }
        else{
            $error = "*Invalid Credentials";
        }

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css?v=2">
        <title>Admin Login Page</title>
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
        <div class = "body">
            <div class = "form-body">
                <div class = "admin-logo">
                    <h1>ADMIN LOGIN</h1></a>
                </div>   
            
                <form action="#" method = "POST" class = "form-container">
                    <div>
                        Username:<input type="text" name ="username" placeholder = "Enter Your Username">
                    </div>
                    <br>
                    <div>
                        Password: <input type="password" name = "password" placeholder = "Password">
                    </div>
                    <br>
                    <div>
                        <span class = "error "><?php echo $error;?></span>
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="submit" value="LOGIN">
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>
