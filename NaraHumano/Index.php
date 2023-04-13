<?php
//ejecicio 01 - Semaforo
echo "<h1> Ejercicios </h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
                include_once('Ejercicio01/Semaforo.php');
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
                    include_once('Ejercicio02/BinomioCuadradoPerfecto.php');
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
                include_once('Ejercicio03/ConcatenarTexto.php');
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
                include_once('Ejercicio04/Incrementar.php');
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
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                <input type="submit" value="Ver Resultado">
                <?php
                include_once('Ejercicio05/Sumatoria.php');
                $valor = [1,2,3,4,5,6];
                $resultado_a = sumatoria_a($valor);
                $resultado_b = sumatoria_b($valor);
                $resultado_c = sumatoria_c($valor);
                echo "<br><br> Resultado Función A: <span>$resultado_a </span>";
                echo "<br><br> Resultado Función B: <span>$resultado_b </span>";
                echo "<br><br> Resultado Función C: <span>$resultado_c </span>";
                ?>
            </form>
        </article>
    </section>
</body>
</html>
