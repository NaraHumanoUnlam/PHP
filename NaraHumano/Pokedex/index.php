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
<header class="bg-red-500 flex flex-row" >
    <a href="index.php" class="row-start-1 m-2"><img src="./img/logo-pokedex.png" alt="logo"></a>
</header>
<section>
    <h1 class="text-3xl text-red-600 mb-5 text-center">Descubre el mundo de los pokemones</h1>
    <article class="flex flex-row justify-center items-center ">
        <a href="pages/register.php" class="bg-red-400 hover:bg-green-400 rounded p-2">Registrate</a>
        <a href="pages/login.php" class="bg-red-400 hover:bg-green-400 rounded p-2 m-5">Login</a>
    </article>
    <aside class="flex justify-center items-center">
        <img class="w-20" src="img/pokeball.jpg" >
    </aside>
</section>
</body>
</html>
