/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 02/04/17
 * Time: 18:31
 */

acme.controller('HomepageController', ['$scope', '$http', function ($scope, $http) {

    $scope.users = [];

    $http.get('http://php-light.dev/app.php?route=acme_homepage')
        .then(
            function (response) {
                $scope.users = response.data
            },
            function (response) {
                console.log(response.status);
            }
        )
}]);
