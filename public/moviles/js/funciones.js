$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function (){
        $(".error").remove();
        if( $("#nombre").val() == "" ){
            $("#nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $("#apellido").val() == "" ){
            $("#apellido").focus().after("<span class='error'>Ingrese su apellido</span>");
            return false;
        }else if( $("#seudonimo").val() == "" ){
            $("#seudonimo").focus().after("<span class='error'>Ingrese su seudonimo</span>");
            return false;
        }else if( $("#cantidad").val() == "" ){
            $("#cantidad").focus().after("<span class='error'>Ingrese la cantidad</span>");
            return false;
        }else if( $("#nomart").val() == "" ){
            $("#nomart").focus().after("<span class='error'>Ingrese el Nombre el Articulo</span>");
            return false;
        }else if( $("#tipopago").val() == "" ){
            $("#tipopago").focus().after("<span class='error'>Ingrese el Tipo de Pago</span>");
            return false;
        }else if( $("#fname").val() == "" ){
            $("#fname").focus().after("<span class='error'>Ingrese el Nombre del Banco</span>");
            return false;
        }else if( $("#numero").val() == "" ){
            $("#numero").focus().after("<span class='error'>Ingrese el Numero del Deposito/Transferencia</span>");
            return false;
        }else if( $("#fecha").val() == "" ){
            $("#fecha").focus().after("<span class='error'>Ingrese la Fecha</span>");
            return false;
        }else if( $("#monto").val() == "" ){
            $("#monto").focus().after("<span class='error'>Ingrese el Monto</span>");
            return false;
        }else if( $("#enombre").val() == "" ){
            $("#enombre").focus().after("<span class='error'>Ingrese el Nombre</span>");
            return false;
        }else if( $("#cedula").val() == "" ){
            $("#cedula").focus().after("<span class='error'>Ingrese la Cedula</span>");
            return false;
        }else if( $("#telmov").val() == "" ){
            $("#telmov").focus().after("<span class='error'>Ingrese el Telefono</span>");
            return false;
        }else if( $("#direccion").val() == "" ){
            $("#direccion").focus().after("<span class='error'>Ingrese la Direccion del Envio</span>");
            return false;
        }else if( $("#estado").val() == "" ){
            $("#estado").focus().after("<span class='error'>Ingrese el Estado</span>");
            return false;
        }else if( $("#ciudad").val() == "" ){
            $("#ciudad").focus().after("<span class='error'>Ingrese la Ciudad</span>");
            return false;
        }else if( ($("#registrar").val() == "Si" ) && ($("#emailBox").val() == "")){
            $("#emailBox").focus().after("<span class='error'>Ingrese el Correo Electronico</span>");
            return false;
        }else if(!emailreg.test($("#emailBox").val()) ){
            $("#emailBox").focus().after("<span class='error'>Ingrese un Correo Electronico correcto</span>");
            return false;
        }
    });


    $("#nombre, #apellido, #seudonimo, #cantidad, #cedula").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    $("#emailBox").keyup(function(){
        if( $(this).val() != "" && emailreg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });

});