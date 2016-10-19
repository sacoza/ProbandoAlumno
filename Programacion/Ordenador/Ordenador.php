<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio if</title>
  </head>
  <body>
    <?php
        Class Ordenador
{
  Public $MarcaOrdenador="";
  Public $NumRam="";

  //MarcaOrdenador
public function setMarcaOrdenador($nuevoMarcaOrdenador){
$this->Nombre=$nuevoMarcaOrdenador;
}
public function getMarcaOrdenador(){
return $this->MarcaOrdenador;
}

//NumRam
public function setNumRam($nuevoNumRam){
if ($nuevoNumRam<8){
    $this->NumRam=8;
  }else{
    $this->NumRam=$nuevoNumRam;
  }
}
}
?>
