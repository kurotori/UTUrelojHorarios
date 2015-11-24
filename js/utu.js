function loginMal(estado){
    
    if(estado!=true){
        $("#loginMal").fadeIn();
        $(".ingreso-datos").css("border","solid 3px red");
    }
    
}

function firmar(){
	var largo=8;
    
//Obtener el contenido del campo 'cedula' para evaluar su longitud
	var cedula=$('#cedula').val();
    
	if(cedula.length<largo){
//Si el largo del contenido de 'cedula' es menor al establecido... 
		$("#loginMal").html("asdfkjalsdfjañj");
        $('#loginMal').fadeIn();
        loginMal();
//        
//		document.forms['acceso'].submit(
//			function(event){
//				event.preventDefault();
//			}
//		);
	}
	else{
		$('#GUI_Ingreso').hide();
		$('#espere').show();
		enviar();
	}
}


$(document).ready(
	function() {
		
	});