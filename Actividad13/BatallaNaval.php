<?php
    $vida=8;
    echo "<h1>Batalla Naval</h1>";
    echo "<h3>Vidas:";
    //despliega las vidas
        for($i=0;$i<=$vida;$i++)
        {
            echo "<img src='./corazon.png' width='20'>";
        }
    echo "</h3>";
    echo "Historial de Disparos:";
    echo "<br><br>";
    echo "<table border=1>";

      echo "<tr>";
        echo "<th> </th>";
        echo "<th>A</th>";
        echo "<th>B</th>";
        echo "<th>C</th>";
        echo "<th>D</th>";
        echo "<th>E</th>";
        echo "<th>F</th>";
        echo "<th>G</th>";
        echo "<th>H</th>";
        echo "<th>I</th>";
        echo "<th>J</th>";
      echo "</tr>";
      //Hace el resto de la tabla
      for($i=0;$i<=10;$i++){
        echo "<tr>";
        echo "<th>$i</th>";
        for($j=0;$j<=10;$j++){
                echo "<th><img src='./Mar.png' width='30' height='30'></th>";
          }
        echo "</tr>";
      }
    echo "</table";

    echo "<form action='BatallaNaval.php' method='post'>";
      echo "Posición X(Letra):<input type='text' name='Letra'>";
      echo "Posición Y(Número):<input type='text' name='Num'>";
      echo "<input type='submit' name='Enviar' value='Disparar!!'>";
    echo "</form>";
    echo "<br><br>";
?>