<?php
require_once('config.php');
extract($_POST);
$query = $conn->query("SELECT * FROM `authors` where id = '{$id}'");
if ($query) {
    $resp['status'] = 'success';
    $resp['data'] = $query->fetch_array();
} else {
    $resp['status'] = 'success';
    $resp['error'] = 'An error occured while fetching the data. Error: ' . $conn->error;
}

//Returns the response as JSON format.
echo json_encode($resp);
