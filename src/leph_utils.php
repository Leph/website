<?php

/**
 * Disable error reporting
 */
error_reporting(0);

/**
 * Create cookie if not exists and
 * return the id
 */
function tracker()
{
    $id = null;
    if (isset($_COOKIE['id'])) {
        $id = $_COOKIE['id'];
    } else {
        $id = uniqid();
        setcookie('id', $id, time()+(365*24*60*60));
    }

    return $id;
}

/**
 * Return log string line
 */
function logLine()
{
    $date = date('Y-m-d H:i:s');
    $method = $_SERVER['REQUEST_METHOD'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $page = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $referrer = $_SERVER['HTTP_REFERER'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $id = tracker();

    return 
        $date.' '
        .$method.' '
        .$ip.' '
        .$id.' '
        .$page.' '
        .$referrer.' '
        .$useragent;
}

/**
 * Write log to file
 */
function writeLog()
{
    $line = logLine() . "\n";
    file_put_contents('var/leph_logs.txt', 
        $line, FILE_APPEND | LOCK_EX);
}

/**
 * Manage autorized external links
 */
$externalLinks = array(
    'http://www.labri.fr' => true,
    'http://www.u-bordeaux.com' => true,
    'http://rhoban.com/en' => true,
    'http://www.bordeaux-inp.fr' => true,
    'https://github.com/RhobanProject/' => true,
    'https://github.com/Rhoban/' => true,
    'http://metabot.cc' => true,
    'https://youtu.be/' => true,
);

