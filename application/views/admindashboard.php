<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 11:15 AM
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

    <title>Eventick - Administrator Dashboard</title>




</head>


<body>

<!-- Navigation Bar-->

<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">

                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>





        <!-- end row -->

        <!-- end row -->


        <div class="row">


            <div class="col-lg-1">

            </div><!-- end col -->

            <div class="col-lg-10">
                <div class="card-box">


                    <h4 class="header-title m-t-0 m-b-30">Latest Events</h4>

                    <div class="table-responsive">
                        <table id="datatable-keytable" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Organizer</th>
                                <th>Date</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($events->result() as $row){

                            ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td> <a href="<?php echo site_url("admin/event/{$row->id}"); ?>"> <?php echo $row->name; ?> </a> </td>
                                <td><?php echo $row->organizer; ?></td>
                                <td><?php echo $row->date; ?></td>
                                <td><?php $status = $row->status;
                                if($status == 1) { ?> <span class="label label-primary">
                                   <?php  echo "On Going";
                                    ?> </span>
                                    <?php } else{ ?>

                                    <span class="label label-danger">
                                        <?php
                                 echo "closed";
                                }

                                ?></span></td>

                            </tr>
                           <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-lg-1">

            </div><!-- end col -->

        </div>

        <!-- end row -->


        <!-- Footer -->

        <!-- End Footer -->

    </div>
    <!-- end container -->



    <!-- Right Sidebar -->

    <!-- /Right-bar -->

</div>





</body>
</html>
