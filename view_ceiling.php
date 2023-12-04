<?php
// Include the database connection file
require_once("db_conn.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM ceiling WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$reference = $resultData['reference'];
$agency = $resultData['agency'];
$ceiling_intact = $resultData['ceiling_intact'];
$ceiling_type = $resultData['ceiling_type'];
$water_damage = $resultData['water_damage'];
$spots_stains_mold = $resultData['spots_stains_mold'];
$ceiling_note = $resultData['ceiling_note'];

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceiling And Cornice</title>
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
<h1 style="background-color: white; text-align:center;color:black;">Ceiling And Cornice Assessment</h1>
<hr>
    <h4 style="color: black; font:bold;">Ceiling And Cornice</h4>
    <form name="edit" method="post" action="editAction_ceiling.php">
  <div class="row mb-3">
    <label for="Reference" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-3">
      <input type="text" name="reference" class="form-control" id="inputEmail3"value="<?php echo $reference; ?>" disabled>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="agency"value="<?php echo $agency; ?>" disabled>
    </div>
  </div>
  

  <hr>
  <h4 style="color: black; font:bold;">Damages</h4>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the ceiling still intact?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="ceiling_intact"value="<?php echo $ceiling_intact; ?>" disabled>
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the type of ceiling?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="ceiling_type"value="<?php echo $ceiling_type; ?>" disabled>
    </div>
  </div>
  

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any water damages?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="water_damage"value="<?php echo $water_damage; ?>" disabled>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there soft spots, water stains or mold growth?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="spots_stains_mold"value="<?php echo $spots_stains_mold; ?>" disabled>
    </div>
  </div>

    <hr>


  <div class="row mb-3">
  <label for="Agency" class="col-sm-2 col-form-label">Additional Notes</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="damage" name="ceiling_note" value="<?php echo $ceiling_note; ?>" disabled>
  </div>
</div>

  <input type="hidden" name="id" value=<?php echo $id; ?>>
  <!-- <a href="dashboard.php"><button type="button" class="btn btn-danger">Back</button></a> -->
  <!-- <button type="btn" class="btn btn-success" name="update">Update</button> -->
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>