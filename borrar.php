<html>

<head>

</head>

<body>

  <?php

  $conexion = new mysqli("localhost", "admin", "1234", "tienda");
  $conexion->set_charset("utf8");

  $consulta = "DELETE  FROM contactos WHERE codigo=" . $_POST['codigo'];


  $inserta = $conexion->query($consulta);

  ?>

  <script>
  window.location = "listado.php";
  </script>




</body>

</html>