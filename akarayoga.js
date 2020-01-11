function validarFormularioContacto() {

    //Me creo una variable booleana que me ayudará a saber si todos los datos son correctos o no
    var check = true;

    //Creamos variables por cada uno de los campos
    var nombre, apellidos, email, telefono, mensaje, fechaSistema;

    //Asignamos los valores del formulario a cada una de las variables
    nombre = document.forms["frmContacto"]["nombre"].value;
    apellidos = document.forms["frmContacto"]["apellidos"].value;
    email = document.forms["frmContacto"]["email"].value;
    telefono = document.forms["frmContacto"]["telefono"].value;
    mensaje = document.forms["frmContacto"]["mensaje"].value;


    //Fecha del sistema del usuario:
    fechaSistema = new Date();


    var mensajeError = 'Por favor, compruebe los siguientes apartados:\n';

    if (nombre == null || nombre.length == 0 || /\d/.test(nombre) || /^\s+$/.test(nombre)) {
        document.forms["frmContacto"]["nombre"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Nombre inválido\n";

    } else {
        document.forms["frmContacto"]["nombre"].style.backgroundColor = "#ffffff";
    }

    /* -> 2) Comprobamos el APELLIDO
        Es exactamente lo mismo que el anterior, por tanto evito redundancias.
    */
    if (apellidos == null || apellidos.length == 0 || /\d/.test(apellidos) || /^\s+$/.test(apellidos)) {
        document.forms["frmContacto"]["apellidos"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Apellidos inválidos\n";

    } else {
        document.forms["frmContacto"]["apellidos"].style.backgroundColor = "#ffffff";
    }


    /* -> 3) Comprobamos el MAIL
          - Comprobamos que el formato introducido por el usuario es valido y está en concordancia con lo que sería un mail
          Sin embargo, no comprueba que la direccion sea real
      */


    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email) == false) {

        document.forms["frmContacto"]["email"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Mail incorrecto\n";
    } else {
        document.forms["frmContacto"]["email"].style.backgroundColor = "#ffffff";
    }

    /* -> 4) Comprobamos el TELEFONO
          - Comprobamos que solo haya números
          - Comprobamos que haya un total de 9 numeros
      */

    if (!(/^\d{9}$/.test(telefono))) {
        document.forms["frmContacto"]["telefono"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Numero telefónico no permitido (Máximo 9 números, solo admite carácteres numéricos)\n";
    } else {
        document.forms["frmContacto"]["telefono"].style.backgroundColor = "#ffffff";
    }


    /* -> 5) Comprobamos que el MENSAJE:
          - Tenga un texto mayor que, por ejemplo, 20 letras.
          - No este compuesto solo de espacios
      */


    if (mensaje.length < 20 || /^\s+$/.test(mensaje)) {
        document.forms["frmContacto"]["mensaje"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- El mensaje debe de tener un mínimo de 20 carácteres\n";
    } else {
        document.forms["frmContacto"]["mensaje"].style.backgroundColor = "#ffffff";
    }





    /*Por útlimo lanzamos un mensaje para que el usuario revise los campos vacios, en el cual 
    se habrán ido concatenando todos los mensajes de error, de tal modo que sólo tendremos un 
    único mensaje.    
    */
    if (check == false) {
        /*El mensaje solo se muestra cuando el check es falso, lo que quiere decir que algun 
        campo es incorrecto
        */
        alert(mensajeError);
        return false;
    } else {
        //Solo hacemos la llamada Ajax cuando el formulario es correcto
        llamadaAjaxContacto();
        return true;
    }
}

function llamadaAjaxContacto() {

    /* 1) Creamos la instancia al xmlHttp request */
    var peticionAjax = new XMLHttpRequest();

    /* 2) Abrimos la conexion (ejemplo sencillo obteniendo texto de un archivo.)
    GET - > Para obtener informacion. Lo vamos a hacer desde un archivo.txt pero se podria
    hacer una consulta a una base de datos
            Sincrono false
            Asincrono true
    */

    peticionAjax.open("GET", "Ejemplo_apertura_AJAX_Contacto.txt", true);

    /* 3) Cada vez que el metodo 'onreadystatechange' se ejecutará esta funcion
    cuando la conexion no se inicializaba, readystatement está a 0, pero 
        - cuando cuando cambia de 0 a 1 se ejecuta
        - de 1 a 2 se vuelve a ejecutar
        - de 2 a 3 se ejecuta... (Así hasta llegar a 4)
        
        Tenemos que comprobar que readystate es 4 (Lo que quiere decir que la respuesta ha finalizado
        y tenemos una respuesta) y que el status sea igual 200 (revisamos que sea correcta y tengamos una respuesta) */

    peticionAjax.onreadystatechange = function() {

        //Utilizamos un if para hacer las comprobaciones
        if (peticionAjax.readyState == 4 && peticionAjax.status == 200)

        //Asignamos la variable del html del header h2 del ejemplo-ajax
            var mensajeEjemploAjax = document.getElementById('ejemplo-ajax');

        /*Con el siguiente comando, asignamos el valor del txt que hemos cargado al header anterior*/
        mensajeEjemploAjax.innerHTML = peticionAjax.responseText;
    }

    //Enviamos la peticion
    peticionAjax.send();
}

function validarFormularioRegistro() {

    //Mensaje de error
    var mensajeError = "Por favor, revise los siguientes campos:\n";

    //Primer check, lo inicializamos en true, solo será false si entra al if de alguna validación
    var check = true;

    //Creamos variables para cada campo
    var nombre, apellidos, email, telefono, fechaUsuario, fechaSistema, contrasena, contrasenaCheck;

    //Asignamos valores
    nombre = document.forms["frmRegistro"]["nombre"].value;
    apellidos = document.forms["frmRegistro"]["apellidos"].value;
    email = document.forms["frmRegistro"]["email"].value;
    telefono = document.forms["frmRegistro"]["telefono"].value;

    //Fecha nacimiento: 
    fechaUsuario = new Date(document.forms["frmRegistro"]["fecha-nacimiento"].value);

    //Fecha del sistema del usuario:
    fechaSistema = new Date();

    //Revisamos que la contraseña coincida
    contrasena = document.forms["frmRegistro"]["contrasena"].value
    contrasenaCheck = document.forms["frmRegistro"]["contrasena-check"].value
        //Revisamos el nombre
    if (nombre == null || nombre.length == 0 || /\d/.test(nombre) || /^\s+$/.test(nombre)) {

        document.forms["frmRegistro"]["nombre"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Nombre inválido\n";

    } else {

        document.forms["frmRegistro"]["nombre"].style.backgroundColor = "#ffffff";
    }

    //Revisamos apellidos
    if (apellidos == null || apellidos.length == 0 || /\d/.test(apellidos) || /^\s+$/.test(apellidos)) {

        document.forms["frmRegistro"]["apellidos"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Apellidos inválidos\n";

    } else {
        document.forms["frmRegistro"]["apellidos"].style.backgroundColor = "#ffffff";
    }


    //Revisamos mail
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email) == false) {

        document.forms["frmRegistro"]["email"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Mail incorrecto\n";

    } else {
        document.forms["frmRegistro"]["email"].style.backgroundColor = "#ffffff";
    }

    //Revisamos telefono
    if (!(/^\d{9}$/.test(telefono))) {
        document.forms["frmRegistro"]["telefono"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Numero telefónico no permitido (Máximo 9 números, solo admite carácteres numéricos)\n";
    } else {

        document.forms["frmRegistro"]["telefono"].style.backgroundColor = "#ffffff";

    }


    //Revisamos fecha nacimiento
    var diferencia = Math.round((fechaSistema - fechaUsuario) / (1000 * 60 * 60 * 24 * 365));

    if (diferencia > 120 || diferencia == null || fechaUsuario == null || fechaUsuario == 0 || fechaUsuario == 'Invalid Date') {
        document.forms["frmRegistro"]["fecha-nacimiento"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Fecha de nacimiento errónea\n";


    } else if (diferencia < 18) {

        document.forms["frmRegistro"]["fecha-nacimiento"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Registro válido solo para mayores de 18 años\n";

    } else {
        document.forms["frmRegistro"]["fecha-nacimiento"].style.backgroundColor = "#ffffff";
    }

    //Revisamos contrasena
    if (contrasena != contrasenaCheck) {
        document.forms["frmRegistro"]["contrasena"].style.backgroundColor = "yellow";
        document.forms["frmRegistro"]["contrasena-check"].style.backgroundColor = "yellow";
        check = false;
        mensajeError = mensajeError + "- Las contraseñas no coinciden\n";
    } else {
        document.forms["frmRegistro"]["contrasena"].style.backgroundColor = "#ffffff";
        document.forms["frmRegistro"]["contrasena-check"].style.backgroundColor = "#ffffff";

    }


    //Mostramos errores si los hay, o hacemos la llamada Ajax si todo es correcto
    if (check == false) {
        alert(mensajeError);
        return false;
    } else {

        return true;
    }

}