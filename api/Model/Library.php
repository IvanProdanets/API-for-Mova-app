<?php


class Library {
    
    private $id;
    private $sectionName;
    private $imageUrl;


    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    public function getSectionName(){
        return $this->sectionName;
    }
    public function setSectionName($sectionName){
        $this->sectionName = iconv("windows-1251","utf-8",$sectionName);;
    }
    
    public function getImageUrl(){
        return $this->imageUrl;
    }
    public function setImageUrl($imageUrl){
        $this->imageUrl = "http://golden-source.esy.es/".$imageUrl;
    }
    
}
