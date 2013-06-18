<?php
	$link = mysql_connect("localhost:3306", "Darklayi", "123456");
	if (!$link) 
	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("library", $link);
	mysql_query("INSERT INTO test VALUES('$_POST[ISBN]', '$_POST[bookname]', '$_POST[preview]')");
	if (!mysql_query($sql, $link))
  	{
  		die('Error: ' . mysql_error());
  	}
	echo "1 record added";

	echo "<br />";
	echo "<br />";
	echo "Content in the test:";
	echo "<br />";
	$sql = "SELECT * FROM test";
	$result = mysql_query($sql, $link);
	while ($row = mysql_fetch_array($result))
	{
		echo $row['ISBN'] . " " . $row['bookname'] . " " . $row['preview'];
		echo "<br />";
	}

	mysql_close($link);
	echo "<br />";
	echo "Thanks for using~";
	echo "<br />";
	echo "Have fun~!";

/*<html>
<body>

<form action="insert.php" method="post">
ISBN: <input type="text" name="ISBN" />
Bookname: <input type="text" name="bookname" />
Preview: <input type="text" name="preview" />
<input type="submit" />
</form>

</body>
</html>*/
?>
<html>
<body>
	<br />
	<a href="/project/index.php">Back</a>
</body>
</html>