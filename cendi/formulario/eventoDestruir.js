function destruccion(){
    $.ajax({url:"destruir.php", success:function(result){
        console.log("destruido");
        }
    });
}

$(document).ready(function () {
    $("#inicio").click(function () {
        destruccion();
    });
});