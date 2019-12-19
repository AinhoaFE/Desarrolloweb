function validarFormulario( form ) {
var motivo = "";
/*
 motivo += validarNombre( nom );
 motivo += validarMail( form.mail );
 motivo += validarMensaje (form.mensaje);

 if (motivo != "") {
 alert("Algunos campos no están completos:\n" + motivo);
 return false;
 }
 return true;
}

function validarNombre( campo ) {
 var error = "";
 var ilegales = /\W/; // Solo permitimos letras, números y guiones bajos
 if (campo.value == "") {
 campo.style.background = 'Yellow';
 error = "No has introducido el nombre.\n";
 } else if ((campo.value.length < 3) || (campo.value.length > 20))
{
 campo.style.background = 'Yellow';
 error = "El nombre de usuario tiene que tener más de 3 caracteres y menos de 20.\n";
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
 var ilegales = /\W/; // Solo permitimos letras, números y guiones bajos
 if (campo.value == "") {
 campo.style.background = 'Yellow';
 error = "No introdujiste ningún mensaje.\n";
 } else if ((campo.value.length < 5) || (campo.value.length > 50))
{
 campo.style.background = 'Yellow';
 error = "El nombre de usuario tiene que tener más de 5 caracteres y menos de 50.\n";
 } else if (ilegales.test(campo.value)) {
 campo.style.background = 'Yellow';
 error = "El mensaje contiene caracteres ilegales.\n";
 } else {
 campo.style.background = 'White';
 }
 return error;
}
*/
function inicializa_xhr() {
  if(window.XMLHttpRequest) {
    return new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}
function crea_query_string() {
  var nom = document.getElementById("nom");
  var mail = document.getElementById("mail");
  var tema = document.getElementById("tema");
   var mensaje = document.getElementById("mensaje");

  return "nom=" + encodeURIComponent(nom.value) +
         "&mail=" + encodeURIComponent(cp.value) +
         "&tema=" + encodeURIComponent(tema.value) +
         "&mensaje=" + encodeURIComponent(mensaje.value) +
         "&nocache=" + Math.random();
}

function valida() {
  peticion_http = inicializa_xhr();
  if(peticion_http) {
    peticion_http.onreadystatechange = procesaRespuesta;
    peticion_http.open("POST", "http://localhost/Sparrow101/datos.txt", true);

    peticion_http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var query_string = crea_query_string();
    peticion_http.send(query_string);
  }
}

function procesaRespuesta() {
  if(peticion_http.readyState == READY_STATE_COMPLETE) {
    if(peticion_http.status == 200) {
      document.getElementById("respuesta").innerHTML = peticion_http.responseText;
    }
  }
}