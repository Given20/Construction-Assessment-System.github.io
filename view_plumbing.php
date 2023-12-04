<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM plumbing WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$reference = $resultData['reference'];
$agency = $resultData['agency'];
$geyser_condition = $resultData['geyser_condition'];
$vacuum_breakers = $resultData['vacuum_breakers'];
$drip_tray = $resultData['drip_tray'];
$pressure_control = $resultData['pressure_control'];
$tile_damage = $resultData['tile_damage'];
$pipe_leaking = $resultData['pipe_leaking'];
$check_pipe_fittings = $resultData['check_pipe_fittings'];
$conduct = $resultData['conduct'];
$leaking_taps = $resultData['leaking_taps'];
$waste_pipes = $resultData['waste_pipes'];
$drain_blockage = $resultData['drain_blockage'];
$bathroom_leaking_taps = $resultData['bathroom_leaking_taps'];
$leaking_blocked_pipes = $resultData['leaking_blocked_pipes'];
$waste_pipe_condition = $resultData['waste_pipe_condition'];
$water_closet = $resultData['water_closet'];
$rubber_intact = $resultData['rubber_intact'];
$water_intake_block = $resultData['water_intake_block'];
$flexible_pipe = $resultData['flexible_pipe'];
$shower_issues = $resultData['shower_issues'];
$shower_condition = $resultData['shower_condition'];
$shower_tap = $resultData['shower_tap'];
$notes = $resultData['notes'];

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbing Form</title>
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
<body style="background-color: #E9F1FA;">
<h1 style="background-color: white; text-align:center;color:black;">Plumbing Assessment</h1>
<hr>
    <form name="edit" method="post" action="editAction_plumbing.php">
  <div class="row mb-3">
    <label for="reference" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-7">
      <input type="text" name="reference" class="form-control" id="inputEmail3" value="<?php echo $reference; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="agency" value="<?php echo $agency; ?>" disabled>
    </div>
  </div>
  
  <hr>
 <h4 style="color: black; font:bold;">Damages</h4>

 <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the geyser?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="geyser_condition" value="<?php echo $geyser_condition; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the vacuum breakers?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="vacuum_breakers" value="<?php echo $vacuum_breakers; ?>" disabled>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the drip tray?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="drip_tray" value="<?php echo $drip_tray; ?>" disabled>
    </div>
  </div>

  
  <br>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the pressure control rev?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="pressure_control" value="<?php echo $pressure_control; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What caused the tile damage?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="tile_damage" value="<?php echo $tile_damage; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the waste pipe leaking?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="pipe_leaking" value="<?php echo $pipe_leaking; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Did you check the pipes and fittings for leakages?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="check_pipe_fittings" value="<?php echo $check_pipe_fittings; ?>" disabled>
    </div>
  </div>



<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Does the element and thermostat still have conduct?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="conduct" value="<?php echo $conduct; ?>" disabled>
    </div>
  </div>



  <hr>
  <h4 style="color: black; font:bold;">Kitchen Sinks</h4>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking taps?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="leaking_taps" value="<?php echo $leaking_taps; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking waste pipes?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="waste_pipes" value="<?php echo $waste_pipes; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is there any drain blockage?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="drain_blockage" value="<?php echo $drain_blockage; ?>" disabled>
    </div>
  </div>


  <h4 style="color: black; font:bold;">Bathroom</h4>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking taps?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="bathroom_leaking_taps" value="<?php echo $bathroom_leaking_taps; ?>" disabled>
    </div>
  </div>


  <hr>
  <h4 style="color: black; font:bold;">Toilets</h4>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking or blocked pipes?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="leaking_blocked_pipes" value="<?php echo $leaking_blocked_pipes; ?>" disabled>
    </div>
  </div>
   
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the waste pipe?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="waste_pipe_condition" value="<?php echo $waste_pipe_condition; ?>" disabled>
    </div>
  </div>


<hr>

<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the water closet?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="water_closet" value="<?php echo $water_closet; ?>" disabled>
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the rubber on the water closet still intact?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="rubber_intact" value="<?php echo $rubber_intact; ?>" disabled>
    </div>
  </div>



  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the water intake not blocked?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="water_intake_block" value="<?php echo $water_intake_block; ?>" disabled>
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the flexible pipe?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="flexible_pipe" value="<?php echo $flexible_pipe; ?>" disabled>
    </div>
  </div>

  
<hr>
  <h4 style="color: black; font:bold;">Shower</h4>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking or blocked pipes?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="shower_issues" placeholder="Yes Or No" value="<?php echo $shower_issues; ?>" disabled>
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the waste pipe?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="shower_condition" placeholder="Yes Or No" value="<?php echo $shower_condition; ?>" disabled>
    </div>
  </div>


  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the shower tap?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="shower_tap" value="<?php echo $shower_tap; ?>" disabled>
    </div>
  </div>


  <hr>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Additional Notes:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="notes" value="<?php echo $notes; ?>" disabled>
    </div>
  </div>

  <input type="hidden" name="id" value=<?php echo $id; ?>>
  <!-- <button type="btn" class="btn btn-success" name="update">Update</button> -->
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>