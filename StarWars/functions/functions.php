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
            echo $row['description'];
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

/********************************************************************** */

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
                    <form method="post" action="editmovie.php">
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

function editMovies2($dbConnect, $title, $desc, $img, $pid)
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


//////////////////////////////////////////////////////////////////////////////

function insertAlien($dbConnect, $name, $description, $img, $userId)
{
    $sql = "INSERT INTO alienraces (id,name,description,imgPath, userId) VALUES 
(null,'$name','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editAlien($dbConnect, $uid)
{
    $sql = "SELECT * from alienraces";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="editalien.php">
                    <input type="text" name="name" value="' . $row['name'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="alienId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function editAlien2($dbConnect, $name, $desc, $img, $pid)
{
    $sql = "UPDATE alienraces SET name='$name', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteAlien($dbConnect, $uid)
{
    $sql = "SELECT * FROM alienraces WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteAlien.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['name'] . '</p>';
        }
    }
}

function deleteAlien2($dbConnect, $id)
{
    $sql = "DELETE FROM alienraces WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}


///////////////////////////////////////////////////////////////////////////
function insertCharacter($dbConnect, $name, $description, $img, $userId)
{
    $sql = "INSERT INTO characters (id,name,description,imgPath, userId) VALUES 
(null,'$name','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editCharacter($dbConnect, $uid)
{
    $sql = "SELECT * from characters";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="editcharacter.php">
                    <input type="text" name="name" value="' . $row['name'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="characterId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function editCharacter2($dbConnect, $name, $desc, $img, $pid)
{
    $sql = "UPDATE characters SET name='$name', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteCharacter($dbConnect, $uid)
{
    $sql = "SELECT * FROM characters WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteCharacter.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['name'] . '</p>';
        }
    }
}

function deleteCharacter2($dbConnect, $id)
{
    $sql = "DELETE FROM characters WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}

///////////////////////////////////////////////////////////////////////////

function insertPlanet($dbConnect, $name, $description, $img, $userId)
{
    $sql = "INSERT INTO planets (id,name,description,imgPath, userId) VALUES 
(null,'$name','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editPlanet($dbConnect, $uid)
{
    $sql = "SELECT * from planets";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="editplanet.php">
                    <input type="text" name="name" value="' . $row['name'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="planetId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function editPlanet2($dbConnect, $name, $desc, $img, $pid)
{
    $sql = "UPDATE planets SET name='$name', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deletePlanet($dbConnect, $uid)
{
    $sql = "SELECT * FROM planets WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteplanet.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['name'] . '</p>';
        }
    }
}

function deletePlanet2($dbConnect, $id)
{
    $sql = "DELETE FROM planets WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}

////////////////////////////////////////////////////////////////////////////////////

function insertShip($dbConnect, $name, $description, $img, $userId)
{
    $sql = "INSERT INTO ships (id,name,description,imgPath, userId) VALUES 
(null,'$name','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editShip($dbConnect, $uid)
{
    $sql = "SELECT * from ships";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="editship.php">
                    <input type="text" name="name" value="' . $row['name'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="shipId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function editShip2($dbConnect, $name, $desc, $img, $pid)
{
    $sql = "UPDATE ships SET name='$name', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteShip($dbConnect, $uid)
{
    $sql = "SELECT * FROM ships WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteShip.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['name'] . '</p>';
        }
    }
}

function deleteShip2($dbConnect, $id)
{
    $sql = "DELETE FROM ships WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}

//////////////////////////////////////////////////////////////////////

function insertForce($dbConnect, $name, $description, $img, $userId)
{
    $sql = "INSERT INTO theforce (id,name,description,imgPath, userId) VALUES 
(null,'$name','$description','$img','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editForce($dbConnect, $uid)
{
    $sql = "SELECT * from theforce";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                    <form method="post" action="editforce.php">
                    <input type="text" name="name" value="' . $row['name'] . '"><br><br>
                    <input type="text" name="imgPath" value="' . $row['imgPath'] . '"><br><br>
                    <textarea name="description" cols="30" rows="10">' . $row['description'] . '</textarea><br>
                    <input type="hidden" name="forceId" value="' . $row['id'] . '">
                    <input type="submit" value="Edit Entry">
                    </form>
                    ';
            }
        }
    }
}

function editForce2($dbConnect, $name, $desc, $img, $pid)
{
    $sql = "UPDATE theforce SET name='$name', description='$desc', imgPath='$img' WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteForce($dbConnect, $uid)
{
    $sql = "SELECT * FROM theforce WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteForce.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['name'] . '</p>';
        }
    }
}

function deleteForce2($dbConnect, $id)
{
    $sql = "DELETE FROM theforce WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}

///////////////////////////////////////////////////////////////////////////////

function insertForum($dbConnect, $email, $pwd, $message, $userId)
{
    $sql = "INSERT INTO userforums (id,email,pwd, message, userId) VALUES 
(null,'$email','$pwd','$message','$userId')";
    if ($dbConnect->query($sql) == true) {
        echo 'Entry added<br>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $dbConnect->error;
    }
    $dbConnect->close();
}

function editForum($dbConnect, $uid)
{
    $sql = "SELECT * from userforums";
    $res = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['userId'] == $uid) {
                echo '
                <form method="post" action="editforum.php">
                <input type="text" name="email" value="' . $row['email'] . '"><br><br>
                <input type="text" name="pwd" value="' . $row['pwd'] . '"><br><br>
                <textarea name="message" cols="30" rows="10">' . $row['message'] . '</textarea><br>
                <input type="hidden" name="forumId" value="' . $row['id'] . '">
                <input type="submit" value="Edit Entry">
                </form>
                    ';
            }
        }
    }
}

function editForum2($dbConnect, $email, $pwd, $message, $pid)
{
    $sql = "UPDATE userforums SET email='$email', pwd='$pwd', message='$message', WHERE id='$pid'";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Updated';
    } else {
        echo 'Mistakes have been made';
    }
}

function deleteForum($dbConnect, $uid)
{
    $sql = "SELECT * FROM userforums WHERE userId = $uid";
    $result = mysqli_query($dbConnect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p><a href="deleteForum.php?id=' . $row['id'] . '">[ Delete ]</a> ' . $row['email'] . '</p>';
        }
    }
}

function deleteForum2($dbConnect, $id)
{
    $sql = "DELETE FROM userforums WHERE id = $id";
    if (mysqli_query($dbConnect, $sql)) {
        echo 'Entry Deleted';
    } else {
        echo 'Mistakes have been made';
    }
}
