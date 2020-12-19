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
                    <div class="input nis">
                        <label>N.I.S:</label>
                        <input type="text" id="nis" name="nis" placeholder="Inserte N.I.S">
                    </div>
                    <div class="input cliente">
                        <label>Cliente:</label>
                        <input type="text" id="cliente" name="cliente" placeholder="Nombre del Cliente">
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