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
            <li><a href="../Ejercicio15/index.php">Ejercicio15</a></li>
            <li><a href="index.php">Ejercicio16</a></li>
            <li><a href="../Ejercicio17/index.php">Ejercicio17</a></li>
            <li><a href="../Ejercicio18/index.php">Ejercicio18</a></li>
            <li><a href="../Ejercicio19/index.php">Ejercicio19</a></li>
            <li><a href="../Ejercicio20/index.php">Ejercicio20</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="ejercicio16">
        <h1>Ejercicio 16:  Piedra, papel o tijera</h1>
        <h2>Consigna</h2>
        <p>Crear las clases Piedra, Papel y Tijera. Todas ellas deberán tener los siguientes métodos
            <br>a. constructor(nombreJugador)
            <br>b. competirContra( otro )
            <br>c. teCompiteTijera( otro )
            <br>d. teCompitePiedra( otro ),
            <br>e. teCompitePapel( otro ),
            <br>f. ganador() -> devuelve el nombre del jugador “o la palabra Empate, si lo hubo”
            <br>Las funciones competirContra() buscan implementar el patrón double dispatch, y las
            otras tres se limitan a responder si ganan ellos, el contrincante o hay Empate ($this,
            $otro o new Empate() ). Al finalizar, se le indicará que indique el ganador(). Algunos
            ejemplos para ayudar:
            <br>Tijera{
            <br>…
            <br>funcion competirContra(otro){
            <br>return otro.teCompiteTijera( this )
            <br>}
            <br>...
            <br>}
            <br> ---------------------------------------------
            <br> $jugadaFacu = new Tijera(“Facu”);
            <br>$jugadaAle = new Piedra(“Ale”);
            <br> $resultado = $jugadaFacu.compiteContra($jugadaAle);
            <br>echo $resultado.ganador(); // Imprime Ale
            <br> ---------------------------------------------
        </p>
        <div class="resolucion">
            <h3>Resolución</h3>
            <article>
                <h3>Piedra, Papel o Tijeras</h3>
                <form action="index.php" method="get" enctype="application/x-www-form-urlencoded">
                    <label for="nombre1">Nombre: </label>
                    <input type="text" name="nombre1" id="nombre1">
                    <label for="j1">Eleccion: </label>
                    <select name="j1" id="j1">
                        <option value="piedra">Piedra</option>
                        <option value="papel">Papel</option>
                        <option value="tijera">Tijera</option>
                    </select><br><br>

                    <label for="nombre2">Nombre del segundo jugador: </label>
                    <input type="text" name="nombre2" id="nombre2">
                    <label for="j2">Eleccion: </label>
                    <select name="j2" id="j2">
                        <option value="piedra">Piedra</option>
                        <option value="papel">Papel</option>
                        <option value="tijera">Tijera</option>
                    </select>
                    <input type="submit" value="Jugar" class="btn-send">
                </form>
                <?php
                include_once ("../Ejercicio16/Figuras/Jugador.php");
                $nombre1 = isset($_GET['nombre1']) ? $_GET['nombre1'] : "";
                $nombre2 = isset($_GET['nombre2']) ? $_GET['nombre2'] : "";


                $jugador1 = new Jugador($nombre1);
                $jugador2 = new Jugador($nombre2);

                if( $nombre1 !="" && $nombre2 !="" ) {
                    $eleccionJ1 = isset($_GET['j1']) ? $_GET['j1'] : "";
                    $eleccionJ2 =isset($_GET['j2']) ? $_GET['j2'] : "";

                    $jugador1->agregarJugada($eleccionJ1);
                    $jugador2->agregarJugada($eleccionJ2);

                    if( $eleccionJ1 != "" && $eleccionJ1 != "") {

                        $resultado = $jugador1->competirContra($jugador2);

                        if( $resultado == "empate") {
                            echo "El juego empato";
                        }else {
                            echo "gana " . $resultado;
                        }
                    }
                }



                ?>
            </article>
        </div>
    </section>
</main>
</body>
</html>
