<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nara Humano</title>
    <link rel="stylesheet" href="../Ejercicio08/estilosEjercicio08.css">
</head>
<body>
<header>
    <nav class="container">
        <ul class="menu">
            <li><a href="../Ejercicio01/index.php">Ejercicio01</a></li>
            <li><a href="index.php">Ejercicio02</a></li>
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
    <section class="resolucion">
        <h1>Solución Ejercio 02</h1>
        <article>
            <form action="Index.php" method="get" enctype="application/x-www-form-urlencoded">
                <label for="valorA">Primer Numero: </label>
                <input type="number" name="numero_a" id="valorA">
                <label for="valorB">Segundo Numero: </label>
                <input type="number" name="numero_b" id="valorB">
                <input type="submit" value="Enviar">
                <?php
                include_once('BinomioCuadradoPerfecto.php');
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
</main>
</body>
</html>
