	 // Instanciamos el objeto XMLHttpRequest
 conexion= new XMLHttpRequest(); 
 // Indicamos un manejador de eventos para cuando llegue la información
 conexion.onreadystatechange=function() {
   if (this.readyState == 4 ) {
   // Va mostrar la información obtenida en la llamada
   alert( this.responseText );
     var datos_devueltos = this.responseText;
      //Llamamos a la función que imprimirá el resultado en el div
      imprime_resultado(datos_devueltos, div);
   }

 } 
 // Hacemos la llamada
 conexion.open("GET", "datos.txt" );
 conexion.send(null);
 
 function imprime_resultado(datos_devueltos, div) {
 alert("entra");
  document.getElementById("div").innerHTML = datos_devueltos;
}