<?php
    session_start();
    $conexion = mysqli_connect('localhost:3307','root','','cendi');
    $nomN = $_SESSION["nombreF"]; 
    $priAN = $_SESSION['priapellidoF'];
    $segAN = $_SESSION['segapellidoF'];
    $fechaN = $_SESSION['fechaF'];
    $edadN = $_SESSION['edadF'];
    $curpN = $_SESSION['curpF'];
    $consulta = "INSERT INTO datos_ninoss (nombre,papellido,sapellido,fechacac,edad,curp,cita)
     VALUES ('$nomN','$priAN','$segAN','$fechaN','$edadN','$curpN','14/06/2022')";

    mysqli_query($conexion,$consulta);

    $priADH = $_SESSION['priapellidodhF'];
    $segDH  = $_SESSION['segapellidodhF'] ;
    $nomDH  = $_SESSION['nombredhF'] ;
    $calleDH = $_SESSION['calleF'];
    $numExtDH = $_SESSION['numcalleF']; 
    $numIntDH = $_SESSION['numintF'] ;
    $coloniaDH = $_SESSION['coloniaF'] ;
    $estadoDH = $_SESSION['estadoF'];
    $alcaldia = $_SESSION['alcadiaF'] ;
    $codigoPostal = $_SESSION['cpF'];
    $telCelDH = $_SESSION['telefonoCelDHF']; 
    $telFijoDH= $_SESSION['telefonoFijoDHF']; 
    $correoDH = $_SESSION['correoDHF'] ;
    $ocupacionDh    = $_SESSION['ocupacionF'];
    $curpDH = $_SESSION['curpdhF'] ;
    $nombrePlazaDH = $_SESSION['nombreplazaF'];
    $sueldoDH = $_SESSION['SueldoF'] ;
    $nemEmpleadoDH = $_SESSION['NempleadoF'];
    $adscripcionDH = $_SESSION['adscripcionF'];
    $horarioDH  = $_SESSION['horariotraF'];
    $extDH= $_SESSION['extDHF'] ;

    $tieneCon = $_SESSION["tieneCYf"];

    $consulta = "INSERT INTO `datos_dh`(`nombredh`, `papellidodh`, `sapellidosh`, `calle`, `numext`, `numint`, 
    `colonia`, `estado`, `alcaldia`, `cp`, `telc`, `telf`, `correo`, `ocupacion`, `curpdh`, `nplaza`, `sueldo`, 
    `nempleado`, `adcrips`, `horario`, `extension`, `tienecy`, `curp`) 
    VALUES ('$nomDH','$priADH', '$segDH', '$calleDH',$numExtDH,$numIntDH,'$coloniaDH', 
    '$estadoDH', '$alcaldia', $codigoPostal, $telCelDH, $telFijoDH ,'$correoDH', '$ocupacionDh',
    '$curpDH','$nombrePlazaDH','$sueldoDH',$nemEmpleadoDH,'$adscripcionDH','$horarioDH',$extDH,'$tieneCon','$curpN')";
    mysqli_query($conexion,$consulta);

    $cicloEscolar = $_SESSION['cicloEscolarF'];
    $cendis = $_SESSION['cendisf'];
    $fotoN = $_SESSION['fotoNombre'];
    $nboleta = $_SESSION['nboletaF'];
    $grupo = $_SESSION['grupoF'];

    $consulta = "INSERT INTO `ficha`(`ciclo`, `ncendi`, `nboleta`, `grupo`, `curp`, `foto`) 
    VALUES ('$cicloEscolar' , '$cendis', '$nboleta','$grupo','$curpN', '$fotoN' )";
    mysqli_query($conexion,$consulta);

    if($tieneCon == "Si"){
        $priapellidopom = $_SESSION['priapellidopomF'];
        $segapellidopom = $_SESSION['segapellidopomF'];
        $nombrepom = $_SESSION['nombrepomF'];
        $telefonopom = $_SESSION['telefonopomF'];
        $telefonofCY = $_SESSION['telefonofCYF'];
        $Lugardetrabajo = $_SESSION['LugardetrabajoF'];
        $DMT = $_SESSION['DMTF'];
        $telefonotrab = $_SESSION['telefonotrabF'];
        $extensionCo = $_SESSION['extensionCoF'];

        $consulta = "INSERT INTO `datos_conyuge`(`papellidoCY`, `sapellidoCY`, `nombrecy`, `telcy`,
         `telfcy`, `lugart`, `domiciliot`, `telefonot`, `extension`, `curp`) 
         VALUE('$priapellidopom','$segapellidopom','$nombrepom',$telefonotrab,$telefonofCY
         , '$Lugardetrabajo','$DMT',$telefonotrab,$extensionCo,'$curpN')";
         mysqli_query($conexion,$consulta);
    }

    mysqli_close($conexion);

?>