<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';

// Check if the basename is a dot, indicating a filename
$basename = basename($path);
if (strpos($basename, '.') !== false) {
    die('Invalid path');
}

// Check if the folder path exists
if (!file_exists($path)) {
    die('Folder not exists');
}

// Make sure the path is within the intended directory scope
$baseDir = '/var/www/html'; 

$fullPath = realpath($baseDir . '/' . $path);

// Check if the full path is within the intended directory scope
if ($fullPath === false || strpos($fullPath, $baseDir) !== 0) {
    die('Out of scope');
}

print "<pre>";
print_r(scandir($path));
print "</pre>";
?>
