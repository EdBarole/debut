/*!
 * Styld.com 1.2.0
 * Docs & License: http://freelancer.com/u/njose.html
 * (c) 2017 Sebastian Njose
 */

jQuery(document).ready(function($) {

    $("[data-toggle=tooltip]").tooltip({html:!0});

    // Contact us
    $("#contactForm").on("submit", function (e) {
        
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: {
                '_token': $("#contactForm input[name=_token]").val(),
                'name': $("#contactForm input[name=name]").val(),
                'email': $("#contactForm input[name=email]").val(),
                'subject': $("#contactForm input[name=subject]").val(),
                'message': $("#contactForm textarea[name=message]").val()
            },
            //
            success: function(response) {
                    
                    console.log(response);

                    $("#contactForm").hide();
                    $(".contact-form-success").show();

                    setTimeout(function(){
                        $("#contactForm").show();
                        $(".contact-form-success").hide();
                    }, 2000);

                if (response.status == 200) {
                    //
                    console.log(response);
                } else {
                    $("#contactForm .alert").show();
                    $("#contactForm .alert span").html(response.message);
                }
            }
        });

    });

    // Restore password
    $("form.restore").on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: {
                '_token': $("form.restore input[name=_token]").val(),
                'email': $("form.restore input[name=email]").val()
            },
            //
            success: function(response) {
                if (response.status == 200) {
                    //
                    console.log(response);
                } else {
                    $("form.restore .alert").show();
                    $("form.restore .alert span").html(response.message);
                }
            }
        });

    });

    // Like photo
    $(".like-btn").click(function (e) {

        e.preventDefault();
        
        var button = $(this);
        var postId = button.data('id');
        var likes = $(".item-" + postId + " .likes_count");
        var totalLikes = likes.html() * 1;

        // Verify status
        $.ajax({ url: '/api/posts/' + postId + '/like/status', method: 'GET',
            //
            success: function(response) {

                var action = response.liked ? 'unlike' : 'like';

                // Perform action
                $.ajax({ 
                    url: '/api/posts/' + postId + '/' + action, 
                    method: 'GET',
                    success: function(response) {
                        //
                        button.removeClass('unlike');

                        if (response.liked) {
                            button.addClass('unlike');
                            // increment
                            likes.html(totalLikes + 1);
                        } else {
                            // decrement
                            likes.html(totalLikes - 1);
                        }
                    }
                });
            }
        });

    });

    $('.modal-header').hover(function () {
            $('.lightbox_bottom, .transparent_block', this).addClass('hovered').addClass('top-z');
            setTimeout(function () {
                $('.popup_image_hover').addClass('over-visible');
            }, 300);
        },
        function () {
            $('.lightbox_bottom, .transparent_block', this).removeClass('hovered').removeClass('top-z');
            $('.popup_image_hover').removeClass('over-visible');
        }
    ).on('touchend', function(e){
            var el = $(this);
            if (el.data('touched')) {
                var target = $(e.target);
                if (target.is('a')) return true;
                el.find('.right.carousel-control').click();
            } else {
                el.addClass('hovered');
                $('.lightbox_bottom, .transparent_block', el).addClass('hovered').addClass('top-z');
                setTimeout(function () {
                    $('.popup_image_hover').addClass('over-visible');
                }, 300);
                el.data('touched', true);
            }
            e.preventDefault();
        });

    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).fadeIn("fast");
        },
        function () {
            $('.dropdown-menu', this).fadeOut("fast");
        });

    if ($('#wlt-PictureView').length) {
        initPopup();
    } else {
        var container = document.querySelector('#container');
        var msnry;
        var container2 = document.querySelector('#container-secret');
        var msnry2;
        if ($('#wlt-PictureList-list').length) {
            $('.content').width('100%');
            // initialize Masonry after all images have loaded
            imagesLoaded(container, function () {
                msnry = new Masonry(container, {
                    itemSelector: '.item1',
                    gutter: window.gutter,
                    isFitWidth: true
                });
                fitWidth();
            });
            if (container2)
                imagesLoaded(container2, function () {
                    msnry2 = new Masonry(container2, {
                        itemSelector: '.item1',
                        gutter: window.gutter,
                        isFitWidth: true
                    });
                    fitWidth();
                });
        }
    }

    $('.item1').hover(function () {
            $('.hover_top_group, .hover_bottom_group', this).addClass('hovered');
        },
        function () {
            $('.hover_top_group, .hover_bottom_group', this).removeClass('hovered');
        }
    ).on('touchend', function(e){

        var el = $(this);
        if (el.data('touched')) {
            var target = $(e.target);
            if (target.is('a')) return true;
            $('.hover_top_group, .hover_bottom_group', el).removeClass('hovered');
            el.data('touched', false);
            e.preventDefault();
            showLoading();

            $('#pinWindow')
                .html('')
                .modal({ })
                .modal('show')
                .load(el.find('.picture_item').attr('href'), function () {
                    hideloading();
                    initPopup();
                });
        } else {
            $('.hover_top_group, .hover_bottom_group', el).addClass('hovered');
            el.data('touched', true);
        }
        e.preventDefault();
    });

    fitWidth();

    $('#hamburgerMenu').on('mouseover', function (e) {
        //
        $('.hamburger-menu').show();
    });

    $('#hamburgerMenu').on('mouseout', function (e) {
        //
        $('.hamburger-menu').hide();
    });

    $('#loginMenus').on('mouseover', function (e) {
        //
        $('.login-dropdown-menu').show();
    });

    $('#loginMenus').on('mouseout', function (e) {
        //
        $('.login-dropdown-menu').hide();
    });

});

$(window).resize(function () {
    fitWidth();
});

function fitWidth() {
    $('.channel_box').width(function () {
        var minItems = 3;
        var haveItems = $('.item1').length;
        var itemWidth = $('.item1').width();
        var gutter = 10;
        var minWidth = (itemWidth + gutter) * minItems;
        var contWidth = $('#container').width();

        if (haveItems * (itemWidth + 10) < $(window).width() - 100)
            return $(window).width() - 100;
        else
            return contWidth;
    });
}

$(document).ready(function(){

    // hide #back-top first
    $("#wlt-PictureScroll").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#wlt-PictureScroll').fadeIn();
            } else {
                $('#wlt-PictureScroll').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#wlt-PictureScroll a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});