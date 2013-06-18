<?php 
	$link = mysql_connect("localhost:3306", "Darklayi", "123456");
	if (!$link) 
	{
		die('Could not connect: ' . mysql_error());
	}

	$sql = "SELECT $_POST[ISBN], $_POST[bookname], $_POST[preview] FROM test";
	$result = mysql_query($sql, $link);

	echo "Content in the test:";
	echo "<br />";
	echo "<table border='1'>
		<tr>
			<th>ISBN</th>
			<th>bookname</th>
			<th>preview</th>
		</tr>";

	while($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['ISBN'] . "</td>";
		echo "<td>" . $row['bookname'] . "</td>";
		echo "<td>" . $row['preview'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysql_close($link);
	echo "<br />";
	echo "Thanks for using~";
	echo "<br />";
	echo "Have fun~!";
	echo "<br />"
	echo "<a href="/project/index.php">Back</a>"

?>