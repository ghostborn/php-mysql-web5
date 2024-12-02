<?php
function larger($x, $y)
{
	if (!isset($x) || !isset($y)) {
		return false;
	} else {
		return max($x, $y);
	}
}

;

$a = 1;
$b = 2.5;
$c = 1.9;
$d = null;

echo larger($a, $b) . '<br />';
echo larger($c, $a) . '<br />';
echo larger($d, $a) . '<br />';