<?php


require 'modelo/dto/personafotoDto.php'; 
class personafDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }

    public function insertP($datos){
        $person = new personafotoDto($datos['userPersona'], $datos['foto'], $datos['perfil']);
            try{
                $query = $this->db->connect()->prepare('INSERT INTO persona_foto (userPersona, foto, perfil) VALUES (:userPersona, :foto, :perfil)');
                $query->execute(array(
                    ':userPersona' => $person->getuserPersona(),
                    ':foto' => $person->getFoto(),
                    ':perfil' => $person->getPerfil()
                ));
               return true;
            }catch(PDOException $e){
                return false . $e;
            }  
            
    }



    public function insertPerfil($usuario, $foto){
            try{
                $query1 = $this->db->connect()->prepare('UPDATE persona_foto SET perfil = 0 WHERE userPersona = :usuario');
                $query2 = $this->db->connect()->prepare('UPDATE persona_foto SET perfil = 1 WHERE userPersona = :usuario AND foto = :foto');
                $query1->execute(array(
                    ':usuario' => $usuario
                ));
                $query2->execute(array(
                    ':usuario' => $usuario,
                    ':foto' => $foto
                ));
                $aux =  $query2->rowCount(); 
                return $aux;
            }catch(PDOException $e){
                return false . $e;
            }  
            
    }


    




}


    











    



?>