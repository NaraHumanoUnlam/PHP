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
            <li><a href="../Ejercicio14/index.php">Ejercicio14</a></li>
            <li><a href="index.php">Ejercicio15</a></li>
            <li><a href="../Ejercicio16/index.php">Ejercicio16</a></li>
            <li><a href="../Ejercicio17/index.php">Ejercicio17</a></li>
            <li><a href="../Ejercicio18/index.php">Ejercicio18</a></li>
            <li><a href="../Ejercicio19/index.php">Ejercicio19</a></li>
            <li><a href="../Ejercicio20/index.php">Ejercicio20</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="ejercicio15">
        <h1>Ejercicio 15:  Buscando una palabra en un pajar, más bien en un String</h1>
        <h2>Consigna</h2>
        <p>Crear una función que reciba una palabra a buscar y un texto, y devuelva cuantas ocurrencias hubo
            de la misma. Recorrer el texto String caracter a caracter sin utilizar funciones de String, la firma de la
            función será similar a: buscar(clave, texto)
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <h3>Palabra a buscar en el texto</h3>
                <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="palabra"> Palabra a buscar: </label>
                    <input type="text" name="palabra" id="palabra">
                    <label for="texto"> Texto: </label>
                    <input type="text" name="texto" id="texto">
                    <input type="submit" value="Buscar" class="btn-send">
                </form>
                <?php
                include_once('../Ejercicio15/Busqueda.php');
                $palabra = isset($_POST['palabra']) ? $_POST['palabra'] : "";
                $texto = isset($_POST['texto']) ? $_POST['texto'] : "";

                $ocurrencias = Buscar($palabra, $texto);

                echo "La cantidad de ocurrencias de la palabra: <span>" . $palabra . " </span> es " . $ocurrencias;

                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>
