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
            <li><a href="../Ejercicio13/index.php">Ejercicio13</a></li>
            <li><a href="index.php">Ejercicio14</a></li>
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
    <section class="ejercicio14">
        <h1>Ejercicio 14:  La Matrix… digo, Matriz</h1>
        <h2>Consigna</h2>
        <p>Solicite mediante un formulario, la dimensión de una matriz cuadrada.
            En la siguiente página, cree esa matriz de NxN y realice las siguientes acciones:
            <br>a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal principal (10,12,23,etc)
            <br>b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal secundaria (10,19,28,etc)
            <br>c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
            resultado
            <br> <span>Tip</span>: En los pasos a y b, no utilice un while, ni un flag, sólo con el contador del for debe alcanzar.
            Analice las posiciones de la matriz que componen las diagonales ;)
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <h3>Dimensión de Matriz</h3>
                <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="numero"> Dimension de matriz: </label>
                    <input type="number" name="numero" id="numero">
                    <input type="submit" value="Crear" class="btn-send">
                </form>
                <?php
                include_once('../Ejercicio14/Matriz.php');
                $dimesion = isset($_POST['numero']) ? $_POST['numero'] : "";
                $miMatriz = definirMatrix($dimesion);

                mostrarMatriz($miMatriz);
                mostrarDiagonalPrincipal($miMatriz);
                mostrarDiagonalSecundaria($miMatriz);
                $total = sumarValoresMatriz($miMatriz);

                echo "<br>Total de los valores de la matriz es: " . $total;
                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>