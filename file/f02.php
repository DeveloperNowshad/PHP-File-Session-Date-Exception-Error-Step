<?php
$fileName = 'data/f2.txt';
$existingData = file_get_contents($fileName);
$fp = fopen($fileName, 'w');
fwrite($fp, $existingData);
fwrite($fp, "Mercury \n");
fwrite($fp, "Venus\n");


$fp = fopen($fileName, 'a');
fwrite($fp, 'Naptune');
fclose($fp);
