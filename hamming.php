<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    //
    // YOUR CODE GOES HERE
    //
	$a1 = str_split($a);
    $a2 = str_split($b);
$x=0;
for( $i=0;$i<count($a1);$i++)
if($a1[$i] !=$a2[$i])	$x=$x+1;
return $x;
}
echo distance('hello','hilko');
?>
