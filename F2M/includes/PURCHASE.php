<?php
// define variables and set to empty values
$usernameErr = $useridErr = $cardnumErr = "";
$username = $uId = $cardNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["uname"]);
  }
  
  if (empty($_POST["uid"])) {
    $useridErr = "User ID is required";
  } else {
    $uId = test_input($_POST["uid"]);
  }
    
  if (empty($_POST["cardNum"])) {
    $cardnumErr = "Card Number is required";
  } else {
    $cardNum = test_input($_POST["cardNum"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../styles/purchase-style.css?v=1">
        <title>Checkout</title>
    </head>
    
    <body>
    <section id="Home">
        <div class = "header">
            <div class = "inner-header">
                <div class = "logo-container">
                    <a href="../index.php"><h1>F2M<span>PREMIUM</span></h1></a>
                </div>   
            </div>
        </div>
        <div class = "menu_container">
            <div class = "menu ">
                <ul class = "navigation">
                    <a href="../index.php"><li>Home</li></a>
                    <a href="index.php#About"><li>About</li></a>
                    <a href="EDUCATION.php"><li>Education</li></a>
                    <a href="GAMES.php"><li>Games</li></a>
                    <a href="PREMIUM.php"><li>Premium Accounts</li></a>
                </ul>
                <div class="search-box">
                    <input class="search-text" type="text" placeholder="Type to search">
                    <a class = "search-btn" href="">
                        <img src="../assets/search.png" width="15", height="15">
                    </a>  
                </div>
            </div> 
        </div>
 
        <div class = "co-container">
            <div class = "body">
                <p>CHECKOUT</p>
            </div>
            <section class="checkout-section">
                <!----UserInput---->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class = "card-input">
                        Username: <input type="text" name ="uname" class="form-control" placeholder = "Type here">
                        <span class="error">* <?php echo $usernameErr;?></span>
                        <br><br>
                        User ID: <input type="number" name = "uid" class="form-control" placeholder = "Type here">
                        <span class="error">* <?php echo $useridErr;?></span>
                        <br><br>
                    </div>
                    <!----Point Selection---->
                    <div class = "section-label">
                        <p>Select Points</p>
                    </div>
                    <div class = "points-selection_1">
                        <div class = "points_1">
                            <button onclick="pts1()">100 points</button>
                        </div>
                        <div class = "points_1">
                            <button onclick="pts2()">200 points</button>
                        </div>  
                        <div class = "points_1">
                            <button onclick="pts3()">250 points</button>
                        </div>
                        <div class = "points_1">
                            <button onclick="pts4()">500 points</button>
                        </div>
                        <div class = "points_1">
                            <button onclick="pts5()">1000 points</button>
                        </div>
                        <div class = "points_1">
                            <button onclick="pts6()">2000 points</button>
                        </div>
                    </div>
                    <br><br>
                    <!----Voucher Selection---->
                    <div class = "voucher-lbl">
                        <p>Select Voucher</p>
                    </div>
                    <div class="voucher-selection">
                        <div class = "vouch">
                            <button class="v1"></button>
                        </div>
                        <div class = "vouch">
                            <button class="v2"></button>
                        </div>
                        <div class = "vouch">
                            <button class="v3"></button>
                        </div>
                        <div class = "vouch">
                            <button class="v4"></button>
                        </div>
                    </div>
                    <br><br>
                    <!----Card Selection---->
                    <div class = "payment-lbl">
                        <p>Choose Payment Method</p>
                    </div>
                    <div class = "payment-selection">
                        <div class="gallery_two ">
                            <div class = "payment-btn">
                                <button class = "button1" onClick="coins()"></button>
                                <p id="payone"></p> 
                            </div>
                        </div>
                        <div class="gallery_two ">
                            <div class = "payment-btn">
                                <button class = "button2" onClick="gcash()"></button>
                                <p id="paytwo"></p> 
                            </div>
                        </div>
                        <div class="gallery_two ">
                            <div class = "payment-btn">
                                <button class = "button3" onClick="paymaya()"></button>
                                <p id="paytree"></p> 
                            </div>
                        </div>
                        <div class="gallery_two ">
                            <div class = "payment-btn">
                                <button class = "button4" onClick="vm()"></button>
                                <p id="payfour"></p> 
                            </div>
                        </div>
                    </div>
                    <div class = "card-input">
                        Card Number: <input type="text" name ="cardNum" class="form-control" placeholder = "Type here">
                        <span class="error">* <?php echo $cardnumErr;?></span>
                        <br><br>
                        Email: <input type="text" class="form-control" placeholder = "(Optional)">
                        <br><br>
                        Total: <span class = "amt">₱0</span>
                        <br><br>
                        <div>
                            <button id = "button" type = "submit" class = "confirm-btn" onclick="conf()">CONFIRM</button>
                        </div>
                        <br><br>
                    </div>
                </form>            
            </section>
        </div>
        <!--FOOTER -->
        <section id="About">
            <div class = "footer-container">
                <div class = "inner-footer">
                    <div class = "footer">
                        <div class = "logo-footer">
                            <h1>F2M<span>PREMIUM</span></h1>
                        </div>
                        <div class = "about-footer">
                            <div class = "about-content">
                                <h3 class="abt-text"> Terms and Policy </h3>
                                <p> F2M Premium is not responsible to your losses. Rest assured, when you use the site,
                                    it will not save any of your personal information and everything will be treated confidentially.
                                    If any issues arise, the company and you will discuss things privately.
                                </p>
                            </div>  
                        </div>
                    </div>
                </div>
            
                <div class = "nav-footer-container">
                    <ul class = "nav-footer">
                        <a href="HOME.html"><li>Home</li></a>
                        <a href="HOME.html#About"><li>About</li></a>
                        <a href="EDUCATION.html"><li>Education</li></a>
                        <a href="GAMES.html"><li>Games</li></a>
                        <a href="PREMIUM.html"><li>Premium Accounts</li></a>
                    </ul>
                </div>
            </div>
            <script src ="../js/purchase.js"></script>
        </section>
    </section>
    </body>
</html>