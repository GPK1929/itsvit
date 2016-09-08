angular.module('spaceportApp').controller('DashboardController', [
    '$scope',
    '$http',
    '$route',
    '$cookies',
    function($scope, $http, $cookies){
        document.title = 'Spaceport | Dashboard';
        console.log('cookies',$cookies);
        $http({
            method : "GET",
            url : "api/branches"
        })
        .then(function pageSucces(response) {
            console.log(response.data);
        }, function(response) {
        //Second function handles error
            console.log('Something went wrong');
            $scope.content = "Something went wrong";

        });

    }    
    
]);