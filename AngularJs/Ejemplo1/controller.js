/** el nombre del modulo en el que estemos trabajando debe estar presente en el html, en la parte de ng-app **/
var app = angular.module("DemoAngularJs", []);
app.controller("PrimerController", function($scope) {
    $scope.nombre = "Desarrollo";
});
