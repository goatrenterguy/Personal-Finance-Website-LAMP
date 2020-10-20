<?php
require_once 'header.php';

echo <<<_END
<script>
    function checkUser(user) {
        if (user.value == '') {
            $('#used').html('&nbsp;');
            return;
        }

        $.post('checkuser.php', { user : user.value }, function(data) {
            $('#used').html(data)
        });
    }
</script>  
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user']))
    destroySession();

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered<br><br>';
    else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");

        if ($result->num_rows)
            $error = 'That username already exists<br><br>';
        else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die('<h4>Account created</h4>Please Log in.</div></body></html>');
        }
    }
}
?>

<div class="loginContainer">
    <div id="loginRow">
        <div id="loginForm">
            <form method='post' action='signup.php'>
                <div id="thisIsGettingWeird">
                    <div data-role='fieldcontain'>
                        <label></label>
                        <h3>Sign Up</h3>
                    </div>
                    <img src="./img/icon.png" alt="Icon" id="iconImage">
                </div>
                <div id="loginFields">
                    <div data-role='fieldcontain'>
                        <label>Username</label>
                        <input class="loginInput" type='text' maxlength='16' name='user' value='<?php echo $user; ?>' onBlur='checkUser(this)'>
                    </div>
                    <div data-role='fieldcontain'>
                        <label>Password</label>
                        <input class="loginInput" type='password' maxlength='16' name='pass' value='<?php echo $pass; ?>'>
                    </div>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <input class="loginInput" data-transition='slide' type='submit' value='Sign Up'>
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