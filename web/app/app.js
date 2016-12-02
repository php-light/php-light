'use script';

var app = angular.module('app', ['ngRoute', 'ngSanitize']);


app.controller('DefaultController', ['$http', function ($http) {
    console.log('DefaultController');

    this.getGoogle = $http({
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

app.controller('FormController', ['$scope', '$http', function ($scope, $http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

    console.log('FormController');

    $scope.user = {
        name: 'test',
        email: 'test'
    }

    $scope.submit = function(user) {
        console.log(user);
        // var formUser = {"name": user.name, "email": user.email};

        $http({
            method: 'POST',
            url: '/app.php?route=form',
            data: user,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        });
    };
}]);
