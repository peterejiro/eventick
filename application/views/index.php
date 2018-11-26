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

        <!-- Start Categories-List -->
        <div class="categories list">
            <div class="container">
                <div class="row">

                    <?php foreach ($events->result() as $row){

                    ?>

                    <div class="category-box col-lg-4 col-md-4 col-sm-6">
                        <header class="category-header advertising clearfix">
                            <a>
                                <div class="category-icon"><i class="fa fa-star"></i></div>
                                <div class="category-title">
                                    <h5><?php echo $row->name; ?> </h5>
                                                                    </div>
                            </a>
                        </header>
                        <div class="category-list">
                            <ul class="custom-list">
                                <li><a>Venue: <?php echo $row->venue; ?></a> </li>
                                <li><a> Organizer: <?php echo $row->organizer; ?> </a> </li>
                                <li><a>Date: <?php echo $row->date; ?></a></li>
                                <li><a>Time: <?php echo $row->time; ?></a></li>
                                <li><a>Payment: <?php if ($row->payment_type == 1){ echo "Free"; } else { echo "Paid"; } ?></a></li>
                               <?php if ($row->status ==1){ ?>
                                <li><a>Status: <?php  echo "Ongoing" ?></a></li>
                                <li><a href="<?php echo site_url("home/reservation/{$row->id}");   ?>" class="text-center"><i class="fa fa-arrow-circle-right"></i> Get Ticket </a></li>

                                <?php } else { ?>
                                <li><a>Status: <?php  echo "Closed" ?></a></li>
                                <li><a class="text-center" disabled=""><i class="fa fa-arrow-circle-right"></i> Get Ticket </a></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>

                    <?php } ?>



                </div>
            </div>
        </div>
        <!-- End Categories-List -->

        <!-- Start Companies-Sliders -->

        <!-- End Companies-Sliders -->

        <!-- Start Subscribe -->

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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><p>Copyright © 2018 roks</p></div>
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
