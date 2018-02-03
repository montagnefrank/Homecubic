<?php

///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require 'conn.php';
$response = array();
//var_dump($_POST);die
// if the url field is empty
if (isset($_POST['name']) && $_POST['name'] != '') {

    $query_message = "INSERT INTO hc_messages (messageContact,emailContact,nameContact,subjectContact,dateContact,statusContact,timeContact) VALUES ('".$_POST['message']."','".$_POST['email']."','".$_POST['name']."','".$_POST['subject']."','" . date('Y-m-d') . "','New','" . date('H:i:s') . "')";
    $result_message = mysqli_query($link, $query_message);
    if ($result_message) {
        $response['msg'] = "success";
        echo json_encode($response);
    } else {
        echo "No pudimos enviar tu mensaje";
    }
}
?>