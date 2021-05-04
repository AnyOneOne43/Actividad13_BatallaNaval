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
     /* echo $PosicionB[0];
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
         
        $c=$_POST['cuenta'];
        $vida=$_POST['vidad'];
        
         $L=$_POST['Letra'];
        $N=$_POST['Num'];
        $M= $L .$N;
        $array=$_POST['arrg[]'];
        $array[$c]=$M;
        $c++;

        switch($L){
          case 'A':
              $L=1;
          break;
          case 'B':
              $L=2;
          break;
          case 'C':
              $L=3;
          break;
          case 'D':
              $L=4;
          break;
          case 'E':
              $L=5;
          break;
          case 'F':
              $L=6;
          break;
          case 'G':
              $L=7;
          break;
          case 'H':
              $L=8;
          break;
          case 'I':
              $L=9;
          break;
          case 'J':
              $L=10;
          break;
          default:
              echo "Indice Invalido";
          break;
      }
    
      if($N>10){
          echo "Numero Invalido";
      }
     }
     else {
         
         $vida=8;
         $c=0;
         $array=array(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
         $L="0";
         $N="0";
         
     }

     if($vida==0)
     {
       $Findeljuego=0;
     }
     else{
      $Findeljuego=1;
     }

  if($Findeljuego==1)
  {

     for($i=0;$i<=10;$i++){
         for($j=0;$j<=10;$j++){
                 $arreglo[$i][$j]="<img src='./Mar.png' width='30' height='30'></th>";
                 
                 if($L==4){
                    $K=$L;
                  } 
                  else{
                    $K=$_POST['k']; 
                  }
                 if($K==4)
                 {
                  $arreglo[3][5]="<img src='./Barco.png' width='30' height='30'></th>";
                 }
                 if($N==3)
                 {
                  $arreglo[7][9]="<img src='./error.png' width='30' height='30'></th>";
                  $perderv=1;
                 }
           }
       }
     echo "<h1>Batalla Naval</h1>";
     echo "<h3>Vidas:";
     if($perderv==1)
     {
       $vida--;
       $perderv=0;
     }
     echo $vida;
     //despliega las vidas
    for($i=1;$i<=$vida;$i++)
    {
      echo "<img src='./corazon.png' width='20' alt='corazon'>";
    }
     echo "</h3>";
     echo "Historial de Disparos:";
     echo "<br>";
     print_r($array);
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

    $r=$c-1;


     echo "<form action='BatallaNaval.php' method='post'>";
       echo "Posición X(Letra):<input type='text' name='Letra' required>";
       echo "Posición Y(Número):<input type='number' name='Num' required>";
       echo "<input type='hidden' name='vidad' value=$vida>";
       echo "<input type='hidden' name='cuenta' value=$c>";
       echo "<input type='hidden' name='arrg[]' value=$array[$r]>";
       echo "<input type='hidden' name='k' value=$K>";
       echo "<input type='hidden' name='fin' value=$Findeljuego>";
       echo "<input type='submit' name='Enviar' value='Disparar!!'>";
     echo "</form>";
     echo "<br><br>";
  }
  else{
    echo "<h1>Perdiste</h1>";
    echo "<h2>Vidas:0</h2>";
    echo "<form action='BatallaNaval.php' method='post'>";
       echo "<input type='submit' name='Enviar' value='Volver'>";
     echo "</form>";
  }
 ?>