<?php
/*
 * Code for use in cross domain Ajax with Chisimba
 */
define('HOST', 'http://localhost');
define('PATH', '/ch/');
define('INDEX', 'index.php');

$path = HOST . PATH . INDEX;

$module = $_REQUEST['module'];
$action = $_REQUEST['action'];
if ($action) {
    switch ($action) {
    case 'ajaxById':
        $id = $_REQUEST['id'];
        $path .= '?module=' . $module . '&action=ajaxById&id=' . $id;
        break;
    case 'ajaxByTag':
        $tag = $_REQUEST['tag'];
        $path .= '?module=' . $module . '&action=ajaxByTag&tag=' . $tag;
        break;
    }
}


//$path .= '?module=' . $module . '&action=ajaxByTag&by=tag&tag=ipsum';

// Open the path to read its content
$handle = fopen($path, "r");

$module = urldecode($module);

//echo '<h1>' . $path . '</h1>';

// If the fopen was successful, read and return it.
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}

?>