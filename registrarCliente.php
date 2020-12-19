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
                            <li><a href="#">Cliente</a></li>
                        </ul>
                    </li>
                    <li><a href="">Buscar</a>
                        <ul>
                            <li><a href="#">Medidor</a></li>
                            <li><a href="#">Cliente</a></li>
                        </ul>
                    </li>
                </ul>
        </section>
    </header>
    <!-- AQUI TERMINAR EL MENU -->
    <div class="formularioContainer">
        <form action="" class="formularioRegistro">
            <div class="contenedorGlobal" >
                <div class="contenedor1">
                    <div class="input nombre">
                        <label>Nombre(s):</label>
                        <input type="text" id="nis" name="nis" placeholder="Ingrese nombres completos">
                    </div>
                    <div class="input tipoDoc">
                        <label>Tipo de Documento:</label>
                        <select name="TipoDocumento" id="TipoDocumento">
                            <option value="DNI">DNI</option>
                            <option value="Carne de Extranjeria">Carne de Extranjeria</option>
                        </select>
                    </div>
                    <div class="input tipoPersona">
                        <label>Tipo de Persona:</label>
                        <select name="TipoPersona" id="TipoPersona">
                            <option value="Natural">Natural</option>
                            <option value="Jurídica">Jurídica</option>
                        </select>
                    </div>
                    <div class="input departamento">
                        <label>Departamento Actual:</label>
                        <select name="departamento" id="departamento">
                            <option value="Lima">Lima</option>
                            <option value="Callao">Callao</option>
                        </select>
                    </div>
                    <div class="input direccion">
                        <label>Direccion Actual:</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Ingrese direccion actual">
                    </div>
                </div>
                <div class="contenedor2">
                    <div class="input apellidos">
                        <label>Apellidos:</label>
                        <input type="text" id="añoFabricacion" name="añoFabricacion" placeholder="Ingrese apellidos completos">
                    </div>
                    <div class="input numeroDoc">
                        <label>Número de documento:</label>
                        <input type="text" id="numDocumento" maxlength="8" name="numDocumento" placeholder="Ingrese número de documento">
                    </div>
                    <div class="input paisProc">
                        <label>Pais de Procedencia:</label>
                        <select name="paisProcedencia" id="paisProcedencia">
                            <option value="Peru">Perú</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Bolivia">Bolivia</option>
                        </select>
                    </div>
                    <div class="input distrito">
                        <label>Distrito Actual:</label>
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