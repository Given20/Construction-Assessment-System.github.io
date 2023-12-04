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

<form action="addAction_todo.php" method="post" name="add">
<div class="col-sm-3">
    <label>Reference:</label>
    <input type="text" class="form-control" name="reference">
  </div>
  <div class="col-sm-3">
    <label>Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="col-sm-3">
    <br>
  <label>Assessment To Be Completed:</label>
  <select class="form-select" aria-label="Default select example" name="task_name">
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
  <select class="form-select" aria-label="Default select example" name="task_status">
  <option selected disabled>Task Status</option>
  <option value="In Progress" style="color: orange;">In Progress</option>
  <option value="Paused" style="color: red;">Paused</option>
  <option value="Completed" style="color: green;">Completed</option>
</select>
  </div>
  <div class="col-sm-3">
    <label>Date:</label>
    <input type="date" class="form-control" name="date" id="dateInput">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<script>
// Get the current date in the format "YYYY-MM-DD"
var currentDate = new Date().toISOString().split('T')[0];

// Set the minimum and maximum attributes of the date input
document.getElementById('dateInput').setAttribute('min', currentDate);
document.getElementById('dateInput').setAttribute('max', currentDate);
  </script>
    
</body>
</html>