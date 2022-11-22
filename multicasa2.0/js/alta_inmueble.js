$(document).ready(function(){    
    $('#estado').on('change', function(){
        var nomEstado = $(this).val();
        if(nomEstado){
        	var datos = {nomEstado};
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data: datos,
                success:function(html){
                    $('#ciudad').html(html);
                }
            }); 
        }else{
            $('#ciudad').html('<option value="">Seleccione antes un Estado</option>'); 
        }
    });
});

//validar datos de alta_inmueble
function valida_inmueble(){
    var js_enca = document.getElementById("encabezado").value.trim();
    var js_desc = document.getElementById("descripcion").value.trim();
    var js_dir = document.getElementById("direccion").value.trim();
    var js_codp = document.getElementById("codigoPostal").value.trim();
    var js_estado = document.getElementById("estado").selectedIndex;
    var js_ciu = document.getElementById("ciudad").selectedIndex;
    var js_recamaras = document.getElementById("recamaras").value.trim();;
    var js_baños = document.getElementById("baños").value.trim();;
    var js_est = document.getElementById("estacionamientos").value.trim();;
    var js_area = document.getElementById("area").value.trim();
    var js_email = document.getElementById("email").value.trim();
    var js_latitud = document.getElementById("latitud").value.trim();
    var js_longitud = document.getElementById("longitud").value.trim();


    //var auth = grecaptcha.getResponse();
    
    if (js_enca.length == 0){
        alert("Error: Campo 'ENCABEZADO' no debe estar vacio");
        return false;
    }

    else if (js_desc.length == 0){
        alert("Error: Campo 'DESCRIPCION' no debe estar vacio");
        return false;
    }

    else if (js_dir.length == 0){
        alert("Error: Campo 'DIRECCION' no debe estar vacio");
        return false;
    }

    else if (js_codp.length == 0){
        alert("Error: Campo 'CODIGO POSTAL' no debe estar vacio");
        return false;
    }

    else if (js_estado == null || js_estado == 0){
        alert("Error: Campo 'ESTADO' no debe estar vacio");
        return false;
    }

    else if (js_ciu == null || js_ciu == 0){
        alert("Error: Campo 'CIUDAD' no debe estar vacio");
        return false;
    }
        
    else if (js_recamaras.length == 0){
        alert("Error: Campo 'RECAMARAS' no debe estar vacio");
        return false;
    }
    
    else if (js_baños.length == 0){
        alert("Error: Campo 'BAÑOS' no debe estar vacio");
        return false;
    }
    else if (js_est.length == 0){
        alert("Error: Campo 'ESTACIONAMIENTOS' no debe estar vacio");
        return false;
    }

    else if (js_area.length == 0){
        alert("Error: Campo 'AREA' no debe estar vacio");
        return false;
    }

    else if (js_latitud.length == 0){
        alert("Error: Campo 'LATITUD' no debe estar vacio");
        return false;
    }

    else if (js_longitud.length == 0){
        alert("Error: Campo 'LONGITUD' no debe estar vacio");
        return false;
    }


    return true;
}

function validar_cp(evt){
    var ch = String.fromCharCode(evt.which);

    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }

}