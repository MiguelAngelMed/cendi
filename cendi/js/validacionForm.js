$(document).ready(function(){
   

    
    var expresiones = {
        expCorreo : /^[a-zA-Z][a-zA-Z0-9_.]*@[a-zA-Z][a-zA-Z.]+(com|ipn[.]mx)$/,
        expCURP : /^[A-Z]{4}([0-9][0-9]){3}[A-Z]{6}([A-Z]|[0-9]){2}$/,
        expBoleta : /^(PE|PP|[1-9][0-9])[0-9]{8}$/,
        expTelefono : /^[1-9][0-9]{9}$/,
        expCP : /^[0-9]{5}$/,
        expSueldo : /^([1-9][0-9]+|[1-9][0-9]+[.][0-9]{2})$/,
        expPalabras : /^[a-zA-ZÀ-ÿ\s]{3,50}$/,
        expDirecciones : /^[a-zA-ZÀ-ÿ][a-zA-ZÀ-ÿ0-9\s]{3,50}$/,
        expNumEmpleado : /^[0-9]{5,7}$/,
        expExtensionEmpleado : /^[0-9]{5}$/,
        expExtensionConyuge : /^[0-9]{4,5}$/,
        expNumCasa: /^[1-9][0-9]{0,5}$/
    }
    
    var inputs = document.querySelectorAll('#formularioInscripcion input');
    const valido = {
        valBoleta: false,
        valNombreNino: false,
        valPrimApellidoNino: false,
        valSegApellidoNino: false,
        valCurpNino: false,
        valPrimApellDH: false,
        valSegApellDH: false,
        valnomDH: false,
        valcalle: false,
        valTelCelDH: false,
        valTelFijoDH: false,
        valIntDH: false,
        valExtDH: false,
        valColoniaDH: false,
        valCpDH: false,
        valCorreoDH: false,
        valCurpDH: false,
        valPlazaDH: false,
        valSueldo: false,
        valNumEmpleado: false,
        valExensionDH: false,
        valNombreCY: false,
        valPrimApellCY: false,
        valSegaApelleCY: false,
        valTelCelCY: false,
        valTelFijoCY: false,
        valLugarTrabajoCY: false,
        valDomicilioTrabajoCY: false,
        valTeltrabajoCY: false,
        valExtensionConyuge: false,
        valEdad: false
    
    }
    
    /*
    console.log($("#oculto").val());

    if($("#oculto").val() == "reg"){
        console.log("Hacer true");
        valido.valBoleta = true;
        valido.valNombreNino = true;
        valido.valPrimApellidoNino = true;
        valido.valSegApellidoNino = true;
        valido.valCurpNino = true;
        valido.valPrimApellDH = true;
        valido.valSegApellDH = true;
        valido.valnomDH = true;
        valido.valcalle = true;
        valido.valTelCelDH = true;
        valido.valTelFijoDH = true;
        valido.valIntDH = true;
        valido.valExtDH = true;
        valido.valColoniaDH = true;
        valido.valCpDH = true;
        valido.valCorreoDH = true;
        valido.valCurpDH = true;
        valido.valPlazaDH = true;
        valido.valSueldo = true;
        valido.valNumEmpleado = true;
        valido.valExensionDH = true;
        valido.valNombreCY = true;
        valido.valPrimApellCY = true;
        valido.valSegaApelleCY = true;
        valido.valTelCelCY = true;
        valido.valTelFijoCY = true;
        valido.valLugarTrabajoCY = true;
        valido.valDomicilioTrabajoCY = true;
        valido.valTeltrabajoCY = true;
        valido.valExtensionConyuge = true;
        valido.valEdad = true;
    }

    */
    const validarInputs = (e) => {
        if( e.target.name == "noDeBoleta"){
            let validador = document.querySelector('#noDeBoleta');
            if (expresiones.expBoleta.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valBoleta = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valBoleta = false;
            }
        }
        else if( e.target.name == "nombre"){
            let validador = document.querySelector('#nombre');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valNombreNino = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valNombreNino = false;
                
            }
        }
        else if( e.target.name == "curp"){
            let validador = document.querySelector('#curp');
            if (expresiones.expCURP.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valCurpNino = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valCurpNino = false;
                
            }
        }
        else if( e.target.name == "priapellido"){
            let validador = document.querySelector('#priapellido');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valPrimApellidoNino = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valPrimApellidoNino = false;
                
            }
        }
        else if( e.target.name == "segapellido"){
            let validador = document.querySelector('#segapellido');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valSegApellidoNino = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valSegApellidoNino = false;
                
            }
        }
        else if( e.target.name == "priapellidodh"){
            let validador = document.querySelector('#priapellidodh');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valPrimApellDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valPrimApellDH = false;
                
            }
        }
        else if( e.target.name == "segapellidodh"){
            let validador = document.querySelector('#segapellidodh');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valSegApellDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valSegApellDH = false;
                
            }
        }
        else if( e.target.name == "nombredh"){
            let validador = document.querySelector('#nombredh');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valnomDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valnomDH = false;
                
            }
        }
        else if( e.target.name == "calle"){
            let validador = document.querySelector('#calle');
            if (expresiones.expDirecciones.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valcalle = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valcalle = false;
                
            }
        }
        else if( e.target.name == "numcalle"){
            let validador = document.querySelector('#numcalle');
            if (expresiones.expNumCasa.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valExtDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valExtDH = false;
                
            }
        }
        else if( e.target.name == "numint"){
            let validador = document.querySelector('#numint');
            if (expresiones.expNumCasa.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valIntDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valIntDH = false;
                
            }
        }
        else if( e.target.name == "colonia"){
            let validador = document.querySelector('#colonia');
            if (expresiones.expDirecciones.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valColoniaDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valColoniaDH = false;
                
            }
        }
        else if( e.target.name == "cp"){
            let validador = document.querySelector('#cp');
            if (expresiones.expCP.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valCpDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valCpDH = false;
                
            }
        }
        else if( e.target.name == "telefono"){
            let validador = document.querySelector('#telefono');
            if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valTelCelDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valTelCelDH = false;
                
            }
        }
        else if( e.target.name == "telefonof"){
            let validador = document.querySelector('#telefonof');
            if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valTelFijoDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valTelFijoDH = false;
                
            }
        }
        else if( e.target.name == "correoDH"){
            let validador = document.querySelector('#correoDH');
            if (expresiones.expCorreo.test( validador.value  ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valCorreoDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valCorreoDH = false;
                
            }
        }
        else if( e.target.name == "curpdh"){
            let validador = document.querySelector('#curpdh');
            if (expresiones.expCURP.test( validador.value) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valCurpDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valCurpDH = false;
                
            }
        }
        else if( e.target.name == "nombreplaza"){
            let validador = document.querySelector('#nombreplaza');
            if (expresiones.expPalabras.test( validador.value ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valPlazaDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valPlazaDH = false;
                
            }
        }
        else if( e.target.name == "Sueldo"){
            let validador = document.querySelector('#Sueldo');
            if (expresiones.expSueldo.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valSueldo = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valSueldo = false;
                
            }
        }
        else if( e.target.name == "extDH"){
            let validador = document.querySelector('#extDH');
            if (expresiones.expExtensionEmpleado.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valExensionDH = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valExensionDH = false;
            }
        }
        else if( e.target.name == "Nempleado"){
            let validador = document.querySelector('#Nempleado');
            if (expresiones.expNumEmpleado.test( validador.value.toString() ) ) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valNumEmpleado = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valNumEmpleado = false;
            }
        }

        if($('input[name="tieneConyuge"]:checked').val() == "Si"){
            if( e.target.name == "priapellidopom"){
                let validador = document.querySelector('#priapellidopom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valPrimApellCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valPrimApellCY = false;
                }
            }
            else if( e.target.name == "segapellidopom"){
                let validador = document.querySelector('#segapellidopom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valSegaApelleCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valSegaApelleCY = false;
                }
            }
            else if( e.target.name == "nombrepom"){
                let validador = document.querySelector('#nombrepom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valNombreCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valNombreCY = false;
                }
            }
            else if( e.target.name == "telefonopom"){
                let validador = document.querySelector('#telefonopom');
                if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTelCelCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTelCelCY = false;
                }
            }
            else if( e.target.name == "telefonofCY"){
                let validador = document.querySelector('#telefonofCY');
                if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTelFijoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTelFijoCY = false;
                }
            }
            else if( e.target.name == "Lugardetrabajo"){
                let validador = document.querySelector('#Lugardetrabajo');
                if (expresiones.expDirecciones.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valLugarTrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valLugarTrabajoCY = false;
                }
            }
            else if( e.target.name == "DMT"){
                let validador = document.querySelector('#DMT');
                if (expresiones.expDirecciones.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valDomicilioTrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valDomicilioTrabajoCY = false;
                }
            }
            else if( e.target.name == "telefonotrab"){
                let validador = document.querySelector('#telefonotrab');
                if (expresiones.expTelefono.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTeltrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTeltrabajoCY = false;
                }
            }
            else if( e.target.name == "extensionCo"){
                let validador = document.querySelector('#extensionCo');
                if (expresiones.expExtensionConyuge.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valExtensionConyuge = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valExtensionConyuge = false;
                }
            }
        }else {
            valido.valPrimApellCY = true;
            valido.valSegaApelleCY = true;
            valido.valNombreCY = true;
            valido.valTelCelCY = true;
            valido.valTelFijoCY = true;
            valido.valLugarTrabajoCY = true;
            valido.valDomicilioTrabajoCY = true;
            valido.valTeltrabajoCY = true;
            valido.valExtensionConyuge = true;
        }

        
    }
    
    
    
    inputs.forEach((input) => {
        input.addEventListener('keyup', validarInputs);
        input.addEventListener('blur', validarInputs);
    });
    
    
    const fechaNacimiento = document.getElementById("fecha");
     

    fechaNacimiento.addEventListener('change', function () {
        if(this.value){
            
            var fechaActual = new Date();
            var anActual = parseInt(fechaActual.getFullYear());
            var mesActual = parseInt(fechaActual.getMonth() + 1);
            var diaActual = parseInt(fechaActual.getDate());

            var anNacimiento = parseInt(String(this.value).substring(0,4));
            var mesNacimiento = parseInt(String(this.value).substring(5,7) );
            var diaNacimiento = parseInt(String(this.value).substring(8,10) );

            var years = 0;
            var meses = 0;
            years = anActual - anNacimiento;
            

            if(anActual === anNacimiento && diaActual < diaNacimiento && mesActual === mesNacimiento){
                years = -1;
            }
            else if(anActual <= anNacimiento && mesActual<=mesNacimiento){
                years = -1;
            }
            else{
                if(mesActual < mesNacimiento){
                    years--;
                }
                else if (mesActual === mesNacimiento && diaActual<diaNacimiento){
                    years--;
                }

                if(mesNacimiento < mesActual){
                    if(diaActual >= diaNacimiento){
                        meses = mesActual - mesNacimiento;
                    }
                    else{
                        meses = mesActual - mesNacimiento-1;
                    }
                }
                else if(mesNacimiento > mesActual){
                    if(diaActual >= diaNacimiento){//
                        meses = 12 -(mesNacimiento-mesActual);
                    }
                    else{
                        meses = 12 -(mesNacimiento-mesActual)-1;
                    }

                }
                else if( mesActual === mesNacimiento){
                    if(diaActual >= diaNacimiento){
                        meses = 0;
                    }
                    else{
                        meses = 12 -(mesNacimiento-mesActual)-1;
                    }
                }
            }


            let textoEdad = "";
            if(years === -1){
                    textoEdad ="";
            }
            else if(years === 1){
                if(meses === 1){
                    textoEdad = years +" año y "+meses+ " mes";
                }
                else{
                    textoEdad = years +" año y "+meses+ " meses";
                }
            }
            else{
                if(meses === 1){
                    textoEdad = years +" años y "+meses+ " mes";
                }
                else{
                    textoEdad = years +" años y "+meses+ " meses";
                }
            }


            $("#edad").val(textoEdad);
            let validador = document.querySelector('#edad');
            if(years === 0 && meses===0){
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valEdad = false;
            }
            else if (years <= 6 && years != -1) {
                validador.classList.remove('is-invalid');
                validador.classList.add('is-valid');
                valido.valEdad = true;
            } else {
                validador.classList.remove('is-valid');
                validador.classList.add('is-invalid');
                valido.valEdad = false;
            }
           
        }
    });
    

    function validarTodo(){
        
        let validador = document.querySelector('#noDeBoleta');
        if (expresiones.expBoleta.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valBoleta = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valBoleta = false;
        }
    
        validador = document.querySelector('#nombre');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valNombreNino = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valNombreNino = false;
            
        }
        
        validador = document.querySelector('#curp');
        if (expresiones.expCURP.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valCurpNino = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valCurpNino = false;
            
        }
    
        validador = document.querySelector('#priapellido');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valPrimApellidoNino = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valPrimApellidoNino = false;
            
        }
    
        validador = document.querySelector('#segapellido');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valSegApellidoNino = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valSegApellidoNino = false;
            
        }
    
        validador = document.querySelector('#priapellidodh');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valPrimApellDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valPrimApellDH = false;
            
        }
    
        validador = document.querySelector('#segapellidodh');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valSegApellDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valSegApellDH = false;
            
        }
    
        validador = document.querySelector('#nombredh');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valnomDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valnomDH = false;
            
        }
    
        validador = document.querySelector('#calle');
        if (expresiones.expDirecciones.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valcalle = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valcalle = false;
            
        }
    
        validador = document.querySelector('#numcalle');
        if (expresiones.expNumCasa.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valExtDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valExtDH = false;
            
        }
    
        validador = document.querySelector('#numint');
        if (expresiones.expNumCasa.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valIntDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valIntDH = false;
            
        }
    
        validador = document.querySelector('#colonia');
        if (expresiones.expDirecciones.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valColoniaDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valColoniaDH = false;
            
        }
    
        validador = document.querySelector('#cp');
        if (expresiones.expCP.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valCpDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valCpDH = false;
            
        }
    
        validador = document.querySelector('#telefono');
        if (expresiones.expTelefono.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valTelCelDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valTelCelDH = false;
            
        }
    
        validador = document.querySelector('#telefonof');
        if (expresiones.expTelefono.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valTelFijoDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valTelFijoDH = false;
            
        }
    
        validador = document.querySelector('#correoDH');
        if (expresiones.expCorreo.test( validador.value  ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valCorreoDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valCorreoDH = false;
            
        }
    
        validador = document.querySelector('#curpdh');
        if (expresiones.expCURP.test( validador.value) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valCurpDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valCurpDH = false;
            
        }
    
        validador = document.querySelector('#nombreplaza');
        if (expresiones.expPalabras.test( validador.value ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valPlazaDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valPlazaDH = false;
            
        }
    
        validador = document.querySelector('#Sueldo');
        if (expresiones.expSueldo.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valSueldo = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valSueldo = false;
            
        }
    
        validador = document.querySelector('#extDH');
        if (expresiones.expExtensionEmpleado.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valExensionDH = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valExensionDH = false;
        }
    
        validador = document.querySelector('#Nempleado');
        if (expresiones.expNumEmpleado.test( validador.value.toString() ) ) {
            validador.classList.remove('is-invalid');
            validador.classList.add('is-valid');
            valido.valNumEmpleado = true;
        } else {
            validador.classList.remove('is-valid');
            validador.classList.add('is-invalid');
            valido.valNumEmpleado = false;
        }
        

        if($('input[name="tieneConyuge"]:checked').val() == "Si"){
            
                validador = document.querySelector('#priapellidopom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valPrimApellCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valPrimApellCY = false;
                }
            
                validador = document.querySelector('#segapellidopom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valSegaApelleCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valSegaApelleCY = false;
                }
           
                validador = document.querySelector('#nombrepom');
                if (expresiones.expPalabras.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valNombreCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valNombreCY = false;
                }
           
                validador = document.querySelector('#telefonopom');
                if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTelCelCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTelCelCY = false;
                }
            
                validador = document.querySelector('#telefonofCY');
                if (expresiones.expTelefono.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTelFijoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTelFijoCY = false;
                }
           
                validador = document.querySelector('#Lugardetrabajo');
                if (expresiones.expDirecciones.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valLugarTrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valLugarTrabajoCY = false;
                }
           
                validador = document.querySelector('#DMT');
                if (expresiones.expDirecciones.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valDomicilioTrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valDomicilioTrabajoCY = false;
                }
           
                validador = document.querySelector('#telefonotrab');
                if (expresiones.expTelefono.test( validador.value ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valTeltrabajoCY = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valTeltrabajoCY = false;
                }
            
                validador = document.querySelector('#extensionCo');
                if (expresiones.expExtensionConyuge.test( validador.value.toString() ) ) {
                    validador.classList.remove('is-invalid');
                    validador.classList.add('is-valid');
                    valido.valExtensionConyuge = true;
                } else {
                    validador.classList.remove('is-valid');
                    validador.classList.add('is-invalid');
                    valido.valExtensionConyuge = false;
                }
            }
        else {
            valido.valPrimApellCY = true;
            valido.valSegaApelleCY = true;
            valido.valNombreCY = true;
            valido.valTelCelCY = true;
            valido.valTelFijoCY = true;
            valido.valLugarTrabajoCY = true;
            valido.valDomicilioTrabajoCY = true;
            valido.valTeltrabajoCY = true;
            valido.valExtensionConyuge = true;
        }
        valido.valEdad = true;
    }


    (function () {
        const forms = document.querySelectorAll('.needs-validation');
      
        for (let form of forms) {
          form.addEventListener('submit', function (event) {
            validarTodo();
              
            if ( !form.checkValidity() || !valido.valBoleta  || !valido.valNombreNino
                || !valido.valPrimApellidoNino || !valido.valSegApellidoNino || !valido.valCurpNino
                || !valido.valPrimApellDH || !valido.valSegApellDH || !valido.valnomDH
                || !valido.valcalle || !valido.valTelCelDH || !valido.valTelFijoCY
                || !valido.valIntDH || !valido.valExtDH || !valido.valColoniaDH 
                || !valido.valCpDH  || !valido.valColoniaDH || !valido.valCurpDH 
                || !valido.valPlazaDH || !valido.valSueldo || !valido.valNumEmpleado
                || !valido.valNumEmpleado || !valido.valExensionDH || !valido.valNombreCY  
                || !valido.valNombreCY || !valido.valPrimApellCY || !valido.valSegApellDH
                || !valido.valTelCelCY || !valido.valTelFijoCY || !valido.valLugarTrabajoCY
                || !valido.valDomicilioTrabajoCY || !valido.valTeltrabajoCY || !valido.valExtensionConyuge 
                || !valido.valEdad ){
                    event.preventDefault();
                    event.stopPropagation();
                    console.log("entrada No valida");
            }else{
                form.classList.add('was-validated');
                console.log("entrada valida");
             }
             
            }, false
          );
        }
      })();
        
    

});