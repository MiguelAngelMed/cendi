
<?php
    ob_start();
    $url = "./inscribir.html";
    $cicloEscolar =$_POST['ciclo'];
    $cendis =$_POST['cendis'];
   // $fotoN =$_POST['foto'];
    $nboleta =$_POST['noDeBoleta'];
    $grupo =$_POST['grupo'];

    $nombre =$_POST['nombre'];
    $priapellido =$_POST['priapellido'];
    $segapellido =$_POST['segapellido'];
    $fecha =$_POST['fecha'];
    $edad =$_POST['edad'];
    $curp=$_POST['curp'];

    $priapellidodh=$_POST['priapellidodh'];
    $segapellidodh=$_POST['segapellidodh'];
    $nombredh=$_POST['nombredh'];
    $calle=$_POST['calle'];
    $numcalle=$_POST['numcalle'];
    $numint=$_POST['numint'];
    $colonia=$_POST['colonia'];
    $estado=$_POST['estado'];
    $alcadia=$_POST['alcadia'];
    $cp=$_POST['cp'];
    $telefonoCelDH=$_POST['telefono'];
    $telefonoFijoDH=$_POST['telefonof'];
    $correoDH=$_POST['correoDH'];
    $ocupacion=$_POST['ocupacion'];
    $curpdh=$_POST['curpdh'];
    $nombreplaza=$_POST['nombreplaza'];
    $Sueldo=$_POST['Sueldo'];
    $Nempleado=$_POST['Nempleado'];
    $adscripcion=$_POST['adscripcion'];
    $horariotra=$_POST['horariotra'];
    $extDH=$_POST['extDH'];
    

    $tieneCon =$_POST['tieneConyuge'];

    $priapellidopom=$_POST['priapellidopom'];
    $segapellidopom=$_POST['segapellidopom'];
    $nombrepom=$_POST['nombrepom'];
    $telefonopom=$_POST['telefonopom'];
    $telefonofCY=$_POST['telefonofCY'];
    $Lugardetrabajo=$_POST['Lugardetrabajo'];
    $DMT=$_POST['DMT'];
    $telefonotrab=$_POST['telefonotrab'];
    $extensionCo=$_POST['extensionCo'];
    
   
    session_start();
    $_SESSION['validacion'] = $_POST["oculto"];

    $_SESSION["nombreF"]=$nombre;
    $_SESSION["tieneCYf"]=$tieneCon;

    $_SESSION['cicloEscolarF']= $cicloEscolar;
    $_SESSION['cendisf']= $cendis;
    //$_SESSION['fotoF']= $fotoN;
    $_SESSION['nboletaF']= $nboleta;
    $_SESSION['grupoF']= $grupo;

    $_SESSION['priapellidoF'] = $priapellido;
    $_SESSION['segapellidoF'] = $segapellido;
    $_SESSION['fechaF'] = $fecha;
    $_SESSION['edadF'] = $edad;
    $_SESSION['curpF'] = $curp;

    $_SESSION['priapellidodhF'] = $priapellidodh;
    $_SESSION['segapellidodhF'] = $segapellidodh;
    $_SESSION['nombredhF'] = $nombredh;
    $_SESSION['calleF'] = $calle;
    $_SESSION['numcalleF'] = $numcalle;
    $_SESSION['numintF'] = $numint;
    $_SESSION['coloniaF'] = $colonia;
    $_SESSION['estadoF'] = $estado;
    $_SESSION['alcadiaF'] = $alcadia;
    $_SESSION['cpF'] = $cp;
    $_SESSION['telefonoCelDHF'] = $telefonoCelDH;
    $_SESSION['telefonoFijoDHF'] = $telefonoFijoDH;
    $_SESSION['correoDHF'] = $correoDH;
    $_SESSION['ocupacionF'] = $ocupacion;
    $_SESSION['curpdhF'] = $curpdh;
    $_SESSION['nombreplazaF'] = $nombreplaza;
    $_SESSION['SueldoF'] = $Sueldo;
    $_SESSION['NempleadoF'] = $Nempleado;
    $_SESSION['adscripcionF'] = $adscripcion;
    $_SESSION['horariotraF'] = $horariotra;
    $_SESSION['extDHF'] = $extDH;

    if( strcmp($tieneCon, "Si") === 0){
        $_SESSION['priapellidopomF']= $priapellidopom;
        $_SESSION['segapellidopomF']= $segapellidopom;
        $_SESSION['nombrepomF']= $nombrepom;
        $_SESSION['telefonopomF']= $telefonopom;
        $_SESSION['telefonofCYF']= $telefonofCY;
        $_SESSION['LugardetrabajoF']= $Lugardetrabajo;
        $_SESSION['DMTF']= $DMT;
        $_SESSION['telefonotrabF']= $telefonotrab;
        $_SESSION['extensionCoF']= $extensionCo;
    }
    
    if (isset($_POST['tieneConyuge'])){
        $prueba=$_POST['tieneConyuge'];

    }
    else{
        $prueba=NULL;

    }

    if($_FILES["foto"]){
      $ruta = "generarPdf/img/auxiliar.png";
      $ruta2 = "fotosNinos/".$curp.".png";
      $subirArchivo = move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta); 
      $archivoBase =  copy($ruta, $ruta2);
      $_SESSION['fotoNombre'] = $curp.".png";
    }

    //Verifica que exista un correo y un curp para poder permitir la entrada a esta pagina
    if(!isset($_SESSION['correoDHF']) && !isset($_SESSION['curpF'])){
      header("Location:$url");
    }

    ob_end_flush();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/mostrarDatos.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="eventoDestruir.js"></script>
    <script src="eventoBase.js"></script>
    <script src="../js/botonesDatos.js"></script>
    
    <title>Document</title>
    

</head>

<body>
<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-light  mb-4">
	<div class="container-fluid">
		<a class="navbar-brand" href="../index.html">
			<img src="../img/w.png" width="200" height="100"> 
		</a>
		
    <h1 class="navbar-nav ms-auto mb-2 mb-lg-0" style="color:white !important;">Verificación de datos</h1>
	</div>
</nav>




  <div class="container-lg" >
    <h4>Hola  <?php echo $nombredh; ?></b>, verifica que los datos que ingresaste sean correctos </h4>
    <br>
    <div class="card mb-3">
      <div class="card-header fw-bold">Ficha de inscripción</div>
      <div class="card-body">
        <p class="card-text">
          Ciclo escolar:  <?php echo $cicloEscolar;?> <br>
          CENDI:  <?php echo $cendis;?>  <br>
          Número de boleta:  <?php echo $nboleta;?>   <br>
          Grupo:  <?php echo $grupo;?>  <br>
        </p>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header fw-bold">Datos del niño o de la niña</div>
      <div class="card-body">
        <p class="card-text">
          Nombre completo: <?php echo "$priapellido  $segapellido $nombre"  ;?> <br>
          Fecha de nacimiento:   <?php echo $fecha;?>   <br>
          Edad:  <?php echo $edad;?>  <br>
          CURP:  <?php echo $curp;?>  <br>
        </p>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header fw-bold">Datos del derechohabiente</div>
      <div class="card-body">
        <p class="card-text">
          Nombre completo: <?php echo "$priapellidodh  $segapellidodh $nombredh"  ;?> <br>
          Calle: <?php echo $calle; ?> <br>
          Número exterior: <?php echo $numcalle; ?> <br>
          Número interior: <?php echo $numint; ?><br>
          Colonia: <?php echo $colonia; ?><br>
          Alcaldia: <?php echo $alcadia; ?><br>
          Código postal: <?php echo $cp; ?><br>
          Estado: <?php echo $estado;  ?> <br>
          Correo:  <?php echo $correoDH;  ?>  <br>
          Teléfono celular:  <?php echo $telefonoCelDH;  ?>  <br>
          Teléfono fijo:   <?php echo $telefonoFijoDH; ?>  <br>
          Correo:  <?php  echo $correoDH;  ?>  <br>
          Ocupación: <?php  echo $ocupacion; ?>  <br>
          CURP:   <?php echo $curpdh;  ?>  <br>
          Nombre de la plaza:  <?php echo $nombreplaza;  ?>  <br>
          Sueldo:  <?php  echo $Sueldo; ?>  <br>
          Número de empleado: <?php echo $Nempleado;  ?> <br>
          Adscripción: <?php echo $adscripcion;  ?> <br>
          Horario: <?php  echo $horariotra; ?><br>
          Extensión: <?php echo $extDH;  ?><br>
        </p>
      </div>
    </div>
    <?php
      if ($prueba=="Si"){
        echo '<div class="card mb-3">
          <div class="card-header fw-bold">Datos del cónyuge</div>
          <div class="card-body">
            <p class="card-text">
              Nombre completo: '.$priapellidopom." ".$segapellidopom." ".$nombrepom." <br>
              Teléfono celular: ".$telefonopom." <br>
              Telefono fijo:  ".$telefonofCY."  <br>
              Lugar de trabajo:". $Lugardetrabajo." <br>
              Domicilio de trabajo ".$DMT."<br>
              Teléfono de trabajo:" .$telefonotrab."<br>
              Extensión: ".$extensionCo.'<br>
        
            </p>
          </div>
        </div>';
      }
    ?>        
      
  
    <div class="row mt-3 mb-3">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btnForm btn-lg  btn-primary me-md-2 fw-bold mb-2" onclick="location.href='inscribir.html'" id="modificarDatos">Modificar datos</button>
            <button class="btn btnForm btn-lg btn-primary me-md-2 fw-bold mb-2" id="enviarDatos" name="enviarDatos" >Enviar datos</button>
            <button class="btn btnForm btn-lg btn-primary me-md-2 fw-bold mb-2" id="generarPDF"> Generar PDF </button>
            <button class="btn btnForm btn-lg btn-primary fw-bold mb-2" onclick="location.href='../index.html'" id="inicio">Regresar al inicio</button>
            
            
        </div>
    </div>
  </div>
    
    
  <footer id="contact">
	  <div class="container-fluid padding">
	  	<div class="row text-center">
	  		<div class="col-md-4 col-sm-12">
	  			<img src="../img/LOGO-POLI-Blanco.png" width="50" height="70">
	  			<hr class="light">
	  			<P>Teléfono de contacto: 55-55-55-55-55</P>
	  			<p>Correo: 4cm5cendi@gmail.com</p>
      
      
	  		</div>
	  		<div class="col-md-4 col-sm-12">
	  			<hr class="light" >
	  			<h5>Horarios</h5>
	  			<hr class="light">
	  			<p>Lunes-Viernes: 7AM - 6PM</p>
	  			<p>Sabado: 9AM - 4PM</p>
	  			<P>Domingo: Cerrado</P>
	  		</div>
	  		<div class="col-md-4 col-sm-12">
	  			<hr class="light">
	  			<h5>Dirección</h5>
	  			<hr class="light">
	  			<p>ESCOM IPN, Unidad Profesional Adolfo López Mateos, 07320 Ciudad de México, CDMX</p>
	  		</div>
	  		<div class="col-12">
	  			<hr class="light">
	  			<h5>&copy; Equipo7 4CM3</h5>
	  		</div>
	  	</div>
	  </div>
  </footer>
   
</body>
</html>