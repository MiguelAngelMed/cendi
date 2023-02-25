<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM datos_ninoss WHERE curp='$id'";
$sql2 = "DELETE FROM ficha WHERE curp='$id'";
$sql3 = "DELETE FROM datos_dh WHERE curp='$id'";
$sql4 = "DELETE FROM datos_conyuge WHERE curp='$id'";
if(mysqli_query($mysqli, $sql4)){
	echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
		echo '</script>';

}
 else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
if(mysqli_query($mysqli, $sql)){
	if(mysqli_query($mysqli, $sql2)){
		if(mysqli_query($mysqli, $sql3)){
			echo '<script language="javascript">';
			echo 'alert("Registro eliminado exitósamente");';
			echo 'window.location="users.php";';
				echo '</script>';
		
		}
		 else {
			echo '<script language="javascript">';
			echo 'alert("Error eliminando registro!");';
			echo 'window.location="users.php";';
			echo '</script>';
	}
	} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>