<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
showMem();
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$message = $_POST['message'];
$userId = $_POST['userId'];
insertForum($dbConnect, $email, $pwd, $message, $userId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body onload="bounce()">
    <script>
        function bounce() {
            window.location.href = 'adminForums.php';
        }
    </script>
</body>

</html>