$(document).ready(function(){
  $("#datos").click(function(){
    $("#paneldatos").slideToggle("slow");
   if($(this).text() == 'Datos personales -')
       {
           $(this).text('Datos personales +');
       }
       else 
       {
           $(this).text('Datos personales -');
       }
           });
  $("#experiencia").click(function(){
    $("#panelexperiencia").fadeToggle("slow");
  if($(this).text() == 'Experiencia -')
       {
           $(this).text('Experiencia +');
       }
       else 
       {
           $(this).text('Experiencia -');
       }
           });	
	$('#enviar').click(function() {
    if ($('#nombre').val() === '') {
        alert('Debe rellenar el campo nombre');
		return false;
    }
	 if ($('#email').val() === '') {
        alert('Debe rellenar el campo email');
		return false;
    }
	 if ($('#telefono').val() === '') {
        alert('Debe rellenar el campo telefono');
		return false;
    }
	if ($('textarea').val() === '') {
        alert('Debe rellenar el campo experiencia');
		return false;
    }

});
});