<?php
// Include the database connection file
require_once("db_conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM task ORDER BY id DESC");
?>

<html>
<head>	
	<title>Tasks To Complete Table</title>
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
    <h2>Tasks To Complete Table</h2>
    <p>
        <a href="todo_form.php"><button type="button" class="btn btn-success">Task To Do</button></a>
    </p>
	<p>
        <a href="dashboard.php"><button type="button" class="btn btn-danger">Home</button></a>
    </p>
    <table width='100%' border=0 class="table table-striped">
        <tr bgcolor='#DDDDDD'>
            <td><strong>Reference</strong></td>
            <td><strong>First Name:</strong></td>
            <td><strong>Task Name:</strong></td>
            <td><strong>Task Status:</strong></td>
            <td><strong>Date:</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['reference']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['task_name']."</td>";
            echo "<td><span class='badge bg-primary'>".$res['task_status']."</span></td>";
            echo "<td>".$res['date']."</td>";
            echo "<td><a href=\"edit_todo.php?id=$res[id]\" class=\"btn btn-warning\">Edit</a></td>";
            // echo "<td> <a href=\"delete_todo.php?id=$res[id]\" class=\"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>
</html>
