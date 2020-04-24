<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politicas</title>
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
        <div class="col-xs-12 col-sm-6" style="text-align: center;" id="imagen">
            <h3 style="margin-top: 120px; color: #F39C12;">MI RED SOCIAL</h3>
            <img id="img" src="https://img.icons8.com/color/400/000000/fenix.png">
        </div>
        <div class="col-xs-12 col-sm-6" class="container">
            <div class="container" id="formulario">
                <br>
                <br>
                <div>
                    <h4>POLITICAS</h4>
                </div>
                <br>
                <div style="text-align: right;" id="politicas">
                    <label for="">Ya Tienes Cuenta <a href="<?php echo constant('URL')?>personaControl" style="color: black;">ACCEDE</a></label>
                </div>
                <textarea readonly name="" id="" cols="30" rows="10" style="width: 100%; height: 500px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nostrum minima sunt itaque quaerat consequuntur nemo ex perspiciatis repudiandae voluptates magni velit, accusamus quo illo laborum quia debitis iure doloribus?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque qui voluptatem modi, minima cum rem ab non beatae atque quod unde est quo eligendi nesciunt aliquam ex corrupti. Consectetur, ducimus?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur velit iusto aliquid dolorem, veniam a labore possimus aspernatur ad ratione magnam dicta? Facilis adipisci error voluptas dolores harum quasi assumenda.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet velit, qui nisi iure necessitatibus quisquam itaque repudiandae quam obcaecati rem ipsa sint vero non magni illo nesciunt veniam similique ducimus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, velit. Aspernatur, consequatur numquam dignissimos corporis beatae sit! Odio quibusdam sed aliquam vitae veritatis eligendi, quae maxime asperiores libero consequatur adipisci?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quos obcaecati voluptates accusantium architecto fugiat ad, quaerat ipsam labore rerum suscipit voluptate optio quo dolor cupiditate non nulla hic itaque.
                </textarea>
                <br>
                <div style="text-align: right;">
                   <a type="button" class="regresarT btn btn-dark"  href="<?php echo constant('URL')?>personaControl/render/nuevo" >Regresar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>