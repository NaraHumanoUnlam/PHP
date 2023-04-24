<?php
echo "<h1>Nara Humano</h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nara Humano</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ejercicio01">
        <h1>Ejercicio 1: Semáforo</h1>
        <article>
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">

                <label for="color">Color: </label>
                <input type="text" placeholder="Escribir rojo, verde o amarillo" name="color" id="color">
                <input type="submit" value="Enviar">
            </form>
            <?php
                include_once('../Ejercicio01/Semaforo.php');
                $color = isset($_GET['color']) ? strtolower($_GET["color"]) : "";
                $valorb = semaforo_b($color);
                $semaforoA = semaforo_a($color);

                echo " $semaforoA <h1>If inline: </h1>  <span> $valorb </span> ";

                semaforo_c($color);
            ?>
        </article>
    </section>
    <section class="ejercicio02">
        <h1>Ejercicio 2: Binomio cuadrado perfecto</h1>
        <article>
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                <label for="valorA">Primer Numero: </label>
                <input type="number" name="numero_a" id="valorA">
                <label for="valorB">Segundo Numero: </label>
                <input type="number" name="numero_b" id="valorB">
                <input type="submit" value="Enviar">
                <?php
                    include_once('../Ejercicio02/BinomioCuadradoPerfecto.php');
                    $valora = isset($_GET['numero_a']) ? $_GET['numero_a'] : "";
                    $valorb = isset($_GET['numero_b']) ? $_GET['numero_b'] : "";
                    $resultadoA = binomio_cuadrado_perfecto_a($valora, $valorb);
                    $resultadoB = binomio_cuadrado_perfecto_b($valora, $valorb);
                    echo " <br><br> Primer Función Resultado <span>  $resultadoA </span>";
                    echo " <br> Segunda Función Resultado <span>  $resultadoB </span>";
                ?>
            </form>
        </article>
    </section>
    <section class="ejercicio03">
        <h1>Ejercicio 3: Concatenar textos </h1>
        <article>
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                <label for="valorA">Primer Cadena: </label>
                <input type="text" name="texto_a" id="valorA">
                <label for="valorB">Segundo Cadena: </label>
                <input type="text" name="texto_b" id="valorB">
                <input type="submit" value="Enviar">
                <?php
                include_once('../Ejercicio03/ConcatenarTexto.php');
                $valora = isset($_GET['texto_a']) ? strtolower($_GET["texto_a"]) : "";
                $valorb = isset($_GET['texto_b']) ? strtolower($_GET["texto_b"]) : "";
                $resultado = concatenar_2_textos($valora, $valorb);

                echo "<br><br> Resultado: <span>$resultado </span>";

                ?>
            </form>
        </article>
    </section>
    <section class="ejercicio04">
        <h1>Ejercicio 4: Incrementar </h1>
        <article>
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                <label for="valor"> Numero: </label>
                <input type="number" name="numero" id="valor">
                <input type="submit" value="Enviar">
                <?php
                include_once('../Ejercicio04/Incrementar.php');
                $valora = isset($_GET['numero']) ? $_GET['numero'] : "";
                echo "<br><br>";
                incrementar_valor($valora);
                ?>
            </form>
        </article>
    </section>

    <section class="ejercicio05">
        <h1>Ejercicio 5: Sumatoria </h1>
        <article>
            <form action="Index.php" method="post" enctype="application/x-www-form-urlencoded">
                <label for="elemento">Ingrese los numeros en estos casilleros: </label><br>
                <input type="number" id="elemento1" name="number1">
                <input type="number" id="elemento2" name="number2">
                <input type="number" id="elemento3" name="number3">
                <button type="submit" >Ver sumatorias</button>
                <?php
                    include_once('../Ejercicio05/Sumatoria.php');
                    $elemento1 = isset($_POST["number1"]) ? $_POST["number1"] : 0;
                    $miArray = agregar_primer_elemento($elemento1);
                    $elemento2 = isset($_POST["number2"]) ? $_POST["number2"] : 0;
                    $miArray = agregar_elemento($miArray, $elemento2);
                    $elemento3 = isset($_POST["number3"]) ? $_POST["number3"] : 0;
                    $miArray = agregar_elemento($miArray, $elemento3);
                    mostrar_vector($miArray);
                    $resultado_a = sumatoria_a($miArray);
                    $resultado_b = sumatoria_b($miArray);
                    $resultado_c = sumatoria_c($miArray);
                    echo "<br><br> Resultado Función A: <span>$resultado_a </span>";
                    echo "<br><br> Resultado Función B: <span>$resultado_b </span>";
                    echo "<br><br> Resultado Función C: <span>$resultado_c </span>";
                ?>
            </form>
        </article>
    </section>
    <section class="ejercicio06">
        <h1>Ejercicio 6: Nombre Completo </h1>
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
    </section>

</body>
</html>
