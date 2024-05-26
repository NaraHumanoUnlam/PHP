<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<body>
<main>
    <form action="login.php" method="get" enctype="application/x-www-form-urlencoded" class="float-right">
        <label for="usuario" class="ml-2"> Usuario </label>
        <input type="text" name="usuario" id="usuario" class="rounded border text-sm text-gray-400 w-1/4 hover:border-e">
        <label for="password" class="ml-5"> Contraseña </label>
        <input type="password" name="password" id="password" class="rounded border text-sm text-gray-400 w-1/4 hover:border-e">
        <input type="submit" value="Ingresar" class="bg-blue-200 w-30 h-25 p-2 rounded hover:bg-blue-400 text-black ml-5">
        <?php
        include_once ("../Context/conectionToDataBase.php");
        $user = isset($_GET["usuario"]) ? $_GET["usuario"] : "";
        $pass = isset($_GET["password"]) ? $_GET["password"] : "";


        if($user != "" && $pass != ""){

            if(validarUsuario($user,$pass)){
                session_start();
                $_SESSION['nombre_usuario'] = $user;
                $_SESSION['rol'] = consultarRol($user);
                header('location: home.php');
            }
            else {
                echo "no funciono";
            }
        }
        ?>
    </form>
    <a href="register.php" class="ml-2">Registrarme</a>
    </main>
</body>
</body>
</html>