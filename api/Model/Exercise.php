<?php


class Exercise {
    
    private $id;
    private $level;
    private $libraryId;
    private $questionText;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    public function getLevel(){
        return $this->level;
    }
    public function setLevel($level){
        if($level>=0){
            $this->level = $level;
        }
    }
    
    public function getLibraryId(){
        return $this->libraryId;
    }
    public function setLibraryId($libraryId){
        $this->libraryId = $libraryId;
    }
    
    public function getQuestionText(){
        return $this->questionText;
    }
    public function setQuestionText($questionText){
        $this->questionText = iconv("windows-1251","utf-8",$questionText);
    }
            
}
