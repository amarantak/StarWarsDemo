<?php
session_start();
error_reporting(0);
include_once('../../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
showMem();
$name = $_POST['name'];
$description = $_POST['description'];
$img = $_POST['imgPath'];
$userId = $_POST['userId'];
insertAlien($dbConnect, $name, $description, $img, $userId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body onload="bounce()">
    <script>
        function bounce() {
            window.location.href = 'adminAlien.php';
        }
    </script>
</body>

</html>