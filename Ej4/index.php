<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
class CabeceraPagina {
    //Ateributos de clase//
  private $titulo;
  private $ubicacion;
  private $colorFuente;
  private $colorFondo;
    //Metodos de clase//
  public function __construct($tit,$ubi,$colorFuen,$colorFon)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorFuente=$colorFuen;
    $this->colorFondo=$colorFon;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
    echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

//Creación y asignación de objetos//
$cabecera=new CabeceraPagina('El blog del programador','center','#A52C2C','#33C6FF');
$cabecera->graficar();
?>
    
</body>
</html>