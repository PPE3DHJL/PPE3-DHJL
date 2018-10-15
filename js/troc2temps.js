console.log('troc de temps bonjour ..');

function signInMenuEvents() {
    console.log('loading Events ');
    if (document
        .querySelector('#li_login') != null)
        document
        .querySelector('#li_login')
        .addEventListener('click', function(evt) {
            console.log(' Events ');
            evt.target.href = "#";
            evt.stopPropagation(false);
            showLoginModule();
        });

    if (document
        .querySelector('#li_logout') != null) document
        .querySelector('#li_logout')
        .addEventListener('click', function(evt) {
            console.log(' Events ');
            evt.target.href = "#";
            evt.preventDefault();
            evt.stopPropagation(false);
            disconnect();
        });

}
signInMenuEvents();












function setCookie(sName, sValue) {
    var today = new Date(),
        expires = new Date();
    expires.setTime(today.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
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