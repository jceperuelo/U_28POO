<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

class Empleado {

    //Atributos de class//
    private $nombre;
    private $sueldo;

    //Metodos de class//
    public function inicializar ($nom,$saldo)
    {
        $this->nombre=$nom;
        $this->sueldo=$saldo;
    }
        public function impuestos ()
    {
        echo $this->nombre;
        // echo $this->sueldo;
        echo "<br>";
        if ($this->sueldo>3000)
        echo "Debe pagar impuestos";
        else
        echo "No debe pagar impuestos";
        echo "<br>";
    }
}

//Creación y asignación de objetos//

$perl=new Empleado();
$perl->inicializar("Juan",2000);
$perl->impuestos();
$perl=new Empleado();
$perl->inicializar("Gerardo",4000);
$perl->impuestos();
$perl=new Empleado();
$perl->inicializar("Sandra",3500);
$perl->impuestos();
$perl=new Empleado();
$perl->inicializar("Núria",2000);
$perl->impuestos();

?>
    
</body>
</html>