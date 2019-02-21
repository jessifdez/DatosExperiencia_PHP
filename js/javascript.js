function cargarOyentes(){
	document.getElementById("email").onblur=function(){verificarEmail();}
}
function verificarEmail(){
	var email=document.getElementById("email");
	var email_ok=validateEmail(email.value);
	if(email_ok==true){
		email.style.borderColor="green";
		return true;
	}else{
		email.style.borderColor="red";
		alert("Revise el campo email")
		return false;
	}
}	
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
