<?php
        
    $x1=0;
    $y1=0;
    $x2=0;
    $y2=0;
    $x3=0;
    $y3=0;
    $x41=0;
    $y41=0;
    $x42=0;
    $y42=0;
    $x43=0;
    $y43=0;
    $x44=0;
    $y44=0;
    $barco3=0;
    $barco4=0; 
    if (isset($_POST['Enviar']))
     {
         
        $vida=$_POST['vidad'];
        $gano=$_POST['gano'];
        $L=$_POST['Letra'];
        $N=$_POST['Num'];
        $L=strtoupper($L);
        $M= $L .$N;
        $r=$_POST['c'];
        $c=$r .$M .", ";
        

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
      $barco3=$_POST['barco3'];
      $barco4=$_POST['barco4'];

      var_dump($_POST["barco3"]);
      echo "<br>";
      var_dump($_POST["barco4"]);
     }
     else {
         
         $vida=8;
         $gano=0;
         $ganarpartida=0;
         $L="0";
         $N="0";
         //Aqui checa la posición de las naves (aleatoriamente), primero checasi es horizontal o vertical, despues checa las coordenadas de cada nave
        /*$PosicionA;
        $PosicionB;*/
        //Se inicia con la nave de 3
        //Orientación; 1=arriba, 2=derecha, 3=abajo, 4=izquierda
        
        $contador=0;
        $contador1=0;
        $PosicionB_ejeX;
        $PosicionB_ejeY;
        //$Orientación = rand(1, 4);
        $PosicionA_ejeX=rand(1, 10);
        $PosicionA_ejeY=rand(1, 10);
        //Se utiliza a $PosicionA_ejeX y Y como el punto inicio para el barco, y ya dependiendo de la orientación, se aumenta
        //Si $Orientación==1 => $PosicionA_ejeY se resta2, $Orientación==2 => $PosicionA_ejeX se aumenta 2 y <10, 
        //barco de 3
        while($contador == 0)
        {
          $Orientación = rand(1, 4);
          $PosicionA_ejeX=rand(1, 10);
          $PosicionA_ejeY=rand(1, 10);
          $PosicionB_ejeX=$PosicionA_ejeX;
          $PosicionB_ejeY=$PosicionA_ejeY;
          $PosicionC_ejeX=$PosicionA_ejeX;
          $PosicionC_ejeY=$PosicionA_ejeY;
          if($Orientación==1 && ($PosicionA_ejeY - 2)>0 ){
            $PosicionC_ejeY-=2;
            $PosicionB_ejeY-=1;
            $contador ==1;
            //echo "Hola1";
          }elseif ($Orientación ==2 && ($PosicionA_ejeX +2)<11) {
            $PosicionC_ejeX+=2;
            $PosicionB_ejeX+=1;
            $contador =1;
            //echo "Hola2";
          }elseif ($Orientación==3 && ($PosicionA_ejeY +2)<11){
            $PosicionC_ejeY+=2;
            $PosicionB_ejeY+=1;
            $contador =1;
            //echo "Hola3";
          }elseif ($Orientación==4 && ($PosicionA_ejeX-2)>0){
            $PosicionC_ejeX-=2;
            $PosicionB_ejeX-=1;
            $contador =1;
            //echo "Hola4";
          }
        }
        /*echo $Orientación."O <br>";        
        echo $PosicionA_ejeX."AX <br>";
        echo $PosicionA_ejeY."AY <br>";
        echo $PosicionB_ejeX."BX <br>";
        echo $PosicionB_ejeY."BY <br>";
        echo $PosicionC_ejeX."CX <br>";
        echo $PosicionC_ejeY."CY <br>";*/
        
        //Crear array del barco3 con las coordenadas
        $barco3= $PosicionA_ejeX.'-'.$PosicionA_ejeY.'-'.$PosicionB_ejeX.'-'.$PosicionB_ejeY.'-'.$PosicionC_ejeX.'-'.$PosicionC_ejeY;
        /*[$PosicionA_ejeX,
                  $PosicionA_ejeY,
                  $PosicionB_ejeX,
                  $PosicionB_ejeY,
                  $PosicionC_ejeX, 
                  $PosicionC_ejeY
                  ];*/
        //var_dump($barco3);
        //barco 4
        $Orientación = rand(1, 4);
        while($contador1 == 0){
          $Posiciona_ejeX=rand(1, 10);
          $Posiciona_ejeY=rand(1, 10);
          $Posicionb_ejeX=$Posiciona_ejeX;
          $Posicionb_ejeY=$Posiciona_ejeY;
          $Posicionc_ejeX=$Posiciona_ejeX;
          $Posicionc_ejeY=$Posiciona_ejeY;
          $Posiciond_ejeX=$Posiciona_ejeX;
          $Posiciond_ejeY=$Posiciona_ejeY; 
          if($Orientación == 1 &&  ($Posiciona_ejeY-3)>0 ){
            $Posicionb_ejeY-=1;
            $Posicionc_ejeY-=2;
            $Posiciond_ejeY-=3;
            //echo "Hola1";
            $contador1=1;
          }elseif ($Orientación == 2 && ($Posiciona_ejeX+3)<11) {
            $Posicionb_ejeX+=1;
            $Posicionc_ejeX+=2;
            $Posiciond_ejeX+=3;
            //echo "Hola2";
            $contador1=1;
          }elseif ($Orientación == 3 && ($Posiciona_ejeY+3)<11 ) {
            $Posicionb_ejeY+=1;
            $Posicionc_ejeY+=2;
            $Posiciond_ejeY+=3;
            //echo "Hola3";
            $contador1=1;
          }elseif($Orientación == 4 && ($Posiciona_ejeX-3)>0){
            $Posicionb_ejeX-=1;
            $Posicionc_ejeX-=2;
            $Posiciond_ejeX-=3;
            //echo "Hola4";
            $contador1=1;
          }
        }
        //Crear array del barco4 con las coordenadas
        $barco4= $Posiciona_ejeX.'-'.$Posiciona_ejeY.'-'.$Posicionb_ejeX.'-'.$Posicionb_ejeY.'-'.$Posicionc_ejeX.'-'.$Posicionc_ejeY.'-'.$Posiciond_ejeX.'-'.$Posiciond_ejeY;
        /*$barco4= [$Posiciona_ejeX,
                  $Posiciona_ejeY,
                  $Posicionb_ejeX,
                  $Posicionb_ejeY,
                  $Posicionc_ejeX, 
                  $Posicionc_ejeY,
                  $Posiciond_ejeX, 
                  $Posiciond_ejeY
                  ]; */     
      echo "<br>";
        
        echo $Orientación."O <br>";        
        echo $Posiciona_ejeX."AX <br>";
        echo $Posiciona_ejeY."AY <br>";
        echo $Posicionb_ejeX."BX <br>";
        echo $Posicionb_ejeY."BY <br>";
        echo $Posicionc_ejeX."CX <br>";
        echo $Posicionc_ejeY."CY <br>";
        echo $Posiciond_ejeX."dX <br>";
        echo $Posiciond_ejeY."dY <br>";
        //var_dump($barco4);
         
     }
     $Findeljuego=$_POST['Finde'];
     if($vida==0 || $gano>=7)
     {
       $Findeljuego=0;
     }
     else{
      $Findeljuego=1;
     }
     var_dump($_POST);

  if($Findeljuego==1)
  {

    $arb3=explode("-",$barco3);
    $arb4=explode("-",$barco4);

    for($i=0;$i<=10;$i++){
         for($j=0;$j<=10;$j++){
                 $arreglo[$i][$j]="<img src='./Mar.png' width='30' height='30'></th>";
         }
     }

     if (isset($_POST['Enviar']))
     {
      $x1=$_POST['k'];
      $y1=$_POST['y'];
      $x2=$_POST['x2'];
      $y2=$_POST['y2'];
      $x3=$_POST['x3'];
      $y3=$_POST['y3'];
      $x41=$_POST['x41'];
      $y41=$_POST['y41'];
      $x42=$_POST['x42'];
      $y42=$_POST['y42'];
      $x43=$_POST['x43'];
      $y43=$_POST['y43']; 
      $x44=$_POST['x44'];
      $y44=$_POST['y44'];    
    }
    
        //primer barco
        if($L==$arb3[0] && $N==$arb3[1])
        {
          $x1=$L;
          $y1=$N;
          $perderv=0;
          if (isset($_POST['Enviar']))
          {
            $ganarpartida=1;
          }
        }   
        else if($L==$arb3[2] && $N==$arb3[3])
        {
          $x2=$L;
          $y2=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        }   
        else if($L==$arb3[4] && $N==$arb3[5])
        {
          $x3=$L;
          $y3=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        }
        else if($L==$arb4[0] && $N==$arb4[1])
        {
          $x41=$L;
          $y41=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        }
        else if($L==$arb4[2] && $N==$arb4[3])
        {
          $x42=$L;
          $y42=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        }
        else if($L==$arb4[4] && $N==$arb4[5])
        {
          $x43=$L;
          $y43=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        } 
        else if($L==$arb4[6] && $N==$arb4[7])
        {
          $x44=$L;
          $y44=$N;
          $perderv=0;
          if (isset($_POST['Enviar'])) 
          {
            $ganarpartida=1;
          }
        }           
        else
        {
          $arreglo[$N][$L]="<img src='./error.png' width='30' height='30'></th>";
          if (isset($_POST['Enviar']))
          {
            $perderv=1;
            $ganarpartida=0;
          }
        }

    if($x1==$arb3[0] && $y1==$arb3[1])
    {
      $arreglo[$y1][$x1]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x2==$arb3[2] && $y2==$arb3[3])
    {
      $arreglo[$y2][$x2]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x3==$arb3[4] && $y3==$arb3[5])
    {
      $arreglo[$y3][$x3]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x41==$arb4[0] && $y41==$arb4[1])
    {
      $arreglo[$y41][$x41]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x42==$arb4[2] && $y42==$arb4[3])
    {
      $arreglo[$y42][$x42]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x43==$arb4[4] && $y43==$arb4[5])
    {
      $arreglo[$y43][$x43]="<img src='./Barco.png' width='30' height='30'></th>";
    }
    if($x44==$arb4[6] && $y44==$arb4[7])
    {
      $arreglo[$y44][$x44]="<img src='./Barco.png' width='30' height='30'></th>";
    }

       

    echo "<h1>Batalla Naval</h1>";
    echo "<h3>Vidas:";
    if (isset($_POST['Enviar'])){
     if($perderv==1)
    {
      $vida--;
      $perderv=0;
    } else if($ganarpartida==1)
    {
      $gano++;
      $ganarpartida=0;
    }
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
     echo $c;
     echo "<br>";
     echo "Numero de Barcos Acertados:";
     echo $gano;
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
       echo "Posición X(Letra):<input type='text' name='Letra' required>";
       echo "Posición Y(Número):<input type='number' name='Num' min='1' max='10' required>";
       echo "<input type='hidden' name='vidad' value=$vida>";
       echo "<input type='hidden' name='c' value=$c>";
       echo "<input type='hidden' name='k' value=$x1>";
       echo "<input type='hidden' name='y' value=$y1>";
       echo "<input type='hidden' name='x2' value=$x2>";
       echo "<input type='hidden' name='y2' value=$y2>";
       echo "<input type='hidden' name='x3' value=$x3>";
       echo "<input type='hidden' name='y3' value=$y3>";
       echo "<input type='hidden' name='x41' value=$x41>";
       echo "<input type='hidden' name='y41' value=$y41>";
       echo "<input type='hidden' name='x42' value=$x42>";
       echo "<input type='hidden' name='y42' value=$y42>";
       echo "<input type='hidden' name='x43' value=$x43>";
       echo "<input type='hidden' name='y43' value=$y43>";
       echo "<input type='hidden' name='x44' value=$x44>";
       echo "<input type='hidden' name='y44' value=$y44>";
       echo "<input type='hidden' name='Finde' value=$Findeljuego>";
       echo "<input type='hidden' name='gano' value=$gano>";
       echo "<input type='submit' name='Enviar' value='Disparar!!'>";
       echo "<input type='hidden' name='barco3' value=$barco3>";
       echo "<input type='hidden' name='barco4' value=$barco4>";
     echo "</form>";
     echo "<br><br>";
  }
  else{
    if($vida==0){
      echo "<h1>Perdiste</h1>";
      echo "<h2>Vidas:0</h2>";
    }
    else if($gano>=7)
    {
      echo "<h1>Ganaste</h1>";
      echo "<h2>Vidas:</h2>" .$vida;
    }
    //Opcion volver
    /* $vida=8;
    $gano=0;
    $Findeljuego=1;
    $c=0;
    echo "<form action='BatallaNaval.php' method='post'>";
     echo"<input type='submit' name='Enviar' value='Disparar!!'>";
     echo "</form>";*/
  }
 ?>