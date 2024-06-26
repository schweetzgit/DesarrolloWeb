<html>
<head></head>
<body> 
  <?php
    $edad=10;
    echo("Edad: $edad.");
		echo("<br><br>");	
    if($edad >= 18){
      echo("Mayor de edad.");
    }else{
      echo("Menor de edad.");
    }

		echo("<br><br>");

    $edad=36;
    echo("Edad: $edad.");
		echo("<br><br>");
    $isMayor=($edad>=18)?"Mayor de edad":"Menor de edad";
    echo($isMayor);

		echo("<br><br>");

    $edad=65;
    echo("Edad: $edad.");
		echo("<br><br>");
    if($edad <= 18){
			echo("Menor de edad.");
    }elseif($edad <= 60){
      echo("Mayor de edad.");
    }else{
      echo("Tercera edad.");
    }
		echo("<br><br>");
		
    $edad=18;
    echo("Edad: $edad.");
		
		echo("<br><br>");
    
		switch($edad){
       case 18:
         echo("Tienes 18, ve por tu credencial IFE.");
         break;
       case 60:
         echo("Tienes 65, ve por tu credencial del INSEN");
         break;
      default:
         echo("Tienes $edad a�os.");
         break;
    }
		
		echo("<br><br>");

    $nombres=array("Lili", "Sele", "Vla", "Clau", "Hugo", "Cari");
    $cantidad=count($nombres);

    for ($indice=0; $indice<$cantidad;$indice++)
      echo($nombres[$indice]."<br>");

		echo("<br><br>");

    $indice=0;
    while($nombres[$indice]!="Hugo"){
      echo($nombres[$indice]."<br>");
			$indice++;
    }
    echo("Te encontre Hugo!!!!!");
		echo("<br><br>");
    
		foreach($nombres as $indice => $valor){
      echo("El nombre con el indice $indice tiene el valor $valor. <br>");
		}
			echo("<br><br>");
    
		$amigos = array(
      array("nombre"=>"Lili", "tel"=>55555), 
      array("nombre"=>"Sele", "tel"=>55554), 
      array("nombre"=>"Vla", "tel"=>55553), 
      array("nombre"=>"Clau", "tel"=>55552), 
    );

    foreach($amigos as $indice => $amigo){
      echo("Los datos del amigo con el indice $indice son: <br>");
      foreach($amigo as $subindice => $subvalor){
        echo($subindice.": ".$subvalor."<br>");    
      }
    }
?>
</body>
</html>