var bookmarkletLinkElement = document.getElementById("marvin-bookmarklet");

var replaceBookmarklet = function() {
    var bookmarkletNewLink = bookmarkletTemplate;

    bookmarkletNewLink = bookmarkletNewLink.replace('%TOKEN%', document.getElementById("marvin-token").value);
    bookmarkletNewLink = bookmarkletNewLink.replace('%LIST%', document.getElementById("marvin-list").value);
    bookmarkletNewLink = bookmarkletNewLink.replace('%LABELS%', document.getElementById("marvin-labels").value);
    bookmarkletNewLink = bookmarkletNewLink.replace('%SCHEDULETODAY%', document.getElementById("marvin-scheduletoday").checked ? 'true' : 'false');
    bookmarkletLinkElement.href = bookmarkletNewLink;

    console.log(bookmarkletLinkElement.href);
};

document.getElementById("marvin-token").addEventListener('input', replaceBookmarklet);
document.getElementById("marvin-list").addEventListener('input', replaceBookmarklet);
document.getElementById("marvin-labels").addEventListener('input', replaceBookmarklet);
document.getElementById("marvin-scheduletoday").addEventListener('input', replaceBookmarklet);

document.addEventListener("DOMContentLoaded", function() {
    replaceBookmarklet();
});