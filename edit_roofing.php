<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM roofing WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$agency = $resultData['agency'];
$roof_type = $resultData['roof_type'];
$roof_cracked = $resultData['roof_cracked'];
$roof_leaking = $resultData['roof_leaking'];
$cause_of_leaking = $resultData['cause_of_leaking'];
$broken_tiles = $resultData['broken_tiles'];
$length = $resultData['length'];
$width = $resultData['width'];
$height = $resultData['height'];
$number_of_tiles_broken = $resultData['number_of_tiles_broken'];
$zinc_roof = $resultData['zinc_roof'];
$loose_nails = $resultData['loose_nails'];
$tiles_aligned = $resultData['tiles_aligned'];
$trusses = $resultData['trusses'];
$valley_point = $resultData['valley_point'];
$valley_point_leaking = $resultData['valley_point_leaking'];
$condition_valley_point = $resultData['condition_valley_point'];
$gutter_condition = $resultData['gutter_condition'];
$additional_notes = $resultData['additional_notes'];

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roofing Assessment</title>
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
<h1 style="background-color: white; text-align:center;color:black;">Roofing Assessment</h1>
<hr>
    <h4 style="color: black; font:bold;">Roofing</h4>
    <form name="edit" method="post" action="editAction_roofing.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="reference"value="<?php echo $reference; ?>">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="agency"value="<?php echo $agency; ?>">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What type of roof is it?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="roof_type"value="<?php echo $roof_type; ?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the roof cracked?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="roof_cracked" placeholder="Yes Or No"value="<?php echo $roof_cracked; ?>">
    </div>
  </div>




  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the roof leaking?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="roof_leaking" placeholder="Yes Or No"value="<?php echo $roof_leaking; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the cause of the roof leaking?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="cause_of_leaking" placeholder="Yes Or No"value="<?php echo $cause_of_leaking; ?>">
    </div>
  </div>



<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any broken tiles?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="broken_tiles" placeholder="Yes Or No"value="<?php echo $broken_tiles; ?>">
    </div>
  </div>

  <hr>
  <h4 style="color: black; font:bold;">Area of broken tiles:</h4>
  <div class="row mb-3">
    <label for="Length" class="col-sm-2 col-form-label">Length:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Length" name="length"value="<?php echo $length; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Width" class="col-sm-2 col-form-label">Width:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Width" name="width"value="<?php echo $width; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Height:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="height"value="<?php echo $height; ?>">
    </div>
  </div>
  <hr>

  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Number of broken tiles?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="number_of_tiles_broken" placeholder="Number"value="<?php echo $number_of_tiles_broken; ?>">
    </div>
  </div>



<div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Is it a zinc roof?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="zinc_roof" placeholder="Yes Or No"value="<?php echo $zinc_roof; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Are the loose nails in the zinc roof?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="loose_nails" placeholder="Yes Or No"value="<?php echo $loose_nails; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Are the tiles aligned?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="tiles_aligned" placeholder="Yes Or No"value="<?php echo $tiles_aligned; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Are the trusses still in a good condition?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="trusses" placeholder="Yes Or No"value="<?php echo $trusses; ?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Are the valley point installed in a proper manner?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="valley_point" placeholder="Yes Or No"value="<?php echo $valley_point; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Are the valley points not leaking?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="valley_point_leaking" placeholder="Yes Or No"value="<?php echo $valley_point_leaking; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">What condition are the valley points in?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="condition_valley_point"value="<?php echo $condition_valley_point; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">What condition is the gutter in?</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Height" name="gutter_condition"value="<?php echo $gutter_condition; ?>">
    </div>
  </div>
  
    
  
<hr>


<div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Additional Notes:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="add" name="additional_notes"value="<?php echo $additional_notes; ?>">
    </div>
  </div>

  
  <input type="hidden" name="id" value=<?php echo $id; ?>>
  <button type="btn" class="btn btn-success" name="update">Update</button>
</form>
</body>
</html>