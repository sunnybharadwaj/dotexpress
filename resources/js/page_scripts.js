

$(document).ready(function() {
    $("iframe").each(function() {

        var src= $(this).attr('src');
        $(this).attr('src',src);
    });
    //Announcements Notifications
    const notification = $('.announcement-notification');
    setTimeout(
        function()
        {
            notification.removeClass('hidden');
        }, 1000);

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




});