function validateForm(){

    let nombre = document.forms["FormDatos"]["nombre"].value;
    let apellido = document.forms["FormDatos"]["apellido"].value;
    let edad = document.forms["FormDatos"]["edad"].value;
    let correo = document.forms["FormDatos"]["correo"].value;
    
    var dato_a_comprobar = "nombre";
    var valoresAceptados = /^[0-9]+$/;

    if (dato.match(valoresAceptados){
        alert("No lleno el campo de nombre");
        return false;
    }
    if (apellido ==""){
        alert("No lleno el campo apellido")
        return false;
    }
    if (correo ==""){
        alert("No lleno el campo apellido")
        return false;
    }
    if (telefono.toString().length != 8){
        alert("Debe contener un minimo de 8 numeros")
        return false;
    }

}