<?php
      //Aqui checa la posición de las naves (aleatoriamente), primero checasi es horizontal o vertical, despues checa las coordenadas de cada nave
      /*$PosicionA;
      $PosicionB;*/
      //Se inicia con la nave de 3
      //Orientación; 1=arriba, 2=derecha, 3=abajo, 4=izquierda
      $contador=0;
      $contador1=0;
      $Orientación = rand(1, 4);
      $PosicionA_ejeX=rand(1, 10);
      $PosicionA_ejeY=rand(1, 10);
      //Se utiliza a $PosicionA_ejeX y Y como el punto inicio para el barco, y ya dependiendo de la orientación, se aumenta
      //Si $Orientación==1 => $PosicionA_ejeY se resta2, $Orientación==2 => $PosicionA_ejeX se aumenta 2 y <10, 
      while($contador == 0)
      {
        $PosicionA_ejeX=rand(1, 10);
        $PosicionA_ejeY=rand(1, 10);
        $PosicionB_ejeX=$PosicionA_ejeX;
        $PosicionB_ejeY=$PosicionA_ejeY;
        if($Orientación==1 && ($PosicionA_ejeY - 2)>0 ){
          $PosicionB_ejeY-=2;
          $contador ==1;
          //echo "Hola1";
        }elseif ($Orientación ==2 && ($PosicionA_ejeX +2)<11) {
          $PosicionB_ejeX+=2;
          $contador =1;
          //echo "Hola2";
        }elseif ($Orientación==3 && ($PosicionA_ejeY +2)<11){
          $PosicionB_ejeY+=2;
          $contador =1;
          //echo "Hola3";
        }elseif ($Orientación==4 && ($PosicionA_ejeX-2)>0){
          $PosicionB_ejeX-=2;
          $contador =1;
          //echo "Hola4";
        }
      }
      //Crear array del barco con las coordenadas
      $barco1= [$PosicionA_ejeX,
                $PosicionA_ejeY, 
                $PosicionB_ejeX, 
                $PosicionB_ejeY
    ];
    
    for($i=0; $i<4; $i++)
    {
      echo $barco1[$i];
    }

      echo $Orientación."\n";
      echo $PosicionA_ejeX."\n";
      echo $PosicionA_ejeY."\n";
      echo $PosicionB_ejeX."\n";
      echo $PosicionB_ejeY."\n";
      //Naves de 4
      while($contador1==0)
      {
        
      }


      /*echo $Orientación;
      $PosicionC[0]=rand(2, 9)."\n";
      echo $PosicionC[0]; 
      $PosicionC[1]=rand(2, 9)."\n";
      echo $PosicionC[1]; 
      //Para el indice 0, es el eje x, para el indice 1, es el eje Y
      $PosicionB[0] = $PosicionC[0];
      $PosicionB[1] = $PosicionC[1];
      $PosicionA[0] = $PosicionC[0];
      $PosicionA[1] = $PosicionC[1];*/
      /*echo $PosicionB[0];
      echo $PosicionB[1];
      echo $PosicionA[0];
      echo $PosicionA[1];  */
      //Compara si la nave es horizontal o vertical y modifica las coordenadas de la nave
     /* if($Orientación == 1 || $Orientación == 3)
      {
          $PosicionA[1]--;
          $PosicionB[1]++;
      }elseif($Orientación == 2 || $Orientación ==4)
      {
        $PosicionA[0]--;
        $PosicionB[0]++;
      }
      echo $PosicionB[0];
      echo $PosicionB[1];
      echo $PosicionA[0];
      echo $PosicionA[1];*/

      //Nave de 4:
      /*$Orientación = rand(1, 4);
      echo $Orientación;*/
    
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

    echo "<form action='BatallaNaval.php' method='POST' target='_self'>";
      echo "Posición X(Letra):<input type='text' name='Letra'>";
      echo "Posición Y(Número):<input type='number' name='Num'>";
      echo "<input type='hidden' name='vidad' value=$vida>";
      echo "<input type='hidden' name='Pos3_A' value=$PosicionA[0]>";
      echo "<input type='hidden' name='Pos3_A' value=$PosicionA[1]>";
      echo $PosicionA[0];
      echo "<input type='submit' name='Enviar' value='Disparar!!'>";
    echo "</form>";
    echo "<br><br>";
    var_dump ($_POST);
?>