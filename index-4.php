<?php
function count($argument, $n)
{
    $count = 0;
    for ($i = 0; $i < $n - 1; $i++){
    	if ($argument[$i] == $argument[$i + 1])
    		$count++;
    }
    return $count;
}
$argument = argumentray(1, 1, 2, 3, 4 -51, 12, 12, 12, -51);
$n = sizeof($argument);
echo count($argument, $n);
?>