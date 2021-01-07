function validar(){

	var nombre, dni,tipoDoc,tipoPerso,numDocumento;


	nombre= document.getElementById("nombre").value;
	dni= document.getElementById("numDocumento").value;
	tipoDoc = document.getElementById("TipoDocumento").value;
	tipoPerso = document.getElementById("TipoPersona").value;

	


	if (nombre === "" || dni === "" || tipoDoc=== "" || tipoPerso ==="" ) {

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

