/*!
 * Styld.com 1.2.0
 * Docs & License: http://freelancer.com/u/njose.html
 * (c) 2017 Sebastian Njose
 */

var styld = angular.module('Styld', []);

styld.controller('mainCtrl', function ($scope, $http) {

    $scope.notification = {};
    $scope.album = { title: '', topcategory: '', category: '', secret: 0, access: 0 };

    // Get albums
    $http.get('/api/albums').then(function (response) {
        //
        $scope.albums = response.data.data;
    });

    // Get categories
    $http.get('/api/topcategories').then(function (response) {
        //
        $scope.topcategories = response.data.data;
    });

    $http.get('/api/categories').then(function (response) {
        //
        $scope.categories = response.data.data;
    });

    // Save album
    $scope.submitForm = function (username) {
        //
        $scope.errors = false;

        var album = $scope.album,
             theData = { title: album.title, description: album.description, topCategoryId: album.topCategoryId, categoryId: album.categoryId, secret: album.secret, access: album.access };

        if (album.title == '' || album.topCategoryId == '' || album.categoryId == '') {
            //
            $scope.errors = true; return false;
        }

        $scope.submitted = true;    // disables submit button

        var theEndpoint = ($scope.action.type == "create") ? "/api/albums" : "/api/albums/" + $scope.action.id;
        var theMethod = ($scope.action.type == "create") ? "POST" : "PUT";

        $http({url: theEndpoint, method: theMethod, data: theData}).then(function (response) {
            //console.log(response.data);
            window.location.href = '/' + username + '/' + response.data.data.url;
        });

    };

    // Create album
    $scope.createAlbum = function () {

        $scope.action = { type: 'create' };

        $scope.album = { title: '', topcategory: '', category: '', secret: 0, access: 0 };
        
    };

    // Edit album
    $scope.editAlbum = function (albumId) {

        $scope.action = { type: 'edit', id: albumId }; // save album id for use by external methods

        angular.forEach($scope.albums, function (value, key) {
            //
            if (value.id == albumId) { $scope.album = value; }
        });

    };

    // Delete album
    $scope.deleteAlbum = function () {

        var id = $scope.action.id;

        if (confirm("Are you sure?")) {

            $http({url: '/api/albums/' + id, method: 'DELETE'}).then(function (response) {
                //console.log(response.data);
                window.location.reload();
            });

        }

    };

    // Follow or unfollow
    $scope.toggleFollow = function (userId) {

        var followers = $(".metrics-followers").data("followers");

        $http({url: '/api/users/' + userId + '/follow', method: 'GET'}).then(function (response) {

            // already following, trigger unfollow
            if (response.data.status == 201) {

                $http({url: '/api/users/' + userId + '/unfollow', method: 'GET'}).then(function (response) {

                    $(".metrics-followers").data("followers", (followers - 1));
                    $(".metrics-followers").html((followers - 1));

                    // update button text
                    $(".btn-follow").html("Follow");

                });

                return false;

            }

            $(".metrics-followers").data("followers", (followers + 1));
            $(".metrics-followers").html((followers + 1));

            // update button text
            $(".btn-follow").html("Unfollow");

        });

    };

});