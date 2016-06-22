
<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exámen</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron-narrow.css" rel="stylesheet">

    <script src="/js/angular.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/controllers.js"></script>
    <script src="/js/services.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body ng-controller="empleadosController">

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            Hola {{ Auth::user()->nombre}}  | <a href="/logout">Salir</a> 
          </ul>
        </nav>
        <h3 class="text-muted">Exámen <b>Pago fácil </b></h3>
        <a href="/empleados_" class="btn btn-primary">Inicio</a>
      </div>
      
      
      <table class="table table-condensed" ng-init="listaEmpleados()">
        <thead>
          <tr>
            <th colspan="2"><h2>Detalles del empleado</h2></th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td width="30%"><strong>Id:</strong> </td> <td>{{ $empleado->id }}</td>
          </tr>
          <tr>
            <td><strong>Nombre: </strong></td> <td>{{ $empleado->nombre }}</td>
          </tr>
          <tr>
            <td><strong>Apellido paterno: </strong> </td> <td>{{ $empleado->apellido_paterno }}</td>
          </tr>
          <tr>
            <td><strong>Apellido materno: </strong> </td> <td>{{ $empleado->apellido_materno }}</td>
          </tr>
          <tr>
            <td><strong>Fecha de nacimiento: </strong></td> <td>{{ $empleado->fecha_nacimiento }}</td>
          </tr>
          <tr>
            <td><strong>Ingresos anuales </strong></td> <td>$ {{ $empleado->ingresos_anuales  }}</td>
          </tr>
          </tr>

        </tbody> 
      </table>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
