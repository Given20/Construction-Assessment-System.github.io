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
<h2>Plumbing Table</h2>
    <table width='100%' border=0 class="table table-striped">
        <tr bgcolor='#DDDDDD'>
            <td><strong>Ref</strong></td>
            <td><strong>Agency</strong></td>
            <td><strong>Geyser Condition</strong></td>
            <td><strong>Vacuum Breakers</strong></td>
            <td><strong>Drip Tray</strong></td>
            <td><strong>Pressure Control</strong></td>
            <td><strong>Tile Damage</strong></td>
            <td><strong>Pipe Leaking</strong></td>
            <td><strong>Check Pipe Fittings</strong></td>
            <td><strong>Conduct</strong></td>
            <td><strong>Leaking Taps</strong></td>
            <td><strong>Waste Pipes</strong></td>
            <td><strong>Drain Blockage</strong></td>
            <td><strong>Bathroom Leaking Taps</strong></td>
            <td><strong>Leaking Blocked Pipes</strong></td>
            <td><strong>Waste Pipe Condition</strong></td>
            <td><strong>Water Closet</strong></td>
            <td><strong>Rubber Intact</strong></td>
            <td><strong>Water Intake Block</strong></td>
            <td><strong>Flexible Pipe</strong></td>
            <td><strong>Shower Issues</strong></td>
            <td><strong>Shower Condition</strong></td>
            <td><strong>Shower Tap</strong></td>
            <td><strong>Additional Notes</strong></td>
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
            echo "<td>
                <a href=\"view_plumbing.php?id=$res[id]\" class=\"btn btn-primary\">View</a> 
                <a href=\"delete_plumbing.php?id=$res[id]\" class=\"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
            </td>";
        }
        ?>
    </table>
</body>
</html>
