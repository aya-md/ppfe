<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEARTS OF MERCY ASSOCIATION</title>
    <!-- Favicon img -->
    
    <link rel="shortcut icon" href="assets/images/favicon.png">
            <!-- Bootstarp min css -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <!-- Mean menu css -->
            <link rel="stylesheet" href="assets/css/meanmenu.css">
            <!-- All min css -->
            <link rel="stylesheet" href="assets/css/all.min.css">
            <!-- Swiper bundle min css -->
            <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
            <!-- Magnigic popup css -->
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <!-- Animate css -->
            <link rel="stylesheet" href="assets/css/animate.css">
            <!-- Nice select css -->
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <!-- Style css -->
            <link rel="stylesheet" href="assets/css/style.css">

<?php 
      $currentPage = basename($_SERVER['PHP_SELF']);
      if($currentPage === "OrphanCare.php" or $currentPage === "WidowSupport.php" or $currentPage==="joinus.php"){
        echo '
        <link rel="stylesheet" href="multisteps/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="multisteps/css/animate.min.css">
        <link rel="stylesheet" href="multisteps/css/fontawesome-all.css">
        <link rel="stylesheet" href="multisteps/css/styleOC.css">';}
        if($currentPage === "contact.php"){
            echo '<link rel="stylesheet" href="assets2/css/style.css">';}

            if($currentPage === "who_we_are.php"){
                echo ' 
                
                <link rel="stylesheet" href="assets/css/style_organigramme.css">
                ';}
      
            if( $currentPage !=="index.php"){
                echo '    
                <link href="assets2/css/themify-icons.css" rel="stylesheet">
                <link href="assets2/css/font-awesome.min.css" rel="stylesheet">
                <link href="assets2/css/flaticon.css" rel="stylesheet">
                <link href="assets2/css/bootstrap.min.css" rel="stylesheet">
                <link href="assets2/css/animate.css" rel="stylesheet">
                <link href="assets2/css/owl.carousel.css" rel="stylesheet">
                <link href="assets2/css/owl.theme.css" rel="stylesheet">
                <link href="assets2/css/slick.css" rel="stylesheet">
                <link href="assets2/css/slick-theme.css" rel="stylesheet">
                <link href="assets2/css/swiper.min.css" rel="stylesheet">
                <link href="assets2/css/owl.transitions.css" rel="stylesheet">
                <link href="assets2/css/jquery.fancybox.css" rel="stylesheet">
                <link href="assets2/css/odometer-theme-default.css" rel="stylesheet">
                <link href="assets2/css/nice-select.css" rel="stylesheet">
                <link href="assets2/css/style.css" rel="stylesheet">';}
        
     


?>
<?php echo'
</head>

<body>
    

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="assets/images/logo/logo2.png" alt="icon">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Top header area start here -->
    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrp">
                <div class="quote">Allah\'s Messenger said, "I and the one who looks after an orphan will be like this in Paradise,"</div>
                <div class="nav-wrapper">
                    <div class="sl-nav"> 
                      <ul>
                        <li><a href="#"><i class="fa fa-globe" style="color: white;"></i></a> <b>English</b> <i class="fa fa-angle-down" aria-hidden="true"></i>
                          <div class="triangle"></div>
                          <ul>
                            <li><i class="sl-flag flag-usa"></i> <span class="active">English</span></li>
                            <li><i class="sl-flag flag-fr"></i> <span>Français</span></li>
                            <li><i class="sl-flag flag-morroco"></i> <span>العربية</span></li>

                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
               
            </div>
        </div>
    </div>
    <!-- Top header area end here -->
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area">
        <div class="container">
            <div class="header__main">
                <a href="index.php" class="logo" style="width: 13em;">
                    <img src="assets/images/logo/logoo.png" alt="logo" >
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="has-megamenu">
                                <a href="index.php">Home</a>
                            </li>
                            <li><a href="#">Our association</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="who_we_are.php">Who we are</a>
                                    </li>
                                    <li>
                                        <a href="#">Our mission & vision</a>
                                    </li>
                                     
                                </ul>
                            </li>
                            <li>
                                <a href="#">Our achievments</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="activities.php">Our activities</a>
                                    </li>
                                    <li>
                                        <a href="project.php">Our projects</a>
                                    </li>
                                    <li>
                                        <a href="gallery.php">Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Assistance programs</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="OrphanCare.php">Orphan care</a>
                                    </li>
                                    <li>
                                        <a href="WidowSupport.php">Widow support</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="joinus.php">Join us</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="btn-two d-none d-lg-inline-block">
                    <span class=" btn-circle">
                    </span>
                    <a href="donate.php" class="btn-inner">
                        <span class="btn-text">
                            DONATE NOW
                        </span>
                    </a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="index.php" class="logo mb-40">
            <img src="assets/images/logo/logoo.png" alt="logo">
        </a>
        <div class="mobile-menu overflow-hidden"></div>
        
        
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->
    '; ?>