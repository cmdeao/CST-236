<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Display Users</title>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
	</tr>
<?php 
for($x=0; $x < count($users); $x++)
{
    echo "<tr>";
        echo "<td>" . $users[$x][0] . "</td>" . "<td>" .
            $users[$x][1] . "</td>" . "</td>" . "<td>" . $users[$x][2] . "</td>";
        echo "</tr>";
}
?>
</table>
</body>
</html>