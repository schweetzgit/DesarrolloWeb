<html><head><title>C O N T A D O R</title></head><body>

Hola amigo! <br><br>
VISITAME...

encuentra el error

<?php
  //ARCHIVO QUE CONTIENE EL NUEMRO ACTUAL DE VISITAS
  $file_name = "visitas.lgf";   	
	//ABRO EL ARCHIVO CON EL NUMERO ACTUAL DE VISITAS
  $file_id = @fopen($file_name,"r");  
  //LEO EL NUMERO ACTUAL DE VISITAS
  $visitas = fread($file_id, filesize($file_name));  
	//INCREMENTO EL NUMERO DE VISITAS
  if ($visitas != "") $visitas++;
  else $visitas = 1;
  @fclose($file_id); 
	//ALMACENO EL NUEVO NUMERO
  $file_id = fopen($file_name,"w");
  @fputs($file_id,$visitas);
  echo("<br>Visitas: ".$visitas);


$contador = "";
  for($i=0;$i<strlen($visitas);$i++) 
  {
    $imagen = substr($visitas,$i,1); // OBTENGO UN DIGITO DEL NUMERO DE VISITAS
    $contador .= "<img src='$imagen.gif'>"; //CONCATENO LA IMAGEN CON EL MISMO NOMBRE QUE EL DIGITO
  }
  @fclose($file_id);  
	echo( "<br><br>Contador de visitas <br>" .$contador. "<br> ...desde el <br>");
?>

</body>
</html>