function run() {
  var userPassword = document.forms["store"]["Password"].value;
  var userIceCream = document.forms["store"]["iceCream"].value;
  var userMakeup = document.forms["store"]["makeup"].value;
  var userDChocBar = document.forms["store"]["DChocBar"].value;
  if(userPassword.length <= 0) {
    alert("No password!");
    return false;
  }
  else if((userIceCream < 0) || (userMakeup < 0) || (userDChocBar < 0)) {
    alert("You can't order a negative number of items!");
    return false;
  }
  else if((userIceCream + userMakeup + userDChocBar) <= 0) {
    alert("You gotta buy something!");
    return false;
  }
  else {
    return true;
  }
}
