

$(document).ready(function () {
    $("#inicio").hide();
    $("#generarPDF").hide();

    

    $("#generarPDF").click(function(){
        window.open("../formulario/generarPdf/generarPdf.php", "_blank");
        $("#inicio").show("slow");
        $("#generarPDF").hide("slow");

    });

    

});

