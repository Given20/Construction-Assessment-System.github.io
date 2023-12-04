<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM electrical ORDER BY id DESC");




// $result = mysqli_query($conn, "SELECT * FROM task 
//                                 INNER JOIN electrical ON task.name = electrical.name 
//                                 ORDER BY electrical.id DESC");




?>

<html>
<head>	
	<title>Electrical Table</title>
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
	<h2>Electrical Assessment Table</h2>
	<p>
		<!-- <a href="foundation_form.php">Add New Data</a> -->
        <a href="electrical_form.php"><button type="button" class="btn btn-danger">Add New Data</button></a>
	</p>
	<table width='100%' border=0 class="table table-striped">
		<tr bgcolor='#DDDDDD'>
			<td><strong>Reference</strong></td>
			<td><strong>Agency</strong></td>
			<td><strong>Length</strong></td>
			<td><strong>Width</strong></td>
            <td><strong>Height</strong></td>
            <td><strong>What caused the damage ?</strong></td>
            <td><strong>What needs to be replaced?</strong></td>
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
            echo "<td>".$res['damage_cause']."</td>";
            echo "<td>".$res['replacement']."</td>";
			echo "<td>".$res['notes']."</td>";	
            echo "<td><a href=\"edit_electrical.php?id=$res[id]\" class=\"btn btn-primary\">Edit</a></td>";
		}
		?>
	</table>
</body>
</html>
