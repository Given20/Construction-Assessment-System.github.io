<?php
// Include the database connection file
require_once("db_conn.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($conn, "DELETE FROM paving WHERE id = $id");

// Redirect to the main display page (index.php in our case)
header("Location:admin_paving.php");
