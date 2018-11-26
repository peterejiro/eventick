<?php
/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 10:39 AM
 */
?>


<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/morris/morris.css">

<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />



<!-- jQuery  -->
<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/detect.js"></script>
<script src="<?php echo base_url();?>/assets/js/fastclick.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>/assets/js/waves.js"></script>
<script src="<?php echo base_url();?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>/assets/js/jquery.core.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.app.js"></script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<!-- Datatables-->
<script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.scroller.min.js"></script>



<!-- Flot chart js -->
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

<!-- flot init -->
<script src="assets/pages/jquery.flot.init.js"></script>

<!-- Datatable init js -->


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { ajax: "<?php echo base_url();?>/assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
    } );
    TableManageButtons.init();

</script>





