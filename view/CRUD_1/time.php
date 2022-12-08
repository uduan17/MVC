<?php
$mifecha= date('Y-m-d H:i a');
$NuevaFecha = date('Y-m-d H:i a', strtotime($mifecha . '+30 second')) ; 

if($mifecha > $NuevaFecha){
        echo "La fecha entrada ya ha pasado";
}else{
        echo "Aun falta algun tiempo";
}
?>



