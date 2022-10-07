<html>

<head>
  <style>
  #tabla {
    display: flex;
    justify-content: center;
    border-collapse: collapse;
  }

  td {
    padding: 5px;
  }
  </style>
</head>

<body>
  <?php $numero = $_POST["numero"]; ?>

  <h1>Tabla de multiplicar del numero <?php echo $numero; ?></h1>
  <?php echo "<p><a href='formulario.html' autofocus='autofocus' >Intentelo de nuevo</a></p>"; ?>
  <table id="tabla" cols="5">
    <?php for ($i = 0; $i <= 10; $i++) { ?>

    <tr>
      <td><?php echo $numero; ?></td>
      <td>x</td>
      <td><?php echo $i; ?></td>
      <td>=</td>
      <td><?php echo $numero * $i; ?></td>
    </tr>
    <?php } ?>

  </table>

</body>

</html>