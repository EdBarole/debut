/*!
 * Styld.com 1.2.0
 * Docs & License: http://freelancer.com/u/njose.html
 * (c) 2017 Sebastian Njose
 */

var styld = angular.module('Styld', []);

styld.controller('mainCtrl', function ($scope, $http) {

    $scope.notification = {};

    // Like photo
    $scope.likePost = function (postId) {

        // Verify status
        $http.get('/api/posts/' + postId + '/like/status').then(function (response) {
                        
            var action = response.data.liked ? 'unlike' : 'like';

            // perform action
            $http.get('/api/posts/' + postId + '/' + action).then(function (response) {
                
                $('.popup_image_hover .lightbox_bottom .left-icon .vote a').removeClass('highlight');

                if (response.data.liked) {
                    $('.popup_image_hover .lightbox_bottom .left-icon .vote a').addClass('highlight');
                }

            });

        });

    };

    // Get comments
    $scope.getComments = function (postId) {
        
        $http.get('/api/posts/' + postId + '/comments').then(function (response) {
            //
            $scope.comments = response.data.data;
        });

    };

    // Save comment
    $scope.postComment = function (postId, userId) {
        //
        var input = { text: $scope.comment };

        $http({url: '/api/posts/' + postId + '/comments', method: 'POST', data: input}).then(function (response) {
            //
            var res = response.data.data;

            $scope.comment = '';

            var tags = '';

            tags += '<div class="comment">';
            tags += '<div class="clearfix">';
            tags += '<div class="pull-right">';
            tags += '<i class="fa fa-flag" title="Report" data-toggle="tooltip" data-placement="top"></i>';
            tags += '&nbsp;';
            tags += '<i class="fa fa-times" title="Remove" data-toggle="tooltip" data-placement="top"></i>';
            tags += '</div>';
            tags += '<a href="' + res.url + '">';
            tags += '<div class="avatar new-avatar pull-left" style="margin-right: 10px; background-image: url(https://nimbus.styld.com/32000/341/6f21142c69b408707ac76c4f4b4d728f.jpg)!important;"></div>';
            tags += '<span style="font-size: 18px; font-weight: 600 !important">' + res.username + '</span>';
            tags += '</a>';
            tags += '<br />';
            tags += '<span style="color: #777">Just now</span>';
            tags += '</div>';
            tags += '<div style="margin-left: 65px">' + input.text + '</div>';
            tags += '</div>';

            $('.item-comments').prepend(tags);

            $('#scrollToTop').click();

        });

    };

    // Follow or unfollow
    $scope.toggleFollow = function (userId) {

        $http({url: '/api/users/' + userId + '/follow', method: 'GET'}).then(function (response) {

            // already following, trigger unfollow
            if (response.data.status == 201) {

                $http({url: '/api/users/' + userId + '/unfollow', method: 'GET'}).then(function (response) {

                    // update button text
                    $(".follow-user").html("Follow");

                });

                return false;

            }

            // update button text
            $(".follow-user").html("Unfollow");

        });

    };

    // Edit post
    $scope.savePost = function (postId) {

        var input = { message: $("#postDescription").val(), boardId: $("#postAlbum").val() };

        $http({url: '/api/posts/' + postId, method: 'PUT', data: input}).then(function (response) {

            window.location.reload();

        });

    };

    // Delete post
    $scope.deletePost = function (postId) {

        if (confirm("Are you sure?")) {

            $http({url: '/api/posts/' + postId, method: 'DELETE'}).then(function (response) {
                //
                window.location.href = "/";
            });

        }

    };

    // Delete comment
    $scope.deleteComment = function (postId, commentId) {

        if (confirm("Are you sure?")) {
            
            $http({url: '/api/posts/' + postId + '/comments/' + commentId, method: 'DELETE'}).then(function (response) {
                //
                $(".comment-" + commentId).fadeOut();
            });

        }

    };

});

//// jQuery & Vanilla JS ////

$(function () {

    $('.btn-get-comments').click();
    
    $('.carousel').carousel({
        interval: false
    });

    $('#commentText').on('keyup', function () {

        var characters = $(this).val().length;

        $('#charactersLeft').html((400 - characters));

    });

});    

$(".comments-likes span.comments").click(function () {

    $header = $(this);
    //getting the next element
    $content = $(".item-comments");
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $header.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Hide Comments" : "Show Comments";
        });
    });

});

$(".comments-likes span.likes").click(function () {

    $header = $(this);
    //getting the next element
    $content = $(".item-likes-wrapper");
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $header.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Hide Likes" : "Show Likes";
        });
    });

});
