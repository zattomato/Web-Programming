<?php
require_once("../php/db_conn.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `q_report` ")->num_rows;
$search_where = "";
if (!empty($search)) { //for the search function
    $search_where = " where ";
    $search_where .= " username LIKE '%{$search['value']}%' ";
    $search_where .= " OR houseNum LIKE '%{$search['value']}%' ";
    $search_where .= " OR phoneNum LIKE '%{$search['value']}%' ";
    $search_where .= " OR date_format(qStart,'%d %M, %Y')qStart LIKE '%{$search['value']}%' ";
    $search_where .= " OR date_format(qEnd,'%d %M, %Y') LIKE '%{$search['value']}%' ";
    $search_where .= " OR type LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
    "reportID",
    "username",
    "houseNum",
    "phoneNum",
    "unix_timestamp(qStart)",
    "unix_timestamp(qEnd)",
    "type"
);
$query = $conn->query("SELECT * FROM `q_report` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `q_report` {$search_where} ")->num_rows;

$recordsTotal = $totalCount;
$recordsFiltered = $recordsFilterCount;
$data = array();
$i = 1 + $start;
while ($row = $query->fetch_assoc()) {
    $row['no'] = $i++;
    $row['qStart'] = date("F d, Y", strtotime($row['qStart']));
    $data[] = $row;
}

//Returns the response as JSON format.
echo json_encode(
    array(
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $data
    )
);
