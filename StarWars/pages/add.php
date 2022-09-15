<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
showMem();
$title = $_POST['title'];
$description = $_POST['description'];
$img = $_POST['imgPath'];
$userId = $_POST['userId'];
insertMovie($dbConnect, $title, $description, $img, $userId);

$alienname = $_POST['name'];
$aliendescription = $_POST['description'];
$alienimg = $_POST['imgPath'];
$alienuserId = $_POST['userId'];
insertAlien($dbConnect, $alienname, $aliendescription, $alienimg, $alienuserId);
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
            window.location.href = 'dashboard.php';
        }
    </script>
</body>

</html>