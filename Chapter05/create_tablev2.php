<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Table</title>
    <style>
        caption {
            font-style: italic;
            padding-bottom: 6px;
        }

        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
    </style>
</head>
<body>
<?php
function create_table($data, $header = null, $caption = null)
{
	echo '<table>';
	if ($caption) {
		echo "<caption>$caption</caption>";
	}
	if ($header) {
		echo "<caption>$header</caption>";
	}
	reset($data);
	$value = current($data);
	while ($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
	}
	echo '</table>';
}

$my_data = ['First piece of data', 'Second piece of data', 'And the third'];
$my_header = 'Data';
$my_caption = 'Data about something';
create_table($my_data, $my_header, $my_caption);

?>
</body>
</html>



