<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM ceiling ORDER BY id DESC");
?>

<html>
<head>	
	<title>Ceiling Table</title>
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
	<h2>Ceiling And Cornice Assessment Table</h2>
	<p>
		<!-- <a href="foundation_form.php">Add New Data</a> -->
        <a href="ceiling&cornice_form.php"><button type="button" class="btn btn-danger">Add New Data</button></a>
	</p>
	<table width='100%' border=0 class="table table-striped">
		<tr bgcolor='#DDDDDD'>
			<td><strong>Reference</strong></td>
			<td><strong>Agency</strong></td>
			<td><strong>Is the ceiling still intact?</strong></td>
			<td><strong>What is the type of ceiling?</strong></td>
            <td><strong>Are there any water damages?</strong></td>
            <td><strong>Are there soft spots, water stains or mold growth?</strong></td>
            <td><strong>Additional Notes</strong></td>
            <td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['reference']."</td>";
			echo "<td>".$res['agency']."</td>";
            echo "<td>".$res['ceiling_intact']."</td>";
            echo "<td>".$res['ceiling_type']."</td>";
            echo "<td>".$res['water_damage']."</td>";
            echo "<td>".$res['spots_stains_mold']."</td>";
			echo "<td>".$res['ceiling_note']."</td>";	
			echo "<td><a href=\"edit_ceiling.php?id=$res[id]\" class=\"btn btn-primary\">Edit</a></td>";
		}
		?>
	</table>
</body>
</html>
