/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 24/01/17
 * Time: 20:53
 */

client.controller('NewClientController', ['$scope', '$http', function ($scope, $http) {
    console.log('NewClientController');

    $scope.create = function (client) {
        $http.post('/app.php?route=client_new', {client: client})
            .then(
                function (response) {
                    console.log(response);
                },
                function (response) {
                    console.log(response.status);
                }
            );
    }
}]);
