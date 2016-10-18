<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio if</title>
  </head>
  <body>
    <?php
    Class Alumno
{
    //Declaración de los aributos

public $Nombre ="";
public $Edad ="";
public $Curso ="";
public $Ciclo ="";

//Getters y setters

//Nombre
public function setNombre($nuevoNombre){
$this->Nombre=$nuevoNombre;
}
public function getNombre(){
return $this->Nombre;
}

//Edad
public function setEdad($nuevoEdad){
if ($nuevoEdad<18){
    $this->Edad=18;
  }else{
    $this->Edad=$nuevoEdad;
  }
}
public function getEdad(){
return $this->Edad;
}

    //Curso
    public function setCurso ($nuevoCurso){
      if ($nuevoCurso=1){
        $this->Curso=$nuevoCurso;
      }elseif ($nuevoCurso=2){
        $this->Curso=$nuevoCurso;
      }else{
        $this->curso=1;
      }
    }

    public function getCurso (){
      return $this->Curso;
}
  //Ciclo
    public function setCiclo($nuevoCiclo){
      $this->Ciclo=$nuevoCiclo;
  }

    public function getCiclo(){
      return $this->Ciclo;
  }
}
?>
