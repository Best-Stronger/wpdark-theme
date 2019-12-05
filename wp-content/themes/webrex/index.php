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

    <!-- BEGIN ABOUT US BOX -->
    <div class="main">
        <div class="container">
            <div class="row service-box margin-bottom-40">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <p class="header-details"><span class="highlight">Some Recent</span> Projects</p>
                    <p class="lead">We are <span class="highlight">Creative Team</span> located in Kalura, Bovlandia. Tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-location-arrow blue"></i></em>
                            <span>Purpose Template</span>
                        </div>
                        <p>Praesent sodales, quam vitae gravida interdum, ex mi bibendum enim, sit amet tristique mi quam vel odio. Donec non nunc condimentum, hendrerit elit sed, condimentum magna. Suspendisse imperdiet purus vel ornare cursus.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-check red"></i></em>
                            <span>Well Documented</span>
                        </div>
                        <p>Curabitur et diam elementum, mollis tortor a, malesuada turpis. Vivamus gravida, justo et molestie sollicitudin, erat lorem tempus eros, vel laoreet nibh urna ac nunc, vestibulum neque vitae pellentesque efficitur.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-compress green"></i></em>
                            <span>Responsive Design</span>
                        </div>
                        <p>Sed porta erat vel ipsum maximus, eget maximus est maximus. Maecenas at venenatis nibh, sit amet suscipit odio. In feugiat vehicula dui. In felis enim, maximus a dolor semper efficitur elit euismod magna quis commodo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ABOUT US BOX -->

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
                                <li data-filter="category_1" class="filter ">UI Design</li>
                                <li data-filter="category_2" class=" filter ">Web Development</li>
                                <li data-filter="category_3" class=" filter ">Photography</li>
                                <li data-filter="category_3 category_1" class="filter ">Wordpress and Logo</li>
                            </ul>
                            <div class="row mix-grid thumbnails">
                                <div class="col-md-3 col-sm-4 mix category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto odio</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img2.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_3 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img3.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img4.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_2 category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img5.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img6.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_2 category_3 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img2.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_3 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img4.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 mix category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="img-responsive">
                                        <div class="mix-details">
                                            <h4>Cascusamus et iusto accusamus</h4>
                                            <a class="mix-link"><i class="fa fa-link"></i></a>
                                            <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img3.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
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
