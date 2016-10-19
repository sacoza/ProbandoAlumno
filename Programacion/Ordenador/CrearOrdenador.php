<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio if</title>
  </head>
  <body>
    <?php
    //incluimos la clase Ordenador
            include 'Ordenador.php';

            //Objetos
            $Ordenador1 = new Ordenador();

            $Ordenador1->setMarcaOrdenador('apple');
            echo "La marca del Ordenador es " .$Ordenador1->getMarcaOrdenador();

            $Ordenador1->setNumRam('8');
            echo "</br> El número de ram es " .$Ordenador1->getNumRam();

            $Ordenador2 = new Ordenador();

            $Ordenador2->setMarcaOrdenador('asus');
            echo "La marca del Ordenador es " .$Ordenador1->getMarcaOrdenador();

            $Ordenador2->setNumRam('16');
            echo "</br> El número de ram es " .$Ordenador1->getNumRam();
        ?>
      </body>
    </html>
