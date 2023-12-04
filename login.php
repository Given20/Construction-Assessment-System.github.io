<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="img/New logo.png">
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Bootstrap plugin for css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Css Stylesheet -->
    <link rel="stylesheet" href="css/style1.css?v=2">
    ​<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Login Page Design -->
<div class="wrapper">
        <div class="logo">
        <img src="img/New logo.png" height = "65">
        </div>
        <div class="text-center mt-4 name">
            STAFF LOGIN
        </div>
     <h6 style="color: red;">
        <?php
          error_reporting(0);
          session_start();
          session_destroy();
          echo $_SESSION['loginMessage'];
        ?>
     </h6>
        <form action= "login_sent.php" method= "post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
            <i class='bx bx-user'></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
            <i class='bx bx-lock' ></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-field d-flex align-items-center">
            <i class='bx bxs-key' ></i>
                <input type="password" name="domain_key" id="key" placeholder="Domain Key" required>
            </div>
            <button class="btn mt-3" name="submit">Login</button>
        </form>
    </div>
    <!-- End of Login Page -->
</body>
</html>

