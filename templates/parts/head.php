<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Highway - Free CSS Template</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/library/fontAwesome.css">
        <link rel="stylesheet" href="../css/library/light-box.css">
        <link rel="stylesheet" href="../css/main.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="../css/login2.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="../../leaflet/leaflet.css" />
        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../leaflet/leaflet.js"></script>
        <script src="../js/main.js"></script>

    </head>

<body>

    <nav>
        <div class="logo">
            <a href="/index.php">Welcome <em><?php echo $_SESSION["nick"];?></em></a>
        </div>
        <?php if($_SESSION["loggedIn"] == 0){?>

                      
            <div class="login">
                <form action="" method="POST">
                  <input type="text" id="name" class="fadeIn second" name="name" placeholder="name">
                  <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                  <input type="submit" class="fadeIn fourth" value="Log In">
                </form>
            </div>
        <?php } ?>
        <div class="menu-icon">
            <span></span>
          </div>
    </nav>

    <?php 
        ?>
    
        <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Highway</em></h1>
              <p>FREE CSS TEMPLATE by templatemo</p>
              <p>Homepage with full-width image gallery</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="../img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="" type="video/mp4" />
        </video>
        </div>