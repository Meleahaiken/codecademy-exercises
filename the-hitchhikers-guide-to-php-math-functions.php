<?php
$initial = '555';

//Convert from Decimal to Octal
$a = octdec($initial);
echo $a . "\n";

//Convert from decimal to radians
$b = deg2rad($a);
echo $b . "\n";

//Convert to take the cosine
$c = cos($b);
echo $c . "\n";

//Convert to round to 3 decimal places
$d = round($c, 3);
echo $d . "\n" ;

// Take the natural log
$e = log($d);
echo $e . "\n";

//Adsolute value
$f = abs($e);
echo $f . "\n";

//Inverse/arc cosine 
$g = acos($f);
echo $g . "\n";

// Radians to degrees
$h = rad2deg($g);
echo $h . "\n";

// Floor/round down
$i = floor($h);
echo $i . "\n";

$j = $i - 47;
echo $j;

