/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 24/01/17
 * Time: 20:53
 */

client.controller('ListClientController', ['$scope', '$http', function ($scope, $http) {
    console.log('ListClientController');

    $http.get('/app.php?route=client_list')
        .then(
            function (response) {
                $scope.clients = response.data.clients;
                console.log($scope.clients);
            },
            function (response) {
                console.log(response.status);
            }
        );
}]);
