<html>

<head>

</head>

<body>

  <?php

  // Esta es la forma de dar formato a la fecha
  // $dia = date("l", strtotime($_POST['fecha']));
  // echo $dia;



  $conexion = new mysqli("localhost", "admin", "1234", "tienda");
  $conexion->set_charset("utf8");
  $consulta = "SELECT * FROM contactos";
  $listado = $conexion->query($consulta);


  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $alta = $_POST['alta'];
  $fecha = $_POST['fecha'];

  // Este echo se hace para comprobar el dato que tiene la propiedad/variable
  // echo $nombre . " ";
  // echo $apellidos . " ";
  // echo $alta . " ";
  // echo $fecha . " ";


  $sql = "INSERT INTO contactos (nombre, apellidos, alta, fechaNacimiento) 
          VALUES ('$nombre', '$apellidos', '$alta', '$fecha')";

  $inserta = $conexion->query($sql);

  ?>

  <script>
  window.location = "listado.php";
  </script>

  <!-- <a href="listado.php">Ver datos agregados</a> -->


</body>

</html>