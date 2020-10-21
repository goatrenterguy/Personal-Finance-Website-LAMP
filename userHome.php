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

<script>
    window.onload = function() {
        setActive(document.URL);
    };
</script>

<div id="userHeader">
    <div id="userContainer">
        <div id="userName"><?php echo $user; ?></div>
        <?php showAvatar($user); ?>
    </div>
</div>

<div id="userContent">
    <!-- Tab links -->
    <div class="tab">
        <a href='summary.php'>
            <button class="tablinks" id="summaryTab">Summary</button>
        </a>
        <a href='transactions.php'>
            <button class="tablinks" id="transactionsTab">Transactions</button>
        </a>
        <a href='loans.php'>
            <button class="tablinks" id="loansTab">Loans</button>
        </a>
        <a href='budget.php'>
            <button class="tablinks" id="budgetTab">Budgets</button>
        </a>
        <a href='calculator.php'>
            <button class="tablinks" id="calculator">Savings Calculator</button>
        </a>
    </div>

    <?php
    require_once 'footer.php';
    ?>
