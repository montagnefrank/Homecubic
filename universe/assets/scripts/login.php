<?php

//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("conn.php"); /////////////////////////////////////////////////////////////////////////CONEXION A LA DB

session_start();
$hc_user = $_POST["user"];
$hc_pass = $_POST["pass"];
/////////////////////////////////////////////////////////////////////////////////////////////////VALIDAMOS EL USUARIO Y LA CONTRASE:A Y EL ROL, LUEGO DIRECCIONAMOS A SU RESPECTIVA PAGINA SEGUN SU ROL
$val_select = "SELECT passUsuario,nombreUsuario,rolUsuario,temaUsuario,idUsuario,panelUsuario FROM hc_usuario WHERE userUsuario = '" . $hc_user . "'";
$val_result = $link->query($val_select) or die($link->error);
$val_row = $val_result->fetch_array(MYSQLI_BOTH);

if ($hc_pass == $val_row['passUsuario']) {
    $_SESSION["user"] = $hc_user;
    $_SESSION["username"] = $val_row['nombreUsuario'];
    $_SESSION["rol"] = $val_row['rolUsuario'];
    $_SESSION["tema"] = $val_row['temaUsuario'];
    $_SESSION["panel"] = $val_row['panelUsuario'];
    $_SESSION['login'] = "true";
    $_SESSION['iduser'] = $val_row['idUsuario'];
    header("Location: ../../main.php");
} else {
    $_SESSION['msg'] = "No pudimos validar tus datos, intente de nuevo";
    $_SESSION['box'] = "primary";
    $_SESSION['login'] = "false";
    header("Location: ../../index.php");
}
mysqli_close($link);
?>