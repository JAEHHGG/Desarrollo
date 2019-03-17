function miControlador($scope) {
  $scope.mensaje = 'Hola Mundo';

  $scope.generarMensaje = function() {
    $scope.mensaje = Math.random();
  }
}
