<?php

class Item {
    
    private $id;
    private $libraryId;
    private $imageUrl;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    public function getLibraryId(){
        return $this->libraryId;
    }
    public function setLibraryId($libraryId){
        $this->libraryId = $libraryId;
    }
    
    public function getImageUrl(){
        return $this->imageUrl;
    }
    public function setImageUrl($imageUrl){
        $this->imageUrl = "http://golden-source.esy.es/".$imageUrl;
    }
}
