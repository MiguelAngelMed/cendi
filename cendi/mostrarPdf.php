<?php
    $nom = $_POST["curpN"];
    $ruta = "formulario/generarPdf/fichasNinos/".$nom.".pdf";

    if (file_exists($ruta)) {
        header("Location: $ruta");
    } else {
        header("Location: recuperar.html");
    }
   

?>