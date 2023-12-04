<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM roofing ORDER BY id DESC");
?>

<html>
<head>	
	<title>Roofing Table</title>
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
<h2>Roofing Table</h2>
    <table width='100%' border=0 class="table table-striped">
        <tr bgcolor='#DDDDDD'>
            <td><strong>Reference</strong></td>
            <td><strong>Agency</strong></td>
            <td><strong>Roof Type</strong></td>
            <td><strong>Is Roof Cracked</strong></td>
            <td><strong>Is Roof Leaking</strong></td>
            <td><strong>Cause of Leaking</strong></td>
            <td><strong>Are There Broken Tiles</strong></td>
            <td><strong>Length</strong></td>
            <td><strong>Width</strong></td>
            <td><strong>Height</strong></td>
            <td><strong>Number of Broken Tiles</strong></td>
            <td><strong>Is it a Zinc Roof</strong></td>
            <td><strong>Are There Loose Nails</strong></td>
            <td><strong>Are Tiles Aligned</strong></td>
            <td><strong>Are Trusses in Good Condition</strong></td>
            <td><strong>Are Valley Points Installed Properly</strong></td>
            <td><strong>Are Valley Points Not Leaking</strong></td>
            <td><strong>Condition of Valley Points</strong></td>
            <td><strong>Gutter Condition</strong></td>
            <td><strong>Additional Notes</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['reference']."</td>";
            echo "<td>".$res['agency']."</td>";
            echo "<td>".$res['roof_type']."</td>";
            echo "<td>".$res['roof_cracked']."</td>";
            echo "<td>".$res['roof_leaking']."</td>";
            echo "<td>".$res['cause_of_leaking']."</td>";
            echo "<td>".$res['broken_tiles']."</td>";
            echo "<td>".$res['length']."</td>";
            echo "<td>".$res['width']."</td>";
            echo "<td>".$res['height']."</td>";
            echo "<td>".$res['number_of_tiles_broken']."</td>";
            echo "<td>".$res['zinc_roof']."</td>";
            echo "<td>".$res['loose_nails']."</td>";
            echo "<td>".$res['tiles_aligned']."</td>";
            echo "<td>".$res['trusses']."</td>";
            echo "<td>".$res['valley_point']."</td>";
            echo "<td>".$res['valley_point_leaking']."</td>";
            echo "<td>".$res['condition_valley_point']."</td>";
            echo "<td>".$res['gutter_condition']."</td>";
            echo "<td>".$res['additional_notes']."</td>";
            echo "<td>
                <a href=\"view_roofing.php?id=$res[id]\" class=\"btn btn-primary\">View</a> | 
                <a href=\"delete_roofing.php?id=$res[id]\" class=\"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
            </td>";
        }
        ?>
    </table>

</body>
</html>
