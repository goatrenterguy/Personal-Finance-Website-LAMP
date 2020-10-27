<?php
require_once 'header.php';
require_once 'userHome.php'
?>

    <div id="activePage">
        
    <head>
      <link rel="stylesheet" href="budgetstyle.css" type="text/css">
    </head>

    <body>
        <div class="header">
            <h1>Budget Manager</h1>
        </div>

        <div class="container">

            <div class="left-column">
                <h2>Income</h2>
                <p>$0 so far of $150</p>
                <h2>Spending</h2>
                <p>$0 spent of $150</p>
                <h2>Goals</h2>
                <p>$0 spent of $0</p>
            </div>

            <div class="center-column">
                    <div id="form-box">
                        <form>
                                <span>Month:</span>
                                    <select name="month">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>

                                <span>Year:</span>
                                    <select name="month">
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                    </select>
                                <div type="button" class="budgetButton" id="button">Create New Budget</div>
                        </form>
                    </div>
                
                    <div id="box1">
                        <p>January 2020 Budget...</p>
                        <span>Category:</span> 
                              <select name="category">
                                  <option value="income">Income</option>
                                  <option value="housing">Housing</option>
                                  <option value="transportation">Transportation</option>
                                  <option value="food">Food</option>
                                  <option value="utilities">Utilities</option>
                                  <option value="medical">Medical/Healthcare</option>
                                  <option value="insurance">Insurance</option>
                                  <option value="personal">Personal</option>
                                  <option value="debt">Debt Payments</option>
                                  <option value="entertainment">Entertainment</option>
                                  <option value="miscellaneous">Miscellaneous</option>
                              </select>
                        
                        <div id="amount">
                            <span>Amount:</span> <input type="number" name="amount" placeholder="How much?">
                        </div>
                        
                        <div>
                            <div type="button" class="setCategory" id="button">Set Category</div>
                        </div>
                    </div>
                    
                    <div id="box2">
                        <p>This is where the Category : Amount would go</p>
                
                    </div>
                
            </div>

            <div class="right-column">
                <h2>You've budgeted...</h2>
                <p>Income:  $0</p>
                <p>Spending:    $150</p>
                <p>Goals:   $0</p>
                <p></p>
                <p>Left over: -$150</p>
            </div>
        </div>
    </body>

    </div>

<?php
require_once 'footer.php';
?>