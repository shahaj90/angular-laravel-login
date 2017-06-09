MetronicApp.factory('UserModel', ['$http', '$cookies', function ($http, $cookies) {
        var userModel = {};
        var loginResponse = {};
        userModel.checkLogin = function (data) {
            return $http.post(baseUrl + "CheckLogin", data)
                    .then(function (response) {
                        if (response.data.status == 'success') {
                            loginResponse.status = response.data.status;
                            $cookies.put('userData', JSON.stringify(response.data.data));
                        } else {
                            loginResponse.status = response.data.status;
                            loginResponse.message = response.data.message;
                        }
                        
                        return loginResponse;
                    });
        };

        userModel.getUserStatus = function () {
            var status = $cookies.get('userData');
            if (status) {
                return true;
            } else {
                return false;
            }
        };

        userModel.getUserObject = function () {
            var userObject = angular.fromJson($cookies.get('userData'));
            return userObject;

        };

        return userModel;
    }]);