<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<head>
    <nav class="navbar navbar-expand-md navbar-primary bg-white fixed-top navbar-custom">

        <a class="navbar-brand" href="#"><i class="fas fa-assistive-listening-systems"></i> SURPRISE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php

            wp_nav_menu(array(

                'theme_location' => 'main_menu',

                'menu_class' => 'navbar-nav ml-auto',

                'fallback_cb' => 'theme_fallback',

            ));

            ?>
<!--            <ul class="navbar-nav ml-auto">-->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">ABOUT</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Pricing</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink"-->
<!--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        SERVICES-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>-->
<!--                            <ul class="dropdown-menu dropdown-menu-right">-->
<!--                                <li><a class="dropdown-item" href="#">Submenu action</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>-->
<!---->
<!---->
<!--                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>-->
<!--                                    <ul class="dropdown-menu dropdown-menu-right">-->
<!--                                        <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>-->
<!--                                    <ul class="dropdown-menu dropdown-menu-right">-->
<!--                                        <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
    </nav>
</head>