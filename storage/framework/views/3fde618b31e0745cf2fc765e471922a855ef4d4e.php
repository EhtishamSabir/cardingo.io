<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardino</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/src/scss/_mixins.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/admin-custom.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/time/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/css/lib/chosen/chosen.min.css">
    <link href="<?php echo e(URL::to('/')); ?>/assets/summernote/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
</head>

<body style="background-color:ghostwhite;">
    <?php echo $__env->yieldContent('head'); ?>
    <?php echo $__env->yieldContent('bread'); ?>

    <div class="content">
        <?php echo $__env->yieldContent('main'); ?>

        <div class="clearfix"></div>

        <!-- Footer -->
        
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; <?php echo e(now()->year); ?> Admin Dashboard
                    </div>
                    <div class="col-sm-6 text-right">
                        Developed by <a href="#">ITWAREHUB</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
</div>

<!-- /#right-panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/main.js"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/init/fullcalendar-init.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/init/datatables-init.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-tagsinput.js" ></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/time/jquery.datetimepicker.full.min.js" ></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/summernote/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/init/chartjs-init.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/lib/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/parent.blade.php ENDPATH**/ ?>