<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$cicloEscolar =$_POST['ciclo'];
$cendis = $_POST['cendis'];
$fotoN =$_POST['foto'];
$nboleta =$_POST['noDeBoleta'];
 $grupo =$_POST['grupo'];

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
  if ($prueba=="Si")
	 { 
	  $sql3="UPDATE `datos_conyuge` SET `papellidoCY` = '$priapellidopom', `sapellidoCY` = ' $segapellidopom', 
	  `nombrecy` = '$nombrepom', `telcy` = ' $telefonopom', `telfcy` = '$telefonofCY',
	   `lugart` = ' $Lugardetrabajo', `domiciliot` = '$DMT', `telefonot` = ' $telefonotrab', 
	   `extension` = '$extensionCo', `curp` = '$curp' WHERE `curp` = '$id'";
	  if(mysqli_query($mysqli, $sql3)){
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
if( $grupo =='Lac I' ||  $grupo =='Lac II'){
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

	
$sql1="UPDATE ficha SET  ncendi = '$cendis', nboleta = '$nboleta', grupo = '$grupo', curp = '$curp'
 WHERE curp = '$id'";
$sql="UPDATE datos_ninoss SET nombre = '$nombre', papellido = '$priapellido', sapellido = '$segapellido', fechacac = '$fecha', edad = '$edad', `curp` = '$curp' 
WHERE curp = '$id'";
$sql2="UPDATE datos_dh SET `nombredh` = 'Guillermos', `papellidodh` = '$priapellidodh', `sapellidosh` = '$segapellidodh', `calle` = '$calle', `numext` = '$numcalle', `numint` = '$numint', 
`colonia` = '$colonia', `estado` = '$estado', `alcaldia` = '$alcadia', `cp` = '$cp', `telc` = '$telefonoCelDH', `telf` = '$telefonoFijoDH', 
`correo` = '$correoDH', `ocupacion` = '$ocupacion', `curpdh` = '$curpdh', `nplaza` = '$nombreplaza', 
`sueldo` = '$Sueldo', `nempleado` = '$Nempleado', `adcrips` = '$adscripcion', `horario` = '$horariotra', `extension` = '$extDH', 
`tienecy` = '$tienecontuge', `curp` = '$curp' WHERE curp = '$id'";

	if(mysqli_query($mysqli, $sql1)){
		if(mysqli_query($mysqli, $sql)){
			if(mysqli_query($mysqli, $sql2)){
				echo '<script language="javascript">';
				echo 'alert("Registro actualizado exitósamente");';
				echo 'window.location="users.php";';
				echo '</script>';
				
			} else {
				echo '<script language="javascript">';
				echo 'alert("Error en proceso de actualización de registro!");';
				echo 'window.location="users.php";';
				echo '</script>';
			}
			
		} else {
			echo '<script language="javascript">';
			echo 'alert("Error en proceso de actualización de registro!");';
			echo 'window.location="users.php";';
			echo '</script>';
		}
		
	} else {
		echo '<script language="javascript">';
		echo 'alert("Error en proceso de actualización de registro!");';
		echo 'window.location="users.php";';
		echo '</script>';
	}
	

?>








