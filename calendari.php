<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/tablas.css" />
  <title>Calendario</title>
  <?php
    $filas = 6;
    $columnas = 7;
    $dia=1;
    $diaSem = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    $finMes = date("t");
    $primerDia = mktime(0, 0, 0, date("n"), 1, date("Y"));
    $inicioSem = date("N", $primerDia);
    $inicioMes = false;
   ?>
</head>
<body>
  <h1>CALENDAR</h1>
  <?php
    echo "";
    echo "<h2>Today is: ".date('l jS \of F Y')."</h2>";
  ?>
  <table>
    <?php
      echo "<tr><th class='cabecera' colspan='7'>".date("F")."  ".date("Y")."</th></tr>";
      echo "<tr>";
      for($x=0; $x<$columnas; $x++){
        echo "<th class='cabecera'>".$diaSem[$x]."</th>";
      }
      for($i=0; $i<$filas; $i++){
        echo "<tr>";
        for($j=0; $j<$columnas; $j++){
          if($inicioMes == false){
            if($j>=$inicioSem-1){
              $inicioMes=true;
            }else{
              echo "<td></td>";
            }
          }
          if($inicioMes==true){
            if($dia<=$finMes){
              echo "<td>".$dia."</td>";
              $dia++;
            }
          }
        }
        echo "</tr>";
      }
     ?>
  </table>
</body>
</html>
