<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
if(isset($_POST['sub']))
{
	$q="SELECT * from data";
	$db=mysql_connect("localhost","root","");
	mysql_select_db("password",$db);
	$res=mysql_query($q,$db);
	echo"<table border=1 align=center>";
	echo"<tr><th>ID</th><th>NAME</th><th>
	PASSWORD</th></tr>";
	while($row=mysql_fetch_row($res))
	{
		echo"<tr>";
		for($i=0;$i<mysql_num_fields($res);$i++)
		echo"<td>".$row[$i]."</td>";
		echo"</tr>";
	}
	echo "</table>";
	mysql_close($db);
}
?>
<form method="post" action="">
	<label>Click to Load
	<input type="submit" name="sub" value="LOAD"</label>
</form>
<body>

</body>
</html>
