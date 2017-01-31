/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 25/01/17
 * Time: 23:52
 */

client.controller('EditClientController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {

    $http.get('/app.php?route=client_edit&uniqueId=' + $routeParams.uniqueId)
        .then(
            function (response) {
                $scope.client = response.data.client;
                console.log($scope.client);
            },
            function (response) {
                console.log(response.status);
            }
        );

    $scope.update = function (client) {
        $http.post('/app.php?route=client_edit&uniqueId=' + $routeParams.uniqueId, {client: client})
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
