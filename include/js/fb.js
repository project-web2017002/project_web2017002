function statusChangeCallback(response) {
    if (response.status === 'connected') {
        testAPI();
    } else {
        checkLoginState();
       // document.getElementById('status').innerHTML = 'Please log ' +
           // 'into this app.';
    }
}

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : '2094557164104827',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.10'
    });

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

};


(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function testAPI() {
    FB.api('/me', function(response) {
       // document.getElementById('status').innerHTML =
       //     'Thanks for logging in, ' + response.name + '!';
    });
}