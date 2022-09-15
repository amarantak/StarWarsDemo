<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
//showMem();
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$validateUname = ($uname != NULL) ? true : false;
$validatePwd = ($pwd != NULL) ? true : false;

//showMem();
if ($_SESSION['auth'] == 'yes') {
    $validate = true;
} else if ($validatePwd && $validateUname) {
    $validate = validate($dbConnect, $uname, $pwd);
}
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
    <div class="pages-container">
        <div class="pages-logo">
            <a href="../index.php"><img src="../img/logo.png" class="logo" alt="Star Wars Logo">
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="adminAlien.php">Alien Races</a></li>
            </ul>
        </nav>
        <div class="logout">
            <p><a href="../index.php?logout=logout">Logout</a></p>
        </div>
        <div class="pages-main">
            <?php
            if ($validate) {
                echo '<h2>';
                echo 'Welcome ' . ' - ' . $uname . '!' . '<br>';
                echo '</h2>';
                echo '
                <h3>Add Alien</h3><hr>
                <form action="add.php" method="post">
                    <input type="text" name="name" placeholder="Enter Name"><br><br>
                    <input type="text" name="imgPath" placeholder="Image Path"><br><br>
                    <textarea name="description" id="" cols="30" rows="10" placeholder="Enter Description"></textarea>
                    <input type="hidden" name="userId" value="' . $_SESSION['id'] . '"><br>
                    <input type="submit" value="Add Alien Race">
                </form>
                
                <h3>Edit Movies</h3><hr>
                ';
                echo '<div class="item item1">';
                editMovies($dbConnect, $_SESSION['id']);
                echo '</div>';
                echo '<div class="item item2">';
                echo '<br><h3>Delete Reviews</h3><br><hr><br>';
                deleteMovies($dbConnect, $_SESSION['id']);
                echo '</div>';
            } else {
                echo '<p><a href="../index.php">Return</a></p> ';
            }
            ?>
        </div>
    </div>
</body>

</html>