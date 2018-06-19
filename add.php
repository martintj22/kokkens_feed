<html>
<head>
	<title>Feedback</title>
    <link href="style.css">
</head>

<body>
<section>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$smiley = mysqli_real_escape_string($mysqli, $_POST['smiley']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($name) || empty($smiley) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Udfyld et navn.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Angiv din alder.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Ikke nødvendigt.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO feed(name,smiley,email) VALUES('$name','$smiley','$email')");
		
		//display success message
		echo "<font color='green'>Feedback er tilføjet.";
		echo "<br/><a href='index.php'>vis resultat</a>";
	}
}
?>


</section>
</body>
</html>
