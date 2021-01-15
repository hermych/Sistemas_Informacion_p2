function validar(){
	
	var nombre, dni,tipoDoc,tipoPerso,numDocumento;

	nis= document.getElementById("nis").value;
	dni= document.getElementById("dni").value;
	periodo = document.getElementById("periodo").value;
	direccion = document.getElementById("direccion").value;
	añoFabricacion = document.getElementById("añoFabricacion").value;
	fechaInstalacion =  document.getElementById("fechaInstalacion").value;
	
	if (nis === "" || dni === "" || periodo=== "" || direccion ===""  || añoFabricacion ===""
		|| fechaInstalacion==="") {
		swal.fire({
			html: '<span class="alert"> ¡Por favor complete los campos! </span>',
			icon: 'error',
			width: '30%',
		});
		return false;
	}
	// else if(usuario.length>30){
	// 	alert("")
	// }
}

