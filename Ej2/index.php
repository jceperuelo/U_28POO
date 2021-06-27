<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
class Menu {
    //Atributos de clase//
  private $enlaces=array();
  private $titulos=array();

    //Metodos de clase//
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  public function mostrarHorizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "-";
    }
  }
  public function mostrarVertical()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "<br>";
    }
  }
}

//Creación y asignación de objetos//
//Asignación del menú en horizontal//
$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrarHorizontal();
echo "<br>";
echo "<br>";

//Creación y asignación de objetos//
//Asignación del menú en vertical//
$menu2=new Menu();
$menu2->cargarOpcion('http://www.google.com','Google');
$menu2->cargarOpcion('http://www.yahoo.com','Yhahoo');
$menu2->cargarOpcion('http://www.msn.com','MSN');
$menu2->mostrarVertical();
?>
    
</body>
</html>