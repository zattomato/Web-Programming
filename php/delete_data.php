<?php
require_once('../php/db_conn.php');
extract($_POST);

$delete = $conn->query("DELETE FROM `q_report` where reportID = '{$reportID}'");
if ($delete) {
    $resp['status'] = 'success';
} else {
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: ' . $conn->error;
}

//Returns the response as JSON format.
//The json_encode() function is used to encode a value to JSON format.
//https://www.w3schools.com/php/func_json_encode.asp
echo json_encode($resp);
