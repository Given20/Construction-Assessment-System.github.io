<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM plumbing ORDER BY id DESC");
?>

<html>
<head>	
	<title>Plumbing Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

<body>
	<h2>Plumbing Assessment Table</h2>
		<!-- <a href="foundation_form.php">Add New Data</a> -->
		<p>
        <a href="plumbing_form.php"><button type="button" class="btn btn-danger">Add New Data</button></a>
	</p>
	<p>
        <a href="dashboard.php"><button type="button" class="btn btn-success">Home</button></a>
	</p>
	<table width='100%' border=0 class="table table-striped">
		<tr bgcolor='#DDDDDD'>
			<td><strong>Reference</strong></td>
			<td><strong>Agency</strong></td>
			<td><strong>geyser_condition</strong></td>
			<td><strong>vacuum_breakers</strong></td>
			<td><strong>drip_tray</strong></td>
            <td><strong>pressure_control</strong></td>
			<td><strong>tile_damage</strong></td>
			<td><strong>pipe_leaking</strong></td>
			<td><strong>check_pipe_fittings</strong></td>
			<td><strong>conduct</strong></td>
			<td><strong>leaking_taps</strong></td>
			<td><strong>waste_pipes</strong></td>
			<td><strong>drain_blockage</strong></td>
			<td><strong>bathroom_leaking_taps</strong></td>
			<td><strong>leaking_blocked_pipes</strong></td>
			<td><strong>waste_pipe_condition</strong></td>
			<td><strong>water_closet</strong></td>
			<td><strong>rubber_intact</strong></td>
			<td><strong>water_intake_block</strong></td>
			<td><strong>flexible_pipe</strong></td>
			<td><strong>shower_issues</strong></td>
			<td><strong>shower_condition</strong></td>
			<td><strong>shower_tap</strong></td>
            <td><strong>Additional Notes:</strong></td>
			<td><strong>Action</strong></td>
			
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['reference']."</td>";
			echo "<td>".$res['agency']."</td>";	
			echo "<td>".$res['geyser_condition']."</td>";	
            echo "<td>".$res['vacuum_breakers']."</td>";
			echo "<td>".$res['drip_tray']."</td>";
			echo "<td>".$res['pressure_control']."</td>";
			echo "<td>".$res['tile_damage']."</td>";
			echo "<td>".$res['pipe_leaking']."</td>";
			echo "<td>".$res['check_pipe_fittings']."</td>";
			echo "<td>".$res['conduct']."</td>";
			echo "<td>".$res['leaking_taps']."</td>";
			echo "<td>".$res['waste_pipes']."</td>";
			echo "<td>".$res['drain_blockage']."</td>";
			echo "<td>".$res['bathroom_leaking_taps']."</td>";
			echo "<td>".$res['leaking_blocked_pipes']."</td>";
			echo "<td>".$res['waste_pipe_condition']."</td>";
			echo "<td>".$res['water_closet']."</td>";
			echo "<td>".$res['rubber_intact']."</td>";
			echo "<td>".$res['water_intake_block']."</td>";
			echo "<td>".$res['flexible_pipe']."</td>";
			echo "<td>".$res['shower_issues']."</td>";
			echo "<td>".$res['shower_condition']."</td>";
			echo "<td>".$res['shower_tap']."</td>";
            echo "<td>".$res['notes']."</td>";
			echo "<td><a href=\"edit_plumbing.php?id=$res[id]\" class=\"btn btn-primary\">Edit</a></td>";
						
			
		}
		?>
	</table>
</body>
</html>
