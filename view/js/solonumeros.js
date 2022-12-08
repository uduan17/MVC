//*SOLO NUMEROS*\\
function solonumeros(e){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    numeros="1234567890";
    especiales="8-37-38-46-164";
    teclado_especial=false;
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial==true;break;
        }
    }
    if(numeros.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
}