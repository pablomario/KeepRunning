var app = angular.module("app", ["ngRoute"]);


app.config(['$routeProvider', function($routeProvider)
{
    $routeProvider.when("/carreras",
    {
        templateUrl : "carreras.php",
        controller : "carreras"
    })
    .when("/nuevousuario",
    {
        templateUrl : "nuevousuario.php",
        controller : "nuevousuario"
    })
    .when("/organizadores",
    {
    	templateUrl : "organizadores.php",
    	controller : "organizadores"
    })
    .when("/ayuda",
    {
        templateUrl : "ayuda.php",
        controller : "ayuda"
    })
     .when("/contacto",
    {
        templateUrl : "contacto.php",
        controller : "contacto"
    })
     .when("/single/:carreraId",{
        templateUrl : "single.php",
        controller : "single"
     })
    .otherwise({ redirectTo : "/" });
}]);

app.controller('single', ['$scope', '$routeParams' , function($scope,$routeParams){
    $scope.variable = "single";
    $scope.carreraId = $routeParams.carreraId;
}])

app.controller('carreras', ['$scope', function($scope)
{
	$scope.variable = "carreras";

}]);

app.controller('nuevousuario', ['$scope', function($scope)
{
	$scope.variable = "nuevousuario";

}]);

app.controller('organziadores', ['$scope', function($scope)
{
	$scope.variable = "organizadores";

}])

app.controller('ayuda', ['$scope', function($scope)
{
    $scope.variable = "ayuda";

}]);

app.controller('contacto', ['$scope', function($scope)
{
    $scope.variable = "contacto";

}]);


// SECCIONES DEL MENU
app.factory('enlacesMenu', function(){
    return{
        menu : [
            {nombre:"Portada",           url: "index.php",      icon:"fa fa-home"},
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
    $scope.caca = "AAAAAAAAAAAAAAAAAAAAAA";
}])


// AJAX

app.controller('proximasCarreras', ['$scope','$http', function($scope,$http){
    $scope.caca ="Pura mierda el JS";
    
    $http.get("lib/ajaxphp.php").success(function(carrerasP){
        $scope.carreras = carrerasP;

    });

}]);


app.controller('dcAjax', ['$scope','$http', function($scope,$http){

    $http.get("lib/ajaxphp.php").success(function(textoP){
        $scope.resultado = textoP;
    });

}]);
