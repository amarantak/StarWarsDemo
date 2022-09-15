<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
//if ($dbconnect) echo 'Connection Established'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <div class="grid-container">
        <header>
            <div class="logo">
                <a href="../index.php"><img src="../img/logo.png" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="movies.php">Movies Summary</a></li>
                    <li><a href="characters.php">Characters</a></li>
                    <li><a href="universe.php">Universe</a></li>
                    <li><a href="forums.php">Users Forum</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <h1>The Trilogy</h1>
            <div class="cards-content">
                <?php
                listMovies($dbConnect);
                ?>
            </div>
        </div>
        <footer>
            <div class="footer-content">
                <div class="social">
                    <a href="#">
                        <em class="fab fa-facebook-f"></em>
                        <span class="sr-only">Visit example.com</span>
                    </a>

                    <a href="#">
                        <em class="fab fa-instagram"></em>
                        <span class="sr-only">Visit example.com</span>
                    </a>

                    <a href="#">
                        <em class="fab fa-twitter"></em>
                        <span class="sr-only">Visit example.com</span>
                    </a>
                </div><br>
                <a href="login.php">Admin Login</a><br>
                <p>&copy;2022 Star Wars Fans</p>
            </div>
        </footer>
    </div>
</body>

</html>