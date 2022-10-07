<html>

<head>

</head>

<body>

  <?php

  $conexion = new mysqli("localhost", "admin", "1234", "tienda");
  $conexion->set_charset("utf8");

  $consulta = "UPDATE contactos SET nombre='" . $_POST['nombre'] . "', apellidos='" . $_POST['apellidos'] . "', alta='" . $_POST['alta'] . "', fechaNacimiento='" . $_POST['fecha'] . "' WHERE codigo=" . $_POST['codigo'];
  echo $consulta;
  // die();
  $inserta = $conexion->query($consulta);

  ?>

  <script>
  window.location = "listado.php";
  </script>




</body>

</html>