
var app = angular.module("app", ["ngRoute"] );


/**
 * RouteProvide
 * Prametros de las rutas 
 */
app.config(['$routeProvider', function($routeProvider)
{
    $routeProvider.when("/carreras",{
        templateUrl : "./carreras.php",
        controller : "carreras"
    })
    .when("/nuevousuario",{
        templateUrl : "./nuevousuario.php",
        controller : "nuevousuario"
    })
    .when("/organizadores",{
    	templateUrl : "./organizadores.php",
    	controller : "organizadores"
    })
    .when("/ayuda",{
        templateUrl : "ayuda.php",
        controller : "ayuda"
    })
    .when("/contacto",{
        templateUrl : "./contacto.php",
        controller : "contacto"
    })
    .when("/single/:carreraId",{
        templateUrl : "./single.php",
        controller : "single"
     })
    .when("/portada",{
        templateUrl : "./portada.php",
        controller: "portada"
     })
    .when("/privacidad",{
        templateUrl : "./privacidad.php",
        controller: "privacidad"
     })
    .when("/tables",{
        templateUrl : "./tables.php",
        controller: "portada"
     })    
    .when("/dashboard",{
        templateUrl : "./dashboard.php",
        controller: "dashboard"
     })
    .when("/gestion",{
        templateUrl : "./gestion.php",
        controller: "gestion"
     })
    .otherwise({ templateUrl : "./portada.php", controller: "portada" });
}]);


/* Controllers Genericos */

    app.controller('portada', ['$scope', function($scope)
    {
        $scope.lugar = "Portada";
    }]);


    app.controller('carreras', ['$scope', function($scope)
    {
    	$scope.lugar = "Proximas Carreras";
    }]);

    app.controller('nuevousuario', ['$scope', function($scope)
    {
    	$scope.lugar = "Nuevo Usuario";
    }]);

    app.controller('organizadores', ['$scope', function($scope)
    {
    	$scope.lugar = "Organizadores";
    }])

    app.controller('ayuda', ['$scope', function($scope)
    {
        $scope.lugar = "Ayuda";
    }]);

    app.controller('contacto', ['$scope', function($scope)
    {
        $scope.lugar= "Contacto";
    }]);

    app.controller('privacidad', ['$scope', function($scope)
    {
        $scope.lugar= "Politica de privacidad y aviso legal";
    }]);


    app.controller('tables', ['$scope', function($scope)
    {
        $scope.lugar= "tables";
         $http.get('lib/inscripcionDashboard.php').success(function(response){
            $scope.carreras = response;  
        }); 
    }]);


    /**
     * Construccion del Menu
     */
    app.factory('enlacesMenu', function(){
        return{
            menu : [
                {nombre:"Portada",           url: "portada",        icon:"fa fa-home"},
                {nombre:"Proximas Carreras", url: "carreras",       icon:"fa fa-globe"},
                {nombre:"Nuevo Usuario",     url: "nuevousuario",   icon:"fa fa-user-plus"},
                {nombre:"Organizadores",     url: "organizadores",  icon:"fa fa-cube"},
                {nombre:"Ayuda",             url: "ayuda",          icon:"fa fa-life-ring"},
                {nombre:"Contacto",          url: "contacto",       icon:"fa fa-comments"},
                {nombre:"Tables",            url: "tables",         icon:"fa fa-calendar"}
            ]
        };
    });

    app.controller('enlacesmenu', ['$scope', 'enlacesMenu', function($scope,enlacesMenu){
        $scope.menu = enlacesMenu.menu;
    }])


    /**
     * Controller proximasCarreras
     * Este controlador obtiene todas las carreras actuales traidas a traves de ajax 
     * las almacena en objeto JSON
     * @param  {[type]} $scope   [description]
     * @param  {[type]} $http){                      $http.get("lib/ajaxProximas.php").success(function(carrerasP){        $scope.carreras [description]
     * @return {[type]}          [description]
     */
    app.controller('proximasCarreras', ['$scope','$http', function($scope,$http){     
        $http.get("lib/ajaxProximas.php").success(function(carrerasP){
            $scope.carreras = carrerasP;
        });
    }]);


    /**
     * Controller Single
     * funcion que obtiene el ID de una carrera en el RouteParams y por ajax
     * obtiene el objeto JSON.
     * @param  {[type]} $scope          [description]
     * @param  {[type]} $http           [description]
     * @param  {[type]} $routeParams){                  $scope.identificador [description]
     * @return {[type]}                 [description]
     */
    app.controller('single', ['$scope','$http', '$routeParams', function($scope,$http,$routeParams){
        // ID de la carrera
         $scope.identificador = $routeParams.carreraId;
         
         // obtenemos el id a traves de $routeParams.carreraId que esta en los RouteProviders
        $http.get('lib/ajaxSingle.php?id='+$routeParams.carreraId+' ').success(function(response){
            $scope.carrera = response;  
        }); 

        
        // Ajax para saber si puede inscribirse el usuario si esta inscrito le saco su dorsal
        $scope.estaInscrito = function(dataCarrera){          
            var resultado = -1;
            $http.post('lib/estaInscrito.php', {idCarrera:dataCarrera})
                .success(function(responce) {          
                    $scope.dorsal = responce;
                })
                .error(function() {
                    $scope.dorsal = responce;  
                });       
        };


        $scope.inscripcion = function(dataCarrera){       
            $http.post('lib/inscripcion.php', {idCarrera:dataCarrera})
            .success(function(responce) {              
               location.href ="index.php#/dashboard";           
            })
            .error(function() {
                alert("Ocurrió un error, intentelo más tarde");
            });    
        };


    }]);


    app.controller('dashboard', ['$scope','$http', function($scope,$http){
        $scope.lugar = "Dashboard";
        $http.get('lib/inscripcionDashboard.php').success(function(response){
            $scope.carreras = response;  
        }); 
         
    }]);


    app.controller('gestion', ['$scope','$http', function($scope,$http){
        $scope.lugar = "Gestion";
        $http.get('lib/carrerasOrganizadas.php').success(function(response){
            $scope.carreras = response;  
        }); 
          
    }]);






