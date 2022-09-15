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
    $sql = "SELECT * from admin";
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

function insertMovie($dbConnect, $title, $description, $img, $userId)
{
    $sql = "INSERT INTO movies(id,title,description,imgPath, userId) VALUES 
(null,'$title','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Record added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editMovies($dbConnect, $uid)
{
    $sql = "SELECT * from movies";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="edit.php">
                    <input type="text" name="title" value="' . $row['title'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="movieId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function edit($dbConnect, $title, $desc, $img, $pid)
{
    $sql = "UPDATE movies SET title='$title', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Movie Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteMovies($dbConnect, $uid)
{
    $sql = "SELECT * FROM movies WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="delete.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['title'] . '</p>';
        }
    }
}

function delete($dbConnect, $id)
{
    $sql = "DELETE FROM movies WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Movie Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}
