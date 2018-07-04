$('#chat').ready(TavernQuery(), TavernUsers()); // Init Chat
setInterval(function () {
    TavernQuery();
    TavernUsers();
}, 60000); // Refresh Chat

// *** Post Chat *** //
$('#chatSubmit').on('click', function (e) {
    e.preventDefault();

    let chatMessage = $('#chatMessage').val();

    if (chatMessage !== '' && chatMessage.length < 255) {
        $.ajax({
            url: '/action/ajax/TavernInsert.php',
            type: 'POST',
            data: {chatMessage: chatMessage},
            success: function () {
                let resetMessage = $('.trumbowyg-editor');
                resetMessage.html('');
                resetMessage.focus();
                $('#chatSubmit').html('').append('Tavernier, un mot !').removeClass('text-warning')
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log('[ERROR]' + xhr.status + ' ' + thrownError);
            },
            complete: function () {
                TavernQuery();
            }
        });
    }
    if (chatMessage !== '' && chatMessage.length > 255) {
        $('#chatSubmit').html('').append('Minimum 255 caractères.').addClass('text-warning');
    }
    if (chatMessage === '') {
        $('#chatSubmit').html('').append('Aucun message à envoyer.').addClass('text-warning');
    }
}); // End Post chat

// *** Delete Chat *** //
$('#chatRefresh').on('click', function (e) {
    e.preventDefault();

    $.ajax({
        url: '/action/ajax/TavernDelete.php',
        success: function () {
            TavernQuery();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('[ERROR]' + xhr.status + ' ' + thrownError);
        }
    });
}); // End Delete chat

// *** Show Chatbox *** //
function TavernQuery() {
    $('#chatbox').empty();
    $.ajax({
        url: '/action/ajax/TavernQuery.php',
        dataType: 'json',
        success: function (response) {
            for (let i in response.reverse()) {
                if (response.hasOwnProperty(i)) {

                    $('#chatbox')
                        .append($('<div class="chatbox--color py-3"></div>')
                            .append($('<div class="d-flex justify-content-between px-4"></div>')
                                .append('<div class="chatbox--pseudo">' + response[i].pseudo + '</div>')
                                .append('<div class="chatbox--date">' + response[i].datePub.substring(11, 16) + '</div>'))
                            .append('<div class="chatbox--message text-justify px-5">' + response[i].message + '</div>'));
                }

                $('.chatbox--color:even').css('background', 'rgba(129, 115, 84, .1)');
                $('.chatbox--color:nth-last-of-type(2)').css('border-bottom', '.1rem solid rgba(129, 115, 84, .6)');

            }
            let element = document.getElementById('chat');
            element.scrollTop = element.scrollHeight;
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('[ERROR]' + xhr.status + ' ' + thrownError);
        }
    }) // Ajax
} // End Show chatbox

// *** Show users connected *** //
function TavernUsers() {
    $('#chatbox--users').html('');
    $.ajax({
        url: '/action/ajax/TavernUsers.php',
        dataType: 'json',
        success: function (response) {
            for (let i in response) {
                if (response.hasOwnProperty(i)) {
                    $('#chatbox--users')
                        .append($('<a href="/account/' + response[i].id + '">' + response[i].pseudo + '</div>'));

                    $('#chatbox--users a:nth-last-of-type(2)').after(', ');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('[ERROR]' + xhr.status + ' ' + thrownError);
        }
    }) // Ajax
} // End show users connected

// Remove from chat when quit the site
window.onbeforeunload = function () {
    $.ajax({
        url: '/action/ajax/TavernTimeOut.php',
        method: 'POST',
        data: {disconnect : true},
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('[ERROR]' + xhr.status + ' ' + thrownError);
        }
    }) // Ajax
}; // End remove from chat

// Add from chat when enter the site
window.onload = function () {
    $.ajax({
        url: '/action/ajax/TavernTimeOut.php',
        method: 'POST',
        data: {connect : true},
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('[ERROR]' + xhr.status + ' ' + thrownError);
        }
    }) // Ajax
}; // End add from chat