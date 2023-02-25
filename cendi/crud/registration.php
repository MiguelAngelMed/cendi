<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
  <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="../js/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/formularioPareja.js"></script>
    <script src="../js/validacionForm.js"></script>
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<div class="container-lg">
        <form id="formularioInscripcion" action="register.php" method="post" class="container-fluid needs-validation" > 
            <fieldset class="row mt-3 ">
                <legend class="fw-bold">Ficha de inscripción</legend>
                <div class="col-12">
                    <label for="ciclo" class="form-label">Ciclo Escolar</label>
                    <input type="text" id="ciclo" name="ciclo" class="form-control" value="2022-2023" readonly/>
                </div>
                <div class="col-12">
                    <label for="cendis" class="form-label">CENDI</label>
                    <select name="cendis" id="cendis" class="form-select" required>
                        <option disabled value="">-- Selecciona tu CENDI --</option>
                        <option value="CENDI Amalia Solórzano de Cárdenas" selected>CENDI Amalia Solórzano de Cárdenas</option>
                        <option value="CENDI Clementina Batalla de Bassols">CENDI Clementina Batalla de Bassols</option>
                        <option value="CENDI Eva Sámano de López Mateos">CENDI Eva Sámano de López Mateos</option>
                        <option value="CENDI Laura Pérez de Bátiz">CENDI Laura Pérez de Bátiz</option>
                        <option value="CENDI Margarita Salazar de Erro">CENDI Margarita Salazar de Erro</option>
                    </select>
                </div>
                <div class="col-12">
                    
                    <label for="foto" class="form-label">Foto del niño o la niña</label>
                    <input type="file" class="form-control"  value= "hola.txt" id="foto" name="foto" accept="image/png, image/jpeg" required>
                   
                </div>
                <div class="col-12">
                    <label for="noDeBoleta" class="form-label">No. de boleta</label>
                    <input type="text" class="form-control" name="noDeBoleta" id="noDeBoleta"  placeholder="Introduce tu numero de boleta" required/>   
                    <div class="invalid-feedback">Número de boleta no valido<br>
                    Debe estar compuesto por PE o PP al principio y 8 dígitos o unicamente de 10 dígitos</div>
                    <div class="valid-feedback">Boleta valida</div>
                </div>

                <div class="col-12">
                    <label for="grupo" class="form-label">Grupo </label>
                    <select name="grupo" id="grupo" class="form-select" required>
                        <option selected disabled value="">--Selecciona tu grupo--</option>
                        <option value="Lac 1">Lac I</option>
                        <option value="Lac 2">Lac II</option>
                        <option value="Lac 3">Lac III</option>
                        <option value="Mat 1">Mat I</option>
                        <option value="Mat IIA">Mat IIA</option>
                        <option value="Mat IIB">Mat IIB</option>
                        <option value="PIA">PIA</option>
                        <option value="PIB">PIB</option>
                        <option value="PIIA">PIIA</option>
                        <option value="PIIB">PIIB</option>
                        <option value="PIIIA">PIIIA</option>
                        <option value="PIIIB">PIIIB</option>
                    </select>
                    
                </div>
            </fieldset>

            <fieldset class="row mt-3">
           
                <legend class="fw-bold">Datos del niño o de la niña</legend>

                <div class="col-12">    
                    <label for="nombre" class="form-label">Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Introduce el nombre" required/>
                    <div class="invalid-feedback">Nombre del niñ@ no valido</div>
                    <div class="valid-feedback">Nombre del niñ@ valido</div>
                </div>

            
                <div class="col-12">
                    <label for="priapellido" class="form-label">Primer Apellido </label>
                    <input type="text" class="form-control" name="priapellido" id="priapellido"  placeholder="Introduce el primer apellido"/>
                    <div class="invalid-feedback">Apellido paterno del niñ@ no valido</div>
                    <div class="valid-feedback">Apellido paterno del niñ@ valido</div>
                </div>
                
                <div class="col-12">
                    <label for="segapellido" class="form-label">Segundo Apellido  </label>
                    <input type="text" class="form-control" name="segapellido" id="segapellido"  placeholder="Introduce el segundo apellido"/>
                    <div class="invalid-feedback">Apellido materno del niñ@ no valido</div>
                    <div class="valid-feedback">Apellido materno del niñ@ valido</div>
                </div>
            
                <div class="col-12">
                    <label for="fecha" class="form-label">Fecha de Nacimiento </label>
                    <input type="date" id="fecha"  class="form-control" name="fecha" min="2015-01-01"  />
                </div>

                <div class="col-12">    
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" name="edad" id="edad" value="" readonly/>
                    <div class="invalid-feedback">Debe introducir una fecha valida o su
                        pequeño tiene más de 6 años y no pueder ser inscrito
                    </div>
                    <div class="valid-feedback">El pequeño tiene la edad requerida</div>
                </div>
                    
                
                
                <label for="curp" class="form-label">CURP</label>
                <div class="input-group mb-3 col-12">
                    <input type="text" name="curp" id="curp" maxlength="18" class="form-control" placeholder="Introduce tu curp"/>
                    <span class="input-group-text" id="basic-addon2">
                        <u type="color=blue"> <a  href="https://www.gob.mx/curp/"  target="_blanck" class="curpLink">Consulta curp</a></u>
                    </span>
                    <div class="invalid-feedback">CURP del niñ@ no valida</div>
                    <div class="valid-feedback">CURP del niñ@ valida</div>
                </div>
            </fieldset>    
        
            <fieldset class="row">
                <legend class="fw-bold">Datos del o la derechohabiente</legend>
                <div class="col-12">
                    <label for="priapellidodh" class="form-label"> Primer Apellido </label>
                    <input type="text" name="priapellidodh" id="priapellidodh" maxlength="20" class="form-control" placeholder="Introduce tu primer apellido "/>
                    <div class="invalid-feedback">Apellido materno no valido</div>
                    <div class="valid-feedback">Apellido paterno valido</div>
                </div>
                <div class="col-12">
                    <label for="segapellidodh" class="form-label"> Segundo Apellido  </label>
                    <input type="text" name="segapellidodh" id="segapellidodh"  maxlength="20" class="form-control " placeholder="Introduce tu segundo apellido"/>
                    <div class="invalid-feedback">Apellido materno no valido</div>
                    <div class="valid-feedback">Apellido materno valido</div>
                </div>
                <div class="col-12">
                    <label for="nombredh" class="form-label">Nombre</label>
                    <input type="text" name="nombredh" id="nombredh"  maxlength="20" class="form-control" placeholder="Introduce tu nombre "/>
                    <div class="invalid-feedback">Nombre no valido</div>
                    <div class="valid-feedback">Nombre valido</div>
                </div>

                <p class="col-12 mt-2 mb-1">Domicilio particular</p>
                <div class="col-12">
                    <label for="calle" class="form-label">Calle </label>
                    <input type="text" name="calle" id="calle" class="form-control"  placeholder="Introduce tu calle "/>
                    <div class="invalid-feedback">Calle no valida</div>
                    <div class="valid-feedback">Calle valida</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="numcalle" class="form-label">Número exterior </label>
                    <input type="number" name="numcalle" id="numcalle" class="form-control" placeholder="Introduce tu numero exterior"/>
                    <div class="invalid-feedback">Número exterior no valido</div>
                    <div class="valid-feedback">Número exterior valido</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="numint" class="form-label">Número interior </label>
                    <input type="number" name="numint" id="numint"  class="form-control" placeholder="Introduce tu numero interior "/>
                    <div class="invalid-feedback">Número exterior no valido</div>
                    <div class="valid-feedback">Número interior no valido</div>
                </div>
                <div class="col-12">
                    <label for="colonia" class="form-label">Colonia </label>
                    <input type="text" name="colonia" id="colonia" class="form-control" placeholder="Introduce tu colonia "/>
                    <div class="invalid-feedback">Colonia no valido</div>
                    <div class="valid-feedback">Colonia valida</div>
                </div>
                <div class="col-12">
                    <label for="estado" class="form-label">Estado de la República</label>
                    <select name="estado" id="estado" class="form-select" required>
                        <option selected  disabled value="">--Seleccione tu entidad federativa--</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="alcadia" class="form-label">Alcadia o municipio: </label>
                    <select name="alcadia" id="alcadia" class="form-select" required>
                        <option selected  disabled value="">--Selecciona delegación--</option>
                        <option value="Alvaro Obrego">Álvaro Obregón</option>
                        <option value="Azcapotzalco">Azcapotzalco</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Coyoacan">Coyoacán</option>
                        <option value="Cuiajimalpa">Cuajimalpa</option>
                        <option value="Cuauhtemoc">Cuauhtémoc</option>
                        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                        <option value="Iztacalco">Iztacalco</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                        <option value="Magdalena Contreras">Magdalena Contreras</option>
                        <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                        <option value="Milpa ALta">Milpa Alta</option>
                        <option value="Tlahuac">Tláhuac</option>
                        <option value="Tlalpan">Tlalpan</option>
                        <option value="Venustiano Carranza">Venustiano Carranza</option>
                        <option value="Xochimilco">Xochimilco</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="cp" class="form-label">Código Postal </label>
                    <input type="number"  name="cp" id="cp"  class="form-control" placeholder="Introduce tu código postal"/>
                    <div class="invalid-feedback">El código postal debe ser de 5 dígitos (55090)</div>
                    <div class="valid-feedback">Código postal valido</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="telefono" class="form-label">Teléfono celular</label>
                    <input type="number" name="telefono" id="telefono"  class="form-control" placeholder="Introduce tu tel. celular"/>
                    <div class="invalid-feedback">El télefono debe ser de 10 dígitos</div>
                    <div class="valid-feedback">Télefono celular valido</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="telefonof" class="form-label">Teléfono fijo </label>
                    <input type="number" name="telefonof" id="telefonof"   class="form-control" placeholder="Introduce tu tel. fijo"/>
                    <div class="invalid-feedback">El télefono fijo debe ser de 10 dígito</div>
                    <div class="valid-feedback">Télefono fijo valido</div>
                </div>
                <div class="col-12">
                    <label for="correoDH" class="form-label">Correo</label>
                    <input id="correoDH" name="correoDH" type="text" multiple class="form-control" placeholder="Introduce tu correo">
                    <div class="invalid-feedback">Formato de correo no valido
                        <br>Solo seran validos los correos que de dominios .com y .ipn.mx
                        <br>Ejemplo: angel@gmail.com guillermo@alumno.ipn.mx
                    </div>
                    <div class="valid-feedback">Correo valido</div>
                </div>
                <div class="col-12">
                    <label for="ocupacion" class="form-label">Ocupación</label>
                    <select name="ocupacion" id="ocupacion" class="form-select" required>
                        <option selected  disabled value="">--Selecciona tu ocupación--</option>
                        <option value="Docente">Docente</option>
                        <option value="PAAE">PAAE</option>
                        <option value="Funcionario">Funcionario</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="curpdh" class="form-label">CURP</label>
                    <div class="input-group mb-3">
                        <input type="text" name="curpdh" id="curpdh"  class="form-control" placeholder="Introduce  tu curp"/>
                        <span class="input-group-text" id="basic-addon2">
                            <u type="color=blue"> <a  href="https://www.gob.mx/curp/"  target="_blanck" class="curpLink">Consulta curp</a></u>
                        </span>
                        <div class="invalid-feedback">CURP no valida</div>
                        <div class="valid-feedback">CURP  valida</div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="nombreplaza" class="form-label">Nombre de la plaza o puesto </label>
                    <input type="text" id="nombreplaza" name="nombreplaza" class="form-control" placeholder="Introduce el nombre de la plaza o puesto">
                    <div class="invalid-feedback">Nombre de la plaza no valido</div>
                    <div class="valid-feedback">Nombre de la plaza valido</div>
                </div>
                <div class="col-12">
                    <label for="Sueldo" class="form-label">Sueldo mensual</label>
                    <input type="text" id="Sueldo" name="Sueldo" class="form-control" placeholder="Introduce tu sueldo">
                    <div class="invalid-feedback">El formato del sueldo debe ser un numero entero o un decimal con dos decimales</div>
                    <div class="valid-feedback">Sueldo valido</div>     
                </div>
                <div class="col-12">
                    <label for="Nempleado" class="form-label">Número de empleado</label>
                    <input type="number" id="Nempleado" name="Nempleado"  class="form-control" placeholder="Introduce tu numero de empleado" />
                    <div class="invalid-feedback">El número empleado debe tener entre 5 y 7 dígitos</div>
                    <div class="valid-feedback">Número de empleado valido</div>      
                </div>
                <div class="col-12">
                    <label for="adscripcion" class="form-label">Adscripción</label>
                    <select name="adscripcion" id="adscripcion" class="form-select" required>
                        <option selected  disabled value="">--Selecciona tu adscripción --</option>
                        <option value="CECyT 1 Gonzalo Vázquez Vela">CECyT 1 "Gonzalo Vázquez Vela"</option>
                        <option value="CECyT 2 Miguel Bernard">CECyT 2 "Miguel Bernard"</option>
                        <option value="CECyT 3 Estanislao Ramírez Ruiz">CECyT 3 "Estanislao Ramírez Ruiz"</option>
                        <option value="CECyT 4 Lázaro Cárdenas">CECyT 4 "Lázaro Cárdenas"</option>
                        <option value="CECyT 5 Benito Juárez">CECyT 5 "Benito Juárez"</option>
                        <option value="CECyT 6 Miguel Othón de Mendizabal">CECyT 6 "Miguel Othón de Mendizabal"</option>
                        <option value="CECyT 7 Cuauhtémoc">CECyT 7 "Cuauhtémoc"</option>
                        <option value="CECyT 8 Narciso Bassols García">CECyT 8 "Narciso Bassols García"</option>
                        <option value="CECyT 9 Juan de Dios Bátiz">CECyT 9 "Juan de Dios Bátiz"</option>
                        <option value="CECyT 10 Carlos Vallejo Márquez">CECyT 10 "Carlos Vallejo Márquez"</option>
                        <option value="CECyT 11 Wilfrido Massieu Pérez">CECyT 11 "Wilfrido Massieu Pérez"</option>
                        <option value="CECyT 12 José María Morelos y Pavón">CECyT 12 "José María Morelos y Pavón"</option>
                        <option value="CECyT 13 Ricardo Flores Magón">CECyT 13 "Ricardo Flores Magón"</option>
                        <option value="CECyT 14 Luis Enrique Erro">CECyT 14 "Luis Enrique Erro"</option>
                        <option value="CECyT 15 Diódoro Antúnez Echegaray">CECyT 15 "Diódoro Antúnez Echegaray"</option>
                        <option value="CECyT 16 Hidalgo">CECyT 16 "Hidalgo"</option>
                        <option value="CECyT 17 León Guanajuato">CECyT 17 "León Guanajuato"</option>
                        <option value="CECyT 18  Zacatecas">CECyT 18  "Zacatecas"</option>
                        <option value="CECyT 19 Leona Vicario">CECyT 19 "Leona Vicario"</option>
                        <option value="CET 1 Walter Cross Buchanan">CET 1 "Walter Cross Buchanan"</option>
                        <option value="CICS Unidad Santo Tomás" >CICS Unidad Santo Tomás</option>
                        <option value="cCICS Unidad Milpa Alta" >CICS Unidad Milpa Alta</option>
                        <option value="enba" >ENBA </option>
                        <option value="encb" >ENCB </option>
                        <option value="enmyh" >ENMyH </option>
                        <option value="ESCA Unidad Santo Tomás" >ESCA Unidad Santo Tomás</option>
                        <option value="ESCA Unidad Tepepan" >ESCA Unidad Tepepan</option>
                        <option value="escom" >ESCOM </option>
                        <option value="ese" >ESE </option>
                        <option value="eseo" >ESEO </option>
                        <option value="esfm" >ESFM </option>
                        <option value="ESIME Unidad Zacatenco" >ESIME Unidad Zacatenco</option>
                        <option value="ESIME Unidad Azcapotzalco" >ESIME Unidad Azcapotzalco</option>
                        <option value="ESIME Unidad Culhuacán" >ESIME Unidad Culhuacán</option>
                        <option value="ESIME Unidad Ticomán" >ESIME Unidad Ticomán</option>
                        <option value="ESIQIE" >ESIQIE </option>
                        <option value="esit" >ESIT </option>
                        <option value="ESIA Unidad Tecamachalco" >ESIA Unidad Tecamachalco</option>
                        <option value="ESIA Unidad Ticomán" >ESIA Unidad Ticomán</option>
                        <option value="esiaz" >ESIA Unidad Zacatenco</option>
                        <option value="esm" >ESM </option>
                        <option value="est" >EST </option>
                        <option value="upiiccoa" >UPIIC Campus Coahuila</option>
                        <option value="upibi" >UPIBI </option>
                        <option value="UPIIG Campus Guanajuato" >UPIIG Campus Guanajuato</option>
                        <option value="UPIIZ Campus Zacatecas" >UPIIZ Campus Zacatecas</option>
                        <option value="UPIIH Campus Hidalgo" >UPIIH Campus Hidalgo</option>
                        <option value="UPIIP Campus Palenque" >UPIIP Campus Palenque</option>
                        <option value="UPIIT Campus Tlaxcala" >UPIIT Campus Tlaxcala</option>
                        <option value="UPIICSA" >UPIICSA </option>
                        <option value="UPIITA" >UPIITA </option>
                        <option value="UPIEM" >UPIEM </option>
                        <option value="Area central">Area central</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="horariotra" class="form-label">Horario de trabajo</label>
                    <select name="horariotra" id="horariotra" class="form-select" required>
                        <option selected  disabled value="">--Selecciona tu horario de trabajo--</option>
                        <option value='7:00 a 15:00'>7:00 a 15:00</option>
                        <option value='8:00 a 15:00'>8:00 a 15:00</option>
                         <option value='7:00 a 14:00'>7:00 a 14:00</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="extDH" class="form-label">Extensión</label>
                    <input type="number" id="extDH" name="extDH" class="form-control" placeholder="Introduce tu extension ">
                    <div class="invalid-feedback">La extensión debe ser de 5 dígitos </div>
                    <div class="valid-feedback">Extensión valida</div>               
                </div>
                <div class="col-12">
                    <p class="mb-0">Tiene cónguye</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tieneConyuge" id="flexRadioSi" value="Si" checked/>
                        <label class="form-check-label" for="flexRadioSi">Si</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="tieneConyuge" id="flexRadioNo" value="No" />
                        <label class="form-check-label" for="flexRadioNo" >No</label>
                      </div>
                </div>
            </fieldset>

            <fieldset class="row mt-3" id="formConyuge">
                <legend class="fw-bold">Datos del cónyuge(padre, madre) </legend>
                <div class="col-12">
                    <label for="priapellidopom" class="form-label"> Primer Apellido </label>
                    <input type="text" class="form-control" name="priapellidopom" id="priapellidopom"  placeholder="Introduce tu primer apellido"/>
                    <div class="invalid-feedback">Apellido paterno del conyuge no valido</div>
                    <div class="valid-feedback">Apellido paterno del conyuge valido</div>
                </div>
                <div class="col-12">
                    <label for="segapellidopom" class="form-label"> Segundo Apellido </label>
                    <input type="text" class="form-control" name="segapellidopom" id="segapellidopom" placeholder="Introduce tu segundo apellido "/>
                    <div class="invalid-feedback">Apellido materno del conyuge no valido</div>
                    <div class="valid-feedback">Apellido materno del conyuge valido</div>
                </div>
                <div class="col-12">
                    <label for="nombrepom" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombrepom" id="nombrepom" placeholder="Introduce tu nombre "/>
                    <div class="invalid-feedback">Nombre del conyuge no valido</div>
                    <div class="valid-feedback">Nombre del conyuge  valido</div>
                </div>
               
                
                <div class="col-md-6 col-sm-12">
                    <label for="telefonopom" class="form-label">Teléfono celular </label>
                    <input type="number" class="form-control" name="telefonopom" id="telefonopom"   placeholder="Introduce tu telefono celular"/>
                    <div class="invalid-feedback">El télefono debe ser de 10 dígitos</div>
                    <div class="valid-feedback">Télefono celular valido</div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="telefonofCY" class="form-label">Teléfono fijo </label>
                    <input type="number" class="form-control" name="telefonofCY" id="telefonofCY"   placeholder="Introduce tu telefono fijo" />
                    <div class="invalid-feedback">El télefono fijo debe ser de 10 dígitos</div>
                    <div class="valid-feedback">Télefono celular valido</div>
                </div>
                <div class="col-12">
                    <label for="Lugardetrabajo" class="form-label">Lugar de trabajo</label>
                    <input type="text" class="form-control" id="Lugardetrabajo" name="Lugardetrabajo" placeholder="Introduce tu lugar de trabajo">
                    <div class="invalid-feedback">Lugar de trabajo no valido</div>
                    <div class="valid-feedback">Lugar de trabajo no valido</div>
                </div>
                <div class="col-12">
                    <label for="DMT" class="form-label">Domicilio de trabajo</label>
                    <input type="text" class="form-control" id="DMT" name="DMT" placeholder="Introduce tu Domicilio del trabajo">
                    <div class="invalid-feedback">Domicilio de trabajo no valido</div>
                    <div class="valid-feedback">Domicilio de trabajo no valido</div>
                </div>
                <div class="col-12">
                    <label for="telefonotrab" class="form-label">Teléfono de trabajo </label>
                    <input type="number" class="form-control" name="telefonotrab" id="telefonotrab"   placeholder="Introduce tu telefono del trabajo"/>
                    <div class="invalid-feedback">El télefono debe ser de 10 dígitos</div>
                    <div class="valid-feedback">Télefono valido</div>
                </div>
                <div class="col-12">
                    <label for="extensionCo" class="form-label">Extensión</label>
                    <input type="number" class="form-control" id="extensionCo" name="extensionCo" placeholder="Introduce la extension"  />
                    <div class="invalid-feedback">La extensión debe ser de 4 o 5 dígitos</div>
                    <div class="valid-feedback">Extensón valida</div>
                </div>
                
            </fieldset>

            <div class="row mt-3 mb-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btnForm btn-lg  btn-primary me-md-2 fw-bold" type="submit">Guardar datos</button>
                    <button class="btn btnForm btn-lg btn-primary fw-bold" type="reset">Limpiar datos</button>
                </div>
                
            </div>
        </form>
    </div>