<?php 
    $var=$_POST['numero'];
    session_start();
    $_SESSION['oculto'] = "Si";
    echo json_encode($_SESSION);
?>