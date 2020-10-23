$(document).ready(function (){
  var totalBudget = 0;
  var totalExpenses = 0;
  var totalIncome = 0; 
  
  $name = $('input[name="item-name"');
  $amount = $('input[name="amount"'); 
  $type = $('select[name="type"');
  $date = $('input[name="date"');
  
  var formatDate = function(d) {
    var d = d.split('-');
    var dt = new Date(d[0],d[1],d[2]);
    var formattedDate = '';
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    formattedDate += months[ dt.getMonth()-1 ]; //Months are 0-11 for getDate

    var formattedDay;
    
    switch( d[2].substring(1) ) {
      case '1':
        formattedDay = parseInt(d[2]) + "st"; //1st, 21st, etc
        break;        
      case '2':
        formattedDay = parseInt(d[2]) + "nd"; //2nd
        break;        
      case '3':
        formattedDay = parseInt(d[2]) + "rd"; //etc…
        break;  
      default:
        formattedDay = parseInt(d[2]) + "th";
    }
    //Add a space and the day, now correctly appended
    formattedDate += ' ' + formattedDay;
    //Return nice formatted date!
    return formattedDate;
  }
  
  $('#button').click(function () {
    var type_icon; //Store the html fragment to a variable when needed.
    type_icon = $type.val(); 
    if ($type.val() == 'income') {
      totalIncome += $amount.val(); 
      totalBudget = totalIncome - totalExpenses;
    } else if ($type.val() == 'miscellaneous') {
      //type_icon = "<i class="fa fa-credit-card-alt" aria-hidden="true"></i>;
      totalExpenses += $amount.val();
      totalBudget = totalIncome - totalExpenses; 
   } else {
      //type_icon = "<i class="fa fa-credit-card" aria-hidden="true"></i>";
      totalExpenses += $amount.val(); 
      totalBudget = totalIncome - totalExpenses; 
    }

    var form_validated = true;
    //Add your validation tests, have them set form_validated to false if they fail
    //TODO
    
    if(form_validated) {
      //Now we can use our references we made before
 	  $("table tr:first").after('<tr><td>'+type_icon+'</td><td>'+$name.val()+'</td><td>'+formatDate($date.val())+'</td><td class="amount">$'+$amount.val()+'</td></tr>');
      $(budgetTotal).html("Your remaining budget is: " + totalBudget);
      $date.val(null);
      $amount.val(null);
      $name.val(null);
      $("#if-empty").remove();
    };
    
  });
  
});