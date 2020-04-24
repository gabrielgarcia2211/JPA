<?php
   

   class perfilControl extends Controller{
         
        private $contador;

        function __construct(){
          parent::__construct();
          $this->view->fotos = [];
          $this->view->datos = [];
          $this->view->persona = [];
          $this->view->perfil = "";
          $this->view->totalpost ="";
          $this->view->totalpaginas="";
          
          
          
        }
        
                    
        function render($ubicacion = null){
          $constr = "perfil";
          $this->traerUser();
          $this->getFotoperfil();
          $this->traerUsuarios();
          $valor = (isset($ubicacion[1])) ? $ubicacion[1] : 1;
          $this->llamadaImagenes($valor);
          $this->view->render($constr, $ubicacion[0]);
          
        }
        
        function cerrarSesion(){
            unset($_SESSION['user']);
            session_destroy();
            header('Location: http://localhost/redSocial/personaControl');
        }
              
      function subirFichero($param = null){
        
         $nombre = $_POST["titulo"];
         $descrip = $_POST["texto"];

         //$res = $this->model->getUser(['usuario' =>  $_SESSION['user']]);
         $carpeta = $_SESSION['user'];
         $carpeta = "fotos/".$carpeta;

          
        if($this->model->insert(['nombre' =>   $nombre, 'descripcion' => $descrip, 'url' =>  $_FILES['foto']['name']])){
          
          
          if(!file_exists($carpeta)){

            mkdir($carpeta,0777);
          }
           $carpeta_destino = $carpeta;
           $archivo_subido = $carpeta_destino ."/" .  $_FILES['foto']['name'];
           move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

          }else{
            echo "Se ha producido un error";
          }
      
        

          $var = $this->model->maxId()[0];
          echo $var;

          
         
      }


      function llamadaImagenes($p=null){
        $fotos_por_pagina = 2;

        $this->view->pagina_actual = $p;
      

        $inicio = ($this->view->pagina_actual > 1) ? $this->view->pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;
        $this->view->fotos = $this->model->imagenes($inicio, $fotos_por_pagina,$_SESSION['user']);

        $total_post = $this->model->paginacionLlamada($_SESSION['user']);
        

        if($total_post[0]==0){
          
          return;
        }

        $total_post =$total_post[0];
        $total_paginas = ($total_post / $fotos_por_pagina);
        $total_paginas = ceil($total_paginas);

        $this->view->totalpost= $total_post;
        $this->view->totalpaginas=$total_paginas;
       
        
            
      }      
      
      
      
      function traerUser(){
        //echo $param[0];
        $this->view->datos = $this->model->getUser(['usuario' =>  $_SESSION['user']]);
      
      }



      function getFotoperfil(){

        $this->view->perfil =  $this->model->getPerfil( $_SESSION['user']);
      }


      function traerUsuarios(){
        $this->view->persona = $this->model->getUsuarios( $_SESSION['user']);
      }

      

      function getSeguidor($user){
        $aux = $this->model->obtenerUsuario($user[0]); 
        echo $aux[0]["usuario"];
        $this->view->datos =   $this->model->getUser(['usuario' =>  $aux[0]["usuario"]]);
        //$this->view->render("perfil", "verPersona");
      }

   
 
}

 


?>