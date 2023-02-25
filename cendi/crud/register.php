<?php
include("config.php");
include("session.php");

$cicloEscolars =$_POST['ciclo'];
      $cendis = $_POST['cendis'];
      //fotoN =$_POST['foto'];
      $nboleta =$_POST['noDeBoleta'];
      $grupo =$_POST['grupo'];
      //niños
      $nombre =$_POST['nombre'];
      $priapellido =$_POST['priapellido'];
      $segapellido =$_POST['segapellido'];
      $fecha =$_POST['fecha'];
      $edad =$_POST['edad'];
      $curp=$_POST['curp'];
      //dh
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
      $tienecontuge=$_POST['tieneConyuge'];
      //conyuge
	  if (isset($_POST['tieneConyuge'])){
		$prueba=$_POST['tieneConyuge'];
  
		}
	   else{
		$prueba=NULL;
  
	   }
      $priapellidopom=$_POST['priapellidopom'];
      $segapellidopom=$_POST['segapellidopom'];
      $nombrepom=$_POST['nombrepom'];
      $telefonopom=$_POST['telefonopom'];
      $telefonofCY=$_POST['telefonofCY'];
      $Lugardetrabajo=$_POST['Lugardetrabajo'];
      $DMT=$_POST['DMT'];
      $telefonotrab=$_POST['telefonotrab'];
      $extensionCo=$_POST['extensionCo'];
	  if( $grupo =='Lac 1' ||  $grupo =='Lac 2'){
        $hora=9;
        $dia=4;
        $mes=6;
        $contdia=0;
        $cita='';
        if($hora==11){
            $hora=$hora+1;
        }
        else{  
             $cita = "$dia/0$mes/2022 $hora:00"; 
            $hora=$hora+2;
               
        }
        if($hora==14){
            $contdia=$contdia+1;
            $cont= $cont+1;
            $dia= $dia+1;
            $hora=9;
        }
        if ($contdia==5){
            $dia= $dia+2;
            $contdia=0;
           
        }
    }
    else{
    
        $hora2=9;
        $minutos2=0;
        $dia2=4;
        $mes2=6;
        $contdia2=0;
        $cita2='';
        $cont2=0;
       
            if($minutos2==60){
                $hora2=$hora2+1;
                $minutos2=0;
                
            }
            else{
                $cita = "$dia2/0$mes2/2022 $hora2:$minutos2"; 
                $minutos2=$minutos2+15;
                
            }
           
               
        
            if($hora2==13){
                $contdia2=$contdia2+1;
                $cont2= $cont2+1;
                $dia2= $dia2+1;
                $hora2=9;
                $minutos2=0;
            }
        
            if ($contdia2==5){
                $dia2= $dia2+2;
                $contdia2=0;
            }
            
        
    }
	  $insertarficha= "INSERT INTO ficha(nboleta,ciclo,ncendi,grupo,curp)
	  VALUES('$nboleta','$cicloEscolars','$cendis','$grupo','$curp')";
	  $sql= "INSERT INTO datos_ninoss(papellido,nombre,sapellido,edad,curp,fechacac,cita)
      VALUES('$priapellido','$nombre','$segapellido','$edad','$curp','$fecha','$cita')";
	  $insertardh="INSERT INTO datos_dh(nombredh,papellidodh,sapellidosh,calle,numext,numint,colonia,estado,curpdh,cp,telc,telf,correo,ocupacion,nplaza,sueldo,nempleado,adcrips,horario,extension,tienecy,alcaldia,curp)
      VALUES('$nombredh','$priapellidodh','$segapellidodh',' $calle','$numcalle',' $numint',' $colonia','$estado','$curpdh',
      '$cp','$telefonoCelDH','$telefonoFijoDH','$correoDH','$ocupacion','$nombreplaza','$Sueldo','$Nempleado','$adscripcion','$horariotra',' $extDH','$tienecontuge','$alcadia','$curp')";
	 if ($prueba=="Si")
     
      
	 { 
	   $insertarcy="INSERT INTO datos_conyuge(nombrecy,papellidocy,sapellidocy,telcy,telfcy,lugart,domiciliot,telefonot,extension,curp)
	   VALUES ('$priapellidopom','$segapellidopom',' $nombrepom',' $telefonopom','$telefonofCY',' $Lugardetrabajo',' $DMT',' $telefonotrab',' $extensionCo','$curp') ";
	  if(mysqli_query($mysqli, $insertarcy)){
		echo '<script language="javascript">';
		echo 'alert("Conyuge agregado");';
		echo '</script>';
		
		} else {
		echo '<script language="javascript">';
		echo 'alert("Usuario duplicado!");';
		echo 'window.location="registration.php";';
		echo '</script>';
		}
	 }
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Niño agregado");';
	echo '</script>';
	if(mysqli_query($mysqli, $insertarficha)){
		echo '<script language="javascript">';
		echo 'alert("Ficha aegregada");';
		echo '</script>';
		if(mysqli_query($mysqli,$insertardh)){
			echo '<script language="javascript">';
			echo 'alert("Derecho habiente agregado");';
			echo 'window.location="index.php";';
			echo '</script>';
			
			} else {
			echo '<script language="javascript">';
			echo 'alert("Usuario duplicado!");';
			echo 'window.location="registration.php";';
			echo '</script>';
			}
	} else {
		echo '<script language="javascript">';
		echo 'alert("Usuario duplicado!");';
		echo 'window.location="registration.php";';
		echo '</script>';
	}
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}

?>