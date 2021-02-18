var app = angular.module('tradingApp').config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
}]);;
app.controller('tradeCtr', function($scope, $http, $filter) {
   
   alert("sdsdd");
});