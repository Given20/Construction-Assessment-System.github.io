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
	$geyser_condition = mysqli_real_escape_string($conn, $_POST['geyser_condition']);
    $vacuum_breakers = mysqli_real_escape_string($conn, $_POST['vacuum_breakers']);
	$drip_tray = mysqli_real_escape_string($conn, $_POST['drip_tray']);
    $pressure_control = mysqli_real_escape_string($conn, $_POST['pressure_control']);
    $tile_damage = mysqli_real_escape_string($conn, $_POST['tile_damage']);
    $pipe_leaking = mysqli_real_escape_string($conn, $_POST['pipe_leaking']);
    $check_pipe_fittings = mysqli_real_escape_string($conn, $_POST['check_pipe_fittings']);
    $conduct = mysqli_real_escape_string($conn, $_POST['conduct']);
    $leaking_taps = mysqli_real_escape_string($conn, $_POST['leaking_taps']);
    $waste_pipes = mysqli_real_escape_string($conn, $_POST['waste_pipes']);
    $drain_blockage = mysqli_real_escape_string($conn, $_POST['drain_blockage']);
    $bathroom_leaking_taps = mysqli_real_escape_string($conn, $_POST['bathroom_leaking_taps']);
    $leaking_blocked_pipes = mysqli_real_escape_string($conn, $_POST['leaking_blocked_pipes']);
    $waste_pipe_condition = mysqli_real_escape_string($conn, $_POST['waste_pipe_condition']);
    $water_closet = mysqli_real_escape_string($conn, $_POST['water_closet']);
    $rubber_intact = mysqli_real_escape_string($conn, $_POST['rubber_intact']);
    $water_intake_block = mysqli_real_escape_string($conn, $_POST['water_intake_block']);
    $flexible_pipe = mysqli_real_escape_string($conn, $_POST['flexible_pipe']);
    $shower_issues = mysqli_real_escape_string($conn, $_POST['shower_issues']);
    $shower_condition = mysqli_real_escape_string($conn, $_POST['shower_condition']);
    $shower_tap = mysqli_real_escape_string($conn, $_POST['shower_tap']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);


	// Check for empty fields
	if (empty($reference) || empty($agency) || empty($geyser_condition) ||empty($vacuum_breakers) || empty($drip_tray) || empty($pressure_control) 
    || empty($tile_damage) || empty($pipe_leaking) || empty($check_pipe_fittings) || empty($conduct) || empty($leaking_taps) || empty($waste_pipes)
    || empty($drain_blockage) || empty($bathroom_leaking_taps) || empty($leaking_blocked_pipes) || empty($waste_pipe_condition) || empty($water_closet) 
    || empty($rubber_intact) || empty($water_intake_block)  || empty($flexible_pipe)  || empty($shower_issues) || empty($shower_condition) || empty($shower_tap)   || empty($notes)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($agency)) {
			echo "<font color='red'>Agency field is empty.</font><br/>";
		}
		
		if (empty($geyser_condition)) {
			echo "<font color='red'>geyser_condition field is empty.</font><br/>";
		}
        if (empty($vacuum_breakers)) {
			echo "<font color='red'>Vacuum breakers field is empty.</font><br/>";
		}
		if (empty($drip_tray)) {
			echo "<font color='red'>Drip tray field is empty.</font><br/>";
		}
        if (empty($pressure_control)) {
			echo "<font color='red'>Pressure control field is empty.</font><br/>";
		}
        if (empty($tile_damage)) {
			echo "<font color='red'>Tile damage field is empty.</font><br/>";
		}
        if (empty($pipe_leaking)) {
			echo "<font color='red'>Pipe leaking field is empty.</font><br/>";
		}
        if (empty($check_pipe_fittings)) {
			echo "<font color='red'>Check pipe fittings field is empty.</font><br/>";
		}
        if (empty($conduct)) {
			echo "<font color='red'>Conduct field is empty.</font><br/>";
		}
        if (empty($leaking_taps)) {
			echo "<font color='red'>Leaking taps field is empty.</font><br/>";
		}
        if (empty($waste_pipes)) {
			echo "<font color='red'>Waste Pipes field is empty.</font><br/>";
		}
        if (empty($drain_blockage)) {
			echo "<font color='red'>Drain blockage field is empty.</font><br/>";
		}
        if (empty($bathroom_leaking_taps)) {
			echo "<font color='red'>Bathroom Leaking taps field is empty.</font><br/>";
		}
        if (empty($leaking_blocked_pipes)) {
			echo "<font color='red'>Leaking Blocked Pipes field is empty.</font><br/>";
		}
        if (empty($waste_pipe_condition)) {
			echo "<font color='red'>Waste pipe condition field is empty.</font><br/>";
		}
        if (empty($water_closet)) {
			echo "<font color='red'>Water closet field is empty.</font><br/>";
		}
        if (empty($rubber_intact)) {
			echo "<font color='red'>Rubber intact field is empty.</font><br/>";
		}
        if (empty($water_intake_block)) {
			echo "<font color='red'>Water intake blockage field is empty.</font><br/>";
		}
        if (empty($flexible_pipe)) {
			echo "<font color='red'>Flexible pipe field is empty.</font><br/>";
		}

        if (empty($shower_issues)) {
			echo "<font color='red'>Shower issues field is empty.</font><br/>";
		}

        if (empty($shower_condition)) {
			echo "<font color='red'>Shower condition field is empty.</font><br/>";
		}

        if (empty($shower_tap)) {
			echo "<font color='red'>Shower tap field is empty.</font><br/>";
		}

		if (empty($notes)) {
			echo "<font color='red'>Additional Note field is empty.</font><br/>";
		}
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($conn, "INSERT INTO plumbing (`reference`, `agency`, `geyser_condition`, `vacuum_breakers`, `drip_tray`, `pressure_control` , `tile_damage` , `pipe_leaking`, `check_pipe_fittings`, `conduct`, `leaking_taps`, `waste_pipes`, `drain_blockage`, `bathroom_leaking_taps`, `leaking_blocked_pipes`, `waste_pipe_condition` , `water_closet` , `rubber_intact` , `water_intake_block` , `flexible_pipe` , `shower_issues` , `shower_condition` , `shower_tap`, `notes`) 
		
		VALUES ('$reference', '$agency', '$geyser_condition','$vacuum_breakers','$drip_tray','$pressure_control ','$tile_damage ','$pipe_leaking ','$check_pipe_fittings ','$conduct ','$leaking_taps ','$waste_pipes ','$drain_blockage ','$bathroom_leaking_taps ','$leaking_blocked_pipes ','$waste_pipe_condition ','$water_closet ','$rubber_intact ','$water_intake_block ','$flexible_pipe ','$shower_issues ','$shower_condition ','$shower_tap','$notes')");
		
	
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='plumbing_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
