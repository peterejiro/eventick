<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 2:17 PM
 */
?>
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo site_url('admin') ?>" class="logo"><span>Even<span>tick</span></span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li>
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li>
                        <!-- Notification -->
                        
                        <!-- End Notification bar -->
                    </li>

                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">

                            <li><a href="<?php echo site_url('admin/logout') ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="<?php echo site_url('admin') ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/addevent') ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Set Up Events </span> </a>
                            </li>



                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
