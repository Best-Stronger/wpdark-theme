<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webrex
 */

get_header();
?>
<?php
$args = array(
	'posts_per_page' => '3',
	'post_type' => 'about-us',
);
$about_us = new WP_Query( $args );
?>
    <!-- BEGIN ABOUT US BOX -->
    <div class="main">
        <div class="container">
            <div class="row service-box margin-bottom-40">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <p class="header-details"><span class="highlight">Some Recent</span> Projects</p>
                    <p class="lead">We are <span class="highlight">Creative Team</span> located in Kalura, Bovlandia. Tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<?php
// The Loop
while ( $about_us->have_posts() ) : $about_us ->the_post();
	?>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-location-arrow blue"></i></em>
                            <span><?php echo get_the_title(); ?></span>
                        </div>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
<?php
endwhile;
// Reset Post Data
wp_reset_postdata();
?>
                </div>
            </div>
        </div>
    </div>
    <!-- END ABOUT US BOX -->
<?php
$args = array(
	'posts_per_page' => '-1',
	'post_type' => 'portfolio',
);
$myPortfolio = new WP_Query( $args );
?>

    <!-- BEGIN PORTOFOLIO -->
    <div class="portofolio">
        <div class="container-fluid">
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h2>OUR
                        <span class="highlight">Work</span>
                    </h2>
                    <p class="header-details"><span class="highlight">Some Recent</span> Projects</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                    <div class="content-page">
                        <div class="filter-v1">
                            <ul class="mix-filter">
                                <li data-filter="all" class="filter ">All</li>
	                            <?php
	                            $categories=get_categories('portfolio');
	                            foreach ($categories as $ones){
		                            if($ones->parent > 0){
			                            ?>
                                        <li data-filter="<?php echo $ones->slug; ?>" class="filter "><?php echo $ones->cat_name; ?></li>
                                        <?php
		                            }
	                            }
	                            ?>
                            </ul>
                            <div class="row mix-grid thumbnails">

	                            <?php
	                            // The Loop
	                            while ( $myPortfolio->have_posts() ) : $myPortfolio ->the_post();
	                            ?>
                                    <div class="col-md-3 col-sm-4 mix
                                    <?php
		                            $category_detail=get_the_category(get_the_ID());//$post->ID
		                            foreach($category_detail as $cd){
			                            echo $cd->slug . ' ';
		                            }
//                                the_ID();
		                            ?>
                                     category_1 mix_all" style="display: block; opacity: 1; ">
                                        <div class="mix-inner">
                                            <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive">
                                            <div class="mix-details">
                                                <h4><?php echo get_the_title(); ?></h4>
                                                <a href="<?php echo get_post_embed_url();?>" class="mix-link"><i class="fa fa-link"></i></a>
                                                <a data-rel="fancybox-button" title="<?php echo get_the_title(); ?>" href="<?php echo get_the_post_thumbnail_url(); ?>" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
	                            endwhile;
	                            // Reset Post Data
	                            wp_reset_postdata();
	                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
    <!-- END POTOFOLIO -->

    <!-- BEGIN PRICE BLOCKS -->
    <div class="main">
        <div class="container">
            <div class="col-md-12">
                <h2>Price</h2>
                <p class="header-details"><span class="highlight">We Are Here</span> For You</p>
                <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row margin-bottom-20">
                    <div class="col-md-4">
                        <div class="service-box-v1">
                            <h4><i>$</i>7<i>.75</i></h4>
                            <h3>Harum quidem</h3>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box-v1">
                            <h3><i>$</i>12<i>.85</i></h3>
                            <h3>Denim robatl</h3>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box-v1">
                            <h3><i>$</i>18<i>.64</i></h3>
                            <h3>Solnh mate</h3>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRICE BLOCKS -->



    <!-- BEGIN MEMBERSHIP -->
    <div class="member">
        <div class="container-fluid">
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h2>MemberShip</h2>
                    <p class="header-details"><span class="highlight">We Make</span> Our Customers Happy</p>
                    <p class="lead">Curabitur eget nulla ut neque aliquam dictum. Nam sollicitudin leo dui, non malesuada felis aliquam non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus finibus tempor neque vel scelerisque. Cras nec ex ut eleifend mollis ut a nibh. Vivamus commodo est sit amet ultricies.</p>
                    <div class="content-page">
                        <div class="row margin-bottom-40">
                            <!-- Pricing -->
                            <div class="col-md-3 mem_pb">
                                <div class="pricing ">
                                    <div class="pricing-head">
                                        <h3>Begginer
                                            <span>
                         Officia deserunt mollitia
                      </span>
                                        </h3>
                                        <h4><i>$</i>5<i>.49</i>
                                            <span>
                         Per Month
                      </span>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            <i class="fa fa-tags"></i> At vero eos
                                        </li>
                                        <li>
                                            <i class="fa fa-asterisk"></i> No Support
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> Fusce condimentum
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> Ut non libero
                                        </li>
                                        <li>
                                            <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn btn-primary">
                                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mem_pb">
                                <div class="pricing ">
                                    <div class="pricing-head">
                                        <h3>Pro
                                            <span>
                         Officia deserunt mollitia
                      </span>
                                        </h3>
                                        <h4><i>$</i>8<i>.69</i>
                                            <span>
                         Per Month
                      </span>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            <i class="fa fa-tags"></i> At vero eos
                                        </li>
                                        <li>
                                            <i class="fa fa-asterisk"></i> No Support
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> Fusce condimentum
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> Ut non libero
                                        </li>
                                        <li>
                                            <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn btn-primary">
                                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mem_pb">
                                <div class="pricing pricing-active ">
                                    <div class="pricing-head pricing-head-active">
                                        <h3>Expert
                                            <span>
                         Officia deserunt mollitia
                      </span>
                                        </h3>
                                        <h4><i>$</i>13<i>.99</i>
                                            <span>
                         Per Month
                      </span>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            <i class="fa fa-tags"></i> At vero eos
                                        </li>
                                        <li>
                                            <i class="fa fa-asterisk"></i> No Support
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> Fusce condimentum
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> Ut non libero
                                        </li>
                                        <li>
                                            <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn btn-primary">
                                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mem_pb">
                                <div class="pricing ">
                                    <div class="pricing-head">
                                        <h3>Hi-Tech
                                            <span>
                         Officia deserunt mollitia
                      </span>
                                        </h3>
                                        <h4><i>$</i>99<i>.00</i>
                                            <span>
                         Per Month
                      </span>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            <i class="fa fa-tags"></i> At vero eos
                                        </li>
                                        <li>
                                            <i class="fa fa-asterisk"></i> No Support
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> Fusce condimentum
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> Ut non libero
                                        </li>
                                        <li>
                                            <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn btn-primary">
                                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--//End Pricing -->
                        </div>
                    </div>

                    <!-- END CONTENT -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MEMBERSHIP-->

    <!-- END MAIN -->

<?php
get_footer();
