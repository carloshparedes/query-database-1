<html>

<head>

</head>

<body>

  <?php
  $conexion = new mysqli("localhost", "admin", "1234", "tienda");
  $conexion->set_charset("utf8");
  $consulta = "SELECT * FROM contactos WHERE codigo=" . $_POST['codigo'];
  $listado = $conexion->query($consulta);
  $fila = $listado->fetch_object();
  ?>


  <form action="modificar.php" method="post">
    <label>
      <h1>Actualice los campos</h1>
    </label><br /><br />
    <label>Codigo</label>
    <input type="text" name="codigo" value="<?= $fila->codigo ?>" /> <br />
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?= $fila->nombre ?>" /> <br />
    <label>Apellidos</label>
    <input type="text" name="apellidos" value="<?= $fila->apellidos ?>" /> <br />
    <label>Estas dado de alta</label> <br />
    <label>Si</label>
    <input id="si" type="checkbox" name="alta" value="1" onclick="document.getElementById('no').checked=false;"
      <?= ($fila->alta == 1) ? "checked" : ""; ?> />
    <label>No</label>
    <input id="no" type="checkbox" name="alta" value="0" onclick="document.getElementById('si').checked=false;"
      <?= ($fila->alta == 0) ? "checked" : ""; ?> />
    <br />
    <label>Fecha</label>
    <input type="date" name="fecha" value="<?= $fila->fechaNacimiento ?>" />
    <br /><br />
    <input type="submit" value="ENVIAR" />
    <input type="submit" value="CANCELAR" onclick="listado.php" />

    <?= die() ?>

    <script>
    window.location = "listado.php";
    </script>




</body>

</html>