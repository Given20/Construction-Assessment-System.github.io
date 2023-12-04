<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM wall WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$agency = $resultData['agency'];
$length = $resultData['length'];
$width = $resultData['width'];
$height = $resultData['height'];
$walls_damp = $resultData['walls_damp'];
$peeling_paint = $resultData['peeling_paint'];
$walls_cracked = $resultData['walls_cracked'];
$boundary_wall = $resultData['boundary_wall'];
$palisade_fence = $resultData['palisade_fence'];
$wall_partitioned_erecting = $resultData['wall_partitioned_erecting'];
$wall_replace_wall_repair = $resultData['wall_replace_wall_repair'];
$add_note = $resultData['add_note'];

?>


<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wall Repair Assessment</title>
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
<h1 style="background-color: white; text-align:center;color:black;">Wall Repair Assessment</h1>
<hr>
    <form name="edit" method="post" action="editAction_wall.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="reference" value="<?php echo $reference; ?>">
    </div>
  </div>
 
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="agency" value="<?php echo $agency; ?>">
    </div>
  </div>

 <hr>
  <h4 style="color: black; font:bold;">Damages</h4>
  <div class="row mb-3">
    <label for="length" class="col-sm-2 col-form-label">Length:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="length" name="length" value="<?php echo $length; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="width" class="col-sm-2 col-form-label">Width:</label>
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


  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Are the walls damp?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="walls_damp" placeholder="Yes Or No?" value="<?php echo $walls_damp; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Is the paint peeling?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="peeling_paint" placeholder="Yes Or No?" value="<?php echo $peeling_paint; ?>">
    </div>
  </div>

  
  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Are the walls cracked?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="walls_cracked" placeholder="Yes Or No?" value="<?php echo $walls_cracked; ?>">
    </div>
  </div>


  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Is it a boundary wall?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="boundary_wall" placeholder="Yes Or No?" value="<?php echo $boundary_wall; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Is it a palisade fence?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="palisade_fence" placeholder="Yes Or No?" value="<?php echo $palisade_fence; ?>">
    </div>
  </div>



  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Is it wall partitioned or erecting?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="wall_partitioned_erecting" placeholder="Wall Partioned/Wall Erecting" required value="<?php echo $wall_partitioned_erecting; ?>">
    </div>
  </div>



  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Wall replacement or wall repair?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="wall_replace_wall_repair" placeholder="Wall Replacement/Wall Repair" required value="<?php echo $wall_replace_wall_repair; ?>">
    </div>
  </div>
  <hr>
  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Additional Notes</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="height" name="add_note" value="<?php echo $add_note; ?>">
    </div>
  </div>
  
  <input type="hidden" name="id" value=<?php echo $id; ?>>
  <button type="btn" class="btn btn-success" name="update">Update</button>
 
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>