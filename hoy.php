<link rel="stylesheet" href="./css/hoy.css">

<body>
<!-- Descripcion: En esta actividad mostramos la fecha actual utilizando php y añadiendole un bonito estilo -->
<!-- Autor: Aguayo Santana Carlos Samael -->
<!-- Fecha:El dia de hoy es 3 de octubre de 2022 -->
<div id="fecha">
  <?php
  echo date('d-m-y 📅📆 ');
  ?>
</div><br><br>
<div id="etc">
  <?php
  echo ("Nombre:Carlos Samael Aguayo Santana");
  echo '<br>';
  print("Especialidad:Programacion Grado:Quinto Semestre");
  echo '<br>';
  printf("Desarrolla aplicaciones web con conexion a base de datos");
  echo '<br>';
  echo("Fecha: 5 de octubre de 2022");
  echo '<br>';
  print("Esta pequeña y simple pagina ha sido creada utilizando lenguaje php
  y para que tenga una bonita vista gregamos un poco de css")
  ?>
</div>
</body>