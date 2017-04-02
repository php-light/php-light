<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ title }}</title>

    <link rel="stylesheet" href="web/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="web/vendor/angular/angular.min.js"></script>
    <script src="web/vendor/angular-sanitize/angular-sanitize.js"></script>
    <script src="web/vendor/angular-route/angular-route.min.js"></script>
    <script src="web/vendor/ng-file-upload-shim/ng-file-upload-shim.min.js"></script>
    <script src="web/vendor/ng-file-upload/ng-file-upload.min.js"></script>


    <!--  Examples  -->
    <script src="web/bundles/acme/scripts/acme.js"></script>
    <script src="web/bundles/acme/scripts/config/routing.js"></script>
    <script src="web/bundles/acme/scripts/controller/HomepageController.js"></script>

    <script type="text/javascript" src="web/bundles/app/scripts/app.js"></script>

</head>
<body>
<ng-view></ng-view>
</body>
</html>
