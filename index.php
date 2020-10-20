<?php
session_start();
require_once 'header.php';
?>

<div id="landingHeader">
    <h1 id="headerText">Welcome to <?php echo $clubstr; ?></h1>
</div>

<div id="landingContent">
    <p id="landingText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>

<div id="buttonContainerWrapper">
    <div id="buttonContainer">
        <a class="landingButtons" href="signup.php" class="button">Sign Up</a>
        <a class="landingButtons" href="login.php" class="button">Login</a>
    </div>
</div>

<?php
require_once 'footer.php';
?>