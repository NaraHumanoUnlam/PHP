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
        echo "<img src='../img/persona.png' alt='usuario' class='w-5 h-5'><p>$nombre</p>";
        $deslogeo = '<a href="cerrarsersion.php">Cerrar sesión</a>';
        echo $deslogeo;
        ?>
    </nav>
</header>
<body>
<section>
    <article class="flex flex-col justify-center items-center">

        <?php
        include_once ("../Context/conectionToDataBase.php");
        if($_SESSION['rol']==0){
            header("location: home.php");
            exit();
        }
        $consulta = "";
        $pdato = isset($_GET["id"]) ? $_GET["id"] : "";
        if($pdato != ""){
            eliminarPokemon($pdato);
            echo "<h2 class='text-3xl text-red-400 m-5'>Se elimino pokemon</h2>";
            header('Location: home.php?mensaje="Se elimino pokemon"');
            exit();

        }
        ?>
    </article>
</section>
</body>
</html>
