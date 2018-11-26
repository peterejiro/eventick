<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/25/2018
 * Time: 12:57 PM
 */
?>

<header id="header">
    <div class="header-inner">

        <!-- Start Login-Shadow -->
        <div id="login-shadow"></div>
        <!-- End Login-Shadow -->

        <div class="container">

            <!-- Start Utility-Nav-->

            <!-- End Utility Nav -->

            <!-- Start Search Nav -->
            <nav class="search-nav">
                <button class="advanced-search-button">
                    <i class="fa fa-align-justify"></i>
                </button>


                <form action="" class="default-form">
                    <input type="text" placeholder="Search...">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </nav>
            <!-- End Search Nav -->

            <!-- Start Menu Nav -->
            <div class="menu-nav row">

                <!-- Start Logo -->
                <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <a href="<?php echo site_url(); ?>" class="logo"><span>Even<span>tick</span></span></a>
                </div>
                <!-- End Logo -->

                <!-- Start Nav -->
                <nav id="nav-wrapper" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <ul class="nav custom-list pull-right">
                        <li>
                            <a href="<?php echo site_url(); ?>">
                                <div class="menu-square home active">
                                    <i class="fa fa-home"></i>
                                </div>
                                <span class="caption">Home</span>
                            </a>

                        </li>









                    </ul>
                </nav>
                <!-- End Nav -->

                <!-- Start Search Nav Mobile -->
                <nav class="search-nav mobile col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                    <button class="advanced-search-button">
                        <i class="fa fa-align-justify"></i>
                    </button>


                    <form action="" class="default-form">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </nav>
                <!-- End Search Nav Mobile -->

                <!-- Start Nav-Wrapper Mobile -->
                <nav class="nav-wrapper-mobile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="main-menu custom-list">
                        <li>
                            <a href="<?php echo site_url(); ?>">Homepage</a>
                        </li>



                    </ul>



                </nav>
                <!-- End Nav-Wrapper Mobile -->

            </div>
            <!-- End Menu Nav -->

            <!-- Responsive Menu Buttons -->
            <button class="search-toggle button"><i class="fa fa-search"></i></button>

            <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
            <!-- End Responsive Menu Buttons -->

        </div>
    </div>
</header>
