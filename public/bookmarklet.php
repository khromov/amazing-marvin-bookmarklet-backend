<?php
$config = json_decode(file_get_contents('../config.json'));

if($config->debug) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

$url = isset($_GET['url']) ? urldecode($_GET['url']) : '';
$email = isset($_GET['email']) ? urldecode($_GET['email']) : '';
$list = isset($_GET['list']) ? urldecode($_GET['list']) : '';

if($url && $list && preg_match('/.*@marvin-[0-9]*\.appspotmail\.com$/', $email)) {
    if($config->debug) {
        var_dump("Sending email");
        var_dump([$email, "{$url} #{$list}"]);
    }
    else {
        mail($email, "{$url} #{$list}", '');
        header("Location: {$url}", true, 302);
    }
}
else {
    echo "Something went wrong, please update the bookmarklet from {$config->bookmarkletUrl}.";
}