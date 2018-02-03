<?php

////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//// Conexion a la base de datos LOCAL
//define('DB_HOST', 'localhost');
//define('DB_USER', 'root');
//define('DB_PASSWORD', 'vagrant');
//define('DB_DATABASE', 'homecubic');

// Conexion a la base de datos CLOUD BURTONSERVERS.COM
define('DB_HOST', 'localhost');
define('DB_USER', 'c0280420_homcub');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'c0280420_homcub');



//CONEXION A DB
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>