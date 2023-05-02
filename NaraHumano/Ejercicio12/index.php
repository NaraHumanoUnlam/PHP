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
            <li><a href="index.php">Ejercicio12</a></li>
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
    <section class="ejercicio12">
        <h1>Ejercicio 12:  Contador de visitas… extraterrestres </h1>
        <h2>Consigna</h2>
        <p>Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
            nombre del visitante y planeta perteneciente (mediante un combo).
            Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
            cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
            planeta Tierra.
            <br><span>Tip</span>: Almacenar en un archivo (en el servidor) cada una de las visitas, para dicho almacenado, pueden
            utilizar formato json, archivo separado por comas, cada visita en un archivo o algún otro tipo de su
            preferencia. No utilizar base de datos
            <br><span>Tip</span>: Es recomendable, realizar el cálculo de visitas, cuando leen el archivo, justo antes de mostrarlo y
            no persistir esta sumatoria
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <h3>Ingreso a nuestro planeta</h3>
                <form action="visitantes.php" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="nombre">Nombre del visitante: </label>
                    <input type="text" id="nombre" name="nombre">
                    <label for="planetas">Plane del visitante: </label>
                    <select id="planetas" name="planetas">
                        <option value="marte">Marte</option>
                        <option value="jupiter">Jupiter</option>
                        <option value="mercurio">Mercurio</option>
                        <option value="venus">Venus</option>
                        <option value="urano">Urano</option>
                        <option value="pluton">Pluton</option>
                        <option value="tierra">Tierra</option>
                        <option value="saturno">Saturno</option>
                        <option value="neptuno">Neptuno</option>
                    </select>
                    <input type="submit" value="Enviar datos">
                </form>
                <?php
                include_once('../Ejercicio12/ControlInterplanetario.php');
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
                $planeta = isset($_POST['planetas']) ? $_POST['planetas'] : "";
                guardarVisitante($nombre, $planeta);
                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>