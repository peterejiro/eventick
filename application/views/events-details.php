<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 7:49 PM
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

    <title> <?php
        echo $event->name;
        ?> - Details</title>

    <!-- Plugins css-->



</head>


<body>

<!-- Navigation Bar-->

<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                     <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Edit Event Details</button>
                </div>
                <h4 class="page-title">

                    <?php
                    echo $event->name;
                    ?> Details</h4>
            </div>
        </div>





        <div class="row">

            <div class="col-md-1">


            </div>
            <div class="col-md-10">
                <div class="card-box task-detail">

                    <ul class="list-inline task-dates m-b-0 m-t-20">
                        <li>
                            <h5 class="font-600 m-b-5">Event Date:</h5>
                            <p> <?php echo $event->date ?><small class="text-muted"><?php echo $event->time; ?></small></p>
                        </li>

                        <li>
                            <h5 class="font-600 m-b-5">Organizer:</h5>
                            <p> <?php echo $event->organizer; ?></p>
                        </li>
                    </ul>

                    <ul class="list-inline task-dates m-b-0 m-t-20">
                        <li>
                            <h5 class="font-600 m-b-5">Payment Status:</h5>
                            <p> <?php $payment = $event->payment_type;
                                    if($payment == 1){
                                        echo "Free";
                                    }
                                    else{
                                        Echo "Paid";
                                    }
                            ?></p>
                        </li>

                        <li>
                            <h5 class="font-600 m-b-5">Status:</h5>
                            <p> <?php $status = $event->status;
                                    if($status == 1){
                                        echo "Ongoing";
                                         }
                                else{
                                        echo "Closed";
                                }
                            ?></p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="task-tags m-t-20">
                        <h5 class="font-600">Venue:</h5>
                        <p> <?php echo $event->venue; ?></p>
                    </div>

                </div>
            </div><!-- end col -->

            <div class="col-md-1">



                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card-box table-responsive">


                <h4 class="header-title m-t-0 m-b-30">List of Registrants for Event</h4>

                <table id="datatable-keytable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last name</th>
                        <th>Email </th>
                        <th>Ticket Type</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($registrants as $row){ ?>
                    <tr>
                        <td><?php echo $row->fname; ?></td>
                        <td><?php echo $row->lname; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php if($row->rtype == 1){ echo "VIP"; } else{ echo "regular";} ?></td>

                    </tr>
                   <?php } ?>
                    </tbody>
                </table>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->




    </div>
    <!-- end container -->



    <!-- Right Sidebar -->
   <div class="row">

       <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <h4 class="modal-title"><?php echo $event->name ?></h4>
                   </div>
                   <form method="post" action="<?php echo site_url('admin/updateevent') ?>">
                       <input type="hidden" name="id" value="<?php echo $event->id; ?>" required >
                   <div class="modal-body">

                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="field-1" class="control-label">Event Name:</label>
                                   <input type="text" class="form-control" name="name" placeholder="John" value="<?php echo $event->name; ?>" required >
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="field-2" class="control-label">Event Organizer:</label>
                                   <input type="text" class="form-control" name="organizer" placeholder="Doe" value="<?php echo $event->organizer; ?>" required >
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="field-3" class="control-label">Event Venue:</label>
                                   <input type="text" class="form-control" name="venue" placeholder="Address" value="<?php echo $event->venue; ?>" required >
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="field-6" class="control-label">Date:</label>
                                   <div class="input-group m-b-15">


                                           <input  type="date" class="form-control" name="date" value="<?php echo $event->date; ?>" required>

                                       <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                                   </div><!-- input-group -->
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="field-4" class="control-label">Payment Type</label>
                                   <select class="form-control select2" name="payment">
                                       <option>Select</option>
                                       <?php if($payment == 1) ?>

                                           <option value="1"  <?php if($payment == 1){ echo "selected";  ?> >Free</option>
                                           <option value="0" <?php } else echo "selected";  ?> >Paid</option>





                                   </select>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="field-4" class="control-label">Event Reg Status</label>
                                   <select class="form-control select2" name="status" required>
                                       <option>Select</option>
                                       <?php if($status == 1) ?>

                                       <option value="1"  <?php if($status == 1){ echo "selected";  ?> >Ongoing</option>
                                       <option value="0" <?php } else echo "selected";  ?> >closed</option>





                                   </select>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="field-6" class="control-label" >Time</label>
                                   <div class="input-group m-b-15">


                                           <input  type="time" class="form-control" name="time" value="<?php echo $event->time; ?>">

                                       <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                                   </div><!-- input-group -->
                               </div>
                           </div>
                       </div>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                   </div>
                   </form>
               </div>
           </div>
       </div><!-- /.modal -->
    <!-- /Right-bar -->

</div>




</body>
</html>
