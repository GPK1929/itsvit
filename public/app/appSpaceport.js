
var spaceportApp = angular.module("spaceportApp", ["ngRoute","ngCookies"]);

spaceportApp.config(['$routeProvider', '$httpProvider',function($routeProvider, $httpProvider) {
    $routeProvider
        .when("/login", {
            templateUrl : "app/template/page/login.html",
            controller : "LoginController",
            data: {
                private: false
            },

        })
        .when("/", {
            templateUrl : "app/template/page/dashboard.html",
            controller : "DashboardController",
            data: {
                private: false
            },

        })
        .when("/dashboard", {
            templateUrl : "app/template/page/dashboard.html",
            controller : "DashboardController",
            data: {
                private: false
            },

        })
        .when("/deploy", {
            templateUrl : "app/template/page/deploy.html",
            controller : "DeployController",

        })
        .when("/instances", {
            templateUrl : "app/template/page/list_instances.html",
            controller : "InstancesController",

        })
        .when("/users", {
            templateUrl : "app/template/page/list_users.html",
            controller : "UsersController",


        })
        .when("/settings", {
            templateUrl : "app/template/page/settings.html",
            controller : "SettingsController",

        })
        .otherwise('/');

    $httpProvider.interceptors.push(['$q', '$location', '$cookies', function ($q, $location, $cookies) {
        return {
            'request': function (config) {
                console.log('n');
                config.headers = config.headers || {};
                token= $cookies.get('token');
                if (token) {
                    config.headers.Authorization = 'Bearer ' + token;
                }
                return config;
            },
            'responseError': function (response) {
                console.log('f');
                if (response.status === 401 || response.status === 403) {
                    $cookies.remove('token');
                    $location.path('/login');
                }
                return $q.reject(response);
            }
        };
    }]);



}]);

//Check user wenе authentication, if true login page is not available
spaceportApp.run(function($rootScope, $location, $cookies) {

  $rootScope.$on('$locationChangeStart', function(ev, next, current) {

      token= $cookies.get('token');
      if($location.$$path.search('/login') == 0){
          if(token){
              $location.path('/dashboard');
          }
      }
      if(!token){
          $location.path('/login');
      }

  });

});











