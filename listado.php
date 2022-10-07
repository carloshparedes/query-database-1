<html>

<head>
  <style>
  table {
    border: 2px solid black;
    border-collapse: collapse;

  }

  tr {
    border: 1px solid gray;

  }

  tr:hover {
    background-color: gray;
  }

  td {
    padding: 5px;
  }

  img {
    cursor: pointer
  }
  </style>
</head>

<body>

  <?php
  // include("bbdd.php");  
  $conexion = new mysqli("localhost", "admin", "1234", "tienda");
  $conexion->set_charset("utf8");
  $consulta = "SELECT * FROM contactos";
  $listado = $conexion->query($consulta);

  ?>

  <Table>
    <?php while ($fila = $listado->fetch_object()) { ?>
    <tr>

      <td>
        <form id="fborrar<?= $fila->codigo ?>" method="post" action="borrar.php">
          <input type="hidden" name="codigo" value="<?= $fila->codigo ?>">
        </form>
        <img src="icon_delete.png" onclick="document.getElementById('fborrar<?= $fila->codigo ?>').submit()"
          alt="delete" title="delete" style="height: 16px; width: 16px;">
      </td>

      <td><?= $fila->codigo ?></td>
      <td><?= $fila->nombre ?></td>
      <td><?= $fila->apellidos ?></td>
      <td><?= $fila->alta ?></td>
      <td><?php echo date("d/m/Y", strtotime($fila->fechaNacimiento)); ?></td>
      <td>
        <form id="fmodificar<?= $fila->codigo ?>" method="post" action="formularioModificar.php">
          <input type="hidden" name="codigo" value="<?= $fila->codigo ?>">
        </form>
        <img src="update.png" onclick="document.getElementById('fmodificar<?= $fila->codigo ?>').submit()" alt="update"
          title="update" style="height: 16px; width: 16px;">
      </td>
    </tr>
    <?php } ?>
  </Table> <br>
  <a href="Alta.html">Agregar registro</a>
</body>

</html>