<?php

$response = array();

require 'connect.php';

$db = new DB_CONNECT();

$query_search = "SELECT version FROM db_version";
$result = mysql_query($query_search) or die(mysql_error());
$row = mysql_fetch_assoc($result);
if ($row) {
    $response['version'] = $row['version'];
    echo json_encode($response);
} else {
    echo "Error";
}
?>
