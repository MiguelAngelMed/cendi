function inserta(){
    $.ajax({url:"insertarBase.php", success:function(result){
        console.log("insertado");
        }
    });
}

$(document).ready(function () {
    $("#enviarDatos").click(function () {
        $("#modificarDatos").hide("slow");
        $("#enviarDatos").hide("slow");
        $("#generarPDF").show("slow");
        alert("Tus datos se han guardado correctamente");
        inserta();
    });
});