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
    $length = mysqli_real_escape_string($conn, $_POST['length']);
    $width = mysqli_real_escape_string($conn, $_POST['width']);
	$height = mysqli_real_escape_string($conn, $_POST['height']);
    $walls_damp = mysqli_real_escape_string($conn, $_POST['walls_damp']);
    $peeling_paint = mysqli_real_escape_string($conn, $_POST['peeling_paint']);
    $walls_cracked = mysqli_real_escape_string($conn, $_POST['walls_cracked']);
    $boundary_wall = mysqli_real_escape_string($conn, $_POST['boundary_wall']);
    $palisade_fence = mysqli_real_escape_string($conn, $_POST['palisade_fence']);
    $wall_partitioned_erecting = mysqli_real_escape_string($conn, $_POST['wall_partitioned_erecting']);
    $wall_replace_wall_repair = mysqli_real_escape_string($conn, $_POST['wall_replace_wall_repair']);
    $add_note = mysqli_real_escape_string($conn, $_POST['add_note']);
	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($length) || empty($width) || empty($height) || empty($walls_damp) || empty($peeling_paint) || empty($walls_cracked) || empty($boundary_wall) || empty($palisade_fence) 
    || empty($wall_partitioned_erecting) || empty($wall_replace_wall_repair) || empty($add_note)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
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
        if (empty($walls_damp)) {
			echo "<font color='red'>walls_damp field is empty.</font><br/>";
		}
        if (empty($peeling_paint)) {
			echo "<font color='red'>peeling_paint field is empty.</font><br/>";
		}
        if (empty($walls_cracked)) {
			echo "<font color='red'>walls_cracked field is empty.</font><br/>";
		}
        if (empty($boundary_wall)) {
			echo "<font color='red'>boundary_wall field is empty.</font><br/>";
		}
        if (empty($palisade_fence)) {
			echo "<font color='red'>palisade_fence field is empty.</font><br/>";
		}
        if (empty($wall_partitioned_erecting)) {
			echo "<font color='red'>wall_partitioned_erecting field is empty.</font><br/>";
		}
        if (empty($wall_replace_wall_repair)) {
			echo "<font color='red'>wall_replace_wall_repair field is empty.</font><br/>";
		}
        if (empty($add_note)) {
			echo "<font color='red'>Notes field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

				
  // Update the database table
  $result = mysqli_query($conn, "UPDATE wall SET `reference` = '$reference', `agency` = '$agency', `length` = '$length', `width` = '$width', `height` = '$height' , `walls_damp` = '$walls_damp' , `peeling_paint` = '$peeling_paint', `walls_cracked` = '$walls_cracked', `boundary_wall` = '$boundary_wall', `palisade_fence` = '$palisade_fence', `wall_partitioned_erecting` = '$wall_partitioned_erecting', `wall_replace_wall_repair` = '$wall_replace_wall_repair', `add_note` = '$add_note' WHERE `id` = $id");
		



		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='wall_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
