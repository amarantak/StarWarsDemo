<?php
session_start();
error_reporting(0);
include_once('../../functions/functions.php');
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
} else {
    //redirect to login
    header("Location: login.php");
    echo 'Invalid Login';
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <div class="pages-container">
        <div class="pages-logo">
            <a href="../../index.php"><img src="../../img/logo.png" class="logo" alt="Star Wars Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Movies</a></li>
                <li><a href="adminAlien.php">Alien Races</a></li>
                <li><a href="adminCharacters.php">Characters</a></li>
                <li><a href="adminPlanets.php">Planets</a></li>
                <li><a href="adminShips.php">Ships</a></li>
                <li><a href="adminTheForce.php">The Force</a></li>
                <li><a href="adminForums.php">Forums</a></li>
            </ul>
        </nav>
        <div class="logout">
            <p><a href="login.php?logout=logout">Logout</a></p>
        </div>
        <div class="pages-main">
            <form action="addmovie.php" method="post">
                <?php
                //error_reporting(0);
                $n = $_POST['n'];
                $userId = $_POST['userId'];
                for ($i = 1; $i <= $n; $i++) {
                ?> <div class="multiple">
                        <label for="title">Title:<br>
                            <input type="text" name="<?php echo $i . 'title'; ?>" value="">
                            <input type="hidden" name="n" value="<?php echo $n; ?>">
                        </label>
                        <label for="description">Description:<br>
                            <textarea type="text" name="<?php echo $i . 'description'; ?>" value="">
                        </textarea>
                        </label>
                        <label for="imgPath">Image Path:<br>
                            <input type="text" name="<?php echo $i . 'imgPath'; ?>" value="">
                        </label>
                    </div>
                    <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>"><br>
                <?php                }
                ?>
                <input type="submit" name="ins" value=" SAVE ">
            </form>
        </div>
    </div>
</body>

</html>