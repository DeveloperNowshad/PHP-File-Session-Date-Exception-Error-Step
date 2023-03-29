<?php
$filename = "\\Ostad\\module-6\\file\\data\\f1.txt";

$fp = fopen($filename, 'r');
$line = fgets($fp, 6);
echo $line;
fclose($fp);
