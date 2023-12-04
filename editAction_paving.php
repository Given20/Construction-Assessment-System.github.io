<!DOCTYPE html>
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
	$broken_tiles_paving = mysqli_real_escape_string($conn, $_POST['broken_tiles_paving']);
	$surface_uneven_paving = mysqli_real_escape_string($conn, $_POST['surface_uneven_paving']);
	$damage_water_paving = mysqli_real_escape_string($conn, $_POST['damage_water_paving']);
	$tiles_replace_paving = mysqli_real_escape_string($conn, $_POST['tiles_replace_paving']);
	$tile_damage_paving = mysqli_real_escape_string($conn, $_POST['tile_damage_paving']);
	$length = mysqli_real_escape_string($conn, $_POST['length']);
	$width = mysqli_real_escape_string($conn, $_POST['width']);
	$height = mysqli_real_escape_string($conn, $_POST['height']);
	$add_notes_paving = mysqli_real_escape_string($conn, $_POST['add_notes_paving']);

	// Check for empty fields
	$emptyFields = array();

	if (empty($reference)) {
		$emptyFields[] = "Reference";
	}

	if (empty($agency)) {
		$emptyFields[] = "Agency";
	}

	if (empty($broken_tiles_paving)) {
		$emptyFields[] = "Broken Tiles";
	}

	if (empty($surface_uneven_paving)) {
		$emptyFields[] = "Surface Uneven";
	}

	if (empty($damage_water_paving)) {
		$emptyFields[] = "Damage Water";
	}

	if (empty($tiles_replace_paving)) {
		$emptyFields[] = "Tiles Replace";
	}

	if (empty($tile_damage_paving)) {
		$emptyFields[] = "Tile Damage";
	}

	if (empty($length)) {
		$emptyFields[] = "Length";
	}

	if (empty($width)) {
		$emptyFields[] = "Width";
	}

	if (empty($height)) {
		$emptyFields[] = "Height";
	}

	if (empty($add_notes_paving)) {
		$emptyFields[] = "Notes";
	}

	if (!empty($emptyFields)) {
		echo "<p><font color='red'>The following fields are empty: " . implode(', ', $emptyFields) . "</font></p>";
		echo "<a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// Update the database table
		$query = "UPDATE paving SET `reference` = '$reference', `agency` = '$agency', `broken_tiles_paving` = '$broken_tiles_paving', `surface_uneven_paving` = '$surface_uneven_paving', `damage_water_paving` = '$damage_water_paving', `tiles_replace_paving` = '$tiles_replace_paving', `tile_damage_paving` = '$tile_damage_paving', `length` = '$length', `width` = '$width', `height` = '$height', `add_notes_paving` = '$add_notes_paving' WHERE `id` = $id";

		$result = mysqli_query($conn, $query);

		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data updated successfully!</font></p>";
			echo "<a href='paving_table.php' class='btn btn-primary'>View Result</a>";
		} else {
			// Display an error message if the update fails
			echo "<p><font color='red'>Error updating data: " . mysqli_error($conn) . "</font></p>";
		}
	}
}
?>
</body>
</html>
