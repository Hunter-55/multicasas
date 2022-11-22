function validar(){
	var usuario, clave, expresion;
	usuario=document.getElementById("iusuario".value.trim());
	clave=document.getElementById("iclave".value.trim());
	var auth = grecaptcha.getResponse();

	if (usuario == 0){
		alert("El usuario no puede estar vacío");
		return false;
	}
	else if (clave == 0){
		alert("El usuario no puede estar vacío");
		return false;
	}
	else if (clave.length>8){
		alert("La clave debe contener solo 8 caracteres");
		return false;
	}
	else if (auth.length == 0){
		alert("Captcha no verificado.");
		return false;
	}
	return true;
}
function valida_captcha() {
	var response = grecaptcha.getResponse();

	if(response.length == 0){
		alert("Captcha no verificado")
		return false;
	}
	
		else if (clave.length>8){
		alert("La clave debe contener solo 8 caracteres");
		return false;
	}

	else if(response.length == 0){
		alert("Captcha no verificado")
		return false;
	}
	return true;
}