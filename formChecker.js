function init() {
  //add event listeners
  var checks = document.getElementsByClassName("picCheck");
  for(var i = 1; i < 7; i++) {
    let temp = "p"+checks[i-1].id;
    if(checks[i-1].checked) {
      document.getElementById(temp).classList.remove("invisible");
      document.getElementById(temp).required = true;
    }
    else {
      document.getElementById(temp).classList.add("invisible");
      document.getElementById(temp).value = "0";
      document.getElementById(temp).required = false;
    }

    checks[i-1].addEventListener("click", function() {
      let temp = "p"+this.id;
      if(this.checked) {
        document.getElementById(temp).classList.remove("invisible");
        document.getElementById(temp).required = true;
      }
      else {
        document.getElementById(temp).classList.add("invisible");
        document.getElementById(temp).value = "0";
        document.getElementById(temp).required = false;
      }
    });
  }
}

function removeQuants() {
  var quants = document.getElementsByTagName("input");
  //remove quantity fields, the hard way, because all solutions are temporary solutions
  for(var i = 0; i < quants.length; i++) {
    if(quants[i].type == "number") {
      quants[i].classList.add("invisible");
      quants[i].value = "0";
    }
  }
}

//-------------------------------------------------------------------------------------------------
//------------------------------        START FORM VALIDATION       -------------------------------
//-------------------------------------------------------------------------------------------------
function validateMe() {
  var inputs = getVisibleInputs();

  //Validate email and password
  var isTextFilled = validateTexts(inputs);

  //quantities cannot be blank or <0
  var isQuantsFilled = validateQuantities(inputs);

  //customers gotta pick a shipping option
  var isChecked = true;
  var bleh = document.getElementsByTagName("input")
  if((bleh[14].checked == bleh[15].checked) && (bleh[16].checked == false)) {
    alert("Pick a delivery option buster.");
    isChecked = false;
  }


  //SEND HER OFF
  if(isTextFilled && isQuantsFilled && isChecked) return true;
  else return false;
}

function getVisibleInputs() {
  var tempInputs = document.getElementsByTagName("input");
  var visInputs = [];
  for(var i = 0; i < tempInputs.length; i++) {
    if(!tempInputs[i].classList.contains("invisible")){
      visInputs.push(tempInputs[i]);
    }
  }
  return visInputs;
}

function validateTexts(inputs) {
  let aight = true;
  if(inputs[0].value == "") {
    alert("Hey dog you gotta give me an e-mail");
    return false;
  }
  else if(inputs[1].value.length < 8) {
    alert("Your password needs to be at least 8 characters ,\':^(");
    return false;
  }
  else if(!validateEmail(inputs[0].value)){
    alert("E-mails are: \"something@something.something\". Try again.");
    return false;
  }
  else return true;
}

function validateQuantities(inputs) {
  let myQuants = getQuantities(inputs);
  if(myQuants.length == 0) {
    alert("C'mon buy something, my family is starving and this is a terrible business model...");
    return false;
  }
  return true;
}

function getQuantities(inputs) {
  let quants = [];
  for(var i = 0; i < inputs.length; i++) {
    if(inputs[i].type == "number") quants.push(inputs[i]);
  }
  return quants;
}

//First StackOverflow answer at "https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript"
//Because all solutions are temporary solutions.
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
