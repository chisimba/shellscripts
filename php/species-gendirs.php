#!/usr/bin/php
<?php
    $user = "dkeats";
    $file = "/home/$user/chisimba/modules/species/sql/defaultdata.xml";
    $workingDir = "/home/$user/tmp99";
    if (!file_exists($workingDir)) {
        mkdir($workingDir);
        echo "Made directory $workingDir\n";
    }
    chdir($workingDir);
    if (file_exists($file)) {
        echo "Reading XML file: $file\n";
    } else {
        echo "Source file not found\n";
    }
    $birds = simplexml_load_file($file);
    foreach ($birds as $bird) {
        $fName = $bird->fullname;
        $dirName = str_replace(" ", "_", $fName);
        echo "Creating dir: " . $fName . "\n";
        mkdir($dirName);
    }
    exit(0);
?>