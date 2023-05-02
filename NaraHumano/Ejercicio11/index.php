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
            <li><a href="index.php">Ejercicio11</a></li>
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
    <section class="ejercicio11">
        <h1>Ejercicio 11:  Lanzar dados </h1>
        <h2>Consigna</h2>
        <p>Realizar una web que permita indicar la cantidad de dados a lanzar (mediante input de tipo option) y
            al tocar un botón “lanzar dados” pase a una segunda pantalla donde muestre los dados lanzados
            como imagen y la suma de sus valores como puntaje obtenido.
            <br> <span>Tip<span>: Buscar una función en php que devuelve un número random para resolver el ejercicio
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <form action="dados.php" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="dados">Dados: </label>
                    <select id="dados" name="dados">
                        <option value="1">1 Dado</option>
                        <option value="2">2 Dados</option>
                        <option value="3">3 Dados</option>
                        <option value="4">4 Dados</option>
                        <option value="5">5 Dados</option>
                        <option value="6">6 Dados</option>
                    </select>
                    <input type="submit" value="Lanzar dados">
                </form>
            </article>
        </div>
    </section>
</main>
</body>
</html>