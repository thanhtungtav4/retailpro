<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer>

    <div class="container">

        <div class="contact-box wow rotateIn animated" data-wow-offset="10" data-wow-duration="1.5s">

            <!-- CONTACT BUTTON TO EXPAND OR COLLAPSE FORM -->

            <a class="btn contact-button expand-form expanded"><i class="icon_mail_alt"></i></a>

            <!-- EXPANDED CONTACT FORM -->
            <div class="row expanded-contact-form">

                <div class="col-md-8 col-md-offset-2">

                    <!-- FORM -->
                    <form class="contact-form" id="contact" role="form">

                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <h4 class="success">
                            <i class="icon_check"></i> Your message has been sent successfully.
                        </h4>

                        <!-- IF MAIL SENDING UNSUCCESSFULL -->
                        <h4 class="error">
                            <i class="icon_error-circle_alt"></i> E-mail must be valid and message must be longer than 1 character.
                        </h4>

                        <div class="col-md-6">
                            <input class="form-control input-box" id="name" type="text" name="name" placeholder="Your Name">
                        </div>

                        <div class="col-md-6">
                            <input class="form-control input-box" id="email" type="email" name="email" placeholder="Your Email">
                        </div>

                        <div class="col-md-12">
                            <input class="form-control input-box" id="subject" type="text" name="subject" placeholder="Subject">
                            <textarea class="form-control textarea-box" id="message" rows="8" placeholder="Message"></textarea>
                        </div>

                        <button class="btn btn-primary standard-button2 ladda-button" type="submit" id="submit" name="submit" data-style="expand-left">Send Message</button>

                    </form>
                    <!-- /END FORM -->

                </div>

            </div>
            <!-- /END EXPANDED CONTACT FORM -->

        </div>
        <!-- /END CONTACT BOX -->

        <!-- LOGO -->
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img src="<?php echo $image[0]; ?>" alt="" class="responsive-img logo_footer">

        <!-- COPYRIGHT TEXT -->
        <p class="copyright">
            ©2019 DMS, All Rights Reserved
        </p>

    </div>
    <!-- /END CONTAINER -->

</footer>
<!-- /END FOOTER -->

<!-- =========================
     SCRIPTS
============================== -->

<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.localScroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/nivo-lightbox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/simple-expand.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/retina.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.nav.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/matchMedia.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.fitvids.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
