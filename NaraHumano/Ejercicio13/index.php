<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nara Esther Humano</title>
    <link rel="stylesheet" href="../Ejercicio08/estilosEjercicio08.css">
</head>
<body>
<header>
    <h1>Nara Esther Humano</h1>
    <nav class="container">
        <ul class="menu">
            <li><a href="../Ejercicio01/index.php">Ejercicio01</a></li>
            <li><a href="../Ejercicio02/index.php">Ejercicio02</a></li>
            <li><a href="../Ejercicio03/index.php">Ejercicio03</a></li>
            <li><a href="../Ejercicio04/index.php">Ejercicio04</a></li>
            <li><a href="../Ejercicio05/index.php">Ejercicio05</a></li>
            <li><a href="../Ejercicio06/index.php">Ejercicio06</a></li>
            <li><a href="../Ejercicio07/index.php">Ejercicio07</a></li>
            <li><a href="../Ejercicio08/index.php">Ejercicio08</a></li>
            <li><a href="../Ejercicio09/index.php">Ejercicio09</a></li>
            <li><a href="../Ejercicio10/index.php">Ejercicio10</a></li>
        </ul>
        <ul class="menu">
            <li><a href="../Ejercicio11/index.php">Ejercicio11</a></li>
            <li><a href="../Ejercicio12/index.php">Ejercicio12</a></li>
            <li><a href="index.php">Ejercicio13</a></li>
            <li><a href="../Ejercicio14/index.php">Ejercicio14</a></li>
            <li><a href="../Ejercicio15/index.php">Ejercicio15</a></li>
            <li><a href="../Ejercicio16/index.php">Ejercicio16</a></li>
            <li><a href="../Ejercicio17/index.php">Ejercicio17</a></li>
            <li><a href="../Ejercicio18/index.php">Ejercicio18</a></li>
            <li><a href="../Ejercicio19/index.php">Ejercicio19</a></li>
            <li><a href="../Ejercicio20/index.php">Ejercicio20</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="ejercicio13">
        <h1>Ejercicio 13:  ConociendINIs con el Menú no saludable</h1>
        <h2>Consigna</h2>
        <p>Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de
            hoy: Entrada, plato principal, acompañamiento y postre.
            Una vez enviado el formulario, lea el archivo menu.ini, y muestre en pantalla sólo los pasos del menú
            que solicitó el comensal:

            <br>
            menu.ini
            <br> entrada=Snacks
            <br>plato_principal=Milanesa
            <br>acompañamiento=Papas fritas
            <br>postre=helado

            <br>
            <span>Tip</span>: Utilizar función parse_ini_file que permite leer archivos .ini de modo sencillo
            <br><span>Tip</span>: Si la letra ñ es un problema, no la utilice
            <br><span>Tip</span>: Puede cambiar los menú de comida por lo que prefiera, la intención es aprender a leer un
            <br>archivo .ini y utilizar el array asociativo resultante
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <h3>Menu</h3>
                <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="entrada">Entrada: </label>
                    <input type="checkbox" id="entrada" name="entrada">
                    <br><label for="plato_principal">Primer Plato: </label>
                    <input type="checkbox" name="plato_principal">
                    <br><label for="acompaniamiento">Acompañamiento: </label>
                    <input type="checkbox" id="acompaniamiento" name="acompaniamiento">
                    <br><label for="postre">Postre: </label>
                    <input type="checkbox" name="postre">
                    <br><input type="submit" value="Enviar" class="btn-send">
                </form>
                <?php
                include_once('../Ejercicio13/MenuSaludable.php');
                $entrada = isset($_POST['entrada']) ? $_POST['entrada'] : "off";
                $plato_principal = isset($_POST['plato_principal']) ? $_POST['plato_principal'] : "off";
                $acompaniamiento = isset($_POST['acompaniamiento']) ? $_POST['acompaniamiento'] : "off";
                $postre = isset($_POST['postre']) ? $_POST['postre'] : "off";
                elegirMenu($entrada,$plato_principal,$acompaniamiento,$postre);
                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>