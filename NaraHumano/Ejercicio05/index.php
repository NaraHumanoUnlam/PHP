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
            <li><a href="index.php">Ejercicio05</a></li>
            <li><a href="../Ejercicio06/index.php">Ejercicio06</a></li>
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
    <section class="ejercicio04">
        <h1>Ejercicio 5: Sumatoria </h1>
        <h2>Consigna</h2>
        <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.
            <br>a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
            <br>b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
            <br>c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while

        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
                <article>
                    <form action="Index.php" method="post" enctype="application/x-www-form-urlencoded">
                        <label for="elemento">Ingrese los numeros en estos casilleros: </label><br>
                        <input type="number" id="elemento1" name="number1">
                        <input type="number" id="elemento2" name="number2">
                        <input type="number" id="elemento3" name="number3" >
                        <button type="submit" class="btn-send">Ver sumatorias</button><br>
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
        </div>
    </section>
</main>
</body>
</html>