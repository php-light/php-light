'use strict';

RomenysHouse.config(function($routeProvider) {
	$routeProvider
		.when('/house/new/', {
            templateUrl: 'web/bundles/PropertiesBundle/templates/House/new.html',
            controller: 'NewHouseController'
        })
});
