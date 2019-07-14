/* Unminified bookmarklet code */
(function () {
    var baseUrl = '';
    var token = '';
    var list = 'Reading';

    var scriptElement = document.createElement('scr' + 'ipt');
    try {
        if (!document.body) {
            throw 0;
        }
        document.title = '(Saving...) ' + document.title;
        scriptElement.setAttribute('src', baseUrl + '?url=' + encodeURIComponent(window.location.href) + '&token=' + encodeURIComponent(token) + '&list=' + encodeURIComponent(list));
        document.body.appendChild(scriptElement);
    } catch (e) {
        alert('Please wait until the page has loaded.');
    }
})();

