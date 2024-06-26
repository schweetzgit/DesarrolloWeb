<html>
<head></head>
<body> 
  <?php
    $op1=5;
    $op2=7;
    $suma=$op1+$op2;
    $resta=$op1-$op2;
    $producto=$op1*$op2;
    $cociente=$op1/$op2;
    $modulo=$op1%$op2;
    echo("La suma de ".$op1." y ".$op2. " es ".$suma."<br>");
    echo("La suma de ".$op1." y ".$op2. " es ".($op1+$op2)."<br>");
	echo("La resta de ".$op1." y ".$op2. " es ".$resta."<br>");
    echo($op1.", ".$op1++.", ".$op1+=2);
    echo("<br><br><br>");
    echo("El op1, ".$op1." es un ".gettype($op1).".<br>");
    settype($op1, "double");
    echo("El op 1, ".$op1." es un ".gettype($op1).".");
  ?>
</body>
</html>