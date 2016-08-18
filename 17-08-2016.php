<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php 
    $esEstudiante=fox;
    $edad=18;
    $valor_pi=3.1416;
    $nombre="Jose Carlos";
    $semestre=null;
    echo '<p> El tipo de $esEstudiante es:'.gettype($esEstudiante).'</p>';
    echo "<p style='color:blue'>El tipo de $esEstudiante es:".gettype($esEstudiante)."</p>"; 

    echo '<p> El tipo de $esEstudiante es:'.gettype($edad).'</p>';
    echo "<p style='color:green'>El tipo de $esEstudiante es:".gettype($edad)."</p>"; 

    echo '<p> El tipo de $esEstudiante es:'.gettype($valor_pi).'</p>';
    echo "<p style='color:blue'>El tipo de $esEstudiante es:".gettype($valor_pi)."</p>"; 

    echo '<p> El tipo de $esEstudiante es:'.gettype($nombre).'</p>';
    echo "<p style='color:blue'>El tipo de $esEstudiante es:".gettype($nombre)."</p>"; 

      unset($edad);
       echo '<p>El tipo de $edad es:'.gettype($edad).'</p>';

       /*** Operador Ternario ***/
        echo($esEstudiante ?"Hola Estudiante":"Quien Eres");
        echo "<br>";
        echo(3>4?"Incorrecto":"correcto");

       /*** Constantes***/
       //Una constante en PHP se define usando la 
       // funcion define()
       define("MI_NUMERO_TELEFONICO",930200630);
       echo"<p>Mi numero telefonico es:",MI_NUMERO_TELEFONICO,"</p>";
       echo"<p>Mi numero telefonico es:".MI_NUMERO_TELEFONICO."</p>";

       define("MI_NUMERO_TELEFONICO", 950889688);
       echo"<p> Mi numero telefonico es:",MI_NUMERO_TELEFONICO,"</p>";
       /*** Constantes pre definidas***/
       echo __FILE__,"<br>";
       echo __DIR__,"<br>";

   ?>

</body>
</html>