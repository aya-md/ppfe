<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>HEARTS OF MERCY Dashboard</title>
        <!-- BEGIN: CSS Assets-->
       
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="dist/css/app.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="index.php" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Aperçu </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Donation <i class="menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-inbox.php" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Membres </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-file-manager.php" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Veuves et orphelins </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-point-of-sale.php" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Activités </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-chat.php" class="menu">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Projet </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-post.php" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Annonces </div>
                    </a>
                </li>
               
                   
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
             <!-- BEGIN: Side Menu -->
             <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img  src="/coeurs-de-compassion/assets/images/logo/LogoXL.png"  width="250px">
                    
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="index.php" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                family_home
                                </span> </div>
                            <div class="side-menu__title">Aperçu</div>
                        </a>
                    </li>
                   
                    <li>
                        <a href="Ajouterdon.php" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                volunteer_activism
                                </span> </div>
                            <div class="side-menu__title"> Donation </div>
                        </a>
                    </li>
                    <li>
                        <a href="Membre.php" class="side-menu">
                            <div class="side-menu__icon"><span class="material-symbols-outlined">
                                diversity_1
                                </span> </div>
                            <div class="side-menu__title"> Membres </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                escalator_warning
                                </span> </div>
                            <div class="side-menu__title"> Veuves et Orphelins </div>
                        </a>
                    </li>
                    <li>
                        <a href="activites.php" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                partner_exchange
                                </span> </div>
                            <div class="side-menu__title"> Activités </div>
                        </a>
                    </li>
                    <li>
                        <a href="projects.php" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                diversity_2
                                </span> </div>
                            <div class="side-menu__title"> Projets </div>
                        </a>
                    </li>
                    <li>
                        <a href="annonce.php" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                campaign
                                </span> </div>
                            <div class="side-menu__title"> Annonces </div>
                        </a>
                    </li>
                    
                    
                        
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <span class="material-symbols-outlined">
                                mode_off_on
                                </span> </div>
                            <div class="side-menu__title"> Logout </div>
                       </a>  
                    </li> 
                </ul>
            </nav>
            <div class="content">