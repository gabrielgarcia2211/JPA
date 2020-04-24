
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <link rel="shortcut icon" href="https://img.icons8.com/color/48/000000/fenix.png" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilos.css">
    <link href="<?php echo constant('URL')?>public/font/css/all.min.css" rel="stylesheet">

</head>


<body>
<body>
    <?php $i=0?>
    
    <nav class="navbar navbar-light">
        <div>
            <a class="navbar-brand" href="principal.html">
                <img src="https://img.icons8.com/color/45/000000/fenix.png" class="d-inline-block align-top" alt="">
                <p style="display:inline-block; color:white"><?php echo $_SESSION['user'] ?></p>
            </a>
        </div>
        <div>
            <p style="color: #FFFFFF;"> Mi red social</p>
        </div>
        <div>
            <a href="<?php echo constant('URL')?>perfilControl/cerrarSesion">
                <img src="<?php echo constant('URL')?>public/icon/log-out.svg" alt="">
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="container col-lg-6 col-sm-12 padding-info" style="align-items: center;">
                <div style="padding-left: 35%;">
                <?php if(isset($this->perfil['userPersona'])):?>
                    <img id="mi_imagen" class="image-perfil"
                    src="<?php echo constant('URL'). "fotos/" . $this->perfil['userPersona'] . "/" . $this->perfil['url']   ?>"
                    alt="">
                <?php endif?>

                <?php if(!isset($this->perfil['userPersona'])):?>
                    <img id="mi_imagen" class="image-perfil"
                    src="<?php echo constant('URL'). "fotos/user.png"?>"
                    alt="">
                <?php endif?>
                        
                </div>
                <div style="display: flex;">

                    <h6>
                       Seguidores:
                    </h6>
                    <h6 id="followers">
                        
                    </h6>
                    <a style="margin-left:5px; position:relative; top:-5px;" href="<?php echo constant('URL')?>perfilControl/render/seguidores"> <img src="<?php echo constant('URL')?>public/icon/info.svg" alt=""></a>

                </div>
                <div style="display: flex;">

                    <h6>
                        Siguiendo:
                    </h6>
                    <h6 id="following">
                        1523
                    </h6>

                   <a href="#"> <img src="<?php echo constant('URL')?>public/icon/info.svg" alt=""></a>

                </div>
            </div>
            <div class="padding-info container col-lg-6 col-sm-12">

                <h6><?php echo $this->datos['nombre']?></h6> 
                <h6>CUCUTA - COLOMBIA</h6> 

            </div>
    <div class="card-footer text-muted">
        <p style="color: #FFFFFF;"> Mi red social - Todos los derechos reservados® 2020</p>
    </div>
</body>
<script src="<?php echo constant('URL')?>public/js/perfil.js"></script>
</html>
