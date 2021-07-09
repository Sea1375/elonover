function onGoogleSignInSuccess(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

    var google_id = profile.getId();
    var full_name = profile.getName();
    var email_address = profile.getEmail();

    
    $('body').append('<form id="google_signin_form" action="index.php" method="POST" style="display: none">');
    $('#google_signin_form').append('<input name="google_signin" value="true" />');
    $('#google_signin_form').append('<input name="google_id" value="' + google_id + '" />');
    $('#google_signin_form').append('<input name="full_name" value="' + full_name + '" />');
    $('#google_signin_form').append('<input name="email_address" value="' + email_address + '" />');

    
    $('#google_signin_form').submit();
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}

function initGoogleSignin() {
    gapi.load('auth2', function(){
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init({
          client_id: '786298339840-gc8tgbb4jomuk4bi84i178jf4em6qg2q.apps.googleusercontent.com',
          cookiepolicy: 'single_host_origin',
          // Request scopes in addition to 'profile' and 'email'
          //scope: 'additional_scope'
        });
        attachGoogleSignin(document.getElementById('google-signin'));
    });
}

function attachGoogleSignin(signBtn) {
    console.log(signBtn.id);
    auth2.attachClickHandler(signBtn, {},
        function(googleUser) {
            onGoogleSignInSuccess(googleUser);
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
}

initGoogleSignin();
