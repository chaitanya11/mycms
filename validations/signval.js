// JavaScript Document
function validateForm() {
	var count = 0,ccount = 0;
	var x = document.forms["regform"]["username"].value;
	var b = document.forms["regform"]["emailid"].value;
	var c = document.forms["regform"]["passcode"].value;
	var check = [
	document.getElementById("admin").checked ,
	document.getElementById("client").checked ,
	];	
	if (x == null || x == "") {
        document.getElementById("username").style.borderColor = "red";
		count = 1;
    }
	else {
		document.getElementById("username").style.borderColor = "green";
	}
	
	

	if (b == null || b == "") {
        document.getElementById("emailid").style.borderColor = "red";
		count = 1;
    }
	else {
		document.getElementById("emailid").style.borderColor = "green";
	}
	

	
	if (c == null || c=="") {
        document.getElementById("passcode").style.borderColor = "red";
		count = 1;	
	}
	else { 
		document.getElementById("passcode").style.borderColor = "green";
	}


	for(j=0;j<check.length;j++){
		if(check[j]){
			ccount++;
		}
	}
	if(!ccount == 0){
		document.getElementById("box").innerHTML = '<span style="color:green">check box filled</span>';
	}
	else {
		count = 1;
		document.getElementById("box").innerHTML = '<span style="color:red">you have check atleast one check box</span>';
	}


	if(count == 0) {
	return true;
	}
	else if(count == 1) {
	return false;	
	}
	
}
function Acheckbox(){
	var admin = document.getElementById("admin").checked;
	var client = document.getElementById("client").checked;
	if(admin){
		document.getElementById("Client").style.display = "none";
	}
	else if(!admin){
		document.getElementById("Client").style.display = "block";
	}
}
function Ccheckbox(){
	var admin = document.getElementById("admin").checked;
	var client = document.getElementById("client").checked;
	if(client){
		document.getElementById("Admin").style.display = "none";
	}
	else if(!client){
		document.getElementById("Admin").style.display = "block";
	}
}