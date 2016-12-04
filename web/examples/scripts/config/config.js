'use strict';

app.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'web/examples/templates/default.html',
            controller: 'DefaultController'
        })
        .when('/form', {
            templateUrl: 'web/examples/templates/form.html',
            controller: 'FormController'
        })
        .when('/user/new', {
            templateUrl: 'web/examples/templates/new-user.html',
            controller: 'UserController'
        })
        .when('/users', {
            templateUrl: 'web/examples/templates/users.html',
            controller: 'UserListController'
        })
        .when('/user/:id', {
            templateUrl: 'web/examples/templates/user-show.html',
            controller: 'UserShowController'
        })
        // .otherwise({
        //     redirectTo: '/error/404'
        // });
    ;
});
