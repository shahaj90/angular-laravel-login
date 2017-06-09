/* Setup user page controller */
angular.module('MetronicApp').controller('UserController', ['$rootScope', '$scope', 'settings', '$http', 'UserModel', '$location',
    '$timeout',
    function ($rootScope, $scope, settings, $http, UserModel, $location, $timeout) {
        $scope.$on('$viewContentLoaded', function () {
            // initialize core components
            App.initAjax();

            // set default layout mode
            $rootScope.settings.layout.pageContentWhite = true;
            $rootScope.settings.layout.pageBodySolid = false;
            $rootScope.settings.layout.pageSidebarClosed = false;
        });

        //Default value assign
        $scope.email = 'gshahaj@gmail.com';
        $scope.password = 'pass';
        $scope.logError = false;

        //login Check
        $scope.checkLogin = function () {
            var data = {
                email: $scope.email,
                password: $scope.password
            };

            UserModel.checkLogin(data).then(function (loginResponse) {
                if (loginResponse.status == 'success') {
                    $scope.logError = false;
                    $location.path('/dashboard');
                } else {
                    $scope.logError = true;
                    $scope.errorMsg = loginResponse.message[0];
                }
                //Set time for hide
                $timeout(function () {
                    $scope.logError = false;
                }, 2000);
            });
        };


    }]);
