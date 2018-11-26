<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/25/2018
 * Time: 4:37 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EvenTick</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Google Font -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="main-wrapper">

    <!-- Start Header -->

    <!-- End Header -->



    <!-- Start Welcome-Text -->
    <div class="welcome-text gray-bg">
        <div class="container">
            <div class="css-table">
                <div class="css-table-cell">
                    <div class="welcome-logo">
                        <img src="img/logo-globe.png" alt="">
                    </div>
                    <div class="welcome-content">
                        <h5>Welcome to <span>Even<strong>Tick</strong></span></h5>
                        <p>Book for amazing events from around the globe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome-Text -->

    <!-- Start Main-Content -->



    <div class="main-content">



          <!-- End Register -->


        <!-- Start Categories-List -->
        <div class="categories list">
            <div class="container">
                <div class="row">



                        <div class="category-box col-lg-12 col-md-12 col-sm-12">
                            <header class="category-header advertising clearfix">
                                <a>
                                    <div class="category-icon"><i class="fa fa-star"></i></div>
                                    <div class="category-title">
                                        <h5><?php echo $event->name; ?> </h5>
                                    </div>
                                </a>
                            </header>
                            <div class="category-list">
                                <ul class="custom-list">
                                    <li><a>Venue: <?php echo $event->venue; ?></a> </li>
                                    <li><a> Organizer: <?php echo $event->organizer; ?> </a> </li>
                                    <li><a>Date: <?php echo $event->date; ?></a></li>
                                    <li><a>Time: <?php echo $event->time; ?></a></li>
                                    <li><a>Payment: <?php if ($event->payment_type == 1){ echo "Free"; } else { echo "Paid"; } ?></a></li>

                                </ul>
                            </div>
                        </div>





                </div>
            </div>
        </div>
        <!-- End Categories-List -->

        <!-- Start Companies-Sliders -->

        <!-- End Companies-Sliders -->

        <!-- Start Subscribe -->
        <div id="pricing" class="subscribe">
            <div class="container">
                <div class="row">

                                        <div class="contact-form">
                                                <div class="contact-form-box clearfix">
                            <form class="default-form" method="post" action="<?php echo site_url('home/reservationsuccess') ?>" >
                                <div class="col-lg-6 col-md-6">
                                    <p class="form-row">
                                        <input type="text" name="fname" placeholder="First Name*" required>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="form-row">
                                        <input type="text" name="lname" placeholder="Last Name*" required>
                                    </p>
                                </div>
                                <input type="hidden" name="event_id" value="<?php echo $event->id; ?>" >

                                <div class="col-lg-6 col-md-6">

                                    <p class="form-row">
                                        <input type="email" name="email" placeholder="Email*" required>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="form-row">
                                        <select name="rtype" required>
                                            <option>--Select Ticket Type--</option>
                                            <option value="1" > VIP </option>
                                            <option value="2">Regular</option>
                                        </select>
                                    </p>
                                </div>

                                <div class="register-step subscribe-final col-lg-12">
                                    <div class="register-step-inner">
                                        <button class="btn btn-secondary" type="submit"><i class="fa fa-arrow-circle-right"></i>Get Ticket</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <!-- End Contact-Form -->
                    <!-- Start Register -->

                    <!-- End Register -->

                </div>
            </div>
        </div>
        <!-- End Subscribe -->
        <!-- End Subscribe -->

        <!-- Start Partners -->

        <!-- End Partners -->

    </div>
    <!-- End Main-Content -->

    <!-- Start Footer -->
    <footer id="footer">

        <!-- End Container -->

        <!-- Start Footer Copyrights -->
        <div class="footer-copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><p>Copyright © 2014 UOU Apps</p></div>
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">

                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Copyrights -->

    </footer>
    <!-- End Footer -->

</div>
<!-- End Main-Wrapper -->

<!-- Start Back-To-Top Button -->
<a href="#" id="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- End Back-To-Top Button -->

<!-- Scripts -->



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

</body>
</html>

