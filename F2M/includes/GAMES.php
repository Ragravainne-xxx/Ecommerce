<?php
    include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../styles/games.css">
        <title>E-Commerce Website</title>
    </head>
    <body>
    <?php
        $sql = "SELECT * FROM products;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "Thank you";
            }
        }
    ?>
    <section id="Home">
        <div class = "header">
            <div class = "inner-header">
                <div class = "logo-container">
                    <a href="index.php"><h1>F2M<span>PREMIUM</span></h1></a>
                </div>   
            </div>
        </div>
        <div class = "menu_container">
            <div class = "menu ">
                <ul class = "navigation">
                    <a href = '../index.php'><li>Home</li></a>
                    <a href = '#About'><li>About</li></a>
                    <a href = 'EDUCATION.php'><li>Education</li></a>
                    <a class = "active" href = 'GAMES.php'><li>Games</li></a>
                    <a href = 'PREMIUM.php'><li>Premium Accounts</li></a>
                </ul>
                <div class="search-box">
                    <input class="search-text" type="text" placeholder="Type to search">
                    <a class = "search-btn" href="">
                        <img src="../assets/search.png" width="15", height="15">
                    </a>  
                </div>
            </div>
        </div> 

        <div class = "body">
            <p style="color: #565656;">GAMES</p>
        </div>
        <div class = "featured-container">
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/garena.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/mobile-legends.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/valorant.png" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/ros.jpg" width="200", height="200">
				</a>
            </div>
        </div>
        <div class = "featured-container">
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/cod.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/lol.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/sstarsm.png" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/sstaryg.png" width="200", height="200">
				</a>
            </div>
        </div>
        <div class = "featured-container">
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/sstarjyp.png" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/pubg.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/genshin.jpg" width="200", height="200">
				</a>
            </div>
            <div class = "box">
                <a class = "img-links" href="PURCHASE.php">
					<img src = "../assets/fortnite.jpg" width="200", height="200">
				</a>
            </div>
        </div>


         <!--FOOTER -->
        <div class = "footer-container">
            <section id = "About">
            <div class = "inner-footer">
                <div class = "footer">
                    <div class = "logo-footer">
                        <h1>F2M<span>PREMIUM</span></h1>
                    </div>
                    <div class = "about-footer">
                        <div class = "about-content">
                            <h3 class="abt-text"> About Us </h3>
                            <p> F2M offers a legit and affordable accounts at a discountable price.
                                Watch unlimited movies and listen to streams without a hassle. Play
                                games in your favorite skins or characters. Your best decision is right
                                at your fingertips. Avail now!
                            </p>
                        </div>  
                    </div>
                </div>
            </div>
            </section>
            <div class = "nav-footer-container">
                <ul class = "nav-footer">
                    <a href='../index.php'><li>Home</li></a>
                    <a href='#About'><li>About</li></a>
                    <a href='EDUCATION.php'><li>Education</li></a>
                    <a href='GAMES.php'><li>Games</li></a>
                    <a href='PREMIUM.php'><li>Premium Accounts</li></a>
                </ul>
            </div>
            </section>
        </div>
    </section>
    </body>
</html>
