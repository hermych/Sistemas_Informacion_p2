<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedapal | Editar Cliente</title>
    <link rel="icon" type="icon/png" href="img/icono_sedapal.png">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/BuscarCliente.css">
</head>
<body>
    <!-- AQUI EMPIEZA EL MENU -->
    <header class="contenedor-header">
        <section class="icono_principal">
        <a href="bienvenido.php"><img src="img/nombre_3.png" alt="logo principal"></a>
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
    <form action="buscarCliente.php" method="POST" class="from_buscar">
        <input type="text" name="numDoc" placeholder="Consultar DNI">
        <input type="submit" name="buscar" id="buscar">
    </form>
    <!-- AQUI EMPIEZA EL PHP -->
    <?php
        $inc=include("database.php");
        if (isset($_POST['buscar'])) {
            $numDoc = $_POST['numDoc'];
            $consulta = "SELECT * FROM cliente WHERE numDoc LIKE '$numDoc'";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                    $id = $row['idcliente'];
                    $nombre = $row['nombre'];
                    $apellidos = $row['apellidos'];
                    $tipoDoc = $row['tipoDoc'];
                    $numDoc = $row['numDoc'];
                    $tipoPersona = $row['tipoPersona'];
                    $pais = $row['pais'];
                    $departamento = $row['departamento'];
                    $distrito = $row['distrito'];
                    $direccion = $row['direccion'];
                    ?>
                    <div class="tabla">
                         <h2 class="tituloBuscar">Lista de Clientes</h2>
                         <table border="1">
                             <tbody>
                                 <tr>
                                     <th>ID</th>
                                     <th>Nombre</th>
                                     <th>Apellidos</th>
                                     <th>Tipo Doc</th>
                                     <th>Numero Doc</th>
                                     <th>Tipo Persona</th>
                                     <th>Pais</th>
                                     <th>Departamento</th>
                                     <th>Distrito</th>
                                     <th>Direccion</th>
                                 </tr>
                                 <tr>
                                     <th><?php echo $id ?></th>
                                     <td><?php echo $nombre ?></td>
                                     <td><?php echo $apellidos ?></td>
                                     <td><?php echo $tipoDoc ?></td>
                                     <td><?php echo $numDoc ?></td>
                                     <td><?php echo $tipoPersona ?></td>
                                     <td><?php echo $pais ?></td>
                                     <td><?php echo $departamento ?></td>
                                     <td><?php echo $distrito ?></td>
                                     <td><?php echo $direccion ?></td>
                                 </tr>
                             </tbody>
                         </table>
                    </div>
                    <?php     
                }
            }
        }
        // if($inc){
        //    $consulta = "SELECT * FROM cliente";
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