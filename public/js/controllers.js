(function () {

  angular.module('app.controllers', [])

  
  /*************************************************
       EMPLEADOS CONTROLLER
  **************************************************/
    .controller('empleadosController', [
      '$scope',
      'empleadosService',
      '$window',
      function ($scope, empleadosService, $window) {
        
        $scope.listaEmpleados = function(){
          $scope.loading=true;
          empleadosService.listaEmpleados().then(function(data){
          console.log(data);
            switch(data.estatus){
            case false: 
              $scope.success=false;
              $scope.error = data.error;
              break;
            case true:
              $scope.empleados = data.empleados
              break;
            }
            $scope.loading=false;
          });
        }

        $scope.guardarEmpleado = function(){
          $scope.loading=true;
          empleadosService.guardarEmpleado($scope.formData).then(function(data){
          console.log(data);
            switch(data.estatus){
            case false: 
              $scope.success=false;
              $scope.errors = data.errors;
              break;
            case true:
              $window.location.href='/';
              break;
            }
            $scope.loading=false;
          });
        }

        $scope.buscarEmpleado = function(){
          $scope.loading=true;
          empleadosService.buscarEmpleado($scope.formData).then(function(data){
          console.log(data);
            switch(data.estatus){
            case false: 
              $scope.success=false;
              $scope.error = data.error;
              break;
            case true:
              $window.location.href=data.empleado.id;
              break;
            }
            $scope.loading=false;
          });
        }

        
      }])

  
  
})();