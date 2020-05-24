$('#gitSubmit').on('click', function (e) {

    e.preventDefault();
    var gitUserData = $('#gitUserData');
    gitUserData.html('<div id="loader"><img src="/wp-content/themes/theme/build/img/loading.svg" alt="loading..."></div>');

    var username = $('#gitUserName').val();
    var requri = 'https://api.github.com/users/' + username;

    requestJSON(requri, function (json) {
        if (json.message === "Not Found" || username === '') {
            gitUserData.html("<p>No User Info Found</p>");
        } else {
            var username = json.login;
            var profileurl = json.html_url;
            var email = json.email;
            var id = json.id;
            if (email === null) {
                email = id + '@github.com';
            }

            var outhtml = '<p id="userName">User Name is: ' + username + '</p>';
            outhtml = outhtml + '<p id="userLink">User Link is: ' + profileurl + '</p>';
            outhtml = outhtml + '<p id="userEmail">User Email is: ' + email + '</p>';


            gitUserData.html(outhtml);

            $.ajax({
                url: myAjax.ajaxurl,
                type: "POST",
                data: {
                    action: "my_register_user",
                    new_user_name: username,
                    new_user_email: email,
                    new_user_password: username,
                    new_user_link: profileurl
                },
                success: function (results) {
                    gitUserData.html(gitUserData.html() + '<p id="results">' + results + '</p>');
                    setTimeout(function () {
                        $(location).attr('href', /github-users-list/);
                    }, 3000)
                },
                error: function (results) {
                    gitUserData.html('<p id="results">Something went wrong: '    + results + '</p>');
                }
            });

        }

    });
});

function requestJSON(url, callback) {
    $.ajax({
        url: url,
        complete: function complete(xhr) {
            callback.call(null, xhr.responseJSON);
        }
    });
}
