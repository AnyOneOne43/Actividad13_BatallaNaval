<?php
        
    $K=0;
    $valid_coord=0;
    $barco3=0;
    $barco4=0; 
    if(isset($_POST['Enviar'] ))
     {
         
        $vida=$_POST['vidad'];
        
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

     /* var_dump($_POST);
      echo "<br>";
      var_dump($_POST["barco3"]);
      echo "<br>";
      var_dump($_POST["barco4"]);*/
     }
     else {
         
         $vida=8;
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
        
      /*echo "<br>";
        
        echo $Orientación."O <br>";        
        echo $Posiciona_ejeX."AX <br>";
        echo $Posiciona_ejeY."AY <br>";
        echo $Posicionb_ejeX."BX <br>";
        echo $Posicionb_ejeY."BY <br>";
        echo $Posicionc_ejeX."CX <br>";
        echo $Posicionc_ejeY."CY <br>";
        echo $Posiciond_ejeX."dX <br>";
        echo $Posiciond_ejeY."dY <br>";
        var_dump($barco4);*/
         
     }

     if($vida==1)
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
                 
                if($L==4 && $N==5){
                    $K=$L;
                    $Y=$N;
                  } else
                  {
                    $arreglo[$N][$L]="<img src='./error.png' width='30' height='30'></th>";
                    $perderv=1;
                    
                    if (isset($_POST['Enviar'])){
                      $K=$_POST['k'];
                      $Y=$_POST['y']; 
                    }
                  }
                 if($K==4 && $Y==5)
                 {
                  $arreglo[$Y][$K]="<img src='./Barco.png' width='30' height='30'></th>";
                 }                   
           }
       }
     echo "<h1>Batalla Naval</h1>";
     echo "<h3>Vidas:";
     if($perderv==1 && isset($_POST["Enviar"]))
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
     if(isset($_POST["c"])){
     echo $c;
    }else{
      echo "No hay disparos";
    }
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
       echo "<input type='hidden' name='k' value=$K>";
       echo "<input type='hidden' name='y' value=$Y>";
       echo "<input type='hidden' name='fin' value=$Findeljuego>";
       echo "<input type='submit' name='Enviar' value='Disparar!!'>";
       echo "<input type='hidden' name='barco3' value=$barco3>";
       echo "<input type='hidden' name='barco4' value=$barco4>";
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