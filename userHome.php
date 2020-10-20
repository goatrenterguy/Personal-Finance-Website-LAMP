<?php
require_once 'header.php';

// if (!$loggedin) {
//     echo "<h3>Please Login</h3>";
//     die(require 'footer.php');
// }

// if (isset($_GET['view'])) {
//     $view = sanitizeString($_GET['view']);

//     if ($view == $user)
//         $name = "Your";
//     else
//         $name = "$view's";

//     echo "<h3>$name Profile</h3>";
// $userAvatar = showAvatar($view);
//     echo "<a href='messages.php?view=$view'>View $name messages</a>";
//     die(require 'footer.php');
// }
?>

<div id="userHeader">
    <div id="userContainer">
        <div id="userName"><?php echo $user; ?></div>
        <img id='userAvatar' src='userpics/<?php echo $user; ?>.png' alt='Avatar'>
    </div>
</div>

<?php
require_once 'footer.php';
?>