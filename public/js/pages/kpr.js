
function showpay() {
    if ((document.calc.loan.value == null || document.calc.loan.value.length == 0) ||
        (document.calc.months.value == null || document.calc.months.value.length == 0)
   ||
        (document.calc.rate.value == null || document.calc.rate.value.length == 0))
    { document.calc.pay.value = "Data Belum Lengkap";
    }
    else
    {
     var princ = document.calc.loan.value;
     var term  = document.calc.months.value;
     var intr   = document.calc.rate.value / 1200;
      //document.calc.pay.value = princ * intr / (1 - (Math.pow(1/(1 + intr), term)));
     
      var cicilan = princ * intr / (1 - (Math.pow(1/(1 + intr), term)));
      document.calc.pay.value=parseFloat(cicilan).toFixed(2);
    
    }
   
     //parseFloat(Math.round(num2 * 100) / 100).toFixed(2);
   // payment = principle * monthly interest/(1 - (1/(1+MonthlyInterest)*Months))
   
   }
   
   