<?php
// Datos de conexión
define("host", "localhost");
define("user", "root");
define("pass", "root");
define("database", "pokedex");

function consultarPokemon($consulta){

    if($consulta!=""){
    if(!consultarPokemonPorNombre($consulta)){
        if(!consultarPokemonPorTipo($consulta)){
            if(!consultarPokemonPorNumero($consulta)){
                echo "<h1 class='text-blue-400'> No se encontro el pokemon </h1><br>";
                mostrarTodos();
            }
        }
    }}else {
        mostrarTodos();
    }
}
function consultarPokemonPorNombre($nombre){

    $seEncontro = false;
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon where nombre like '" . $nombre . "'";


    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_assoc($resultado)) {
                $imagen = '../img/pokemons/'.$fila["imagen"];
                $img_tipo = '../img/tipos/' . $fila["tipo"] . ".png";
                echo  "<div class='flex flex-row'";
                if ($_SESSION['rol']==0) { echo "style='display:none;'"; }
                echo ">";
                echo "<div class='flex flex-row'>";
                echo "<a href='../pages/eliminar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-trash'></i></a>";
                echo "<a href='../pages/modificar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-pen-to-square'></i></a>";
                echo "</div>";
                echo "Número: " . $fila["numero"] . " - Nombre: " . $fila["nombre"] . "<br>";
                echo "<img src={$imagen} class='h-20 w-20'> <br>";
                echo "<div><p>{$fila["descripcion"]}</p></div>";
                echo "<img src={$img_tipo} alt={$fila["nombre"]}> <br>";
                $seEncontro = true;
        }
    }

    return $seEncontro;
    mysqli_close($conn);
}

function consultarPokemonPorNumero($numero){
    $seEncontro = false;
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon ";


    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $imagen = '../img/pokemons/'.$fila["imagen"];
            $img_tipo = '../img/tipos/' . $fila["tipo"] . ".png";
            if ($fila["numero"] == $numero) {
                echo  "<div class='flex flex-row'";
                if ($_SESSION['rol']==0) { echo "style='display:none;'"; }
                echo ">";
                echo "<div class='flex flex-row'>";
                echo "<a href='../pages/eliminar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-trash'></i></a>";
                echo "<a href='../pages/modificar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-pen-to-square'></i></a>";
                echo "</div>";
                echo "Número: " . $fila["numero"] . " - Nombre: " . $fila["nombre"] . "<br>";
                echo "<img src={$imagen} class='h-20 w-20'> <br>";
                echo "<div><p>{$fila["descripcion"]}</p></div>";
                echo "<img src={$img_tipo} alt={$fila["nombre"]}> <br>";
                $seEncontro = true;
            }
        }
    }
    mysqli_close($conn);
    return $seEncontro;

}
function consultarPokemonPorTipo($tipo)
{
    $rol = $_SESSION['rol'];
    $seEncontro = false;
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $id = buscarTipo($tipo);
    $sql = "SELECT * FROM pokemon where tipo =" . $id;


    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $imagen = '../img/pokemons/'.$fila["imagen"];
            $img_tipo = '../img/tipos/' . $fila["tipo"] . ".png";
            echo  "<div class='flex flex-row'";
            if ($rol==0) { echo "style='display:none;'"; }
            echo ">";
            echo "<a href='../pages/eliminar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-trash'></i></a>";
            echo "<a href='../pages/modificar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-pen-to-square'></i></a>";
            echo "</div>";
            if (count($fila)>0) {
                echo "Número: " . $fila["numero"] . " - Nombre: " . $fila["nombre"] . "<br>";
                echo "<img src={$imagen} class='h-20 w-20'> <br>";
                echo "<div><p>{$fila["descripcion"]}</p></div>";
                echo "<img src={$img_tipo} alt={$fila["nombre"]}> <br>";
                $seEncontro = true;
            } else {
                $seEncontro = false;
            }
        }
    }else {
        $seEncontro = false;
    }
    mysqli_close($conn);
    return $seEncontro;
}

//function consultar
function mostrarTodos(){

    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon" ;


    $resultado = mysqli_query($conn, $sql);


// Procesar los resultados
    if (mysqli_num_rows($resultado) > 0) {
         $rol =  $_SESSION['rol'] ;
        while($fila = mysqli_fetch_assoc($resultado)) {
            $imagen = '../img/pokemons/'.$fila["imagen"];
            $img_tipo = '../img/tipos/' . $fila["tipo"] . ".png";

            echo  "<div class='flex flex-row'";
            if ($rol==0) { echo "style='display:none;'"; }
            echo ">";
            echo "<a href='../pages/eliminar.php?id={$fila["idPokemon"]}' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-trash'></i></a>";
            echo "<a href='../pages/modificar.php' class='w-30 h-25 rounded hover:text-red-400 text-black p-2 m-2'><i class='fa-solid fa-pen-to-square'></i></a>";
            echo "</div>";

            echo "Número: " . $fila["numero"] . " - Nombre: " . $fila["nombre"] . "<br>";
            echo "<img src={$imagen} class='h-20 w-20'> <br>";
            echo "<div><p>{$fila["descripcion"]}</p></div>";
            echo "<img src={$img_tipo} alt={$fila["nombre"]}> <br>";

        }
    }

    mysqli_close($conn);
}

function consultarRol($user){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT rol FROM usuario where nickname ='" .$user. "';";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while($fila = mysqli_fetch_assoc($resultado)) {
            var_dump($fila['rol']);
            mysqli_close($conn);
            return $fila['rol'];
        }
    }

}

function darAltaPokemon($numero,$nombre, $tipo, $imagen, $descripcion){
    $id = buscarTipo($tipo);
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO pokemon (numero,nombre,tipo,descripcion,imagen) VALUES ({$numero},'{$nombre}',{$id},'{$descripcion}','{$imagen}')" ;


   // $resultado = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo "Se ingreso con exito el pokemon";
    }else {
        echo "No se pudo ingresar el pokemon.";
    }
    mysqli_close($conn);
}
//--con imagen $imagen,
function modificarPokemon($idpokemon,$numero,$nombre, $tipo,  $descripcion){
    $id = buscarTipo($tipo);
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    //if (isset($imagen)) {
      //  $sql = "Update pokemon set numero = {$numero},nombre = '{$nombre}',tipo = {$id} , descripcion = '{$descripcion}',imagen ='{$imagen}' where idPokemon = {$idpokemon} " ;
    //}else {
        $sql = "Update pokemon set numero = {$numero},nombre = '{$nombre}',tipo = {$id} , descripcion = '{$descripcion}' where idPokemon = {$idpokemon} " ;
    //}

    // $resultado = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo "Se Modifico con exito el pokemon";
    }else {
        echo "No se pudo modificar el pokemon.";
    }
    mysqli_close($conn);
}

function eliminarPokemon($idpokemon){
   // $idpokemon = buscarIDPokemon($datos_poke);

    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $sql = "delete from pokemon where idPokemon = {$idpokemon} " ;
    var_dump($sql);

    // $resultado = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo "Se elimino con exito el pokemon";
    }else {
        echo "No se pudo eliminar el pokemon.";
    }
    mysqli_close($conn);
}

function buscarIDPokemon($datos_poke){
    $idEncontrada = 0;
    if(esNombreDePokemon($datos_poke)){
        $idEncontrada = buscarIDPokemonPorNombre($datos_poke);
    }elseif(esNumeroDePokemon($datos_poke)){
        $idEncontrada = buscarIDPokemonPorNumero($datos_poke);
    }
    return $idEncontrada;
}

function buscarIDPokemonPorNumero($datos_poke)
{
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon where numero =" .$datos_poke. ";" ;


    $resultado = mysqli_query($conn, $sql);
    mysqli_close($conn);
    while($fila = mysqli_fetch_assoc($resultado)) {
        return $fila["idPokemon"];
    }

}

function buscarIDPokemonPorNombre($datos_poke)
{
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon where nombre =" .$datos_poke. ";" ;


    $resultado = mysqli_query($conn, $sql);
    mysqli_close($conn);
    while($fila = mysqli_fetch_assoc($resultado)) {
        return $fila["idPokemon"];
    }
}

function esNumeroDePokemon($datos_poke){
    $conn = mysqli_connect(host, user, pass, database);
    $seEncontro = false;
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon where numero =" .$datos_poke. ";" ;


    $resultado = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (mysqli_num_rows($resultado) > 0) {
        $seEncontro = true;
    }

    return $seEncontro;
}

function esNombreDePokemon($datos_poke)
{
    $seEncontro = false;
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM pokemon where nombre =" .$datos_poke. ";" ;


    $resultado = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (mysqli_num_rows($resultado) > 0) {
       $seEncontro = true;
    }

    return $seEncontro;

}

function buscarTipo($tipo){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tipo WHERE nombre LIKE '" . $tipo . "'" ;


    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            return $fila["idTipo"];
        }
    }else {
        return 0;
    }

    mysqli_close($conn);
}

function altaUsuario($nick,$email,$password){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuario (nickname,email,password,rol) VALUES ('{$nick}','{$email}','{$password}',0)" ;
    var_dump($sql);

    // $resultado = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo "Se registro con exito";
    }else {
        echo "No se pudo registrar.";
    }
}

function validarUsuario($email,$pass){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usuario WHERE nickname LIKE '" . $email . "'" ;

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            return $fila["password"]== $pass;
        }
    }

}

function confirmarNickEnUso($user){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usuario WHERE nickname = '" . $user . "'" ;

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            return true;
        }
    }{
        return false;
    }
}

function confirmarEmailEnUso($email){
    $conn = mysqli_connect(host, user, pass, database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usuario WHERE email = '" . $email . "'" ;

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        return true;
    }{
        return false;
    }
}

function guardarImagen($archivo,$name){
    if($archivo!= "" && $name!= "")
    {
        $target_dir = "../img/pokemons/";

        $target_file = $target_dir . basename($name) .".jpg" ;
        if(!move_uploaded_file($archivo['tmp_name'], $target_file)) {
            echo "NO SE PUDO CARGAR LA IMAGEN";
        }
    }

}

function modificarImagen($imagen, $numero)
{
    $archivo = '../img/pokemons/' . $numero . '.jpg';
    if(file_exists($archivo)){
        $img = imagecreatefromjpeg('../img/pokemons/' . $numero . ".jpg");
        imagedestroy($img);
    }
    guardarImagen($imagen,$numero);
}

?>