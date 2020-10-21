<?php
require_once 'header.php';
require_once 'userHome.php'
?>

<div id="activePage">

  <h1>You are looking at the Calculator Page</h1>
  <div class="calculator calculator-savings">
    <div class="interest_calc">
        <h3>Input</h3>
        <table class="form ">
          <tr>
            <td>
              <label for="deposit-amount">Deposit Amount</label>
            </td>
            <td>
                            <input id="deposit-amount" name="depoist-amount" type="number" value="500" step=".01" min="0">
            </td>
          </tr>
          <tr>
            <td>
              <label for="intrest-rate">Interest Rate</label>
            </td>
            <td>
              <input id="interest-rate" name="intrest-rate" type="number" value="0.5" step=".01" min="0">
            </td>
          </tr>
          <tr>
            <td>
              <label for="years">Years</label>
            </td>
            <td>
              <input           <input id="years" name="years" type="number" value="1" step="1" min="1">
            </td>
          </tr>
          <tr>
            <td>
              <label for="monthly-deposit">Additional Monthly Deposit</label>
            </td>
            <td>
              <input id="monthly-deposit" name="monthly-deposit" type="number" value="25" step=".01" min="0">
            </td>
          </tr>
        </table>
    </div>
    <div class="results">
      <h3>Results</h3>
      <h6>Initial Deposit<br> $<span id="result-deposit-amount">500.00</span></h6>
      <h6>Monthly Deposits<br> $<span id="result-monthly-deposit">300</span></h6>
      <h6>Future Value<br>$<span id="result-future-value">304.08</span></h6>
      <h6>Interest Earned<br>$<span id="result-interest-earned">4.20</span></h6>
    </div>
  </div>
</div>
<script>
  function interest_calc() {
      var deposit_amount = parseFloat(document.getElementById("deposit-amount").value);
      var interest_rate = 0.01 * parseFloat(document.getElementById("interest-rate").value);
      var years = parseFloat(document.getElementById("years").value);
      var monthly_deposit = parseFloat(document.getElementById("monthly-deposit").value);
    	var compound_interest_principal = (deposit_amount * Math.pow(1+(interest_rate/12), 12 * years));
      var future_value_series = monthly_deposit * ((Math.pow(1 + (interest_rate / 12), 12 * years) - 1) / (interest_rate/12));
    	var futureValue = compound_interest_principal + future_value_series;

      document.getElementById("result-deposit-amount").innerHTML = deposit_amount.toFixed(2);
      document.getElementById("result-monthly-deposit").innerHTML = ((years*12) * monthly_deposit).toFixed(2);
      document.getElementById("result-future-value").innerHTML = futureValue.toFixed(2);
      document.getElementById("result-interest-earned").innerHTML = (futureValue - deposit_amount - (years * 12 * monthly_deposit)).toFixed(2);
    }

  document.getElementsByClassName("calculator-savings")[0].addEventListener("input", interest_calc);
</script>
</div

<?php
require_once 'footer.php';
?>
