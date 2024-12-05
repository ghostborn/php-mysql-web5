<?php

//class Math
//{
//	const pi = 3.14159;
//
//	static function squared($input)
//	{
//		echo __CLASS__ . "\n";
//		return $input * $input;
//	}
//}
//
//echo "Math::pi =" . Math::pi . "\n";
//echo Math::squared(8);

class Printable
{
	public $testone;
	public $testtwo;

	public function __toString()
	{
		return (var_export($this, true));
	}
}

$p = new Printable;
echo $p;