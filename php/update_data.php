<?php
require_once('../php/db_conn.php');
extract($_POST);

$update = $conn->query("UPDATE `q_report` set `username` = '{$username}', `houseNum` = '{$houseNum}', `phoneNum` = '{$phoneNum}',`qStart` = '{$qStart}',`qEnd` = '{$qEnd}',`type` = '{$type}' where reportID = '{$reportID}'");
if ($update) {
    $resp['status'] = 'success';
} else {
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: ' . $conn->error;
}
//Returns the response as JSON format.
echo json_encode($resp);
