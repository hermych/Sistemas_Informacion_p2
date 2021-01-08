<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link rel="icon" type="icon/png" href="img/icono_sedapal.png">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/registrarMedidor.css">
</head>
<body>
    <!-- AQUI EMPIEZA EL MENU -->
    <header>
        <section class="icono_principal">
            <a href="bienvenido.php"><img src="img/logo.png" alt="logo principal"></a>
        </section>
        <section class="menu">
                <ul class="nav">
                    <li>
                        <a href="">Registrar</a>
                        <ul>
                            <li><a href="registrarMedidor.php">Medidor</a></li>
                            <li><a href="registrarCliente.php">Cliente</a></li>
                        </ul>
                    </li>
                    <li><a href="">Editar</a>
                        <ul>
                            <li><a href="#">Medidor</a></li>
                            <li><a href="editarCliente.php">Cliente</a></li>
                        </ul>
                    </li>
                    <li><a href="">Buscar</a>
                        <ul>
                            <li><a href="#">Medidor</a></li>
                            <li><a href="buscarCliente.php">Cliente</a></li>
                        </ul>
                    </li>
                </ul>
        </section>
    </header>
    <!-- AQUI TERMINAR EL MENU -->
    
    <!-- Aqui empieza el formulario de registro -->
    <div class="formularioContainer">
        <form action="registrarMedidor.php" class="formularioRegistro" method="POST">
            <div class="contenedorGlobal" >
                <div class="contenedor1">
                    <div class="input nis">
                        <label>N.I.S:</label>
                        <input type="text" id="nis" name="nis" placeholder="Inserte N.I.S">
                    </div>
                    <div class="input dni">
                        <label>Dni:</label>
                        <input type="text" id="dni" name="dni" placeholder="Ingrese DNI">
                    </div>
                    <div class="input suministro">
                        <label>Suministro:</label>
                        <select name="suministro" id="suministro">
                            <option value="En uso">En uso</option>
                            <option value="Retirado por baja">Retirado por baja</option>
                        </select>
                    </div>
                    <div class="input periodo">
                        <label>Periocidad de Facturacion:</label>
                        <input type="text" id="periodo" name="periodo" placeholder="Ingrese periodo de Facturacion">
                    </div>
                    <div class="input direccion">
                        <label>Direccion del medidor:</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Ingrese direccion local">
                    </div>
                    <div class="input tipo">
                        <label>Tipo:</label>
                        <select name="TipoMedidor" id="TipoMedidor">
                            <option value="Medidor Simple Horario">Medidor Simple Horario</option>
                            <option value="Medidor Multiplicando">Medidor Multiplicando</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor2">
                    <div class="input añoFabricacion">
                        <label>Año de Fabricacion:</label>
                        <input type="text" id="añoFabricacion" name="añoFabricacion" placeholder="Ingrese año de Fabricacion">
                    </div>
                    <div class="input añoInstalacion">
                        <label>Fecha de Instalacion:</label>
                        <input type="date" name="fechaInstalacion" id="fechaInstalacion">
                    </div>
                    <div class="input marca">
                        <label>Marca:</label>
                        <select name="marcaMedidor" id="marcaMedidor">
                            <option value="Elster">Elster</option>
                            <option value="Itrom">Itrom</option>
                            <option value="Ningbo">Ningbo</option>
                        </select>
                    </div>
                    <div class="input departamento">
                        <label>Departamento:</label>
                        <select name="departamento" id="departamento">
                            <option value="Lima">Lima</option>
                            <option value="Callao">Callao</option>
                        </select>
                    </div>
                    <div class="input distrito">
                        <label>Distrito:</label>
                        <select name="distrito" id="distrito">
                            <option value="Lima">Callao</option>
                            <option value="Callao">Bellavista</option>
                            <option value="Callao">Carmen de la Legua</option>
                            <option value="Callao">La Perla</option>
                            <option value="Callao">La Punta</option>
                            <option value="Callao">Ventanilla</option>
                            <option value="Callao">Mi Perú</option>
                            <option value="Callao">Ancon</option>
                            <option value="Callao">Ate Vitarte</option>
                            <option value="Callao">Barranca</option>
                            <option value="Callao">Breña</option>
                            <option value="Callao">Carabayllo</option>
                            <option value="Callao">Chaclacayo</option>
                            <option value="Callao">Chorillos</option>
                            <option value="Callao">Cieneguilla</option>
                            <option value="Callao">Comas</option>
                            <option value="Callao">El Agustino</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name="registrar" id="registrar">Registrar</button>
        </form>
    </div>
    <!-- Aqui terminar el formulario de registro -->
    
    <!-- PHP DE  REGISTRAR -->
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
    <!--AQUI TERMINAR EL PHP DE REGISTRAR  -->
    
    <!-- Aqui empieza el footer -->
    <div class="footer">
        <div class="redes">
            <a href="#"><img src="img/fb.png" alt="facebook"></a>
            <a href="#"><img src="img/twitter.png" alt=""></a>
            <a href="#"><img src="img/youtube.png" alt=""></a>
        </div>
        <p>Derechos Reservados | Sedapal &copy;</p>
        <p>AquaFono: 3271859</p>
    </div>
    <!-- Aqui termina el footer -->
    
</body>
</html>