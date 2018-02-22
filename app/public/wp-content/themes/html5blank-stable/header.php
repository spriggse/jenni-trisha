<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
    	<title>Jenni Trisha</title>
    	<link href="//www.google-analytics.com" rel="dns-prefetch">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Noto+Serif:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
         @import url('https://fonts.googleapis.com/css?family=Lato|Oswald');
        </style>
    	<?php wp_head(); ?>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar  navbar-custom" style="border-radius:0px;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container-fluid  mobileColor">
                    <div class="row">
                        <div class="col-xs-7 col-sm-6 col-md-6 main-img">

                            <div class="test_nav">

                              <?php /* Primary navigation */
                                  wp_nav_menu( array(
                                  'menu' => 'primary',
                                  'theme-location' => 'primary',
                                  'depth' => 2,
                                  'menu_class' => 'nav navbar-nav ',
                                  'fallback-cb' => 'wp_bootstrap_navwalker::fallback',
                                  //Process nav menu using our custom nav walker
                                  'walker' => new wp_bootstrap_navwalker())
                                  );
                              ?>

                            </div>
                        </div>

                        <div class="col-xs-5 col-sm-6 col-md-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navHeaderCollapse pull-right">
                                    <div class="col-xs-12 main-nav">
                                      <!-- <i class=“fab fa-instagram”></i> -->
                                      <a href="#">
                                      <i class="fab fa-instagram fa-3x"></i>
                                      </a>
                                     <!-- <h1 class="">hi</h1> -->
                                    </div>
                                </div>
                            </div>

                        </div><!--end div class collapse navbar-collapse navHeaderCollapse -->
                    </div>

                </div><!--end div class container-fluid-->
            </div><!--end div class navbar  navbar-static-top navbar-custom-->
        </nav>
        <!--Testing if_is_frontPage -->
    <?php
        add_action( 'loop_start', 'using_front_page_conditional_tag' );
        function using_front_page_conditional_tag() {
            if ( is_front_page() ) {
                echo'<div class="container-fluid image">';
                    echo'<div class="row">';
                        echo'<div class="col-sm-12 ">';
                	    ?>
                       <div class="cen">

                       </div>
                    <?php echo'</div>';
                echo'</div>';
                echo'</div>';
                }
            } ?>
    <?php
        if( !is_front_page() ){
            //either in about us, or contact, or management page is in view
	       echo'<div class="container-fluid NonPrimary">';
                echo'<div class="row">';
                        echo'<div class="col-sm-12 ">';
                            echo '<div class="header-non-primary">';
                            ?>

                            <?php
                            echo'</div>';
                        echo'</div>';
                echo'</div>';
            echo'</div>';

            } ?>
