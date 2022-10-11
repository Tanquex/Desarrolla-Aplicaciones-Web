<?php 
$nombre=$_POST['name'];
$tel=$_POST['tel'];
$edad=$_POST['edad'];

echo "<center><h1> Hola $nombre, tu edad es de $edad, y el numero que nos diste es $tel </h1></center>";
echo "<a href='../html/greetingForm.html'>Regresar</a>";
?>
