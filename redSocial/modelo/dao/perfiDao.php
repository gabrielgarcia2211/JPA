<?php


require 'modelo/dto/perfilDto.php'; 
class perfiDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }

    public function insert($datos){
    $person = new perfilDto($datos['nombre'], $datos['descripcion'], $datos['url']);
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO foto (nombre, descripcion, url) VALUES (:nombre, :descripcion, :url)');
        try{
            $query->execute([
                'nombre' => $person->getNombre(),
                'descripcion' => $person->getDescripcion(),
                'url' => $person->getUrl()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }  
    }

    public function maxId(){
            try{
                $query = $this->db->connect()->prepare('SELECT max(id) FROM foto');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }  
        
    }

    public function imagenes($inicio, $fotos_por_pagina,$usuario){
        // Traemos las fotos de la base de datos
        $statement =  $this->db->connect()->prepare("SELECT f.* FROM foto f INNER JOIN persona_foto pf ON (f.id = pf.foto) AND pf.userPersona = :usuario  LIMIT $inicio, $fotos_por_pagina");
        $statement->execute(array(
            ':usuario' => $usuario
        ));
        $fotos = $statement->fetchAll();
        return $fotos;
        
    }


    public function paginacionLlamada($usuario){
        // Traemos las fotos de la base de datos
    try{
        $statement =  $this->db->connect()->prepare("SELECT COUNT(pf.foto) FROM persona_foto pf INNER JOIN foto f ON (f.id = pf.foto) AND pf.userPersona = :usuario");
        $statement->execute(array(
            ':usuario' => $usuario
        ));
        $cantpagina = $statement->fetch();
        return  $cantpagina;
    }catch(PDOException $e){
        return false;
    }  
        
    }

    
    public function getUser($item){    
        try{
           $query = $this->db->connect()->prepare('SELECT p.usuario, p.nombre, p.correo FROM persona p
           INNER JOIN persona_foto pf 
           ON p.usuario = :usuario
           INNER JOIN foto f
           ON f.id=pf.foto LIMIT 1');
            $query->execute([
                ':usuario' => $item['usuario']
            ]);
            $resultado = $query->fetch(PDO::FETCH_ASSOC); 
            return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }


    public function obtenerUsuario($user){
        try{
            $query = $this->db->connect()->prepare('SELECT usuario FROM persona WHERE correo =:correo');
            $query->execute([
                ':correo' => $user
            ]);
             $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
             return $resultado;
         }catch(PDOException $e){
             return false;
         }
    }


    public function getPerfil($item){    
        try{
           $query = $this->db->connect()->prepare('SELECT p.url , pf.userPersona FROM foto p INNER JOIN persona_foto pf ON p.id= pf.foto AND pf.perfil=1 AND pf.userPersona =:usuario');
            $query->execute([
                ':usuario' => $item
            ]);
            $resultado = $query->fetch(PDO::FETCH_ASSOC); 
            return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }

    public function getUsuarios($user){    
        try{
           $query = $this->db->connect()->prepare('SELECT p.usuario, p.nombre, p.correo, pf.perfil, f.url FROM persona p LEFT JOIN persona_foto pf ON p.usuario=pf.userPersona LEFT JOIN foto f ON pf.foto = f.id WHERE (pf.perfil IS NULL OR pf.perfil=1) AND p.usuario!=:usuario GROUP BY p.usuario 
           ');
            $query->execute([ 
                ':usuario' => $user
            ]);
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC); 
            return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }
    




   
    
    
}


?>