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
    $paint_peeling = mysqli_real_escape_string($conn, $_POST['paint_peeling']);
    $damage_cause_paint = mysqli_real_escape_string($conn, $_POST['damage_cause_paint']);
	$litres = mysqli_real_escape_string($conn, $_POST['litres']);
    $additional_notes = mysqli_real_escape_string($conn, $_POST['additional_notes']);
	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($paint_peeling) || empty($damage_cause_paint) || empty($litres)  || empty($additional_notes)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
		}
	
        if (empty($paint_peeling)) {
			echo "<font color='red'>paint_peeling field is empty.</font><br/>";
		}
        if (empty($damage_cause_paint)) {
			echo "<font color='red'>damage_cause_paint field is empty.</font><br/>";
		}
        if (empty($litres)) {
			echo "<font color='red'>litres field is empty.</font><br/>";
		}
        if (empty($additional_notes)) {
			echo "<font color='red'>Notes field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

	
        // Update the database table
		$result = mysqli_query($conn, "UPDATE painting SET `reference` = '$reference', `agency` = '$agency', `paint_peeling` = '$paint_peeling', `damage_cause_paint` = '$damage_cause_paint', `litres` = '$litres' , `additional_notes` = '$additional_notes' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='paint_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
