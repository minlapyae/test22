<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nextevo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100&display=swap" rel="stylesheet" />
    <!-- <script src="https://kit.fontawesome.com/df75694fc6.js" crossorigin="anonymous"></script> -->

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="nav-menu__desktop">
            <a>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo/logo-white.svg" alt="logo" class="navigation_logo nav-logo-white" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo/logo-color.svg" alt="logo" class="navigation_logo nav-logo-color" />
            </a>
            <div class="mobile-hamburger">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/bars-solid-white.svg" alt="Hamburger" class="hamburger-white" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/bars-solid-black.svg" alt="Hamburger" class="hamburger-black" />
            </div>
            <div class="navigation__links">
                <ul>
                    <li>
                        <a href="javascript:;" data-menu="beginnings">Beginnings</a>
                    </li>
                    <li><a href="#" data-menu="our-initiatives">Our Initiatives</a></li>
                    <li><a href="#" data-menu="collaborators">Collaborators</a></li>
                    <li><a href="#" data-menu="our-solutions">Our Solutions</a></li>
                    <li><a href="#" data-menu="media">Media</a></li>
                    <li><a href="#" data-menu="contact">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="nav-menu-dropdown__desktop">
            <ul class="beginnings">
                <li>
                    <a href="#">Our Driving Force</a>
                </li>
                <li>
                    <a href="#">Meet the Team</a>
                </li>
                <li>
                    <a href="#">Future Plans</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="mobile_menu">
        <div class="mobile_menu__inner">
            <div class="top-navbar">
                <a class="logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo/logo-color.svg" alt="logo" class="mobile-inner-nav-logo" /></a>
                <div class="exit-menu">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/xmark-solid.svg" alt="Exit" />
                </div>
            </div>
            <ul class="navbar-link">
                <li>
                    <a href="javascript:;" data-menu="beginnings-dropdown-mobile">Beginnings</a>
                    <ul class="navbar-mobile-dropdown beginnings-dropdown-mobile">
                        <li>
                            <a href="#">Our Driving Force</a>
                        </li>
                        <li>
                            <a href="#">Meet the Team</a>
                        </li>
                        <li>
                            <a href="#">Future Plans</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#" data-menu="our-initiatives">Our Initiatives</a></li>
                <li><a href="#" data-menu="collaborators">Collaborators</a></li>
                <li><a href="#" data-menu="our-solutions">Our Solutions</a></li>
                <li><a href="#" data-menu="media">Media</a></li>
                <li><a href="#" data-menu="contact">Contact</a></li>
            </ul>
            <footer></footer>
        </div>
    </div>
    <main>