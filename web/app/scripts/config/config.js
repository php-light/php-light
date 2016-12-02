'use strict';

app.config(function($routeProvider, $locationProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'web/app/templates/default.html',
            controller: 'DefaultController'
        })
        .when('/form', {
            templateUrl: 'web/app/templates/form.html',
            controller: 'FormController'
        })
        // .otherwise({
        //     redirectTo: '/error/404'
        // });
    ;

    $locationProvider.html5Mode(false);
});
