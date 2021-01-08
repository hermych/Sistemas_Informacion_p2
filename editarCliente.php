<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedapal | Editar Cliente</title>
    <link rel="icon" type="icon/png" href="img/icono_sedapal.png">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/registrarMedidor.css">
    <link rel="stylesheet" href="css/BuscarCliente.css">
</head>
<body>
    <!-- AQUI EMPIEZA EL MENU -->
    <header>
        <section class="icono_principal">
            <<a href="bienvenido.php"><img src="img/logo.png" alt="logo principal"></a>
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

    <!-- FORMULARIO DE BUSQUEDA -->
    <form action="editarCliente.php" method="POST" class="from_buscar">
        <input type="text" name="numDoc" placeholder="Consultar DNI">
        <input type="submit" name="buscar" id="buscar">
    </form>

    <!-- AQUI EMPIEZA EL CODIGO PHP -->
    <?php
        // Estp es para buscar al cliente
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
                                     <th>Hola</th>
                                     <th>ACCION</th>
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
                                     <td><a href="actualizarCliente.php?id=<?php echo $row['idcliente'];?>"><img src="img/editar.png" alt=""></a></td>
                                 </tr>
                             </tbody>
                         </table>
                    </div>
                    <?php     
                }
            }
        }

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