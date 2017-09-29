<?php


class Answer {
    
    private $id;
    private $exersiseId;
    private $answerText;
    private $isTrue;
    private $explanationText;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    public function getExersiseId(){
        return $this->exersiseId;
    }
    public function setExersiseId($exersiseId){
        $this->exersiseId = $exersiseId;
    }
    
    public function getAnswerText(){
        return $this->answerText;
    }
    public function setAnswertext($answertText){
        $this->answerText = iconv("windows-1251","utf-8",$answertText);
    }
    
    public function getTrue(){
        return $this->isTrue;
    }
    public function setTrue($isTrue){
        $this->isTrue = $isTrue;
    }
    
    public function getExplanationText(){
        return $this->explanationText;
    }
    public function setExplanationText($explanation){
        $this->explanationText = iconv("windows-1251","utf-8",$explanation);
    }
            
}
