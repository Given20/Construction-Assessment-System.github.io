<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype'] == 'user')
{
    header("location:login.php");
}
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

        
        <!-- <a href="login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i><div class="header_img"> <span class="nav_name">Logout</span> </a><div class="header_img"><img src="https://i.imgur.com/hczKIze.jpg" alt=""> -->
         
    </div>
    
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Tiroclif Services</span> </a>
                <div class="nav_list"> <a href="admin_foundation.php" class="nav_link active"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Foundation</span> </a> <a href="tiles_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Tiles</span> </a> <a href="paving_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Paving</span> </a> <a href="electrical_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Electrical</span> </a> <a href="plumbing_table.php" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Plumbing</span> </a> <a href="paint_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Paint</span> </a><a href="ceiling_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Ceiling and Cornice</span> </a> <a href="roofing_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Roofing</span> </a><a href="wall_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Walls</span> </a><a href="cardboards_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Cardboards</span> </a><a href="glazing_table.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Glazing</span> </a></div>
            </div> <a href="login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <!-- <div class="height-100 bg-light">
        <h4>Dashboard of the website</h4>
        <p>Example </p>
    </div> -->
    <h1>Hi, <?php echo $_SESSION['username']; ?></h1>

  <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
<br><br>
<a href="admin_view_todo.php"><button type="button" class="btn btn-success">Tasks To Complete</button></a>
    <p>Welcome to the Constructions and Maintenance Dashboard for Tiroclif Services! <br>
    Before you can begin your duties, please choose the appropriate options below.</p>


    
    <div class="container py-3">
            <div class="row">
                <div class="col-md-4">
                <a href = "admin_foundation.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                           <h5 class="card-title"><b>Foundation</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_foundation.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                       
                </div>

                <div class="col-md-4">
                <a href = "admin_tile.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Tiles</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_tile.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_paving.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Paving</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_paving.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <a href = "admin_electrical.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Electrical</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_electrical.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_plumbing.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Plumbing</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_plumbing.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_paint.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Paint</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_paint.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-4">
                <a href = "admin_ceiling.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Ceiling and Cornice</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_ceiling.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_roofing.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Roofing</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_roofing.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_wall.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Walls</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_wall.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <a href = "admin_cardboards.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Cardboards</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_cardboards.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                <a href = "admin_glazing.php" style = "text-decoration:none; color:black;" >
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Glazing</b></h5>
                            <p class="card-text">Please click or select the box to be able to view the form!</p>
                            <a href="admin_glazing.php" class="btn btn-primary">Select</a>
                        </div>
                        </a>
                    </div>
                </div>   
    </body>
    <!--Container Main end-->
    <script src="script/main3.js"></script>
</body>
</html>

<!-- <?php
// }else{
        // header("Location: index.php");
        // exit();
// }
?> -->
 