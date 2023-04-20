<?php
    function getConection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gestion_usuarios";

        return mysqli_connect($servername, $username, $password, $dbname);
    }

    if (!getConection()) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    function obtener_usuarios(){
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query(getConection(), $sql);


        if (mysqli_num_rows($resultado) > 0) {
            echo "<table><tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["usuario"] . "</td><td>" . $fila["rol"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados";
        }

        // Cerrar la conexión
        mysqli_close(getConection());
    }


    function addDatabase($user, $pass, $mail){

        $conn = getConection();
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        $rol = 2;

        $sql = "INSERT INTO usuario (usuario, password, email, rol) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, 'sssi', $user, $pass, $mail, $rol);
        mysqli_stmt_execute($stmt);
        while (mysqli_stmt_fetch($stmt)) {
            echo "El registro se insertó correctamente";
        }


        mysqli_stmt_close($stmt);
    }
?>