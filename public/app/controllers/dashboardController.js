angular.module('spaceportApp').controller('DashboardController', [
    '$scope',
    '$http',
    function($scope, $http){
        document.title = 'Spaceport | Dashboard';
        
        $http({
            method : "GET",
            url : "app/json/dashboard.js"
        })
        .then(function pageSucces(response) {
            console.log(response.data);
        }, function(response) {
        //Second function handles error
            $scope.content = "Something went wrong";
            console,log($scope.content);
        });
    }    
    
]);