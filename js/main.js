function validateForm()
{
  var name = document.forms["post"]["username"];
  var pass = document.forms["post"]["passid"];
  
  if(name.value != "roaster" && pass.value == "admin"){
		window.alert("Wrong Username!!");
		name.focus();
		return false;
  }
  if(name.value == "roaster" && pass.value != "admin"){
		window.alert("Wrong passrowd!!");
		pass.focus();
		return false;
  }
  if(name.value != "roaster" && pass.value != "admin"){
    window.alert("Wrong Username & passrowd!!");
    name.focus();
    pass.focus();
		return false;
  }

  alert("Successfully send the registration form");
	return true;

}