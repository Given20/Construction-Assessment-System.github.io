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

if (isset($_POST['update'])) {
	// Escape special characters in string for use in SQL statement	
    $id = mysqli_real_escape_string($conn, $_POST['id']);
	$reference = mysqli_real_escape_string($conn, $_POST['reference']);
	$agency = mysqli_real_escape_string($conn, $_POST['agency']);
	$ceiling_intact = mysqli_real_escape_string($conn, $_POST['ceiling_intact']);
    $ceiling_type = mysqli_real_escape_string($conn, $_POST['ceiling_type']);
    $water_damage = mysqli_real_escape_string($conn, $_POST['water_damage']);
    $spots_stains_mold = mysqli_real_escape_string($conn, $_POST['spots_stains_mold']);
    $ceiling_note = mysqli_real_escape_string($conn, $_POST['ceiling_note']);
	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($ceiling_intact) || empty($ceiling_type) || empty($water_damage) || empty($spots_stains_mold) || empty($ceiling_note)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
		}
		
		if (empty($ceiling_intact)) {
			echo "<font color='red'>Ceiling Intact field is empty.</font><br/>";
		}
        if (empty($ceiling_type)) {
			echo "<font color='red'>Ceiling Type field is empty.</font><br/>";
		}
        if (empty($water_damage)) {
			echo "<font color='red'>Water Damage field is empty.</font><br/>";
		}
        if (empty($spots_stains_mold)) {
			echo "<font color='red'>spots_stains_mold field is empty.</font><br/>";
		}
        if (empty($ceiling_note)) {
			echo "<font color='red'>Notes field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		// $result = mysqli_query($mysqli, "INSERT INTO foundation (`reference`, `agency`, `length`, `width`, `height`, `damages` , `cracks` , `notes`) VALUES ('$reference', '$agency', '$length', '$width' , '$height' , '$damages', '$cracks', '$notes')");
		
        // Update the database table
		$result = mysqli_query($conn, "UPDATE ceiling SET `reference` = '$reference', `agency` = '$agency', `ceiling_intact` = '$ceiling_intact', `ceiling_type` = '$ceiling_type', `water_damage` = '$water_damage' , `spots_stains_mold` = '$spots_stains_mold' , `ceiling_note` = '$ceiling_note' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='ceiling_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
