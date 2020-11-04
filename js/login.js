$(document).ready(function(){

    
});

function validate() 
{
    var usuario = $('#usuario').val();
    var pass = $('#pass').val();

    if (usuario == '') {
        alert('Tenés que ingresar tu usuario.');
        return false;
    } else if (pass == '') {
        alert('Tenés que ingresar tu contraseña.');
        return false;
    } else {
        return true;
    }   
}   