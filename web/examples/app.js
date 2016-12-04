'use script';

var app = angular.module('app',
    ['ngRoute', 'ngSanitize', 'ngFileUpload'],
    function($httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    }
);

app.controller('UserShowController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {
    console.log('UserShowController');
    console.log($routeParams);

    $http.get('/app.php?route=user_show&id=' + $routeParams.id)
        .then(function (response) {
            $scope.user = response.data.user;
        }, function (response) {
            console.log(response.status);
        });
}]);

app.controller('UserController', ['$scope', '$http', function ($scope, $http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

    console.log('UserController');

    $scope.user = {
        name: 'test Test',
        email: 'test@mail.com'
    };

    $scope.submit = function (user) {
        console.log(user);
        $http.post('/app.php?route=user_new', user)
            .then(function (response) {
                console.log(response);
            }, function (response) {
                console.log('Error status: ' + response.status);
            });
    };
}]);

app.controller('UserListController', ['$scope', '$http', function ($scope, $http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

    console.log('UserListController');

    $scope.users = {};

    $http.get('/app.php?route=user_list')
        .then(function (response) {
            $scope.users = response.data.users;
        }, function (response) {
            console.log(response.status);
        });
}]);

app.controller('DefaultController', ['$http', function ($http) {
    console.log('DefaultController');

    this.default = $http({
        method: 'GET',
        url: '/app.php?route=default'
    })
    .then(function successCallback(response) {
        console.log('success');
        console.log(response.data);

    }, function errorCallback(response) {
        console.log('error');
        console.log(response.data);
    });
}]);

app.controller('FormController', ['$scope', '$http', 'Upload', function ($scope, $http, Upload) {

    console.log('FormController');

    $scope.user = {
        name: 'test',
        email: 'test'
    };

    // upload on file select or drop
    $scope.submit = function (user) {
        Upload.upload({
            url: '/app.php?route=form',
            data: {file: user.file, user: user}
        })
        .then(function (response) {
            console.log(response);
            console.log('Success ' + response.config.data.user.avatar + 'uploaded. Response: ' + response.data);
        }, function (response) {
            console.log('Error status: ' + response.status);
        }, function (evt) {
            console.log(evt);
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            console.log('progress: ' + progressPercentage + '% ' + evt.config.data.user.avatar);
        });
    };
}]);
