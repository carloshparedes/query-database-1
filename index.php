<html>

<head>

</head>

<body>


  <?php

  if ($_GET != NULL) {
    $nombre = $_GET['nombre'];
    $x = $_GET['x'];
    $y = $_GET['y']; ?>

  <h1 align="center">El usuario <?php echo $nombre; ?>
    ha solicitado operar con los numeros <?php echo $x . " y " . $y; ?></h1>

  <hr>
  <ul>
    <li>Suma: <?php echo $x . " + " . $y . " = " . $x + $y; ?></li>
    <li>Resta: <?php echo $x . " - " . $y . " = " . $x - $y; ?></li>
    <li>Divicion: <?php echo $x . " / " . $y . " = " . $x / $y; ?></li>
    <li>Multiplicacion: <?php echo $x . " * " . $y . " = " . $x * $y; ?></li>
  </ul>
  <?php echo "hola $nombre";
  } else { ?>
  <h1 align="center">¿Quien eres?</h1>
  <?php } ?>

</body>

</html>