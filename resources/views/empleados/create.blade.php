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

      <h2>Agregar Empleado </h2>
      <div  class="alert alert-danger" ng-if="success==false">
        <ul>
          <li ng-repeat="item in errors"> @{{ item.toString() }}</li>
        </ul>
        @{{ error }}
      </div>
      <form role="form" ng-submit="guardarEmpleado()" name="formEmpleado" novalidate>
        <div class="form-group">
          <label for="ejemplo_email_1">Nombre</label>
          <input type="text" class="form-control" name="nombre" ng-model="formData.nombre"
                 placeholder="Introduce el nombre" required>
          <small class="text-danger"  ng-if="!formEmpleado.$pristine && formEmpleado.nombre.$error.required">* Campo requerido</small>
        </div>
        <div class="form-group">
          <label for="ejemplo_email_1">Apellido paterno</label>
          <input type="text" class="form-control" name="apellido_paterno" ng-model="formData.apellido_paterno"
                 placeholder="Introduce el apellido paterno" required>
          <small class="text-danger"  ng-if="!formEmpleado.$pristine && formEmpleado.apellido_paterno.$error.required">* Campo requerido</small>
        </div>
        <div class="form-group">
          <label for="ejemplo_email_1">Apellido materno</label>
          <input type="text" class="form-control" name="apellido_materno" ng-model="formData.apellido_materno"
                 placeholder="Introduce el apellido materno" required>
          <small class="text-danger"  ng-if="!formEmpleado.$pristine && formEmpleado.apellido_materno.$error.required">* Campo requerido</small>
        </div>
        <div class="form-group">
          <label for="ejemplo_email_1">Fecha de nacimiento</label>
          <input type="date" class="form-control" name="fecha_nacimiento" ng-model="formData.fecha_nacimiento"
                 placeholder="Introduce la fecha de nacimiento con formato 0000-00-00 (Año-mes-día)" required>
          <small class="text-danger"  ng-if="!formEmpleado.$pristine && formEmpleado.fecha_nacimiento.$error.required">* Campo requerido</small>
        </div>
        <div class="form-group">
          <label for="ejemplo_email_1">Ingresos anuales</label>
          <input type="number " class="form-control" name="ingresos_anuales" ng-model="formData.ingresos_anuales"
                 placeholder="$0.00" required>
          <small class="text-danger"  ng-if="!formEmpleado.$pristine && formEmpleado.ingresos_anuales.$error.required">* Campo requerido</small>
        </div>
        <button type="submit" class="btn btn-info" >
          <span ng-if="!loading"> Guardar</span>
          <span ng-if="loading">Guardando</span>
        </button>
      </form><br><br>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
