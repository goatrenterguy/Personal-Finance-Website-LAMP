<?php
require_once 'header.php';
require_once 'userHome.php'
?>

    <div id="activePage">
    
<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<h1><span>Expense Manager</span></h1>
<h2><span>Add a new item:</span></h2>

<div id="form-box">
<form>
  <div>
    <span>Type:</span> 
      <select name="type">
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
  </div>
  
  <div>
    <span>Name:</span> <input type="text" name="item-name" placeholder="Name of expense">
  </div>
  
  <div>
    <span>Date:</span> <input type="date" name="date">
  </div>
  
  <div>
    <span>Amount:</span> <input type="number" name="amount" placeholder="How much?">
  </div>
  
</form>
</div>

<div type="button" class="myButton" id="button">Add a new expense</div>

<div id="budgetTotal">Your remaining budget will appear here.</div>

<table>
  <tr>
    <th id="type" class="center">type</th>
    <th>name</th>
    <th id="date">date</th>
    <th style="text-align: right" id="amount">amount</th>
  </tr>
  <tr id="if-empty">
    <td colspan="4"><span>Your added items will show up here!</span></td>
  </tr>

</table>
</body>

<script src="app.js"></script>
<?php
require_once 'footer.php';
?>