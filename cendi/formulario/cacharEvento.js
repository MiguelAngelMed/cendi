$(document).ready(function () {
    
        
        $.ajax({
            url: "datos.php",
            method: "POST",
            data: { numero: 5 }
        }).done( function(res){
            var datos = JSON.parse(res);
            console.log(res);
            if(datos.nombreF != undefined){
                $("#nombre").val(datos.nombreF);
                $("#noDeBoleta").val(datos.nboletaF);
                $("#cendis").val(datos.cendisf);
                $("#grupo").val(datos.grupoF);
                $("#priapellido").val(datos.priapellidoF);
                //$("#foto").val(datos.fotoF);

                console.log(datos.priapellidoF);
                console.log(datos.tieneCYf);

                if(datos.tieneCYf === "Si"){
                    document.querySelector("#flexRadioNo").checked =  false;
                    document.querySelector("#flexRadioSi").checked = true;
                    $("#formConyuge").show("slow");
                    console.log("Si");
                   
                }else if(datos.tieneCYf === "No"){
                    document.querySelector("#flexRadioSi").checked = false;
                    document.querySelector("#flexRadioNo").checked = true;
                    $("#formConyuge").hide("slow");
                    console.log("No");
                    
                }else{
                    console.log("Hola");
                }


                console.log(datos.nombreF);
                $("#segapellido").val(datos.segapellidoF);
                $("#fecha").val(datos.fechaF);
                $("#edad").val(datos.edadF);
                $("#curp").val(datos.curpF);
                $("#priapellidodh").val(datos.priapellidodhF);
                $("#segapellidodh").val(datos.segapellidodhF);
                $("#nombredh").val(datos.nombredhF);
                $("#calle").val(datos.calleF);
                $("#numcalle").val(datos.numcalleF);
                $("#numint").val(datos.numintF);
                $("#colonia").val(datos.coloniaF);
                $("#estado").val(datos.estadoF);
                $("#alcadia").val(datos.alcadiaF);
                $("#cp").val(datos.cpF);
                $("#telefono").val(datos.telefonoCelDHF);
                $("#telefonof").val(datos.telefonoFijoDHF);
                $("#correoDH").val(datos.correoDHF);
                $("#ocupacion").val(datos.ocupacionF);
                $("#curpdh").val(datos.curpdhF);
                $("#nombreplaza").val(datos.nombreplazaF);
                $("#Sueldo").val(datos.SueldoF);
                $("#Nempleado").val(datos.NempleadoF);
                $("#adscripcion").val(datos.adscripcionF);
                $("#horariotra").val(datos.horariotraF);
                $("#extDH").val(datos.extDHF);
                
                if(datos.tieneCYf == "Si"){
                    $("#priapellidopom").val(datos.priapellidopomF);
                    $("#segapellidopom").val(datos.segapellidopomF);
                    $("#nombrepom").val(datos.nombrepomF);
                    $("#telefonopom").val(datos.telefonopomF);
                    $("#telefonofCY").val(datos.telefonofCYF);
                    $("#Lugardetrabajo").val(datos.LugardetrabajoF);
                    $("#DMT").val(datos.DMTF);
                    $("#telefonotrab").val(datos.telefonotrabF);
                    $("#extensionCo").val(datos.extensionCoF);
                }
               
                $("#oculto").val("reg");
                
               


            }else{
                datos = undefined;
            }
            console.log(datos);
        });


    
   
});


