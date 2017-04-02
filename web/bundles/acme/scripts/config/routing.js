/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 02/04/17
 * Time: 18:32
 */

'use strict';

acme.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'web/bundles/acme/scripts/template/homepage.html',
            controller: 'HomepageController'
        })
    // .otherwise({
    //     redirectTo: '/error/404'
    // });
    ;
});

