/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 24/01/17
 * Time: 21:16
 */

'use strict';

client.config(function($routeProvider) {
    $routeProvider
        .when('/client/new/', {
            templateUrl: 'web/bundles/ClientBundle/templates/new.html',
            controller: 'NewClientController'
        })
        .when('/client/list/', {
            templateUrl: 'web/bundles/ClientBundle/templates/list.html',
            controller: 'ListClientController'
        })
        .when('/client/edit/:uniqueId', {
            templateUrl: 'web/bundles/ClientBundle/templates/edit.html',
            controller: 'EditClientController'
        })
    // .otherwise({
    //     redirectTo: '/error/404'
    // });
    ;
});
