<!DOCTYPE html>
<html>
<head>
	<title>Chess Assignment</title>
</head>
<body>
	<table border="1px solid black">

	<?php

		
		for($row=1;$row<=8;$row++)
			{

				echo "<tr>";
				for($column=1;$column<=8;$column++)
				{
					$total=$row+$column;
					if($total%2==0)
					{
						echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
					}
					else
					{
						echo "<td height=35px width=30px bgcolor=#000000></td>";
					}
				}

				echo "</tr>";
		}
		

	?>
</table>

</body>
</html>