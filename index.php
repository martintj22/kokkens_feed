<?php
//including the database connection file
include_once("config.php");


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM feed ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>
	<title>Feedback</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<section>

<a href="add.html">Feedback</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Navn</td>
		<td>Smiley</td>
		<td>Emne</td>
		<td>Dato</td>
	</tr>

	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['smiley']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>

	</table>
</section>

</body>
</html>
