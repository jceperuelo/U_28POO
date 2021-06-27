<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
//definicion clase objeto//
class Tabla {

    //Atributos de clase//
  private $mat=array();
  private $colorFuente=array();
  private $colorFondo=array();
  private $cantFilas;
  private $cantColumnas;

  //Metodos de clase
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor,$cfue,$cfon)
  {
    $this->mat[$fila][$columna]=$valor;
    $this->colorFuente[$fila][$columna]=$cfue;
    $this->colorFondo[$fila][$columna]=$cfon;
  }

  public function inicioTabla()
  {
    echo '<table border="1">';
  }

  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo '<td style="color:'.$this->colorFuente[$fi][$co].';background-color:'.$this->colorFondo[$fi][$co].'">'.$this->mat[$fi][$co].'</td>';
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
         $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

//Creación y asignación de objetos//
$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1","#C42323","#FFFF88");
$tabla1->cargar(1,2,"2","#C42323","#FFFF88");
$tabla1->cargar(1,3,"3","#C42323","#FFFF88");
$tabla1->cargar(2,1,"4","#C42323","#FFFF88");
$tabla1->cargar(2,2,"5","#C42323","#FFFF88");
$tabla1->cargar(2,3,"6","#C42323","#FFFF88");
$tabla1->graficar();
?>
    
</body>
</html>
