<?php
include 'Auto.php';
$auto =new Auto("ABC-123", "NEGRO", "2024");
while(true){
    print"Menu \n";
    print "Controles del auto \n";
    print "1. Encender / Apagar \n";
    print "2. Arrancar / Detener \n";
    print "3. Acelerar \n";
    print "4. ver informacion del auto \n";

    $opc= readline();
    switch($opc){
        case 1:
            $auto -> EncenderApgar();
            break;
        case 2:
            $auto-> ArranDetAuto();
            break;
        case 3:
            $auto->Acelerar();
            break;
        case 4:
            $auto-> MostrarDatos();
            break;
    }
}



?>