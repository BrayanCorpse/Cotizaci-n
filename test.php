<?php 
// use Model\Usuario;

// require_once "App/app.autoload.php";

// $usuario = new Usuario();
// $usuario->Correo = "admin@aiko.com.mx";
// $datos = $usuario->Consultar();

// var_dump(mysqli_fetch_array($datos));

use App\ConexionSql;
require_once "App/app.autoload.php";

$conexion = new ConexionSql();

