(function () {

  angular.module('app.services', [])
  /**************************************************
               USUARIOS
  **************************************************/
  .factory('empleadosService', ['$http', '$q', '$window', function ($http, $q, $window) {

    function listaEmpleados(){
        var deferred = $q.defer();
        $http.get('/empleados')
          .success(function (data) {
            deferred.resolve(data);
          })
        .error(function(response,data, status){
          console.log(response);
          alert('Lo sentimos a ocurrido un error al mostrar el listado de empleados');
          });
        return deferred.promise;
      };

      function guardarEmpleado(formData){
        var deferred = $q.defer();
        $http.post('/empleados',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
            .error(function(response,data, status){
              alert("ha ocurrido un error");
          });
        return deferred.promise;
      };

    function buscarEmpleado(formData){
        var deferred = $q.defer();
        $http.post('/empleados/find',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
            .error(function(response,data, status){
              console.log(response);
              alert("ha ocurrido un error");
          });
        return deferred.promise;
      };


  
      return {
        listaEmpleados: listaEmpleados,
        guardarEmpleado: guardarEmpleado,
        buscarEmpleado: buscarEmpleado,
        
      };
    }])



  
  
})();