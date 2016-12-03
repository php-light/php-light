'use script';

var app = angular.module('app', ['ngRoute', 'ngSanitize', 'ngFileUpload']);


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

app.controller('FormController', ['$scope', '$http', 'Upload', function ($scope, $http, Upload) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

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
