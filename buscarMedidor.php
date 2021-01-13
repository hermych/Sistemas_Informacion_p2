<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedapal | Editar Cliente</title>
    <link rel="icon" type="icon/png" href="img/gotita.ico">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/BuscarCliente.css">
</head>
<body>
    <!-- AQUI EMPIEZA EL MENU -->
    <header class="contenedor-header">
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
                            <li><a href="buscarMedidor.php">Medidor</a></li>
                            <li><a href="buscarCliente.php">Cliente</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Cerrar Sesion</a>
                    </li>
                </ul>
        </section>
    </header>
    <form action="buscarMedidor.php" method="POST" class="from_buscar">
        <input type="text" name="nis" placeholder="Consultar N.I.S">
        <input type="submit" name="buscar" id="buscar">
    </form>
    <!-- AQUI EMPIEZA EL PHP -->
    <?php
        $inc=include("database.php");
        if (isset($_POST['buscar'])) {
            $nis = $_POST['nis'];
            $consulta = "SELECT * FROM medidor WHERE nis LIKE '$nis'";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                    $id = $row['idmedidor'];
                    $añoFabricacion = $row['añoFabricacion'];
                    $fechaInstalacion = $row['fechaInstalacion'];
                    $nis = $row['NIS'];
                    $suministro = $row['suministro'];
                    $marcaMedidor = $row['marca'];
                    $TipoMedidor = $row['tipo'];
                    $periodo = $row['priodicidad'];
                    $dni = $row['DNI'];
                    $departamento = $row['departamento'];
                    $direccion = $row['direccion'];
                    $distrito = $row['distrito'];
                    ?>
                    <div class="tabla">
                         <h2 class="tituloBuscar">Lista de Medidores</h2>
                         <table border="1">
                             <tbody>
                                 <tr>
                                     <th>ID</th>
                                     <th>Año Fabricación</th>
                                     <th>Fecha Instalación</th>
                                     <th>NIS</th>
                                     <th>Suministro</th>
                                     <th>Marca Medidor</th>
                                     <th>Tipo Medidor</th>
                                     <th>Facturación</th>
                                     <th>DNI Cliente</th>
                                     <th>Departamento</th>
                                     <th>Dirección</th>
                                     <th>Distrito</th>
                                 </tr>
                                 <tr>
                                     <th><?php echo $id ?></th>
                                     <td><?php echo $añoFabricacion ?></td>
                                     <td><?php echo $fechaInstalacion ?></td>
                                     <td><?php echo $nis ?></td>
                                     <td><?php echo $suministro ?></td>
                                     <td><?php echo $marcaMedidor ?></td>
                                     <td><?php echo $TipoMedidor ?></td>
                                     <td><?php echo $periodo ?></td>
                                     <td><?php echo $dni ?></td>
                                     <td><?php echo $departamento ?></td>
                                     <td><?php echo $direccion ?></td>
                                     <td><?php echo $distrito ?></td>
                                 </tr>
                             </tbody>
                         </table>
                    </div>
                    <?php     
                }
            }
        }
        // if($inc){
        //    $consulta = "SELECT * FROM medidor";
        //    $resultado = mysqli_query($conex, $consulta);
        //    if ($resultado) {
                
        //    }
        // }
    ?>
    
    <!-- AQUI EMPIEZA EL FOOTER -->
    <div class="footer">
        <div class="redes">
            <a href="#"><img src="img/fb.png" alt="facebook"></a>
            <a href="#"><img src="img/twitter.png" alt=""></a>
            <a href="#"><img src="img/youtube.png" alt=""></a>
        </div>
        <p>Derechos Reservados | Sedapal &copy;</p>
        <p>AquaFono: 3271859</p>
    </div>

</body>
</html>