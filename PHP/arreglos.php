<html>
<head></head>
<body> 
  <?php
$nombres = array("Lili", "Sele", "Vla", "Clau", "Hugo");
echo($nombres[0]); echo("<br>");
echo($nombres[1]); echo("<br>");
echo($nombres[2]); echo("<br>");
echo($nombres[3]); echo("<br>");
$nombres[5]="Cari";
$indice=6;
$nombres[$indice]="Arju";
echo($nombres[4]); echo("<br>");
echo($nombres[5]); echo("<br>");
echo($nombres[6]); echo("<br>");
echo("<br>");echo("<br>");

$amigo = array("nombre"=>"Lili", "tel"=>55555);
echo($amigo["nombre"]); echo("<br>");
echo($amigo["tel"]); echo("<br>");
echo("<br>");echo("<br>");
$indice="nombre";
echo($amigo[$indice]); echo("<br>");
$indice="tel";
echo($amigo[$indice]); echo("<br>");
echo("<br>");echo("<br>");

$amigos = array(
array("nombre"=>"Lili", "tel"=>55555), 
array("nombre"=>"Sele", "tel"=>55554), 
array("nombre"=>"Vla", "tel"=>55553), 
array("nombre"=>"Clau", "tel"=>55552), 
);
echo($amigos[0]["nombre"]); echo("<br>");
echo($amigos[0]["tel"]); echo("<br>");
echo($amigos[1]["nombre"]); echo("<br>");
echo($amigos[1]["tel"]); echo("<br>");
echo("<br>");echo("<br>");
  ?>

<table border='2'>
  <tr>
    <th>Nombre</th>
    <th>Tel</th>
  </tr>

  <tr>
    <td>  <?php echo("Lili");   ?>     </td>
    <td>  <?php echo("55559");   ?>     </td>
  </tr>

  <tr>
    <td>  <?php echo($amigos[0]["nombre"]);?>     </td>
    <td>  <?php echo($amigos[0]["tel"]);?>        </td>
  </tr>

  <tr>
    <?php echo("<td>".$amigos[0]["nombre"]."</td>");?>
    <?php echo("<td>".$amigos[0]["tel"]."</td>");?>
  </tr>
</table>
</body>
</html>