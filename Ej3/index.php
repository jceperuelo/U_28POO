<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
class CabeceraPagina {
    //Atributos de clase//
  private $titulo;
  private $ubicacion;
 
    //Metodos de clase//
  public function inizializar($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }

  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

//Creación y asignación de objetos//
$cabecera=new CabeceraPagina();
$cabecera->inizializar('El blog del programador','center');
$cabecera->graficar();

?>
</body>
</html>