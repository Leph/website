<?php

if (!isset($_GET['l'])) {
    die;
}
$link = $_GET['l'];

include 'src/leph_utils.php';

//Check that the link is autorized
$founded = false;
foreach ($externalLinks as $url => $ok) {
    if (strpos($link, $url) !== false) {
        $founded = true;
    }
}
if (!$founded) {
    die;
}

writeLog();

header('Location: '.$link);
die;

