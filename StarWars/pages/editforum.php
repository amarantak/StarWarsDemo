<?php
session_start();
error_reporting(0);
include_once('../functions/functions.php');
$dbConnect = dbLink();
if ($dbConnect) {
    echo '<!-- Connection established -->';
}
//showMem();
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$desc = htmlspecialchars($_POST['description']);
$pid = $_POST['messageId'];

editForum2($dbConnect, $email, $password, $desc, $pid);

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
            window.location.href = 'adminForums.php';
        }
    </script>
</body>

</html>