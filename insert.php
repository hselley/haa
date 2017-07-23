<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro exitoso</title>
  </head>
  <body>
    <?php
      $con=mysqli_connect("localhost","geeker","selley","haa");

      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      // escape variables for security
      $fecha = mysqli_real_escape_string($con, $_POST['fecha']);
      $tema = mysqli_real_escape_string($con, $_POST['tema']);
      $literatura = mysqli_real_escape_string($con, $_POST['literatura']);
      $paginas = mysqli_real_escape_string($con, $_POST['paginas']);
      $sql="INSERT INTO entrada (fecha, literatura, tema, paginas)
        VALUES ('$fecha', '$literatura', '$tema', '$paginas');";

      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
      }
      echo "1 record added";

      mysqli_close($con);
    ?>
    <a href="registro.php">Atrás</a>
  </body>
</html>
