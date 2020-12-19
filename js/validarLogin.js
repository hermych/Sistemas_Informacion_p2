function validar(){

	var usuario, clave;


	usuario= document.getElementById("user").value;
	clave= document.getElementById("pass").value;


	if (usuario === "" || clave === "") {

		swal.fire({
			
			html: '<span class="alert"> Todos los campos con obligatorios! </span>',
			icon: 'error',
			width: '30%',
		});
		
		return false;
	}
	// else if(usuario.length>30){
	// 	alert("")
	// }
}

