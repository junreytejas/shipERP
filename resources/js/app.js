import './bootstrap';

$(document).ready(function() {
    $('#get-dog-image').click(function() {
        $.ajax({
            type: 'GET',
            url: '/dogs',
            success: function(response) {
                $('#dog-image').attr('src', response.image_url);
            }
        });
    });
});