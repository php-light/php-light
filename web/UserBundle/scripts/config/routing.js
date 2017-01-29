'use strict';

user.config(function($routeProvider) {
    $routeProvider
        .when('/user/new/', {
            templateUrl: 'web/UserBundle/templates/new.html',
            controller: 'NewUserController'
        })
        .when('/client/edit/:uniqueId', {
            templateUrl: 'web/UserBundle/templates/edit.html',
            controller: 'EditUserController'
        });
});
