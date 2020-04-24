<?php
   

   class personaControl extends Controller{
        private $person;
        

        function __construct(){
          parent::__construct();
          $person=null;
        }
                    
        function render($ubicacion = null){
          $constr = "persona";
          if(isset($ubicacion[0])){
          $this->view->render($constr , $ubicacion[0]);
          }else{
          $this->view->render($constr, 'index');}
        }

        function validarUsuario($param = null){
          if($param == null)return;
          $idUsuario =  $param[0];
          $idContraseña =  $param[1];
          $resul = $this->model->getValidar($idUsuario,  $idContraseña);
          if(!empty($resul)){
            $_SESSION['user'] = $resul[0];
            echo true;
            return;
          }
        }

        function guardarUsuario($param = null){
          if($param == null)return;
          $usuario =  $param[0];
          $nombre =  $param[1];
          $email = $param[2];
          $contraseña = $param[3];


          $result = $this->model->getExiste($usuario,$email);
          if(empty($result)){
            $this->model->insert(['usuario' =>  $usuario, 'nombre' => $nombre, 'correo' =>  $email, 'contrasenia' => $contraseña ]);
           
            $_SESSION['user'] =$result[0];

            echo "true";
            return;
          }
          
          if($result->getUsuario() == $usuario){
            echo "Usuario ya existe";
          }else{
            echo "Correo ya existe";
          }
          
        }

        function cambiarContraseña($param = null){
          if($param == null)return;
          $usuario =  $param[0];
          $correo =  $param[1];
          $contraseña  =  $param[2];

          $person = $this->model->getExiste($usuario,$correo);
          if(!$person){
            echo "Usuario no registrado";
            return;
          }else if($person->getUsuario() !=  $usuario || $person->getCorreo() !=  $correo){
            echo "Datos incorrectos";
            return;
          }
          
          $this->model->updateCon(['usuario' =>  $usuario, 'contrasenia' => $contraseña ]);
          echo "true";

        }

        function cambiarUsuario($param = null){
          if($param == null)return;
          $correo =  $param[0];
          $contraseña =  $param[1];
          $usuario  =  $param[2];

          $person = $this->model->getExiste("",$correo);
          if(!$person){
            echo "Usuario no registrado";
            return;
          }else if($person->getCorreo() !=  $correo || $person->getContrasenia() !=  $contraseña){
            echo "Datos incorrectos";
            return;
          }
          
          $res =  $this->model->updateUser(['usuario' =>  $usuario, 'correo' => $correo ]);
          if($res==1){
            rename ("fotos/" . $person->getUsuario() ,  "fotos/" . $usuario );
          }
          echo $res;


        }

      }
?>