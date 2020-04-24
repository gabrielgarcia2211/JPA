<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguidores</title>

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
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilosvista.css">


</head>

<body>


    <nav class="navbar navbar-light">
        <div>
            <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/color/45/000000/fenix.png" class="d-inline-block align-top" alt="">
                <p style="display:inline-block; color:white"><?php echo $_SESSION['user'] ?></p>
            </a>
        </div>
        <div>
            <p style="color: #FFFFFF;"> Mi red social</p>
        </div>
        <div>
            <a href="<?php echo constant('URL')?>perfilControl/render/index">

                <img class="image-perfil-nav"
                    src=""
                    alt="">
            </a>
        </div>
    </nav>

    <div class="container" >
        <div style="display: flex;">
            <div style="margin-top:20px">
                
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
        </div>
        <div>
            <h3>Seguidores</h3>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search..">
      <hr>

                <table class="table table-bordered order-table ">
                    <thead>
                      <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Perfil</th>
                        <th>WI</th>
                    </tr>
                    </thead>
    <?php for ($j=0; $j < count($this->persona); $j++):?>
                    <tr id="tab">
                      <td>
                        <a href="#">
                        <?php if($this->persona[$j]['perfil']==1):?>
                            <img class="image-perfil-nav"
                            src="<?php echo constant('URL'). "fotos/" . $this->persona[$j]['usuario'] . "/" . $this->persona[$j]['url']   ?>"
                            
                            alt="">
                        <?php endif?>
                        <?php if(!isset($this->persona[$j]['perfil'])):?>
                            <img class="image-perfil-nav"
                            src="<?php echo constant('URL'). "fotos/user.png"?>"
                            alt="">
                        <?php endif?>
                        </a>
                      </td>
                      <td><?php echo $this->persona[$j]['nombre']?></td>
                      <td><?php echo $this->persona[$j]['correo']?></td>
                      <td>
                          <button type="submit" class="verPerson btn btn-success"> <a style="text-decoration:none; color:white;"href=""> Ver</a>
                          </button>
                      </td>
                    </tr>
    <?php endfor; ?>    
                  </table>

            </div> 
        </div>  
    </div>
                          <br>


<script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script>
 




    <br>
    <div class="card-footer text-muted">
        <p style="color: #FFFFFF;"> Mi red social - Todos los derechos reservados® 2020</p>
    </div>
</body>
<script src="<?php echo constant('URL')?>public/js/perfil.js"></script>
</html>