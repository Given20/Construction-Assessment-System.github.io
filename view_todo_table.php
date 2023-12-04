<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = isset($_GET['id']) ? $_GET['id'] : die('ID not provided');


// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM task WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$name = $resultData['name'];
$task_name = $resultData['task_name'];
$task_status = $resultData['task_status'];
$date = $resultData['date'];
?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task To Complete</title>
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

<form name="edit" method="post" action="editAction_todo.php">
<div class="col-sm-3">
    <label>Reference:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $reference; ?>" disabled>
  </div>
  <div class="col-sm-3">
    <label>Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" disabled>
  </div>
  <div class="col-sm-3">
    <br>
  <label>Assessment To Be Completed:</label>
  <select class="form-select" aria-label="Default select example" name="task_name" value="<?php echo $task_name; ?>" disabled>
  <option selected disabled>Assessment Task</option>
  <option value="Foundation">Foundation</option>
  <option value="Tiles">Tiles</option>
  <option value="Paving">Paving</option>
  <option value="Electrical">Electrical</option>
  <option value="Plumbing">Plumbing</option>
  <option value="Paint">Paint</option>
  <option value="Ceiling and Cornice">Ceiling and Cornice</option>
  <option value="Roofing">Roofing</option>
  <option value="Walls">Walls</option>
  <option value="Cardboards">Cardboards</option>
  <option value="Glazing">Glazing</option>
</select>
  </div>
  <div class="col-sm-3">
    <br>
  <label>Status</label>
  <select class="form-select" aria-label="Default select example" name="task_status" value="<?php echo $task_status; ?>" disabled>
  <option selected disabled>Task Status</option>
  <option value="In Progress" style="color: orange;">In Progress</option>
  <option value="Paused" style="color: red;">Paused</option>
  <option value="Completed" style="color: green;">Completed</option>
</select>
  </div>
  <div class="col-sm-3">
    <label>Date:</label>
    <input type="date_time_set" class="form-control" name="date" value="<?php echo $date; ?>" disabled>
  </div>
  <br>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <!-- <button type="submit" class="btn btn-primary" name="update">Update</button> -->
</form>

    
</body>
</html>