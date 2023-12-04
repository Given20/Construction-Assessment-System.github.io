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
<h1 style="background-color: white; text-align:center;color:black;">Electrical Assessment</h1>
<hr>
    <h4 style="color: black; font:bold;">Electrical</h4>
    <form action="addAction_electrical.php" method="post" name="add">
  <div class="row mb-3">
    <label for="Reference" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="reference" name="reference">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="agency" name="agency">
    </div>
  </div>
  
  <hr>
  <h4 style="color: black; font:bold;">Damages</h4>
  <div class="row mb-3">
    <label for="Length" class="col-sm-2 col-form-label">Length:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="length" name="length">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Width" class="col-sm-2 col-form-label">Width:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="width" name="width">
    </div>
  </div>
  <div class="row mb-3">
    <label for="height" class="col-sm-2 col-form-label">Height:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="height" name="height">
    </div>
  </div>
 
  <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">What caused the damage ?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="damage" name="damage_cause">
    </div>
  </div>

    <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">What needs to be replaced?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="damage" name="replacement">
    </div>
  </div>


    
  <hr>
  <div class="row mb-3">
    <label for="Agency" class="col-sm-2 col-form-label">Additional Notes</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="damage" name="notes">
    </div>
  </div>
<a href="dashboard.php"><button type="button" class="btn btn-danger">Back</button></a>
  <button type="btn" class="btn btn-success" name="submit">Submit</button>
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>