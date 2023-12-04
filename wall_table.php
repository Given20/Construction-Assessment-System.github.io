<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM wall ORDER BY id DESC");
?>

<html>
<head>	
	<title>Wall Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wall</title>
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
	<h2>Wall Assessment Table</h2>
	<p>
		<!-- <a href="foundation_form.php">Add New Data</a> -->
        <a href="wall_form.php"><button type="button" class="btn btn-danger">Add New Data</button></a>
	</p>
	<table width='100%' border=0 class="table table-striped">
		<tr bgcolor='#DDDDDD'>
			<td><strong>Reference</strong></td>
			<td><strong>Agency</strong></td>
			<td><strong>Length</strong></td>
			<td><strong>Width</strong></td>
			<td><strong>Height</strong></td>
			<td><strong>Are the walls damp?</strong></td>
			<td><strong>Is the paint peeling?</strong></td>
			<td><strong>Are the walls cracked?</strong></td>
			<td><strong>Is it a boundary wall?</strong></td>
			<td><strong>Is it a palisade fence?</strong></td>
			<td><strong>Is it wall partitioned or erecting?</strong></td>
			<td><strong>Wall replacement or wall repair?</strong></td>
			<td><strong>Additional Notes</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['reference']."</td>";
			echo "<td>".$res['agency']."</td>";
			echo "<td>".$res['length']."</td>";	
			echo "<td>".$res['width']."</td>";	
			echo "<td>".$res['height']."</td>";	
			echo "<td>".$res['walls_damp']."</td>";	
			echo "<td>".$res['peeling_paint']."</td>";
			echo "<td>".$res['walls_cracked']."</td>";
			echo "<td>".$res['boundary_wall']."</td>";
			echo "<td>".$res['palisade_fence']."</td>";
			echo "<td>".$res['wall_partitioned_erecting']."</td>";
			echo "<td>".$res['wall_replace_wall_repair']."</td>";
			echo "<td>".$res['add_note']."</td>";
			echo "<td><a href=\"edit_wall.php?id=$res[id]\" class=\"btn btn-primary\">Edit</a></td>";
		}
		?>
	</table>
</body>
</html>

