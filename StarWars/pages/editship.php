<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
//showMem();
$name = htmlspecialchars($_POST['name']);
$desc = htmlspecialchars($_POST['description']);
$img = htmlspecialchars($_POST['imgPath']);
$pid = $_POST['characterId'];

editShip2($dbConnect, $name, $desc, $img, $pid);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style></style>
</head>

<body onload="bounce()">

    <script>
        function bounce() {
            window.location.href = 'adminShips.php';
        }
    </script>
</body>

</html>