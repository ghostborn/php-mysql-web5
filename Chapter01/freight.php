<!--
 * @Author: 贾丽鹏 1094425279@qq.com
 * @Date: 2024-11-27 17:30:32
 * @LastEditors: 贾丽鹏 1094425279@qq.com
 * @LastEditTime: 2024-11-28 09:11:30
 * @FilePath: Chapter01/freight.php
 * @Description: 这是默认设置,可以在设置》工具》File Description中进行配置
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bob's Auto Parts - Freight Costs</title>
</head>
<body>
<table>
    <tr>
        <td style="background: #cccccc; text-align: center;">Distance</td>
        <td style="background: #cccccc; text-align: center;">Cost</td>
    </tr>
	<?php
	$distance = 50;
	while ($distance <= 250) {
		echo "<tr>
                <td style=\"text-align: center\">" . $distance . "</td>
                <td style=\"text-align: center\">" . ($distance / 10) . "</td>
              </tr>\n";
		$distance += 50;
	}
	?>
</table>
</body>
</html>