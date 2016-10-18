<html>
  <head>
    <meta <charset="utf-8">
    <title>Probando Alumno</title>
  </head>
  <body>

    <?php
        //incluimos la clase Alumno
        include 'Alumno.php';

        //Probando Atributos
        $alumno1 = new Alumno();

        $alumno1->setNombre('Sandro');
        echo "El nombre del alumno es " .$alumno1->getNombre();

        $alumno1->setEdad('17');
        echo "</br> La edad es " .$alumno1->getEdad();

        $alumno1->setCurso('2');
        echo "</br> Su curso es " .$alumno1->getCurso();

        $alumno1->setCiclo('Daw');
        echo "</br> Cursando el ciclo " .$alumno1->getCiclo();
    ?>
  </body>
</html>
