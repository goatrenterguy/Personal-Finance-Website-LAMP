function setActive(currentURL) {
    if (currentURL.includes("summary.php")) {
        document.getElementById("summaryTab").style.backgroundColor = "#167b5f";
        document.getElementById("summaryTab").style.color = "white";
    }

    if (currentURL.includes("transactions.php")) {
        document.getElementById("transactionsTab").style.backgroundColor = "#167b5f";
        document.getElementById("transactionsTab").style.color = "white";
    }

    if (currentURL.includes("loans.php")) {
        document.getElementById("loansTab").style.backgroundColor = "#167b5f";
        document.getElementById("loansTab").style.color = "white";
    }

    if (currentURL.includes("budget.php")) {
        document.getElementById("budgetTab").style.backgroundColor = "#167b5f";
        document.getElementById("budgetTab").style.color = "white";
    }
}