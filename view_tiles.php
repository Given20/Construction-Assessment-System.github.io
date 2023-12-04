<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM tiles WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$agency = $resultData['agency'];
$broken_tiles = $resultData['broken_tiles'];
$surface_uneven = $resultData['surface_uneven'];
$damage_water = $resultData['damage_water'];
$tiles_replace = $resultData['tiles_replace'];
$tile_damage = $resultData['tile_damage'];
$length = $resultData['length'];
$width = $resultData['width'];
$height = $resultData['height'];
$add_notes = $resultData['add_notes'];


?>



<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tile Assessment</title>
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
<h1 style="background-color: white; text-align:center;color:black;">Tiles Assessment</h1>
<hr>
    <form name="edit" method="post" action="editAction_tiles.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="reference" value="<?php echo $reference; ?>" disabled>
    </div>
  </div>
 
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="agency" value="<?php echo $agency; ?>" disabled>
    </div>
  </div>
  
  <hr>
  <h2 style="color: black; font:bold;">Damages</h2>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there broken tiles?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="broken_tiles" placeholder="Yes Or No"value="<?php echo $broken_tiles; ?>" disabled>
    </div>
  </div>

  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the surface uneven?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="surface_uneven" placeholder="Yes Or No"value="<?php echo $surface_uneven; ?>" disabled>
    </div>
  </div>


    
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the damages caused by water?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="damage_water" placeholder="Yes Or No" value="<?php echo $damage_water; ?>" disabled>
    </div>
  </div>


      
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are all the tiles to be replaced?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="tiles_replace" placeholder="Yes Or No" value="<?php echo $tiles_replace; ?>" disabled>
    </div>
  </div>

      
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What caused the tile damage?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="tile_damage" value="<?php echo $tile_damage; ?>" disabled>
    </div>
  </div>


<hr>
<p>Accurately verify the measurements?</p>
  <div class="row mb-3">
    <label for="Length" class="col-sm-2 col-form-label">Length:</label>
    <div class="col-sm-7">
      <input type="text" name="length" class="form-control" id="length"value="<?php echo $length; ?>" disabled>
    </div>
  </div>
  <div class="row mb-3">
    <label for="Width" class="col-sm-2 col-form-label">Width:</label>
    <div class="col-sm-7">
      <input type="text" name="width" class="form-control" id="inputEmail3"value="<?php echo $width; ?>" disabled>
    </div>
  </div>
  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Height:</label>
    <div class="col-sm-7">
      <input type="text" name="height" class="form-control" id="inputEmail3"value="<?php echo $height; ?>" disabled>
    </div>
  </div>
  <hr>
  
  <div class="row mb-3">
    <label for="Height" class="col-sm-2 col-form-label">Additional Notes::</label>
    <div class="col-sm-7">
      <input type="text" name="add_notes" class="form-control" id="inputEmail3"value="<?php echo $add_notes; ?>" disabled>
    </div>
  </div>
  <input type="hidden" name="id" value=<?php echo $id; ?>>
  <!-- <button type="btn" class="btn btn-success" name="update">Update</button> -->
 
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</body>
</html>