'use strict';

PhpLightHouse.config(function($routeProvider) {
	$routeProvider
		.when('/house/new/', {
            templateUrl: 'web/bundles/PropertiesBundle/templates/House/new.html',
            controller: 'NewHouseController'
        })
        .when('/house/edit/:id', {
            templateUrl: 'web/bundles/PropertiesBundle/templates/House/edit.html',
            controller: 'EditHouseController'
        })
});
