angular.module('spaceportApp').controller('CommonController', [
    '$scope',
    '$location',
    function($scope, $location){
        $scope.topMenuPath = 'app/template/layout/top_menu.html';
        $scope.sidebarMenuPath ='app/template/layout/sidebar_menu.html';
        // add class to <li> for active page
        $scope.getClass = function (path) {
            console.log($location.path().substr(0, path.length));
            return ($location.path().substr(0, path.length) === path) ? 'active' : '';
        }
        // show/hide menu
        $scope.showHideMenu = function() {
            $(".sidebar-h, .main-wrapp, .crumb-wrap").toggleClass("active");
            if ($('.sidebar-h').hasClass('active')) {
                $('.sidebar-v').css('opacity', '0');
            } else {
                $('.sidebar-v').css({'opacity': '1', 'transition': 'all .9s ease'});
            }
        }  
    }
]);