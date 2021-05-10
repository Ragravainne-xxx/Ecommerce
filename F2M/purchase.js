// Alert pop ups //
function welcomeAlert () {
  let message = "Welcome to F2M Premium Accounts" + " " + document.getElementById("uname").value + " " + document.getElementById("uid").value + "! Thank you for purchasing!";
  if (event.key === 'Enter'){
      alert (message);
  }
}

function coins() {
  var txt;
  if (confirm("Are you sure you want COINS.PH as your payment method.")) {
     txt = "You can now process your payment with COINS.PH, Thank you!";
  } else {
    txt = "Choose other payment method.";
  }
  document.getElementById("payone").innerHTML = txt;
}

function gcash() {
  var txt;
  if (confirm("Are you sure you want GCASH as your payment method.")) {
     txt = "You can now process your payment with GCASH, Thank you!";
  } else {
    txt = "Choose other payment method.";
  }
  document.getElementById("paytwo").innerHTML = txt;
}

function paymaya() {
  var txt;
  if (confirm("Are you sure you want PAY-MAYA as your payment method.")) {
     txt = "You can now process your payment with PAY-MAYA, Thank you!";
  } else {
    txt = "Choose other payment method.";
  }
  document.getElementById("paytree").innerHTML = txt;
}

function vm() {
  var txt;
  if (confirm("Are you sure you want VISA MASTER CARD as your payment method.")) {
     txt = "You can now process your payment with VISA MASTER CARD, Thank you!";
  } else {
    txt = "Choose other payment method.";
  }
  document.getElementById("payfour").innerHTML = txt;
}


// purchase click //

function conf() {
  var txt;
  if (confirm("Are you satisfied with your purchase?")) {
    alert('Thank you for your purchase');
    
 } else {
    alert('Take your time')
  }
   document.getElementById("confirmation").innerHTML = txt;
}



// Points price // 

function pts3() {
  var total = document.getElementsByClassName("points_3").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "250";
}
function pts2() {
  var total = document.getElementsByClassName("points_2").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "200";
}
function pts1() {
  var total = document.getElementsByClassName("points_1").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "100";
}
function pts4() {
  var total = document.getElementsByClassName("points_4").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "500";
}
function pts5() {
  var total = document.getElementsByClassName("points_5").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "1000";
}
function pts6() {
  var total = document.getElementsByClassName("points_5").innerHTML 
  document.getElementsByClassName('amt')[0].innerText = '₱' + "2000";
}








