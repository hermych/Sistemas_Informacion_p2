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
    <header>
        <section class="icono_principal">
            <img src="img/logo.png" alt="logo principal">
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

    <!-- FORMULARIO DE BUSQUEDA -->
    <div>
        <h2 class="tituloBuscar">Cliente a Editar</h2>
    </div>

    <!-- AQUI EMPIEZA EL CODIGO PHP -->
    <?php
        // Estp es para buscar al cliente
        $inc=include("database.php");
        $id2 = $_GET["id"];
        $consulta = "SELECT * FROM cliente WHERE idcliente LIKE '$id2'";
        $resultado = mysqli_query($conex, $consulta);
        while ($row = mysqli_fetch_array($resultado)) { ?>
            <div class="tabla">
            <table border="1" >
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
                        <th><input type="text" value="<?php echo $row['idcliente']; ?>"></th>
                        <td><input type="text" value="<?php echo $row['nombre']; ?>"></td>
                        <td><input type="text" value="<?php echo $row['apellidos']; ?>"></td>
                        <td><select name="TipoDocumento" id="TipoDocumento">
                            <option value="DNI">DNI</option>
                            <option value="Carne de Extranjeria">Carne de Extranjeria</option>
                        </select></td>
                        <td><input type="text" value="<?php echo $row['numDoc']; ?>"></td>
                        <td><select name="TipoPersona" id="TipoPersona">
                            <option value="Natural">Natural</option>
                            <option value="Jurídica">Jurídica</option>
                        </select></td>
                        <td><select name="paisProcedencia" id="paisProcedencia">
                            <option value="Peru">Perú</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Bolivia">Bolivia</option>
                        </select></td>
                        <td><select name="departamento" id="departamento">
                            <option value="Lima">Lima</option>
                            <option value="Callao">Callao</option>
                        </select></td>
                        <td>
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
                        </td>
                        <td><input type="text" value="<?php echo $row['direccion']; ?>"></td>
                    </tr>
                </tbody>
            </table>
        </body>
    </div>
            <button type="submit" name="registrar" id="registrar">Modificar</button>
        <?php    
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