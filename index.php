<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Temas HAA</title>
    <style media="screen">
      body div h1 {
        text-align: center;
      }
    </style>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron text-center">
        <h1>Temas del Grupo HAA</h1>
        <h2>Aprendiendo a Amar</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Tema</th>
              <th>Literatura</th>
              <th>Página</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $con = mysqli_connect("localhost", "geeker", "selley", "haa");

              // Verificar conexión
              if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              // Obtengo una lista de los nombres de los libros en la tabla "Literatura"
              // El resultado se almacena en el arreglo $lit y el índice coíncide con el ID de la BD
              $lit = array();
              $i = 1;
              $result = mysqli_query($con, "SELECT nombre FROM literatura");
              while ($row = mysqli_fetch_array($result)) {
                $lit[$i++] = $row['nombre'];
              }

              // Obtengo la lista de los temas desde la BD
              $result = mysqli_query($con,"SELECT * FROM entrada ORDER BY fecha DESC;");
              $i = 1;
              while (($row = mysqli_fetch_array($result)) == true && $i<=5) {
                echo "<tr>";
                echo "<td>" . $row['fecha'] . "</td>";
                echo "<td>" . $row['tema'] . "</td>";
                echo "<td>" . $lit[$row['literatura']] . "</td>";
                echo "<td>" . $row['paginas'] . "</td>";
                echo "</td>";
                $i++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
