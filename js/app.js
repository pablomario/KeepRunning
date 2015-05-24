
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
    .when("/dashboard",{
        templateUrl : "./dashboard.php",
        controller: "dashboard"
     })
    .when("/gestion",{
        templateUrl : "./gestion.php",
        controller: "gestion"
     })
    .when("/nuevoevento",{
        templateUrl : "./nuevoevento.php",
        controller: "nuevoevento"
     })
    .when("/listainscritos/:carreraId",{
        templateUrl : "./listainscritos.php",
        controller: "listainscritos"
     })
     .when("/administracion",{
        templateUrl : "./administracion.php",
        controller: "administracion"
     })
    .otherwise({ 
        templateUrl : "./portada.php",
        controller: "portada"
    });
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
                {nombre:"Contacto",          url: "contacto",       icon:"fa fa-comments"}
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
                location.reload();           
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

         $scope.cambioAvatar = function(url){           
            $http.post('lib/cambioAvatar.php', {avatar:url})
                .success(function() {        
                    location.reload();
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }

         $scope.eliminarUsuario = function(){ 
            $http.post('lib/eliminarUsuario.php')
                .success(function() {                      
                    location.href = "./lib/logout.php";
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }  
         
    }]);




    app.controller('gestion', ['$scope','$http', function($scope,$http){
        $scope.lugar = "Gestion";
        $http.get('lib/carrerasOrganizadas.php').success(function(response){
            $scope.carreras = response;  
        }); 


        $scope.cambioEstadoCarrera = function(tipo,carreraId){           
            $http.post('lib/cambioEstadoCarrera.php', {operacion:tipo, idCarrera:carreraId})
                .success(function() {          
                    location.reload();
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }
          
    }]);




     app.controller('nuevoevento', ['$scope','$http', function($scope,$http){
        $scope.lugar = "Nuevo Evento";      

        $scope.altaCarrera = function(){
            $http.post('lib/nuevoEvento.php', {
                    nombre         : $scope.nombre, 
                    edicion        : $scope.edicion,
                    inscripcion    : $scope.inscripcion,
                    fecha          : $scope.fecha,
                    hora           : $scope.hora,
                    contactoEmail  : $scope.contactoEmail,
                    contactoTelef  : $scope.contactoTelef,
                    imagenCabecera : $scope.imagenCabecera,
                    imagenCartel   : $scope.imagenCartel,
                    contenido      : $scope.contenido
                })
                .success(function() {          
                    location.href="index.php#/gestion";
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }          
    }]);




    app.controller('listainscritos', ['$scope','$http', '$routeParams', function($scope,$http,$routeParams){
        

         $scope.lugar = "Lista Inscritos";
         $http.post('lib/listainscritos.php', {idCarrera:$routeParams.carreraId})
                .success(function(responce) {        
                    $scope.listadoInscritos = responce;
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });

    }]);


    







    app.controller('administracion', ['$scope','$http', function($scope,$http){
        $scope.lugar = "Administracion";

        $http.get('lib/carrerasOrganizadasAdmin.php').success(function(response){
            $scope.carreras = response;  
        }); 

        $http.get('lib/listadoUsuariosAdmin.php').success(function(response){
            $scope.usuarios = response;  
        }); 


        $scope.cambioEstadoCarrera = function(tipo,carreraId){
            $http.post('lib/cambioEstadoCarrera.php', {operacion:tipo, idCarrera:carreraId})
                .success(function() {          
                    location.reload();
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }

        $scope.promocionUsuarioAdmin = function(tipo,usuarioEmail){           
            $http.post('lib/promocionUsuarioAdmin.php', {operacion:tipo, usuario:usuarioEmail})
                .success(function() {                           
                    location.reload();
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }

        $scope.eliminarUsuario = function(usuarioEmail){ 
            $http.post('lib/eliminarUsuarioAdmin.php', {usuario:usuarioEmail})
                .success(function() {                      
                    location.reload();
                })
                .error(function() {
                   alert("Ocurrió un error, itnentelo más tarde");
                });
        }       
         
    }]);







