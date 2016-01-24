// JavaScript Document
function validateForm() {
	var count = 0;
	var x = document.forms["regform"]["username"].value;
	var c = document.forms["regform"]["passcode"].value;	
	if (x == null || x == "") {
        document.getElementById("username").style.borderColor = "red";
		count = 1;
    }
	else {
		document.getElementById("username").style.borderColor = "green";
	}
	

	
	if (c == null || c=="") {
        document.getElementById("passcode").style.borderColor = "red";
		count = 1;	
	}
	else { 
		document.getElementById("passcode").style.borderColor = "green";
	}


	if(count == 0) {
	return true;
	}
	else if(count == 1) {
	return false;	
	}
	
}