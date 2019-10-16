<!-- STICKY NAVIGATION -->
<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- LOGO ON STICKY NAV BAR -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">   <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img src="<?php echo $image[0]; ?>" alt=""></a>

        </div>

        <!-- NAVIGATION LINKS -->
        <div class="navbar-collapse collapse" id="kane-navigation">
            <ul class="nav navbar-nav navbar-right main-navigation">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#brief1">Why Us?</a></li>
                <li><a href="#brief2">Desicribe</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#screenshot-section">Screenshots</a></li>
                <li><a href="#download">Download</a></li>
            </ul>
        </div>
    </div> <!-- /END CONTAINER -->
</div> <!-- /END STICKY NAVIGATION -->