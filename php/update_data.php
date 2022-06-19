<?php
require_once('../php/db_conn.php');
extract($_POST);

$update = $conn->query("UPDATE `q_report` set `first_name` = '{$first_name}', `last_name` = '{$last_name}', `email` = '{$email}',`birthdate` = '{$birthdate}' where id = '{$id}'");
if ($update) {
    $resp['status'] = 'success';
} else {
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: ' . $conn->error;
}
//Returns the response as JSON format.
echo json_encode($resp);
