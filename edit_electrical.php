<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM electrical WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$agency = $resultData['agency'];
$length = $resultData['length'];
$width = $resultData['width'];
$height = $resultData['height'];
$damage_cause = $resultData['damage_cause'];
$replacement = $resultData['replacement'];
$notes = $resultData['notes'];

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical</title>
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
<h1 style="background-color: white; text-align:center;color:black;">Foundation Assessment</h1>
<hr>
    <h4 style="color: black; font:bold;">Foundation</h4>
    <form name="edit" method="post" action="editAction_electrical.php">
  <div class="row mb-3">
    <label for="Reference" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $reference; ?>">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="agency" name="agency" value="<?php echo $agency; ?>">
    </div>
  </div>
  
  <hr>
  <h4 style="color: black; font:bold;">Damages</h4>
  <div class="row mb-3">
    <label for="Length" class="col-sm-2 col-form-label">Length:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="length" name="length" value="<?php echo $length; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Width" class="col-sm-2 col-form-label">Width:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="width" name="width" value="<?php echo $width; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Height:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="height" value="<?php echo $height; ?>">
    </div>
  </div>
  <hr>
  <h4 style="color: black; font:bold;">Water Damages</h4>
  <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">What caused the damage ?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="damage" placeholder="Yes Or No" name="damage_cause"value="<?php echo $damage_cause; ?>">
    </div>
  </div>

  <hr>

    <!-- <h4 style="color: black; font:bold;">Cracks</h4> -->

    <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">What needs to be replaced?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="damage" placeholder="Yes Or No" name="replacement" value="<?php echo $replacement; ?>">
    </div>
  </div>
    
  <hr>
  
  <div class="row mb-3">
  <label for="Agency" class="col-sm-2 col-form-label">Additional Notes</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" id="damage" name="notes" value="<?php echo $notes; ?>">
  </div>
</div>



<!-- <a href="dashboard.php"><button type="button" class="btn btn-danger">Back</button></a> -->
<input type="hidden" name="id" value=<?php echo $id; ?>>
  <button type="btn" class="btn btn-success" name="update">Update</button>
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>