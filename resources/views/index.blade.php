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
            <li role="presentation" class="active"><a href="/">Inicio</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Exámen <b>Pago fácil </b></h3>
      </div>

      <h2>Empleados</h2>
      <table class="table table-condensed" ng-init="listaEmpleados()">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Fecha de nacimiento</th>
            <th>Ingresos anuales</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in empleados">
            <td>@{{ item.id}}</td>
            <td>@{{ item.nombre }}</td>
            <td>@{{ item.apellido_paterno }}</td>
            <td>@{{ item.apellido_materno }}</td>
            <td>@{{ item.fecha_nacimiento }}</td>
            <td>@{{ item.ingresos_anuales }}</td>
          </tr>

        </tbody>
      </table>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
