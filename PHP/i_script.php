<html>
<head></head>
<body> 
  <?php
    $nombres=array("Lili", "Sele", "Vla", "Clau", "Hugo", "Cari");
    echo("Eres mi amigo con indice: ".$_POST['nombre']."<br>");
    echo("Tu nombre es:". $nombres[$_POST['nombre']].".");
  ?>
</body>
</html>