<?php
session_start();
error_reporting(0);
include_once('functions/functions.php');
$dbConnect = dbLink();
if ($dbconnect) echo '<!-- Connection Established -->';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <div class="grid-container">
        <header>
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Star Wars Logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/movies.php">Movies Summary</a></li>
                    <li><a href="pages/characters.php">Characters</a></li>
                    <li><a href="pages/universe.php">Universe</a></li>
                    <li><a href="pages/forums.php">Users Forum</a></li>
                </ul>
            </nav>
        </header>
        <section class="hero">
            <img src="img/hero.webp" class="hero-image" alt="Image of Star Wars The Trilogy DVD">
            <div class="cta">
                <h2>When <br>Everything<br>Began</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Consequuntur, laboriosam.</p>
                <div class="button">
                    <a href="#">Know More</a>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="left">
                <h3>
                    News
                </h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid odit dolor nam sit, delectus dolore quas eos ea molestias!Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid odit dolor nam sit, delectus dolore quas eos ea molestias!Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid odit dolor nam sit, delectus dolore quas eos ea molestias!</p>
                <br><br>
                <button>
                    <a href="">Know More</a>
                </button>
            </div>
            <div class="right">
                <img src="img/book.jpg" alt="Image of a Book">
            </div>
        </section>
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
                <a href="pages/login.php">Admin Login</a><br>
                <p>&copy;2022 Star Wars Fans</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
    <script src="js/app.js">
    </script>
</body>

</html>