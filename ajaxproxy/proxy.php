<?php
/*
 * Code for use in cross domain Ajax with Chisimba
 */
define('HOST', 'http://developer.thumbzup.com');
define('PATH', '/');
define('INDEX', 'index.php');

$path = HOST . PATH . INDEX;

$module = 'simpleblog';

$path .= '?module=' . $module;

// Open the path to read its content
$handle = fopen($path, "r");

// If the fopen was successful, read and return it.
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}

?>