<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registro exitoso</title>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
    <style media="screen">
      a, a:hover, a:visited, a:active {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
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
        echo "<div class=\"jumbotron text-center\"><h1>Tema añadido correctamente</h1></div>";
        echo "<a href=\"registro.php\"><button type=\"button\" class=\"btn btn-success btn-block\">Regresar</button></a>";

        mysqli_close($con);
      ?>
    </div>
  </body>
</html>
