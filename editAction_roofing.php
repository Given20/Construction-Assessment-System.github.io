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
	$roof_type = mysqli_real_escape_string($conn, $_POST['roof_type']);
    $roof_cracked = mysqli_real_escape_string($conn, $_POST['roof_cracked']);
    $roof_leaking = mysqli_real_escape_string($conn, $_POST['roof_leaking']);
    $cause_of_leaking = mysqli_real_escape_string($conn, $_POST['cause_of_leaking']);
    $broken_tiles = mysqli_real_escape_string($conn, $_POST['broken_tiles']);
    $length = mysqli_real_escape_string($conn, $_POST['length']);
    $width = mysqli_real_escape_string($conn, $_POST['width']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $number_of_tiles_broken = mysqli_real_escape_string($conn, $_POST['number_of_tiles_broken']);
    $zinc_roof = mysqli_real_escape_string($conn, $_POST['zinc_roof']);
    $loose_nails = mysqli_real_escape_string($conn, $_POST['loose_nails']);
    $tiles_aligned = mysqli_real_escape_string($conn, $_POST['tiles_aligned']);
    $trusses = mysqli_real_escape_string($conn, $_POST['trusses']);
    $valley_point = mysqli_real_escape_string($conn, $_POST['valley_point']);
    $valley_point_leaking = mysqli_real_escape_string($conn, $_POST['valley_point_leaking']);
    $condition_valley_point = mysqli_real_escape_string($conn, $_POST['condition_valley_point']);
    $gutter_condition = mysqli_real_escape_string($conn, $_POST['gutter_condition']);
    $additional_notes = mysqli_real_escape_string($conn, $_POST['additional_notes']);
	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($roof_type) || empty($roof_cracked) || empty($roof_leaking) || empty($cause_of_leaking) || empty($broken_tiles) || empty($length) || empty($width) || empty($height) || empty($number_of_tiles_broken)
    || empty($zinc_roof) || empty($loose_nails) || empty($tiles_aligned) || empty($trusses) || empty($valley_point) || empty($valley_point_leaking) || empty($condition_valley_point) || empty($gutter_condition) || empty($additional_notes)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
		}
		
		if (empty($roof_type)) {
			echo "<font color='red'>roof_type field is empty.</font><br/>";
		}
        if (empty($roof_cracked)) {
			echo "<font color='red'>roof_cracked field is empty.</font><br/>";
		}
        if (empty($roof_leaking)) {
			echo "<font color='red'>roof_leaking field is empty.</font><br/>";
		}
        if (empty($cause_of_leaking)) {
			echo "<font color='red'>cause_of_leaking field is empty.</font><br/>";
		}
        if (empty($broken_tiles)) {
			echo "<font color='red'>broken_tiles field is empty.</font><br/>";
		}
        if (empty($length)) {
			echo "<font color='red'>length field is empty.</font><br/>";
		}
        if (empty($width)) {
			echo "<font color='red'>width field is empty.</font><br/>";
		}
        if (empty($height)) {
			echo "<font color='red'>height field is empty.</font><br/>";
		}
        if (empty($number_of_tiles_broken)) {
			echo "<font color='red'>number_of_tiles_broken field is empty.</font><br/>";
		}
        if (empty($zinc_roof)) {
			echo "<font color='red'>zinc_roof field is empty.</font><br/>";
		}
        if (empty($loose_nails)) {
			echo "<font color='red'>loose_nails field is empty.</font><br/>";
		}
        if (empty($tiles_aligned)) {
			echo "<font color='red'>tiles_aligned field is empty.</font><br/>";
		}
        if (empty($trusses)) {
			echo "<font color='red'>trusses field is empty.</font><br/>";
		}
        if (empty($valley_point)) {
			echo "<font color='red'>valley_point field is empty.</font><br/>";
		}
        if (empty($valley_point_leaking)) {
			echo "<font color='red'>valley_point_leaking field is empty.</font><br/>";
		}
        if (empty($condition_valley_point)) {
			echo "<font color='red'>condition_valley_point field is empty.</font><br/>";
		}
        if (empty($gutter_condition)) {
			echo "<font color='red'>gutter_condition field is empty.</font><br/>";
		}
        if (empty($additional_notes)) {
			echo "<font color='red'>additional_notes field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

        // Update the database table
		$result = mysqli_query($conn, "UPDATE roofing SET `reference` = '$reference', `agency` = '$agency', `roof_type` = '$roof_type', `roof_cracked` = '$roof_cracked', `roof_leaking` = '$roof_leaking' , `cause_of_leaking` = '$cause_of_leaking', `broken_tiles` = '$broken_tiles', `length` = '$length', `width` = '$width', `height` = '$height', `number_of_tiles_broken` = '$number_of_tiles_broken', `zinc_roof` = '$zinc_roof', `loose_nails` = '$loose_nails', `tiles_aligned` = '$tiles_aligned', `trusses` = '$trusses', `valley_point` = '$valley_point', `valley_point_leaking` = '$valley_point_leaking', `condition_valley_point` = '$condition_valley_point', `gutter_condition` = '$gutter_condition' , `additional_notes` = '$additional_notes' WHERE `id` = $id");
		


		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='roofing_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
