<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
<!-- =========================
     HEADER   
============================== -->
<header class="header" data-stellar-background-ratio="0.5" id="home">

    <!-- COLOR OVER IMAGE -->
    <div class="color-overlay"> <!-- To make header full screen. Use .full-screen class with color overlay. Example: <div class="color-overlay full-screen">  -->
        <!-- STICKY NAVIGATION -->
        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        <!-- CONTAINER -->
        <div class="container">

            <!-- ONLY LOGO ON HEADER -->
            <div class="only-logo">
                <div class="navbar">
<!--                    <div class="navbar-header">-->
<!--                        --><?php
//                        $custom_logo_id = get_theme_mod( 'custom_logo' );
//                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//                        ?>
<!--                        <img src="--><?php //echo $image[0]; ?><!--" alt="">-->
<!--                    </div>-->
                </div>
            </div> <!-- /END ONLY LOGO ON HEADER -->

            <div class="row home-contents">
                <div class="col-md-6 col-sm-6">

                    <!-- HEADING AND BUTTONS -->
                    <div class="intro-section">

                        <!-- WELCOM MESSAGE -->
                        <h1 class="intro">Present your app in beautiful way with Kane.</h1>
                        <h5>Available on App Store and Play Store</h5>

                        <!-- BUTTON -->
                        <div class="buttons" id="download-button">

                            <a href="#download" class="btn btn-default btn-lg standard-button"><i class="icon-app-download"></i>Download App</a>

                        </div>
                        <!-- /END BUTTONS -->

                    </div>
                    <!-- /END HEADNING AND BUTTONS -->

                </div>


                <div class="col-md-6 col-sm-6 hidden-xs">

                    <!-- PHONE IMAGE WILL BE HIDDEN IN TABLET PORTRAIT AND MOBILE-->
                    <div class="phone-image">
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/2-iphone-right.png" class="img-responsive" alt="">-->
                    </div>

                </div>

            </div>
            <!-- /END ROW -->

        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END COLOR OVERLAY -->
</header>
<!-- /END HEADER -->