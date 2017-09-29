<?php

require_once 'Model/Item.php';
require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();
$result = mysql_query("SELECT * FROM item") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["items"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["items"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $item = new Item();
        $item->setId($row['id']);
        $item->setLibraryId($row['library_id']);
        $item->setImageUrl($row['image']);
        
        $arrayItem = array();
        $arrayItem['id'] = $item->getId();
        $arrayItem['library_id'] = $item->getLibraryId();
        $arrayItem['image'] = $item->getImageUrl();
        array_push($response['items'], $arrayItem);
    }
    echo json_encode($response);
}
?>
