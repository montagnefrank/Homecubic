<?php

//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

require ("conn.php");
$select = "UPDATE hc_usuario SET panelUsuario = '".$_POST['panel']."' WHERE idUsuario = '".$_POST['user']."'";
$result = $link->query($select);
    
$panel = $_POST['panel'];
$_SESSION['panel'] = $panel;
?>