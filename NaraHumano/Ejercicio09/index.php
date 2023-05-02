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
            <li><a href="../Ejercicio06/index.php">Ejercicio06</a></li>
            <li><a href="../Ejercicio07/index.php">Ejercicio07</a></li>
            <li><a href="../Ejercicio08/index.php">Ejercicio08</a></li>
            <li><a href="index.php">Ejercicio09</a></li>
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
    <section class="ejercicio09">
        <h1>Ejercicio 9:  Insta-gramo </h1>
        <h2>Consigna</h2>
        <p>Realizar una web que muestre todas las imágenes que contiene en la carpeta “/imagenes” con su
            respectivo nombre de archivo como pié de imagen. Al final de dicha web debe haber un formulario
            que permita subir una imagen con un nombre a designar.
           <br> <span>Tip</span>: Luego de cargar la imagen, debe volver a la misma página, sin tener que tocar links “volver” o
            cosas similares (Como en todo insta-gramo!)
            <br><span>Tip</span>: Para facilitar la resolución, tener 3 imágenes cargadas en la carpeta

        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>

                <?php
                include_once('../Ejercicio09/Insta-Gramo.php');
                mostrarImagenes();
                ?>
                <form action="Index.php" method="post" enctype="multipart/form-data">
                    <label for="nombre"> Nombre de la imagen: </label>
                    <input type="text" name="nombre" id="nombre">
                    <input type="file" name="archivo" id="archivo">
                    <input type="submit" value="Enviar" class="btn-send">
                </form>
                <?php
                include_once('../Ejercicio09/Insta-Gramo.php');
                $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
                $file = isset($_FILES['archivo']) ? $_FILES['archivo']: "";
                guardarImagen($file,$nombre);
                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>