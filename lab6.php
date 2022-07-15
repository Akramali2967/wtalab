<?php
echo "Refresh Page<br>";
$name="counter.txt";
$file=fopen($name,'r+');
$hits=fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file=fopen($name,'w');
fprintf($file,"%d",$hits[0]);
fclose($file);
echo "Total Number of Referesh:".$hits[0];
?>
