$(document).ready(function () {
    $("#signbutton").click(function () { 
        let pdfN = $("#curpN").val()+".pdf";
        let ruta = "formulario/generarPdf/fichasNinos/"+pdfN;
        $.ajax({
            url:ruta,
            type:'HEAD',
            error: function()
            {
                alert("No te has registrado en el sistema");
            },
            success: function()
            {
                alert("Su ficha de inscripción ha sido recuperada")
                //window.open(ruta, "_blank");
            }
        });
        
        
    });


});