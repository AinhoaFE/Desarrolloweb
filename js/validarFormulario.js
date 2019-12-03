function validarFormulario( form ) {
var motivo = "";
 motivo += validarNombre( form.name );
 motivo += validarMail( form.mail );
 motivo += validarMensaje (form.message);

 if (motivo != "") {
 alert("Algunos campos no están completos:\n" + motivo);
 return false;
 }
 return true;
}
function validarNombre( campo ) {
 var error = "";
 var ilegales = /\W/; // Solo permitimos letras, números y guiones
bajos
 if (campo.value == "") {
 campo.style.background = 'Yellow';
 error = "No introdujiste el nombre.\n";
 } else if ((campo.value.length < 3) || (campo.value.length > 20))
{
 campo.style.background = 'Yellow';
 error = "El nombre de usuario tiene que tener más de 3
caracteres y menos de 20.\n";
 } else if (ilegales.test(campo.value)) {
 campo.style.background = 'Yellow';
 error = "El nombre de usuario contiene caracteres ilegales.\n";
 } else {
 campo.style.background = 'White';
 }
 return error;
}
function validarMail( campo ) {
	var error = "";
	
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(campo)){
   alert("La dirección de email " + valor + " es correcta.");
  } else {
   alert("La dirección de email es incorrecta.");
    campo.style.background = 'Yellow';
  }
}

function validarMensaje( campo ) {
 var error = "";
 var ilegales = /\W/; // Solo permitimos letras, números y guiones
bajos
 if (campo.value == "") {
 campo.style.background = 'Yellow';
 error = "No introdujiste ningún mensaje.\n";
 } else if ((campo.value.length < 5) || (campo.value.length > 50))
{
 campo.style.background = 'Yellow';
 error = "El nombre de usuario tiene que tener más de 5
caracteres y menos de 50.\n";
 } else if (ilegales.test(campo.value)) {
 campo.style.background = 'Yellow';
 error = "El mensaje contiene caracteres ilegales.\n";
 } else {
 campo.style.background = 'White';
 }
 return error;
}