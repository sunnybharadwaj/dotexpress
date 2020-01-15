

$(document).ready(function() {
    //Announcements Notifications
    const notification = $('.announcements-notification');
    setTimeout(
        function()
        {
            notification.removeClass('hidden');
        }, 1000);

    $('.announcements-notification #close-btn').click(function() {
        notification.addClass('hidden');
    });

    $('.modal-wrapper #close-btn').click(function() {
       $('.modal-wrapper').hide();
    });
});