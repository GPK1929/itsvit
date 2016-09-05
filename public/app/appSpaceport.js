
var spaceportApp = angular.module("spaceportApp", ["ngRoute"]);

spaceportApp.config(function($routeProvider) {
    $routeProvider
        .when("/",  {
            redirectTo: '/dashboard'
        })
        .when("/dashboard", {
            templateUrl : "app/template/page/dashboard.html",
            controller : "DashboardController"
        })
        .when("/deploy", {
            templateUrl : "app/template/page/deploy.html",
            controller : "DeployController"
        })
        .when("/instances", {
            templateUrl : "app/template/page/list_instances.html",
            controller : "InstancesController"
        })
        .when("/users", {
            templateUrl : "app/template/page/list_users.html",
            controller : "UsersController"

        })
        .when("/settings", {
            templateUrl : "app/template/page/settings.html",
            controller : "SettingsController"
        })
        .otherwise('/');
});
