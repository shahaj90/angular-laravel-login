angular.module('MetronicApp').controller('SettingController', function ($rootScope, $scope, $http, $timeout,$cookies,$location) {
    $scope.$on('$viewContentLoaded', function () {
        // initialize core components
        App.initAjax();
    });

    // set sidebar closed and body solid layout mode
    $rootScope.settings.layout.pageContentWhite = true;
    $rootScope.settings.layout.pageBodySolid = false;
    $rootScope.settings.layout.pageSidebarClosed = false;
    
    $scope.msg ='This is setting page';
    
    
});