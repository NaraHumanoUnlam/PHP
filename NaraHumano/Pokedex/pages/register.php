<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarme</title>
</head>
<body>
<body>
<main>
    <form action="register.php" method="get" enctype="application/x-www-form-urlencoded" class="float-right">
        <label for="usuario" class="ml-2"> Usuario </label>
        <input type="text" name="usuario" id="usuario" class="rounded border text-sm text-gray-400 w-1/4 hover:border-e">
        <label for="email_usuario" class="ml-2"> Email </label>
        <input type="email" name="email_usuario" id="email_usuario" class="rounded border text-sm text-gray-400 w-1/4 hover:border-e">
        <label for="password" class="ml-5"> Contraseña </label>
        <input type="password" name="password" id="password" class="rounded border text-sm text-gray-400 w-1/4 hover:border-e">
        <input type="submit" value="Registrarme" class="bg-blue-200 w-30 h-25 p-2 rounded hover:bg-blue-400 text-black ml-5">

        <?php
        include_once ("../Context/conectionToDataBase.php");
        $user = isset($_GET["usuario"]) ? $_GET["usuario"] : "";
        $pass = isset($_GET["password"]) ? $_GET["password"] : "";
        $email = isset($_GET["email_usuario"]) ? $_GET["email_usuario"] : "";

        if($user != "" && $pass != "" && $email != ""){
            $mensaje = "";
            if(confirmarNickEnUso($user)){
                $mensaje .= '<p class="ml-2">El usuario ya esta en uso</p>';
            }
            if(confirmarEmailEnUso($email)){
                $mensaje .= '</br><p class="ml-2">El email ya esta en uso</p>';
            }
            echo $mensaje;
            if(!confirmarEmailEnUso($email)&&!confirmarNickEnUso($user)){
                altaUsuario($user,$email,$pass);
                header('location: login.php');
            }
        }
        ?>
    </form>
</main>
</body>
</body>
</html>