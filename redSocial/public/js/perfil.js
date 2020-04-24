const URLD="http://localhost/redSocial/";
var id="";
$(document).ready(function(){      
    $('.alert').hide();

        $("#formulario").submit(function (e) {
            e.preventDefault();
            var foto=$('#foto').val();
            var titulo=$('#titulo').val();
            var texto=$('#texto').val();
            var resp = fileValidation(document.getElementById('foto'));     
            if(resp == false){
                console.log("Por favor seleccione un archivo con extension .jpeg/.jpg/.png/.gif");
                return;
            }
            if(!verificarVacio([foto, titulo, texto])){
                $('.respuesta').text("Por favor llene todos los campos");
                $('.alert').show();
                return;
            }
            url="http://localhost/redSocial/perfilControl/subirFichero";
            var parametros=new FormData($(this)[0])
            $.ajax({
                type: "POST",
                url: url,
                data: parametros,
                contentType: false, 
                processData: false, 
                success: function (data) {
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/redSocial/personafotoControl/guardar",
                        data: {search:data},
                        success: function (data) {
                           console.log(data);
                           window.location.href = URLD + "perfilControl/render/index";
                        },
                        error: function (r) {
                            alert("Error del servidor");
                        }
                    });
                },
                error: function (r) {
                    alert("Error del servidor");
                }
            });
        });   

        $(".verPerson").click(function(e) {
            e.preventDefault();
            var valor="";
            valor=$(this).parents("tr").find("td").eq(2).html();
            $.ajax({
                type: "POST",
                url: "" ,
                data: "",
                success: function (data) {
                   console.log(data);
                   
                },
                error: function (r) {
                    alert("Error del servidor");
                }
            });
            
        });
           
            

});




function tomaPerfil(res){
    
    $.ajax({
        type: "POST",
        url: "http://localhost/redSocial/personafotoControl/seleccionarPerfil",
        data: {search:res},
        success: function (data ,e) {
           console.log(data);
           window.location.href = URLD + "perfilControl/render/index";
         

           
        },
        error: function (r) {
            alert("Error del servidor");
        }
    });
    
}

function verificarVacio(param){
    for (let i = 0; i < param.length; i++) {
        if(param[i]==""){
            return false;
        }
    }
    return true;
}

function fileValidation(param){
    var fileInput = param;
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        document.getElementById('imagePreview').innerHTML = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
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


