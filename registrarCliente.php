<?php
    include("database.php");
    if(isset($_POST['registrar'])){
        if( strlen($_POST['nombre'])>=1 &&
            strlen($_POST['TipoDocumento'])>=1 &&     
            strlen($_POST['TipoPersona'])>=1 &&     
            strlen($_POST['departamento'])>=1 &&     
            strlen($_POST['direccion'])>=1 &&     
            strlen($_POST['apellidos'])>=1 &&     
            strlen($_POST['numDocumento'])>=1 &&
            strlen($_POST['paisProcedencia'])>=1 &&
            strlen($_POST['distrito'])>=1){
                $nombre = trim($_POST['nombre']);    
                $TipoDocumento = trim($_POST['TipoDocumento']);    
                $TipoPersona = trim($_POST['TipoPersona']);    
                $departamento = trim($_POST['departamento']);    
                $direccion = trim($_POST['direccion']);    
                $apellidos = trim($_POST['apellidos']);    
                $numDocumento = trim($_POST['numDocumento']);      
                $paisProcedencia = trim($_POST['paisProcedencia']);   
                $distrito = trim($_POST['distrito']);  
                $consulta = "INSERT INTO cliente(nombre, apellidos, tipoDoc, numDoc, tipoPersona, pais, departamento, distrito, direccion) VALUES ('$nombre','$apellidos','$TipoDocumento','$numDocumento','$TipoPersona','$paisProcedencia','$departamento','$distrito','$direccion')";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Te has inscripto correctamente!</h3>
                   <?php
                } else {
                    ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                   <?php
                }
        }else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
        }
    }
?>