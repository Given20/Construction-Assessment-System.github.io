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
    <form action="addAction_plumbing.php" method="post" name="add">
  <div class="row mb-3">
    <label for="reference" class="col-sm-2 col-form-label">Reference/Claim No:</label>
    <div class="col-sm-3">
      <input type="text" name="reference" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Agency/Insurance:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="agency">
    </div>
  </div>
  
  <hr>
 <h4 style="color: black; font:bold;">Damages</h4>

 <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the geyser?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="geyser_condition">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the vacuum breakers?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="vacuum_breakers">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the drip tray?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="drip_tray">
    </div>
  </div>

  
  <br>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the pressure control rev?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="pressure_control">
    </div>
  </div>


  <br>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What caused the tile damage?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="tile_damage">
    </div>
  </div>


<hr>



  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the waste pipe leaking?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="pipe_leaking">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Did you check the pipes and fittings for leakages?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="check_pipe_fittings">
    </div>
  </div>


<hr>


<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Does the element and thermostat still have conduct?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="conduct">
    </div>
  </div>



  <hr>
  <h4 style="color: black; font:bold;">Kitchen Sinks</h4>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking taps?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="leaking_taps">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking waste pipes?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="waste_pipes">
    </div>
  </div>


  <hr>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is there any drain blockage?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="drain_blockage">
    </div>
  </div>


  <h4 style="color: black; font:bold;">Bathroom</h4>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking taps?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="bathroom_leaking_taps">
    </div>
  </div>


  <hr>
  <h4 style="color: black; font:bold;">Toilets</h4>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking or blocked pipes?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="leaking_blocked_pipes">
    </div>
  </div>
   
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the waste pipe?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="waste_pipe_condition">
    </div>
  </div>


<hr>

<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the water closet?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="water_closet">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the rubber on the water closet still intact?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="rubber_intact">
    </div>
  </div>



  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Is the water intake not blocked?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="water_intake_block">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the flexible pipe?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="flexible_pipe">
    </div>
  </div>

  
<hr>
  <h4 style="color: black; font:bold;">Shower</h4>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Are there any leaking or blocked pipes?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="shower_issues">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the waste pipe?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="shower_condition">
    </div>
  </div>


  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What is the condition of the shower tap?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="shower_tap">
    </div>
  </div>


  <hr>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Additional Notes:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" name="notes">
    </div>
  </div>

  
<a href="dashboard.php"><button type="button" class="btn btn-danger">Back</button></a>
  <button type="btn" name="submit" class="btn btn-success">Submit</button>
  <!-- <button type="button" class="btn btn-warning">Update</button> -->
</form>
</body>
</html>