<?php
class Ejemplo
{
    // Atributo
    var $atributo;

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

    // Método para definir atributo
    function DaValor($valor)
    {
        $this->atributo = $valor;
    }

}
 
// Inicie la clase
echo "Iniciando la clase\n";
$obj = new Ejemplo();

// Invoque al método
$obj->MuestraNombre('Leonardo Caballero');

// Invoque al método para definir atributo
$obj->DaValor(4);
echo "El valor del atributo es " . $obj->atributo . "\n";
?>

