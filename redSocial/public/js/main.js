const URLD="http://localhost/redSocial/";
$(document).ready(function(){
        //METODO PARA LA VERIFICACION DE DATOS DE PERSONA/INDEX
        $('.alert').hide();
       
        $("#verificarDatos").click(function(e){
            var usuarioIngre=$('#textUsuario').val();
            var contraseniaIngre=$('#textContrasenia').val();
            if(!usuarioIngre || !contraseniaIngre){
               $('.respuesta').text("Por favor llene todos los campos");
               if(!usuarioIngre){
                    $('#textUsuario').css({'border': "2px solid  red"});
               }else{
                    $('#textContrasenia').css({'border': "2px solid  red"});
               }
               $('.alert').show();
            }else{
                $('.alert').hide();
                $('#textUsuario, #textContrasenia').css({'border': "2px solid  rgba(250, 19, 19, 0.671)"});
                httpRequest(URLD + "personaControl/validarUsuario/" + usuarioIngre + "/" + contraseniaIngre, function(){
                    var aux = this.responseText;
                    if(aux == ""){
                        $('.respuesta').text("Datos incorrectos!");
                        $('.alert').show();
                        return;
                    }
                    llamdaEntrada("index");  llamdaEntrada("perfilControl", "index");
            
            });
                
        }
        e.preventDefault();
           
        });
         //METODO PARA LA INGRESAR DE DATOS DE NUEVO/INDEX
        $("#registro").click(function(e){
            var nUsuario=$('#nUsuario').val();
            var nNombre=$('#nNombre').val();
            var nEmail=$('#nEmail').val();
            var nContraseña=$('#nContraseña').val();
            if(!nUsuario || !nNombre || !nEmail || !nContraseña){
                $('.respuesta').text("Por favor llene todos los campos");
                $('.alert').show();
                return;
            }
            $('.alert').hide();
            httpRequest(URLD + "personaControl/guardarUsuario/" + nUsuario + "/" + nNombre + "/" + nEmail + "/" + nContraseña , function(){
             
              var rest = this.responseText;
              if(rest == "true"){
                llamdaEntrada("perfilControl", "index");
              }else{
                $('.respuesta').text(rest);
                $('.alert').show();
              }
     
            });
        e.preventDefault();
           
        });


          //METODO PARA LA ACTUALIZAR CONTRASEÑA RECUPERARC/INDEX
          $("#actualizarRc").click(function(e){
            $('.alert').show();
            var recuUsuario=$('#recuUsuario').val();
            var recuEmail=$('#recuEmail').val();
            var recuNueva=$('#recuNueva').val();
            if(!recuUsuario || !recuEmail || !recuNueva){
                $('.respuesta').text("Por favor llene todos los campos");
                $('.alert').show();
                return;
            }
            $('.alert').hide();
            httpRequest(URLD + "personaControl/cambiarContraseña/" + recuUsuario + "/" + recuEmail + "/" + recuNueva  , function(){
              var rest = this.responseText;
              if(rest == "true"){
                $('.respuesta').text("Contraseña actualizada!");
                $('.alert').show();
                window.location.href = URLD + "personaControl";

              }else{
                $('.respuesta').text(rest);
                $('.alert').show();
              }
            });
        e.preventDefault();
           
        });

        //METODO PARA LA ACTUALIZAR USUARIO RECUPERARC/INDEX
        $("#actualizarRu").click(function(e){
          $('.alert').show();
          var receEmail=$('#receEmail').val();
          var receContraseña=$('#receContraseña').val();
          var receUsuario=$('#receUsuario').val();
          if(!receEmail || !receContraseña || !receUsuario){
              $('.respuesta').text("Por favor llene todos los campos");
              $('.alert').show();
              return;
          }
          $('.alert').hide();
          httpRequest(URLD + "personaControl/cambiarUsuario/" + receEmail + "/" + receContraseña + "/" + receUsuario  , function(){
           rest = this.responseText;
            if(rest == "1"){
             console.log(rest);
             $('.respuesta').text("Usuario actualizado!");
             $('.alert').show();
             llamdaEntrada("personaControl", "index");

            }else{
              console.log(rest);
              $('.respuesta').text("Nombre de usuario ya registrado!");
              $('.alert').show();
            }
            
          });
      e.preventDefault();
         
      });
    
});

function llamdaEntrada(control, guia){
   //console.log(URLD + "personaControl/render/" + guia);
    window.location.href = URLD + control +"/render/" + guia;
}

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}