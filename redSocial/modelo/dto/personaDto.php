<?php

class personaDto{
    public $usuario;
    public $nombre;
    public $correo;
    public $contrasenia;

    public function __construct($usuario, $nombre, $correo, $contrasenia){
       $this->usuario = $usuario;
       $this->nombre = $nombre;
       $this->correo = $correo;
       $this->contrasenia = $contrasenia;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this ->usuario = $usuario;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this ->nombre = $nombre;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setCorreo($correo){
        $this ->correo = $correo;
    }

    public function getContrasenia(){
        return $this->contrasenia;
    }

    public function setContrasenia($contrasenia){
        $this ->contrasenia = $contrasenia;
    }
}

?>