Webcam.set({
	width: 320,
	height: 240,
	force_flash: false,
	image_format: 'jpeg',
	jpeg_quality: 90
});

function textLength(value){
   var maxLength = 8;
   if(value.length < maxLength) return false;
   return true;
}


function enviar(){
	Webcam.snap(
		function(data_uri){
			document.getElementById('imagen').value='\x22'+data_uri+'\x22';
			$('#camara').hide();
			document.forms['ingresofuncionarios'].submit();
		}
	);
	
}

function firmar(){
	
}


	
$(document).ready(
	function(){
		Webcam.attach( '#camara' );
		
		$('#ingresofuncionarios').keydown(
			function(event){
				if (event.keyCode == 13){
					$('#GUI_Ingreso').hide();
					$('#espere').show();
					enviar();
				}
			}
		);
		
		$('#boton_R').click(
			function(){
				$('#GUI_Ingreso').hide();
				$('#espere').show();
				enviar();
			}
		);
        var estado=true;
		$('#menu_icono').click(
            function(){
                
                if(estado){
                    $('#menu_principal').animate({
                        width: "+=250px"
                    });
                    $('#menu_items').fadeIn();
                    estado=false;
                    console.log(estado);
                }
                else{
                    $('#menu_principal').animate({
                        width: "-=250px"
                    });
                    $('#menu_items').fadeOut();
                    estado=true;
                }
                
            }
        );
	}
);