<?php

$file = null;
if (isset($_GET['f'])) {
    $file = $_GET['f'];
    if (
        strpos($file, '/') !== false || 
        strpos($file, '\\') !== false || 
        strpos($file, '..') !== false ||
        strpos($file, ' ') !== false ||
        $file === '.' ||
        $file === ''
    ) {
        die;
    }
} else {
    die;
}
$path = 'papers/'.$file;

if (!file_exists($path)) {
    die;
}

include 'src/leph_utils.php';
writeLog();

header('Content-disposition: attachment; filename="'.$file.'"');
header('Content-type: application/pdf');
readfile($path);

?>

