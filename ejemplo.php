<?php
class Ejemplo
{
    // Constructor
    function Ejemplo()
    {
       // Nada por aquí
    }

    // Método
    function MuestraNombre($nombre)
    {
       echo "El nombre es " . $nombre . "\n";
    }

}
 
// Inicie la clase
echo "Iniciando la clase\n";
$obj = new Ejemplo();

// Invoque al método
$obj->MuestraNombre('Leonardo Caballero');

?>
