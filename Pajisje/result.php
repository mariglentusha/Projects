<!DOCTYPE html>
<?php

$viti1= array(
	'hekur'=>10,
'frigorifere'=>25,
'tharese'=>45,
'sobe'=>12
);?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
</head>
<body>
	<table>
		
		<?php
foreach ($viti1 as $x=>$y):
		 ?>
		 <tr>
		 	<td><?php echo ($x); ?></td>

		 	<td><?php echo ($y); ?></td>
		 	
		 </tr>
		<?php endforeach; ?>
	</table>

</body>
</html>