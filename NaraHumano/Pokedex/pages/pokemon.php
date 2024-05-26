<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Pokedex</title>
</head>
<body>
<header class="bg-red-500 grid" >
    <a href="home.php" class="col-span-1 mr-20"><img src="../img/logo-pokedex.png" alt="logo"></a>
    <nav class="text-white mb-5 flex flex-col justify-center items-center ml-96">
        <?php
        session_start();
        $nombre = isset($_SESSION["nombre_usuario"])? $_SESSION["nombre_usuario"] : "";
        if($_SESSION['rol']==0){
            header("location: home.php");
        }
        if($nombre == "" ){
            header("location: ../index.php");
        }
        echo "<img src='../img/persona.png' alt='usuario' class='w-10 h-10'><p>$nombre</p>";
        $deslogeo = '<a href="cerrarsersion.php">Cerrar sesión</a>';
        echo $deslogeo;
        ?>
    </nav>
</header>
<body>
<section>
    <article class="flex flex-col justify-center items-center">
        <h2 class="text-3xl text-red-400 m-5">Agregar un pokemon</h2>
        <form action="pokemon.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" id="nombre" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4"><br>
            <label for="descripcion">Descripcion</label><br>
            <input type="text" name="descripcion" id="descripcion" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4"><br>
            <label for="numero">Número</label><br>
            <input type="number" name="numero" id="numero" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4"><br>
            <label for="imagen">Subir imagen</label><br>
            <input type="file" name="imagen" id="imagen" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4"><br>
            <label for="tipo">Tipo</label><br>
            <input type="text" name="tipo" id="tipo" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4"><br>
            <input type="submit" value="Agregar pokemon" class="bg-blue-200 w-30 h-25 p-2 rounded hover:bg-blue-400 text-black">
            <?php
            include_once ("../Context/conectionToDataBase.php");
            $pnombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
            $numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
            $imagen = isset($_FILES['imagen']) ? $_FILES['imagen']: "";
            $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";

            if($pnombre != "" && $tipo!= "") {
                echo "<div class='text-center flex flex-col items-center'>";
                guardarImagen($imagen,$numero);
                darAltaPokemon($numero,$pnombre,$tipo,$numero.".jpg",$descripcion);
                echo "</div>";

                header('Location: home.php?mensaje="Se Agrego el pokemon con éxito."');
                exit();
            }

            ?>
        </form>
    </article>
</section>
</body>
</html>