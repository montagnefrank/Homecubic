<?php

///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("assets/scripts/conn.php");

$selectblog = "SELECT * FROM hc_blog WHERE statusBlog = '1' ORDER BY idBlog DESC";
$resultblog = $link->query($selectblog) or die($link->error);
echo "row<br />";
while ($rowblog = $resultblog->fetch_array(MYSQLI_BOTH)) {
    echo ' <br />
    fila
  <br />';
    if ($count % 2 == 1) {
        echo "rowclose<br />";
        echo "row<br />";
    }
    $count++;
}
if ($count % 2 != 0 || $count % 2 != 1)
    echo "rowclose<br />";
?>
