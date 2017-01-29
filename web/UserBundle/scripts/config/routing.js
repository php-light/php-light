'use strict';

user.config(function($routeProvider) {
    $routeProvider
        .when('/user/new/', {
            templateUrl: 'web/UserBundle/templates/new.html',
            controller: 'NewUserController'
        })
        .when('/user/edit/:uniqueId', {
            templateUrl: 'web/UserBundle/templates/edit.html',
            controller: 'EditUserController'
        })        
        .when('/user/list/', {
            templateUrl: 'web/UserBundle/templates/list.html',
            controller: 'ListUserController'
        });
});
