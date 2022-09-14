<?php
function dbLink()
{
    $dbHost = 'localhost';
    $dbUser = 'mri';
    $dbPass = 'password';
    $db = 'starwars';
    //  error_reporting(0);
    $mysqli = new mysqli($dbHost, $dbUser, $dbPass, $db);

    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    }
    return $mysqli;
}
function showMem()
{
    echo '<pre>';
    echo '<h3>Post</h3>';
    print_r($_POST);
    echo '<h3>Get</h3>';
    print_r($_GET);
    echo '<h3>Session</h3>';
    print_r($_SESSION);
    echo '</pre>';
}

function listMovies($dbConnect)
{
    $sql = "SELECT * FROM movies";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="content-cards">';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:25rem;">';
            echo '<div class="card-title">';
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listCharacters($dbConnect)
{
    $sql = "SELECT * FROM characters";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="content-cards">';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:25rem;">';
            echo '<div class="card-title">';
            echo '<h2>' . $row['name'] . '</h2>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listQuestions($dbConnect)
{
    $sql = "SELECT * FROM userforums";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="content-cards">';
            echo '<div class="card-title">';
            echo '<h2>' . $row['email'] . '</h2>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['messages'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listAliens($dbConnect)
{
    $sql = "SELECT * FROM alienraces";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="universe-content-cards">';
            echo '<h2>Alien Races</h2>';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:18rem;">';
            echo '<div class="universe-card-title">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listPlanets($dbConnect)
{
    $sql = "SELECT * FROM planets";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="universe-content-cards">';
            echo '<h2>Planets</h2>';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:18rem;">';
            echo '<div class="universe-card-title">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listShips($dbConnect)
{
    $sql = "SELECT * FROM ships";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="universe-content-cards">';
            echo '<h2>Ships</h2>';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:18rem;">';
            echo '<div class="universe-card-title">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function listForce($dbConnect)
{
    $sql = "SELECT * FROM theforce";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="universe-content-cards">';
            echo '<h2>The Force</h2>';
            $image = $row['imgPath'];
            echo '<img src="../img/' . $image . '" alt="' . $image . '" style="width:18rem;">';
            echo '<div class="universe-card-title">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo $row['description'];
            echo '<br><br>';
            echo '</div>';
            echo '</div>';
        }
    }
}

/********************************************************** */

function validate($dbConnect, $uname, $pwd)
{
    $sql = "SELECT * from users";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['uname'] == $uname) {
                if ($row['pwd'] == $pwd) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['auth'] = 'yes';
                    return true;
                }
            }
        }
    }
}
