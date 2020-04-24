<?php

class perfilDto{
    public $nombre;
    public $descripcion;
    public $url;

    public function __construct($nombre, $descripcion, $url){
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->url = $url;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this ->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this ->descripcion = $descripcion;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this ->url = $url;
    }

  
}

?>