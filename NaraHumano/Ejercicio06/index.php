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
            <li><a href="index.php">Ejercicio01</a></li>
            <li><a href="../Ejercicio02/index.php">Ejercicio02</a></li>
            <li><a href="../Ejercicio03/index.php">Ejercicio03</a></li>
            <li><a href="../Ejercicio04/index.php">Ejercicio04</a></li>
            <li><a href="../Ejercicio05/index.php">Ejercicio05</a></li>
            <li><a href="index.php">Ejercicio06</a></li>
            <li><a href="../Ejercicio07/index.php">Ejercicio07</a></li>
            <li><a href="../Ejercicio08/index.php">Ejercicio08</a></li>
            <li><a href="../Ejercicio09/index.php">Ejercicio09</a></li>
            <li><a href="../Ejercicio10/index.php">Ejercicio10</a></li>
        </ul>
        <ul class="menu">
            <li><a href="../Ejercicio11/index.php">Ejercicio11</a></li>
            <li><a href="../Ejercicio12/index.php">Ejercicio12</a></li>
            <li><a href="../Ejercicio13/index.php">Ejercicio13</a></li>
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
    <section class="ejercicio06">
        <h1>Ejercicio 6: Nombre completo </h1>
        <h2>Consigna</h2>
        <p>Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
            persona.
            <br>
            Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
            concatenado al nombre un prefijo dependiendo del horario:
            05hs a 13hs “Buenos días”
            13hs a 21hs “Buenas tardes”
            21hs a 05hs “Buenas noches”
            <br><br>
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
            <br><br>
            Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
            sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
            perteneciente al horario .
            <br><br>
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
            “¡Hola Ezequiel! Que tengas un buen día”
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                    <label for="nombre"> Nombre: </label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="apellido"> Apellido: </label>
                    <input type="text" name="apellido" id="apellido">
                    <input type="submit" value="Enviar">
                    <?php
                    include_once('../Ejercicio06/NombreCompleto.php');
                    date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $fecha = date("H:i:s");
                    $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
                    $apellido = isset($_GET["apellido"]) ? $_GET["apellido"] : "";
                    $saludo = new Saludo($nombre, $apellido);
                    echo "<h1> ¡" . $saludo->saludoFormal($fecha) . "! </h1>";
                    echo "<h1> " . $saludo->saludoInformal($fecha) . "</h1>";
                    ?>
                </form>
            </article>
        </div>
    </section>
</main>
</body>
</html>