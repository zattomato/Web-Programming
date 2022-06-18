<?php
require_once('config.php');
extract($_POST);

$query = $conn->query("INSERT INTO `authors` (`first_name`,`last_name`,`email`,`birthdate`) VALUE ('{$first_name}','{$last_name}','{$email}','{$birthdate}')");
if ($query) {
    $resp['status'] = 'success';
} else {
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: ' . $conn->error;
}
//Returns the response as JSON format.
echo json_encode($resp);
