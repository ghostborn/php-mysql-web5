<?php
try {
	throw new Exception('something wrong!', 502);
} catch (Exception $e) {
	// handle exception
} finally {
	echo "Always runs!";
}