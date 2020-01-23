
// sessionStorage.setItem('firstVisit', '1');
$(document).ready(function() {
    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        let Nav = $('nav');
        if (scroll >= 1) {
            Nav.addClass('scrolled');
        } else if (scroll === 0) {
            Nav.removeClass('scrolled');
        }
    });

    $("iframe").each(function() {

        var src= $(this).attr('src');
        $(this).attr('src',src);
    });

    //Announcements Notifications
    const notification = $('.announcement-notification');

    // if (!sessionStorage.getItem('firstVisit') === '1') {

        setTimeout(
            function()
            {
                notification.removeClass('hidden');
            }, 100);
    // }


    $('.notification .close-btn').click(function() {
        $(this).parents('.notification').addClass('hidden');
    });


    $('.section-wrapper .video').on('click', function() {
        var elemId = $(this).attr('id').toString();
        var arr = elemId.split('-');
        arr.pop();
        arr.push('modal');
        elemId = arr.join('-');
        $('#' + elemId).show();
    });

    $(document).keyup(function(e) {
        if (e.key === "Escape") {
            $('.video-modal, .text-modal').hide();
        }
    });

    $('.video-modal .close-btn').on('click', function() {

        $("iframe").each(function() {
            var src= $(this).attr('src');
            $(this).attr('src',src);
        });
        console.log($(this).parents('.video-modal').hide());
    });

    var previewLinks = $('.preview-link');
    previewLinks.on('click', function() {
        previewLinks.removeClass('active');
        $(this).addClass('active');
        var elemId = $(this).attr('id');
        var arr = elemId.split('-');
        arr.pop();
        arr.push('slide');
        elemId = arr.join('-');
        $('.preview-slide').hide();
        $('#' + elemId).show();
    });


    $('.post-link, .activity-link, .about-link').click(function() {

        var elemId = $(this).attr('id');
        var arr = elemId.split('-');

        arr.pop();
        arr.push('modal');
        elemId = arr.join('-');

        $('#' + elemId + ' .modal-wrapper').show();
    });

    $('.modal-wrapper .close-btn').click(function() {
        $(this).parents('.modal-wrapper').hide();
    });

    $('.modal-wrapper.full-screen').click(function() {
        $(this).hide();
    });

    $('.modal-wrapper.full-screen .modal-container').click(function() {
        $(this).parents('.modal-wrapper').show();
    });


    $('#testimonials-btn').click(function() {
        $('#testimonials-modal .modal-wrapper').show();
    });

    $('#media-btn').click(function() {
        $('#media-modal .modal-wrapper').show();
    });

    $('#partners-btn').click(function() {
        $('#partners-modal .modal-wrapper').show();
    });

    $('#artwork-btn').click(function() {
        $('#artwork-modal .modal-wrapper').show();
    });



});