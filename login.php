<?php
require_once 'header.php';
$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered';
    else {
        $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

        if ($result->num_rows == 0) {
            $error = "Invalid login attempt";
        } else {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("Location: userHome.php?view=$user");
            die();
        }
    }
}
?>

<div class="loginContainer">
    <div id="loginRow">
        <div id="loginForm">
            <form method='post' action='login.php'>
                <div id="thisIsGettingWeird">
                    <div data-role='fieldcontain'>
                        <label></label>
                        <h3>Welcome</h3>
                    </div>
                    <img src="./img/icon.png" alt="Icon" id="iconImage">
                </div>
                <div id="loginFields">
                    <div data-role='fieldcontain'>
                        <label>Username</label>
                        <input class="loginInput" type='text' maxlength='16' name='user' value='<?php echo $user; ?>'>
                    </div>
                    <div data-role='fieldcontain'>
                        <label>Password</label>
                        <input class="loginInput" type='password' maxlength='16' name='pass' value='<?php echo $pass; ?>'>
                    </div>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <input class="loginInput" data-transition='slide' type='submit' value='Login'>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <span class='error'><?php echo $error; ?></span>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>