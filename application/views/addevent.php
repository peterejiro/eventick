<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/23/2018
 * Time: 1:44 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>


</head>


<body>

<!-- Navigation Bar-->

<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->



        <div class="row">
            <div class="col-lg-1">
            </div>

            <div class="col-lg-10">
                <div class="card-box">


                    <h4 class="header-title m-t-0 m-b-30">Add New Event</h4>

                    <form action="<?php echo site_url('admin/addeventsucess') ?>" method="post" >
                        <div class="form-group">
                            <label for="userName">Event Name: *</label>
                            <input type="text" name="name" parsley-trigger="change" required
                                   placeholder="Enter event name" class="form-control" id="userName">
                        </div>

                        <div class="form-group">
                            <label for="emailAddress">Venue: *</label>
                            <input type="text" name="venue" parsley-trigger="change" required
                                   placeholder="Enter event Venue" class="form-control" id="emailAddress">
                        </div>

                        <div class="form-group">
                            <label for="emailAddress">Organizer: *</label>
                            <input type="text" name="organizer" parsley-trigger="change" required
                                   placeholder="Enter event organizer" class="form-control" id="emailAddress">
                        </div>


                            <div class="form-group">
                                <label for="field-6" class="control-label" >Time</label>
                                <div class="input-group m-b-15">


                                    <input  type="time" class="form-control" name="time" value="">

                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                                </div><!-- input-group -->
                            </div>

                        <div class="form-group">
                            <label for="field-6" class="control-label" >Date</label>
                            <div class="input-group m-b-15">


                                <input  type="date" class="form-control" name="date" value="">

                                <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                            </div><!-- input-group -->
                        </div>


                        <div class="form-group">
                            <label for="field-4" class="control-label">Payment Type</label>
                            <select class="form-control select2" name="payment">
                                <option>Select</option>


                                <option value="1">Free</option>
                                <option value="0">Paid</option>


                           </select>
                        </div>

                        <div class="form-group">
                            <label for="field-4" class="control-label">Event Status</label>
                            <select class="form-control select2" name="status">
                                <option>Select</option>


                                <option value="1">On Going</option>
                                <option value="0">Closed</option>


                            </select>
                        </div>


                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Add New Event
                            </button>
                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div>
            </div><!-- end col -->

            <div class="col-lg-1">
            </div>


        </div>
        <!-- end row -->






    </div>
    <!-- end container -->




</div>



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>


</body>
</html>
