<?php

class personafotoDto{
    public $userPersona;
    public $foto;
    public $perfil;

    public function __construct($userPersona, $foto, $perfil){
       $this->userPersona = $userPersona;
       $this->foto = $foto;
       $this->perfil = $perfil;
    }

    public function getuserPersona(){
        return $this->userPersona;
    }

    public function setuserPersona($userPersona){
        $this ->userPersona = $userPersona;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this ->foto = $foto;
    }

    public function getPerfil(){
        return $this->perfil;
    }

    public function setPerfil($perfil){
        $this ->perfil = $perfil;
    }
}

?>