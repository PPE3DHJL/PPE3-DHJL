/***
 * signin/login functions
 */
function showProgressBar(params) {
    var styles = document.querySelector('#container>#body');
    styles.parentElement.style.width = '350px';
    styles.parentElement.style.margin = 'auto';

    styles.innerHTML = '<div id="progressbar-login"><img src="' + BASE_URL + 'img/core/progress.gif"/></div>';

}



/**
 * signInLoading
 */

function showLoginModule() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', BASE_URL + 'login/web_component', true);
    xhr.onreadystatechange =
        function(evtXHR) {

            //sent
            if (evtXHR.target.readyState == 2) {
                showProgressBar();
            } else if (evtXHR.target.readyState == XMLHttpRequest.DONE) {
                console.log('ok');
                console.log(evtXHR.target);
                var parser = new DOMParser();
                var doc = parser.parseFromString(evtXHR.target.responseText, "text/html");
                console.log(doc);
                var cc = document.querySelector("#container>#body");
                cc.innerHTML = "";
                var newChild = doc.querySelector('#login-block');
                cc.parentElement.style.marginTop = '64px';
                cc.appendChild(newChild);
                cc.querySelector('form').addEventListener('submit', function(evt) { evt.preventDefault(); }); //.action = './#';
                cc.querySelector('#try-login').addEventListener('click',

                    function() {
                        var login = newChild.querySelector("#login-input").value;
                        var pass = newChild.querySelector("#mdp-input").value;
                        return asyncTryConnect2(login, pass);
                    });
            }
        };
    xhr.send();

}

function asyncTryConnect2(login, mdp) {
    var dat = new Date();
    var datetime = dat.getTime();
    var xhr = new XMLHttpRequest();


    xhr.open('POST', BASE_URL + 'login/tryAuthent2', true);
    xhr.withCredentials = true;
    // xhr.setRequestHeader('Cookie', 'mycookie=cookie');
    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
    xhr.setRequestHeader('Hash', sha256(login + mdp + datetime, 256));
    xhr.setRequestHeader('Nohash', login + mdp + datetime);
    xhr.setRequestHeader('AtDate', datetime);
    xhr.setRequestHeader('Login', login);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 404) {
            document.querySelector('#body').innerHTML = this.responseText;

        }
        if (this.readyState == 4 && this.status == 200) {
            //    document.querySelector('#body').innerHTML = this.responseText;
            var user = JSON.parse(this.responseText);
            setCookie('token', user.token);
            delete user.token;
            setCookie('user', JSON.stringify(user));

            //console.log(document.cookie, user);
            document.location = BASE_URL;
        }
    }
    xhr.send();
}

function disconnect() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', BASE_URL + 'login/disconnect', true);
    xhr.withCredentials = true;
    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
    xhr.setRequestHeader('Token', getToken());
    xhr.onreadystatechange = function(evt) {
        if (this.readyState == 2) {
            setCookie('token', '', );
            setCookie('user', '');
            document.location = BASE_URL;
        }
    };
    xhr.send();

    //document.location = BASE_URL;

}

function setCookie(sName, sValue, newCookie = true) {
    var today = new Date(),
        expires = new Date();
    expires.setTime(today.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString() + ";domain=" + BASE_URL + "";
}

function getToken(sName) {

    var cookContent = document.cookie;
    var regex = /token=([\d\w]*);/gm;
    while ((m = regex.exec(cookContent)) !== null) {
        // This is necessary to avoid infinite loops with zero-width matches
        if (m.index === regex.lastIndex) {
            regex.lastIndex++;
        }

        // The result can be accessed through the `m`-variable.
        return (m[1]);
    }
}

function getCookie(sName) {
    var cookContent = document.cookie,
        cookEnd,
        i,
        j;
    var sName = sName + "=";

    for (i = 0, c = cookContent.length; i < c; i++) {
        j = i + sName.length;
        if (cookContent.substring(i, j) == sName) {
            cookEnd = cookContent.indexOf(";", j);
            if (cookEnd == -1) {
                cookEnd = cookContent.length;
            }
            return decodeURIComponent(cookContent.substring(j, cookEnd));
        }
    }
    return null;
}