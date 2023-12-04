<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM painting ORDER BY id DESC");
?>

<html>
<head>	
	<title>Painting Table</title>
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
<h2>Painting Table</h2>
    <table width='100%' border=0 class="table table-striped">
        <tr bgcolor='#DDDDDD'>
            <td><strong>Reference</strong></td>
            <td><strong>Agency</strong></td>
            <td><strong>Paint Peeling Off</strong></td>
            <td><strong>Damage Cause</strong></td>
            <td><strong>Litres of Paint Needed</strong></td>
            <td><strong>Additional Notes</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['reference']."</td>";
            echo "<td>".$res['agency']."</td>";
            echo "<td>".$res['paint_peeling']."</td>";    
            echo "<td>".$res['damage_cause_paint']."</td>";    
            echo "<td>".$res['litres']."</td>";    
            echo "<td>".$res['additional_notes']."</td>";
            echo "<td>
                <a href=\"view_painting.php?id=$res[id]\" class=\"btn btn-primary\">View</a> | 
                <a href=\"delete_painting.php?id=$res[id]\" class=\"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
            </td>";
        }
        ?>
    </table>

</body>
</html>
