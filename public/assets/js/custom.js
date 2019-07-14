var bookmarkletLinkElement = document.getElementById("marvin-bookmarklet");

var replaceBookmarklet = function() {
    var bookmarkletNewLink = bookmarkletTemplate;

    bookmarkletNewLink = bookmarkletNewLink.replace('%TOKEN%', document.getElementById("marvin-token").value);
    bookmarkletNewLink = bookmarkletNewLink.replace('%LIST%', document.getElementById("marvin-list").value);
    bookmarkletLinkElement.href = bookmarkletNewLink;

    console.log(bookmarkletLinkElement.href);
};

document.getElementById("marvin-token").addEventListener('input', replaceBookmarklet);
document.getElementById("marvin-list").addEventListener('input', replaceBookmarklet);

document.addEventListener("DOMContentLoaded", function() {
    replaceBookmarklet();
});