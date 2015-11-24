
Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 10
});
            
$(document).ready(
	function(){
        Webcam.attach( '#cuadro-camara' );
    });

