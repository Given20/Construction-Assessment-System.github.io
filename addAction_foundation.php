<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="icon" type="image/x-icon" href="img/New logo.png">
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Bootstrap plugin for css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5.3.0/css/bootstrap-ie11.min.css" media="all and (-ms-high-contrast: active), (-ms-high-contrast: none)"> -->
    <!-- Css Stylesheet -->
    <link rel="stylesheet" href="css/style2.css">
    ​<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>

<body style="text-align: center;">
<?php
// Include the database connection file
require_once("db_conn.php");

if (isset($_POST['submit'])) {

	// Escape special characters in string for use in SQL statement	
	$reference = mysqli_real_escape_string($conn, $_POST['reference']);
	$agency = mysqli_real_escape_string($conn, $_POST['agency']);
	$length = mysqli_real_escape_string($conn, $_POST['length']);
    $width = mysqli_real_escape_string($conn, $_POST['width']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $damages = mysqli_real_escape_string($conn, $_POST['damages']);
    $cracks = mysqli_real_escape_string($conn, $_POST['cracks']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($length) || empty($width) || empty($height) || empty($damages) || empty($cracks) || empty($notes)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
		}
		
		if (empty($length)) {
			echo "<font color='red'>Length field is empty.</font><br/>";
		}
        if (empty($width)) {
			echo "<font color='red'>Width field is empty.</font><br/>";
		}
        if (empty($height)) {
			echo "<font color='red'>Height field is empty.</font><br/>";
		}
        if (empty($damages)) {
			echo "<font color='red'>Damages field is empty.</font><br/>";
		}
        if (empty($cracks)) {
			echo "<font color='red'>Cracks field is empty.</font><br/>";
		}
        if (empty($notes)) {
			echo "<font color='red'>Notes field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($conn, "INSERT INTO foundation (`reference`, `agency`, `length`, `width`, `height`, `damages` , `cracks` , `notes`) VALUES ('$reference', '$agency', '$length', '$width' , '$height' , '$damages', '$cracks', '$notes')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='foundation_table.php' class='btn btn-primary'>View Result</a>";
		
	}
}
?>
</body>
</html>
