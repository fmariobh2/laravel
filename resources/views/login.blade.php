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
        <div class="wrapper">
          
          <form method="post" action="login" name="Login_Form" class="form-signin">       
              <h3 class="form-signin-heading">Bienvenido! Inicia sesión</h3>
              <hr class="colorgraph"><br>
              @if(Session::has('error_login') )
              <div  class="alert alert-danger" >
              {{ Session::get('error_login')}}
              </div>
              @endif
              <div class="form-group">
              <label>Nombre de usuario</label>
              <input type="text" class="form-control" name="email" placeholder="introduce: examen" required="" autofocus="" />
              </div>
              <div class="form-group"> 
              <label>Contraseña </label>
              <input type="password" class="form-control" name="password" placeholder="introduce: examen" required=""/>          
              </div>
              <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Entrar</button>        
          </form>     
        </div>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
