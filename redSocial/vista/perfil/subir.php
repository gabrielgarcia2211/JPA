<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
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
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
</head>

<body>
    <div id="hola">
        <nav class="navbar navbar-light">
            <div>
                <a class="navbar-brand" href="#">
                    <img src="https://img.icons8.com/color/45/000000/fenix.png" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div>
                <p style="color: #FFFFFF;"> Mi red social</p>
            </div>
            <div>
                <a href="#">
                    <img src="icon/log-out.svg" alt="">
                </a>
            </div>
        </nav>
        <div class="container py-5" style="font-family: 'Acme', sans-serif;">
            <form class="form-horizontal" id="formulario" action="" method="" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Subir Imagen</legend>
                    <br>
                    <!-- File Button -->
                    <div class="form-group">
                        <label for="foto">Selecciona tu foto</label>
                        <br>
                        <br>
                        <div>
                            <input id="foto" name="foto" class="input-file" type="file" onchange="fileValidation(foto)">
                        </div>
                    </div>
                    <br>
					<!-- Image preview aca se carga la imagen que se va a subir  -->
					<div style="color:red" id="imagePreview"></div>
                    <!-- Text input-->
                    <div class="form-group py-3">
                        <label  for="titulo">Titulo</label>
                        <div>
                            <input id="titulo" name="titulo" type="text" placeholder=""
                                class="form-control input-md">

                        </div>
                    </div>
                    <br>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label  for="texto">Descripcion</label>
                        <div>
                            <textarea class="form-control"  name="texto"  id="texto" ></textarea>
                        </div>
                    </div>
                    <br>
					<div class="alert alert-danger" role="alert">
                        <p class="respuesta" >aaaaa</p>
                    </div>
					<br>
                    <!-- Button -->
                    <div class="form-group">
                        <label  for="singlebutton"></label>
                        <div>
                            <button type="submit" d="singlebutton" name="singlebutton" class="btn btn-primary">Subir</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <div class="card-footer text-muted" style="padding-top: 25px;">
	<footer>
		<p style="color:white" class="copyright">Galeria <?php echo strtoupper($_SESSION['user']); ?></p>
	</footer>
    </div>
    </div>
</body>
<script src="<?php echo constant('URL')?>public/js/perfil.js"></script>
</html>