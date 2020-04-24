<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Mi Red Social</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet"> 
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
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilos.css">
    <link href="<?php echo constant('URL')?>public/font/css/all.min.css" rel="stylesheet">

</head>

<body>
    <div id="formato" class="row">
        <div class="col-xs-6 col-sm-6" style="text-align: center;" id="imagen">
            <div class="logo">
                <h3 style="margin-top: 120px; color: #F39C12;">MI RED SOCIAL</h3>
                <img id="img" src="https://img.icons8.com/color/400/000000/fenix.png">
            </div>
        </div>
        <div class=" ayuda col-xs-6 col-sm-6" class="container">
            <br>
            <br>
            <div class="container" id="formulario">
                <form class="contact_form" action="" method="" id="contact_form" runat="server">
                    <div class="row">
                        <div style="margin: auto;">
                            <label>¿No Tienes Cuenta?</label>
                            <br>
                            <a href="<?php echo constant('URL')?>personaControl/render/nuevo" style="color: black;">REGISTRATE</a>
                        </div>
                        <div style="margin: auto;">
                            <label>Ya Tienes Cuenta</label>
                            <br>
                            <a href="#" style="color: black;">ACCEDE</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="input-group-prepend">
                    <label for="textUsuario">Usuario o Correo Electronico</label>
                    </div>
                    <input id="textUsuario" name="usuario" type="text" class="form-control">
                    <br>
                    <br>
                    <div class="input-group-prepend">
                    <label for="textContrasenia">Contraseña</label>
                    </div>
                    <input id="textContrasenia" name="contrasenia" type="password" class="form-control">
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <a href="<?php echo constant('URL')?>personaControl/render/recuperarC" style="color: black;">Olvido su contraseña?</a>
                        <a href="<?php echo constant('URL')?>personaControl/render/recuperarU" style="color: black;">Olvido su nombre de usuario?</a>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <input id="verificarDatos" type="submit" class="btn btn-dark" value="Entrar">
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <p class="respuesta" >aaaaa</p>
                    </div>
                
                </form>
                    <div class="abajo" style="text-align: center; width: 100%;">
                        <button type="button" class="btn btn-primary" style="width: 100%;">CONECTAR CON FACEBOOK <i class="fab fa-facebook"></i></button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-danger" style="width: 100%;">CONECTAR CON GOOGLE <i class="fab fa-google"></i></button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" style="width: 100%;">CONECTAR CON TWITTER <i class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="<?php echo constant('URL')?>public/js/main.js"></script>
</body>

</html>