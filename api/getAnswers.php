<?php

require_once 'Model/Answer.php';
require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();
$result = mysql_query("SELECT * FROM answer") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["answers"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["answers"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $answer = new Answer();
        $answer->setId($row['id']);
        $answer->setExersiseId($row['exersise_id']);
        $answer->setAnswertext($row['answer_text']);
        $answer->setTrue($row['is_true']);
        $answer->setExplanationText($row['explanation_text']);
        
        $arrayAnswer = array();
        $arrayAnswer['id'] = $answer->getId();
        $arrayAnswer['exersise_id'] = $answer->getExersiseId();
        $arrayAnswer['answer_text'] = $answer->getAnswerText();
        $arrayAnswer['is_true'] = $answer->getTrue();
        $arrayAnswer['explanation_text'] = $answer->getExplanationText();
        
        array_push($response['answers'], $arrayAnswer);
    }
    echo json_encode($response);
}

