<?php

if (!isset($_GET['l'])) {
    die;
}
$link = $_GET['l'];

include 'src/leph_utils.php';
writeLog();

header('Location: '.$link);
die;

