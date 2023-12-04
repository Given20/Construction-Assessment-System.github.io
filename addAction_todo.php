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
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
    $task_status = mysqli_real_escape_string($conn, $_POST['task_status']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
	// Check for empty fields
	if (empty($reference) ||empty($name) || empty($task_name) || empty($task_status) || empty($date)) {
		if (empty($reference)) {
			echo "<font color='red'>Reference field is empty.</font><br/>";
		}
		
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($task_name)) {
			echo "<font color='red'>Task Name field is empty.</font><br/>";
		}
        if (empty($task_status)) {
			echo "<font color='red'>Task Status field is empty.</font><br/>";
		}
        if (empty($date)) {
			echo "<font color='red'>Date field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($conn, "INSERT INTO task (`reference`, `name`, `task_name`, `task_status`, `date`) VALUES ('$reference','$name', '$task_name', '$task_status', '$date')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='todo_table.php' class='btn btn-primary'>View Result</a>";
	}
}
?>
</body>
</html>
