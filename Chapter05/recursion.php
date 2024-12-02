<?php
function reverse_i($str)
{
	for ($i = 1; $i <= strlen($str); $i++) {
		echo substr($str, -$i, 1) . "\n";
	}
}

reverse_i('Hello');

function reverse_r($str)
{
	if (strlen($str) > 0) {
		reverse_r(substr($str, 1));
	}
	echo substr($str, 0, 1) . "\n";
}

reverse_r('Hello');
