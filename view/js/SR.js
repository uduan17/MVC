function seleccionarPrecio(){
    var $horas = document.getElementById('precio2');
    var $precio = document.getElementById('LenguajeSeleccionado')
    // var lenguaje = $precio2.value;

    var precio = $horas.value*7800

    $precio.value =  `${precio}`;

}