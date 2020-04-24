<?php
   

   class personafotoControl extends Controller{
        
        

        function __construct(){
          parent::__construct();
         
        }
                    
        function guardar($param = null){
         
          $idFoto = $_POST["search"];
          //$res = $this->model->getUser(['usuario' =>  $_SESSION['user']]);
          echo $this->model->insertP(['userPersona' =>  $_SESSION['user'], 'foto' => $idFoto , 'perfil' => 0]);
          

        }


        function seleccionarPerfil($param = null){
          $idFoto = $_POST["search"];
          echo $this->model->insertPerfil($_SESSION['user'], $idFoto);
         
        }

        

   }
?>