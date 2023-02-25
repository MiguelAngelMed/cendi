$(document).ready(function(){
    var seleccionConyuge = $('input[name="tieneConyuge"]:checked').val();;

    $('input[name="tieneConyuge"]').on("click", function(){
        seleccionConyuge = $('input[name="tieneConyuge"]:checked').val();
        //$("#prueba").html(seleccionConyuge);
        if(seleccionConyuge == "Si"){
            document.querySelector("#flexRadioNo").checked =  false;
            document.querySelector("#flexRadioSi").checked = true;
            $("#formConyuge").show("slow");
        }
        else if(seleccionConyuge == "No"){
            document.querySelector("#flexRadioNo").checked =  true;
            document.querySelector("#flexRadioSi").checked = false;
            $("#formConyuge").hide("slow");
        }
    });
    
    
    
    
});