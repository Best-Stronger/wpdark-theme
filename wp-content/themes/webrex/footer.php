<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webrex
 */

?>
<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

                <div class="photo-stream">
                    <h3>Photos Stream</h3>
                    <ul class="list-unstyled">
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img5-small.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img4-large.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img2-large.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img5-small.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img4-large.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img2-large.jpg"></a></li>
                        <li><a href="javascript:;"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg"></a></li>
                    </ul>
                </div>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->

            <!-- BEGIN BOTTOM CONTACTS -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h3>Our Contacts</h3>
                <address class="margin-bottom-40">
                    35, Lorem Lis Street, Park Ave<br>
                    California, US<br>
                    Phone: 300 323 3456<br>
                    Fax: 300 323 1456<br>
                    Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                    Skype: <a href="skype:metronic">metronic</a>
                </address>

                <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" placeholder="youremail@mail.com" class="form-control">
                            <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END BOTTOM CONTACTS -->

            <!-- BEGIN TWITTER BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h3 class="margin-bottom-0">Latest Tweets</h3>
                <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
            </div>
            <!-- END TWITTER BLOCK -->
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-4 col-sm-4 padding-top-10">
                2019 . ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a>
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->
            <div class="col-md-4 col-sm-4">
                <ul class="social-footer list-unstyled list-inline pull-right">
                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
                </ul>
            </div>
            <!-- END PAYMENTS -->
            <!-- BEGIN POWERED -->
            <div class="col-md-4 col-sm-4 text-right">
                <p class="powered">Powered by: <a href="<?php echo site_url() ?>">dev.dark.com</a></p>
            </div>
            <!-- END POWERED -->
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
