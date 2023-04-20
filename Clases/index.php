<html>
<head>

</head>
<body>
    <main>
        <section>
            <form action="index.php" method="post" enctype="multipart/form-data" >
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <input type="submit" value="Regitrar">
                <?php
                include_once("./ConexionDB/interno.php");
                $user = isset($_POST["usuario"]) ? $_POST["usuario"] : "usuario no valida";
                $pass = isset($_POST["password"]) ? $_POST["password"] : "password no valida";
                $mail = isset($_POST["email"]) ? $_POST["password"] : "Debe ingresar un mail";

                addDatabase($user,$pass,$mail);
                echo phpinfo();
                ?>
            </form>
        </section>
    </main>
</body>
</html>
