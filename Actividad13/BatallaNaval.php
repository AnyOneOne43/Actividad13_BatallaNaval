<?php
    //Aqui checa la posición de las naves (aleatoriamente), primero checasi es horizontal o vertical, despues checa, primero la de 4 y luego la de 3
    /*$PosicionA;
    $PosicionB;*/
    $Orientación;

    $Orientación = rand(1, 4);
    echo $Orientación;
    $PosicionC[0]=rand(2, 9)."\n";
    echo $PosicionC[0]; 
    $PosicionC[1]=rand(2, 9)."\n";
    echo $PosicionC[1]; 
    //Para el indice 0, es el eje x, para el indice 1, es el eje Y
    $PosicionB[0] = $PosicionC[0];
    $PosicionB[1] = $PosicionC[1];
    $PosicionA[0] = $PosicionC[0];
    $PosicionA[1] = $PosicionC[1];
    /*echo $PosicionB[0];
    echo $PosicionB[1];
    echo $PosicionA[0];
    echo $PosicionA[1];  */
    if($Orientación == 1 || $Orientación == 3)
    {
        $PosicionA[1]--;
        $PosicionB[1]++;
    }elseif($Orientación == 2 || $Orientación ==4)
    {
      $PosicionA[0]--;
      $PosicionB[0]++;
    }    
    
    if ($_POST['Enviar']=="Disparar!!")
    {
        
        $vida=$_POST['vidad']; 
    }
    else {
        
        $vida=8;
    }
    for($i=0;$i<=10;$i++){
        for($j=0;$j<=10;$j++){
                $arreglo[$i][$j]="<img src='./Mar.png' width='30' height='30'></th>";
          }
      }
    echo "<h1>Batalla Naval</h1>";
    echo "<h3>Vidas:";
    //despliega las vidas
        for($i=1;$i<=$vida;$i++)
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
      for($i=1;$i<=10;$i++){
        echo "<tr>";
        echo "<th>$i</th>";
        for($j=1;$j<=10;$j++){
            echo "<th>";
                echo $arreglo[$i][$j];
            echo "</th>";
          }
        echo "</tr>";
      }
    echo "</table>";
    echo "<br>";

    echo "<form action='BatallaNaval.php' method='post'>";
      echo "Posición X(Letra):<input type='text' name='Letra'>";
      echo "Posición Y(Número):<input type='number' name='Num'>";
      echo "<input type='hidden' name='vidad' value=$vida>";
      echo "<input type='submit' name='Enviar' value='Disparar!!'>";
    echo "</form>";
    echo "<br><br>";
?>