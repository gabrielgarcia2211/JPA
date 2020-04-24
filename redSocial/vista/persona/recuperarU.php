<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
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
</head>

<body>
    <div id="formato" class="row" style="height: 740px;">
        <div class="col-xs-6 col-sm-6" style="text-align: center;" id="imagen">
            <div>
                <h3 style="margin-top: 120px; color: #F39C12;">MI RED SOCIAL</h3>
                <img id="img" src="https://img.icons8.com/color/400/000000/fenix.png">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6" class="container">
            <div class="container" id="formulario">
                <br>
                <br>
                <br>
                <div style="text-align: center; margin-top: 30px;">
                    <h4>INGRESE LOS DATOS</h4>
                </div>
                <br>
                <div style="text-align: right;">
                    <label for="">Ya Tienes Cuenta <a href="<?php echo constant('URL')?>personaControl" style="color: black;">ACCEDE</a></label>
                </div>
                <form class="contact_form" action="#" id="contact_form" runat="server">
                    <label for="receEmail">Email</label>
                    <input id="receEmail" type="email" class="form-control" required>
                    <br>
                    <label for="receContraseña">Contraseña</label>
                    <input id="receContraseña" type="password" class="form-control" required>
                    <br>
                    <label for="receUsuario">Nuevo Usuario</label>
                    <input id="receUsuario" type="text" class="form-control" required>
                    <div class="alert alert-danger" role="alert">
                        <p class="respuesta" >aaaaa</p>
                        </div>
                    <br>
                    <div style="text-align: right;">
                        <button type="submit" id="actualizarRu" class=" actualizarRu btn btn-dark">Actualizar</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
<script src="<?php echo constant('URL')?>public/js/main.js"></script>
</html>