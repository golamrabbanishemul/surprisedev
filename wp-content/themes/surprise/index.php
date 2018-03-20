<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>"class="no-js">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title><?php wp_title('|',true,'right');?></title>
    <?php wp_head();?>
</head>
<body>
  <head>
    <nav class="navbar navbar-expand-md navbar-primary bg-white fixed-top navbar-custom">

                <a class="navbar-brand" href="#"><i class="fas fa-assistive-listening-systems"></i> SURPRISE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                   <?php wp_nav_menu([
                           'theme_location'=>'main_menu',
                           'menu_class'=>'navbar-nav ml-auto',
                           'fallback_cb'=>'surprise_fallback_menu'
                   ])?>
<!--                    <ul class="navbar-nav ml-auto">-->
<!--                        <li class="nav-item active">-->
<!--                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">ABOUT</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">Pricing</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                              SERVICES-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">-->
<!--                                <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                                <li><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a class="dropdown-item" href="#">Submenu action</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">Another submenu action</a></li>-->
<!---->
<!---->
<!--                                        <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>-->
<!--                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>-->
<!--                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!---->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </nav>
  </head>
<!-- section1 -->
<div class="jumbotron jumbotron-fluid text-center bg-white my-5">
    <div class="container-fluid">
        <h1 class="display-5">Welcome <br>To Surprise Communication</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <button type="button" class="btn btn-outline-info">More</button>
    </div>
</div>
<!-- section1 end -->

<!-- section2 -->
<div class="section2 bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title text-white bar">UNDERGROUND FIBER LAYING SERVICES</div>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-light">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/11.jpg" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section2 end -->

<!-- section3 -->
<div class="section3 bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title text-white bar">UNDERGROUND OPTICAL FIBER CABLE</div>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-light">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/12.jpg" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section3 end -->

<!-- section4 -->
<div class="section4 bg-white py-5 my-3">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title bar">FIBER ACCESSORIES</div>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-info">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/13.png" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section4 end -->

<!-- section5 -->
<div class="section5 bg-dark py-5 my-3">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title text-white bar">HARDWARE AND SOFTWARE</div>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-light">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/14.png" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section5 end -->

<!-- section6 -->
<div class="section6 bg-white py-5 my-3">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title bar">SURVEILLANCE SYSTEM</div>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-info">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/15.jpg" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section6 end -->

<!-- section7 -->
<div class="section7 bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="order-2 order-md-1 col-md-8 order-md-2">
                <div class="section-title text-white bar">CONSTRUCTION</div>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores at commodi facere,
                    facilis harum ipsam maiores nisi non obcaecati officia quibusdam soluta sunt tenetur ullam veritatis
                    voluptate voluptatum!</p>
                <button type="button" class="btn btn-outline-info">More</button>
            </div>
            <div class=" order-1 order-md-2 col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/16.jpg" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<!-- section7 end -->

<!-- section8 -->
<div class="section8 bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 contactus">
                <h5 class="text-white">Contact Us</h5>
                <p class="text-white">We are a leading end-to-end infrastructure support provider having Nationwide Telecommunication Transmission Network.
                </p>
                <p class="text-white"><i class="fas fa-map-marker"></i> 18, Karwan Bazar Commercial Area Dhaka -1205, Bangladesh.</p>
                <p class="text-white"><i class="fas fa-phone"></i> +880 2 222333444-5</p>
                <p class="text-white"><i class="fas fa-envelope"></i> 	info@surprisecommunications.net</p>
            </div>
            <div class="col-12 col-md-4">
                <h5 class="text-white">Contact With Social</h5>
                <ul class="social">
                    <li> <a target="_Blank" href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a> Facebook</li>
                    <li><a target="_Blank" href="#"><i class="fab fa-linkedin-in"></i></a> Linkedin</li>
                    <li><a target="_Blank" href="#"><i class="fab fa-twitter"></i></a> Twitter</li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-offset-md-1">
                <h5 class="text-white">Any Query</h5>
                <form class="border border-mute rounded p-2">
                    <div class="form-group my-0 py-0">
                        <label for="name" class="text-white my-0"><small>Name</small></label>
                        <input type="text" class="form-control form-control-sm py-0" id="name" aria-describedby="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group my-0">
                        <label for="exampleInputEmail1" class="text-white my-0"><small>Email address</small></label>
                        <input type="email" class="form-control form-control-sm py-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group my-0">
                        <label for="exampleFormControlTextarea1" class="text-white my-0"><small>Example textarea</small></label>
                        <textarea class="form-control form-control-sm py-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-light my-1 py-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- section8 end -->



<?php wp_footer();?>
</body>
</html>
