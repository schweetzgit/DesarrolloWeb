<html>
<head></head>
<body> 
<form name="f1" id="f1" action="i_script.php" method="post">
Elige un nombre:
<select name="nombre" id="nombre">
  <option value="0">Lili</option>
  <option value="1">Sele</option>
  <option value="2">Vla</option>
  <option value="3">Clau</option>
  <option value="4">Hugo</option>
  <option value="5">Cari</option>
</select>
<br>
<input type="submit" value="ENVIAR" name="okf1" id="okf1">
</form>

<form name="f2" id="f2" action="j_script.php" method="post">
Nuevo amigo, teclea tu nombre:
<input type="text" name="new_nombre" id="new_nombre">
<br>
Eres soltero?:
<input type="checkbox" name="soltero" id="soltero" value ="SI">
<br>
Sexo:
<br> 
femenino: <input type="radio" name="sexo" value="1">
masculino:<input type="radio" name="sexo" value="2">
<br>
<input type="submit" value="ENVIAR" name="okf2" id="okf2">
</form>

</body>
</html>