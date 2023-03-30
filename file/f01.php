<?php
$filename = "data/f1.txt";
if (is_readable($filename)) {
    $fp = fopen($filename, 'r');

    while ($line = fgets($fp)) {
        echo $line;
    }
    // $line = fgets($fp, 6);
    // echo $line;
    fclose($fp);
}
