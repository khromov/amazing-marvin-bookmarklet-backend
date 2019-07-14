<?php
$config = json_decode(file_get_contents('../config.json'));

if($config->debug) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

$url = isset($_GET['url']) ? urldecode($_GET['url']) : '';
$list = isset($_GET['list']) ? urldecode($_GET['list']) : '';
$zapierToken = isset($_GET['token']) ? urldecode($_GET['token']) : '';

if(!($url && $zapierToken)) {
    echo "Error: Incorrect parameters sent.";
    exit;
}

if($list) {
    $list = "#" . ltrim($list, '#');
}

$task = [
    'title' => "{$url} {$list} +today",
    'note' => '',
];

/* Assemble request headers */
$requestHeaders = rtrim(array_reduce( [
    'Content-Type: application/json',
    "X-Zapier-Token: ${zapierToken}"
], function($result, $header) {
    return "{$result}{$header}\r\n";
}));

/* Form our options */
$requestOptions = ['http' =>
    [
        'method'  => 'POST',
        'header'  => $requestHeaders,
        'content' => json_encode($task)
    ]
];

$result = @file_get_contents($config->marvinEndpoint, false, stream_context_create($requestOptions));

header("Content-Type: application/javascript");
if($result !== false) {
    ?>
        window.location = <?php echo json_encode($url); ?>;
    <?php
}
else {
   ?>
    alert('Something went wrong! Make sure you entered your Zapier key correctly, or get a new bookmarklet at <?php echo $config->baseUrl; ?>');
    <?php
}