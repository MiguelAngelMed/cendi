<?php
    require('fpdf184/fpdf.php');
    


    class PDF extends FPDF{
    // Cabecera de página
    function Header(){
        // Logo
        $this->Image('../../img/sep.png',1,1,70,25);
        $this->Image('../../img/cdmx.png',90,5,75,20);
        $this->Image('../../img/ipn.png',180,5,35,20);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-10);
        // Arial italic 8
        $this->SetFont('Arial','I',13);
        // Número de página
        $this->Cell(0,5,utf8_decode("Página ").$this->PageNo(),0,0,'C');
        $this->Image('../../img/floresMagon.png',155,260,60,18);
    }


}

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage("PORTRAIT","letter");
    
    $pdf->SetFont('Arial','B',16);

    session_start();

    $pdf->Cell(0,12, utf8_decode("Ficha de inscripción"),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50);
    $pdf->Cell(30,10, "Ciclo escolar: ",0,0);
    $pdf->SetFont('Arial','',12);  
    $pdf->Cell(50,10, "2022-2023",0,1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50);
    $pdf->Cell(17,10, "CENDI:  ",0,0);
    $pdf->SetFont('Arial','',12); 
    $pdf->Cell(50,10, utf8_decode($_SESSION['cendisf']),0,1);
    $pdf->Ln(5);
    //$pdf->SetDrawColor(149, 47, 87);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(25,8, "Boleta: ",1,0,'C');
    
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(253,211,228);
    $pdf->Cell(35,8, utf8_decode($_SESSION['nboletaF']),1,1,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(25,8, "Grupo: ",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(35,8, utf8_decode($_SESSION['grupoF']),1,1,'C',true);

    $pdf->Image('img/auxiliar.png',160,50,27,32);


    //Datos del niño o niña
    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(25,8, utf8_decode("Datos del niño o de la niña "),0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(66.6,8,utf8_decode($_SESSION['priapellidoF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['segapellidoF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['nombreF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(66.6,8, "Primer apellido",1,0,'C');
    $pdf->Cell(66.6,8, "Segundo apellido",1,0,'C');
    $pdf->Cell(66.6,8, "Nombre(s)",1,1,'C');

    $pdf->Cell(45,8, "Fecha nacimiento: ",1,0,'C');
    $pdf->Cell(10,8, utf8_decode("Día: "),1,0);
    $pdf->SetFont('Arial','',12);
    $nacimiento = strval($_SESSION['fechaF']);
    $pdf->Cell(11.6,8, substr( $nacimiento, 8, 2 ),1,0,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(16,8, "Mes:",1,0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(15,8, substr( $nacimiento, 5, 2 ),1,0,'C', true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(16,8, utf8_decode("Año:"),1,0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(19.6,8, substr( $nacimiento, 0, 4 ),1,0,'C', true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(14,8, "Edad:",1,0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(52.6,8,utf8_decode( $_SESSION['edadF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "CURP:",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(169.8,8,utf8_decode( $_SESSION['curpF']),1,1,'C',true);

    //Datos del derechohabiente
    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(25,8, utf8_decode("Datos del derechohabiente"),0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['priapellidodhF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['segapellidodhF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['nombredhF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(66.6,8, "Primer apellido",1,0,'C');
    $pdf->Cell(66.6,8, "Segundo apellido",1,0,'C');
    $pdf->Cell(66.6,8, "Nombre(s)",1,1,'C');

    $pdf->Cell(199.8,8, "Domicilio particular",1,1,'L');
    

    $pdf->Cell(30,8, "Calle: ",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(60,8, utf8_decode($_SESSION['calleF']),1,0,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "No. ext. :",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(24.9,8, strval($_SESSION['numcalleF']),1,0,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "No. int. :",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(24.9,8, strval($_SESSION['numintF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "Colonia: ",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(69.9,8, utf8_decode($_SESSION['coloniaF']),1,0,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "Alcaldia: ",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(69.9,8, utf8_decode($_SESSION['alcadiaF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "Estado: ",1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(169.9,8, utf8_decode($_SESSION['estadoF']),1,1,'L',true);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,8, strval($_SESSION['cpF']),1,0,'C',true);
    $pdf->Cell(84.9,8, strval($_SESSION['telefonoCelDHF']),1,0,'C',true);
    $pdf->Cell(84.9,8, strval($_SESSION['telefonoFijoDHF']),1,1,'C',true);
    
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,8, "CP ",1,0,'C');
    $pdf->Cell(84.9,8, utf8_decode("Teléfono fijo"),1,0,'C');
    $pdf->Cell(84.9,8, utf8_decode("Teléfono celular"),1,1,'C');
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(99.9,8, utf8_decode($_SESSION['correoDHF']),1,0,'C',true);
    $pdf->Cell(99.9,8, utf8_decode($_SESSION['ocupacionF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(99.9,8, utf8_decode("Correo electrónico"),1,0,'C');
    $pdf->Cell(99.9,8, utf8_decode("Ocupación"),1,1,'C');


    $pdf->SetFont('Arial','',12);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['curpdhF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['nombreplazaF']),1,0,'C',true);
    $pdf->Cell(66.6,8, utf8_decode($_SESSION['SueldoF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(66.6,8, utf8_decode("CURP"),1,0,'C');
    $pdf->Cell(66.6,8, utf8_decode("Nombre de la plaza o puesto"),1,0,'C');
    $pdf->Cell(66.6,8, utf8_decode("Sueldo mensual"),1,1,'C');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(66.6,8, strval($_SESSION['NempleadoF']),1,0,'C',true);
    $pdf->Cell(133.2,8, utf8_decode($_SESSION['adscripcionF']),1,1,'C',true);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(66.6,8, utf8_decode("Número de empleado"),1,0,'C');
    $pdf->Cell(133.2,8, utf8_decode("Adscripción"),1,1,'C');
    
    $pdf->Cell(49.95,8, utf8_decode("Horario de trabajo:"),1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(49.95,8, utf8_decode($_SESSION['horariotraF']),1,0,'C',true);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(49.95,8, utf8_decode("Extensión:"),1,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(49.95,8, strval($_SESSION['extDHF']),1,1,'C',true);

    

    //Datos del conyuge
    $pdf->SetFont('Arial','B',14);
    if($_SESSION['tieneCYf'] == "Si"){
        $pdf->Cell(25,8, utf8_decode("Datos del conyuge "),0,1);

        $pdf->SetFont('Arial','',12);
        $pdf->Cell(66.6,8, utf8_decode($_SESSION['priapellidopomF']),1,0,'C',true);
        $pdf->Cell(66.6,8, utf8_decode($_SESSION['segapellidopomF']),1,0,'C',true);
        $pdf->Cell(66.6,8, utf8_decode($_SESSION['nombrepomF']),1,1,'C',true);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(66.6,8, "Primer apellido",1,0,'C');
        $pdf->Cell(66.6,8, "Segundo apellido",1,0,'C');
        $pdf->Cell(66.6,8, "Nombre(s)",1,1,'C');

        $pdf->SetFont('Arial','',12);
        $pdf->Cell(66.6,8, strval($_SESSION['telefonofCYF']),1,0,'C',true);
        $pdf->Cell(66.6,8, strval($_SESSION['telefonopomF']),1,0,'C',true);
        $pdf->Cell(66.6,8, strval($_SESSION['telefonotrabF']),1,1,'C',true);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(66.6,8, utf8_decode("Teléfono fijo"),1,0,'C');
        $pdf->Cell(66.6,8, utf8_decode("Teléfono celular"),1,0,'C');
        $pdf->Cell(66.6,8, utf8_decode("Teléfono de trabajo"),1,1,'C');

        $pdf->SetFont('Arial','',12);
        $pdf->Cell(99.9,8, $_SESSION['LugardetrabajoF'],1,0,'C',true);
        $pdf->Cell(99.9,8, $_SESSION['DMTF'],1,1,'C',true);
        

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(99.9,8, utf8_decode("Lugar de trabajo"),1,0,'C');
        $pdf->Cell(99.9,8, utf8_decode("Domicilio de trabajo"),1,1,'C');
        
        $pdf->Cell(30,8, utf8_decode("Extensión: "),1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(169.8,8,strval( $_SESSION['extensionCoF']),1,1,'C',true);


        //fotos
        $pdf->Ln(10);
        
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(25,8, utf8_decode("Fotografías del o la derechohabiente, cónyuge y persona autorizada"),0,1);
        
        $pdf->Cell(25,8, utf8_decode("para recoger al pequeño "),0,1);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(20);
        $pdf->Cell(25,30, " ",1,0);
        
        $pdf->Cell(41.6);
        $pdf->Cell(25,30, " ",1,0);
        $pdf->Cell(41.6);
        $pdf->Cell(25,30, " ",1,0);
        $pdf->Cell(21.6,30,"",0,1);
        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(12);
        $pdf->Cell(45,8, "Derechohabiente ",0,0);
        $pdf->Cell(32);
        $pdf->Cell(45,8, utf8_decode("Cónyuge "),0,0);
        $pdf->Cell(12);
        $pdf->Cell(45,8, "Persona Autorizada ",0,1);
        $pdf->Ln(8);
    }else{
        $pdf->Ln(15);
        
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(25,8, utf8_decode("Fotografías del o la derechohabiente, cónyuge y persona autorizada"),0,1);
        
        $pdf->Cell(25,8, utf8_decode("para recoger al pequeño "),0,1);
        
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(20);
        $pdf->Cell(25,30, " ",1,0);
        
        $pdf->Cell(41.6);
        $pdf->Cell(25,30, " ",1,0);
        $pdf->Cell(41.6);
        $pdf->Ln(30);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(12);
        $pdf->Cell(45,8, "Derechohabiente ",0,0);
        $pdf->Cell(25);
        $pdf->Cell(45,8, utf8_decode("Persona autorizada "),0,0);
        $pdf->Cell(12);
        
        $pdf->Ln(8);
              
    }
    $pdf->Cell(80,8, utf8_decode("Cita para entregar papeles y/o entrevista"),0,1);
    $pdf->Cell(50,8, utf8_decode("10/11/2022 a las 15:30"),0,1,'L',true);

    $pdf->Ln(10);
    $pdf->Cell(30);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(40,8, utf8_decode("Ciudad a México a "),0,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,8, date("d-m-Y"),0,1,'C',true);
    $pdf->Ln(3);
    $pdf->Cell(20);
    $pdf->Cell(120,15, "",'B',1,'C',true);
    $pdf->Cell(20);
    $pdf->Cell(120,15, "Nombre y firma del o la derechohabiente",0,1,'C');

    $pdf->Output('I',$_SESSION['curpF'].".pdf");
    $pdf->Output('F',"fichasNinos/".$_SESSION['curpF'].".pdf");
    
    

    //Envio del correo
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '4cm5cendi@gmail.com';                     //SMTP username
    $mail->Password   = 'uxvidzjbpquhzvvi';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('4cm5cendi@gmail.com', '4CM5 CENDIS');
    $mail->addAddress($_SESSION['correoDHF'], $_SESSION['nombredhF']);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Inscripcion CENDI';
    $mail->Body .="<h1 style='color:#3498db;'>Hola tu registro se ha realizado con exito!</h1>";
    $mail->Body .= "<p>El pdf adjunto es el que debes llevar el día de tu cita en el horario correspondiente</p>";
    $mail->addAttachment('fichasNinos/'.$_SESSION['curpF'].".pdf");

    $mail->send();
    
    
?>