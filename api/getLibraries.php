<?php
require_once 'Model/Library.php';
require_once 'connect.php';
$db = new DB_CONNECT();
$response = array();
$result = mysql_query("SELECT * FROM library") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["libraries"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["libraries"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $library = new Library();
        $library->setId($row['id']);
        $library->setSectionName($row['section_name']);
        $library->setImageUrl($row['url_image']);
        
        $arrayLibrary = array();
        $arrayLibrary['id'] = $library->getId();
        $arrayLibrary['section_name'] = $library->getSectionName();
        $arrayLibrary['image'] = $library->getImageUrl();
        array_push($response['libraries'], $arrayLibrary);
    }
    echo json_encode($response);
}
?>
