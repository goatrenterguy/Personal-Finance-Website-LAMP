<?php
$dbhost  = 'localhost';

$dbname  = 'db55';   // Modify these...
$dbuser  = 'user55';   // ...variables according
$dbpass  = '55xxxx';   // ...to your installation


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error)
    die("Fatal Error 1");

function createTable($name, $query){
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}

function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("Fatal Error 2");
    return $result;
}

function destroySession() {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

function sanitizeString($var){
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

function showAvatar($user) {
    if (file_exists("userpics/$user.png")) {
        echo "<img id='userAvatar' src='userpics/$user.png' alt='Avatar'>";
    } else {
        echo "<img id='userAvatar' src='userpics/defaultAvatar.png' alt='Avatar'>";
    }
}
?>
