<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pokedex</title>
</head>
<body>
<header class="bg-red-500 grid grid-cols-4 text-center" >
    <a href="home.php" class="col-span-1 mr-20"><img src="../img/logo-pokedex.png" alt="logo"></a>
    <nav class="text-white mb-5 flex flex-col justify-center items-center ml-96">
        <?php
            session_start();
            $nombre = isset($_SESSION["nombre_usuario"])? $_SESSION["nombre_usuario"] : "";
            if($nombre == "" ){
                header("location: ../index.php");
            }
            echo "<img src='../img/persona.png' alt='usuario' class='w-10 h-10'><p>$nombre</p>";
            $deslogeo = '<a href="cerrarsersion.php">Cerrar sesión</a>';
            echo $deslogeo;
        ?>
    </nav>
</header>
<section>
    <article class="flex flex-col justify-center items-center text-center">
        <form action="home.php" method="post" enctype="application/x-www-form-urlencoded">
            <input type="text" name="buscar" id="buscar" placeholder="Buscar pokemon por nombre, tipo o numero de pokedex" class="rounded border text-sm text-gray-400 w-96 h-2/4 m-4">
            <input type="submit" value="¿Quién es ese pokemon?" class="bg-blue-200 w-30 h-25 p-2 rounded hover:bg-blue-400 text-black">
            <?php
            $mensa = isset($_GET["mensaje"]) ? $_GET["mensaje"] : "";
            if($mensa!= ""){
                echo "<h1 class='text-red-600 text-3xl'>{$mensa}</h1>";
            }
            include_once ("../Context/conectionToDataBase.php");
            $pokemon = isset($_POST["buscar"]) ? $_POST["buscar"] : "";

                echo "<div class='text-center flex flex-col items-center'>";
                consultarPokemon($pokemon);
                echo "</div>";
            ?>
        </form>

        <a href="pokemon.php" <?php
        if ($_SESSION['rol']==0) { echo "style='display:none;'"; }
        echo ">";?>
            <button class="bg-blue-200 w-30 h-25 p-2 rounded hover:bg-blue-400 text-black m-5">Agregar un pokemon</button></a>
    </article>
</section>
</body>
</html>
