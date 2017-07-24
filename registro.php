<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registro de temas</title>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
  </head>
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
  ?>
  <body>
    <div class="jumbotron text-center">
      <h1>Registro de Temas</h1>
    </div>
    <div class="container">
      <form class="form-horizontal" action="insert.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fecha">Fecha:</label>
          <div class="col-sm-10">
            <input type="date" name="fecha" id="fecha" placeholder="Ingrese la fecha" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="tema">Tema:</label>
          <div class="col-sm-10">
            <input type="text" name="tema" id="tema" placeholder="Ingrese el tema" class="form-control" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="literatura">Literatura:</label>
          <div class="col-sm-10">
            <select class="form-control" name="literatura">
              <?php
                for ($i=1; $i <= sizeof($lit) ; $i++) {
                  $cad = "<option value=\"" . $i . "\">" . $lit[$i] . "</option>";
                  echo $cad;
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="paginas">Páginas:</label>
          <div class="col-sm-10">
            <input type="text" name="paginas" id="paginas" placeholder="Ingrese las páginas del tema" class="form-control" value="">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success btn-block">Registrar tema</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
