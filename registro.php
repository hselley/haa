<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registro de temas</title>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Registro de Temas</h1>
    </div>
    <div class="container">
      <form class="form-horizontal" action="index.html" method="post">
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
            <input type="text" name="literatura" id="literatura" placeholder="Seleccione la Literatura" class="form-control" value="">
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
