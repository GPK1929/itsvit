angular.module('spaceportApp').controller('LoginController', [
    '$scope',
    '$http',
    '$cookies',
    '$location',
    function($scope, $http, $cookies, $location){
        document.title = 'Spaceport | Login';
        $scope.error_data = '';
        $scope.myFunction = function(data) {
            $http({
                method : "POST",
                url : "authenticate",
                data: data,
            })
            .then(function pageSucces(response) {
                console.log(response);
                    if(response.data.token){
                        $cookies.put('token', response.data.token);
                        $scope.error_data = '';
                        $location.path('/dashboard');
                    }else{
                        $scope.error_data = response.data.message;
                    }
            }, function(response) {
                $scope.error_data  = "Something went wrong";
            });
        }
    },

]);