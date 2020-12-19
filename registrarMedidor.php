<?php
    include("database.php");
    if(isset($_POST['registrar'])){
        if( strlen($_POST['nis'])>=1 &&
            strlen($_POST['dni'])>=1 &&     
            strlen($_POST['suministro'])>=1 &&     
            strlen($_POST['periodo'])>=1 &&     
            strlen($_POST['direccion'])>=1 &&     
            strlen($_POST['TipoMedidor'])>=1 &&     
            strlen($_POST['añoFabricacion'])>=1 &&
            strlen($_POST['fechaInstalacion'])>=1 &&
            strlen($_POST['marcaMedidor'])>=1 &&
            strlen($_POST['departamento'])>=1 &&
            strlen($_POST['distrito'])>=1){
                $nis = trim($_POST['nis']);    
                $dni = trim($_POST['dni']);    
                $suministro = trim($_POST['suministro']);    
                $periodo = trim($_POST['periodo']);    
                $direccion = trim($_POST['direccion']);    
                $tipoMedidor = trim($_POST['TipoMedidor']);    
                $añoFabricacion = trim($_POST['añoFabricacion']);    
                $fechaInstalacion = trim($_POST['fechaInstalacion']);    
                $marcaMedidor = trim($_POST['marcaMedidor']);    
                $departamento = trim($_POST['departamento']);    
                $distrito = trim($_POST['distrito']);  
                $consulta = "INSERT INTO medidor(NIS, añoFabricacion, DNI, fechaInstalacion, suministro, marca, priodicidad, departamento, direccion, distrito, tipo) VALUES ('$nis','$añoFabricacion', '$dni','$fechaInstalacion', '$suministro', '$marcaMedidor', '$periodo','$departamento','$direccion','$distrito','$tipoMedidor')";
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