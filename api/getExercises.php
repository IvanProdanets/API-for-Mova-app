<?php

require_once 'Model/Exercise.php';
require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();
$result = mysql_query("SELECT * FROM exersise") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["exercises"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["exercises"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $exercise = new Exercise();
        $exercise->setId($row['id']);
        $exercise->setLevel($row['level']);
        $exercise->setLibraryId($row['library_id']);
        $exercise->setQuestionText($row['question_text']);
        
        $arrayExercise = array();
        $arrayExercise['id'] = $exercise->getId();
        $arrayExercise['level'] = $exercise->getLevel();
        $arrayExercise['library_id'] = $exercise->getLibraryId();
        $arrayExercise['question_text'] = $exercise->getQuestionText();
        
        array_push($response['exercises'], $arrayExercise);
    }
    echo json_encode($response);
}
?>
