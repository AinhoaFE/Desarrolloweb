
function valida(f) {
  var ok = true;
  var error="";
   var ilegales = /\W/; // Solo permitimos letras, números y guiones bajos

  var msg = "Debes escribir algo en los campos:\n";
  if(f.nom.value == "")
  {
    msg += "- Nombre\n";
	
	ok = false;
  }
  
 //Detecta que tenga "x" longitud y que no tenga caracteres raros
	else if ((f.nom.value.length < 3) || (f.nom.value.length > 20))
     {
		//campo.style.background = 'Yellow';
		error = "El nombre de usuario tiene que tener más de 3 caracteres y menos de 20.\n";
		alert(error);
 } else if (ilegales.test(f.nom.value)) {
		//campo.style.background = 'Yellow';
		error = "El nombre de usuario contiene caracteres ilegales.\n";
		alert(error);
 } 
 
 
 //Valida que el mail no está vacio y es un mail correcto
  if(f.mail.value == "")
  {
    msg += "- Mail\n";
    ok = false;
  }
  else if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(f.mail.value))) 
  {
   alert("La dirección de email es incorrecta.");
    //campo.style.background = 'Yellow';
  }
	

//Valida que el mensaje no está vacio ni tiene "x" caracteres
  if(f.mensaje.value == "")
  {
    msg += "- Mensaje\n";
    ok = false;
  }
  else if ((f.mensaje.value.length < 5) || (f.mensaje.value.length > 50))
     {
		//campo.style.background = 'Yellow';
		error = "El mensaje tiene que tener más de 5 caracteres y menos de 50.\n";
		alert(error);
 
 }


  if(ok == false)
    alert(msg);
  
  return ok;

}


//Hacemos la parte de AJAX

	 // Instanciamos el objeto XMLHttpRequest
 conexion= new XMLHttpRequest(); 
 // Indicamos un manejador de eventos para cuando llegue la información
 conexion.onreadystatechange=function() {
   if (this.readyState == 4 ) {
   // Va mostrar la información obtenida en la llamada
  // alert( this.responseText );
     var datos_devueltos = this.responseText;
      //Llamamos a la función que imprimirá el resultado en el div
      imprime_resultado(datos_devueltos, div);
   }

 } 
 // Hacemos la llamada
 conexion.open("GET", "datos.txt" );
 conexion.send(null);
 
 function imprime_resultado(datos_devueltos, div) {
 //alert("entra");
  document.getElementById("div").innerHTML = datos_devueltos;
}