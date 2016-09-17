<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php $__env->startSection('title'); ?> lead recycling CRM <?php echo $__env->yieldSection(); ?></title>
    <?php $__env->startSection('meta_keywords'); ?>
        <meta name="keywords" content="your, awesome, keywords, here"/>
    <?php echo $__env->yieldSection(); ?> <?php $__env->startSection('meta_author'); ?>
        <meta name="author" content="Jon Doe"/>
    <?php echo $__env->yieldSection(); ?> <?php $__env->startSection('meta_description'); ?>
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    <?php echo $__env->yieldSection(); ?>
  <!-- Material Design fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('components/bootstrap/css/bootstrap.min.css')); ?>" >
  <?php if(LaravelLocalization::getCurrentLocaleDirection()=='rtl'): ?> <link rel="stylesheet" href="<?php echo e(asset('components/bootstrap-rtl/dist/css/bootstrap-rtl.min.css')); ?>"> <?php endif; ?>

        <link href="<?php echo e(asset('components/jquery-selectboxit/src/stylesheets/jquery.selectBoxIt.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('components/bootstrap-checkbox/awesome-bootstrap-checkbox.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('components/bootstrap-datepicker/css/datepicker.css')); ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo e(asset('assets/web/css/sb-admin.css')); ?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo e(asset('components/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Custom THEME -->
        <link href="<?php echo e(asset('assets/web/css/lmcrm-theme.css')); ?>" rel="stylesheet" type="text/css">

    <?php echo $__env->yieldContent('styles'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo e(asset('components/jquery/jquery-2.min.js')); ?>"></script>
  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('components/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <!--<script type="text/javascript" src="<?php echo e(asset('components/bootstrap/js/material.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('components/bootstrap/js/ripples.min.js')); ?>"></script>-->

    <!-- Plugin JavaScript -->
    <script src="<?php echo e(asset('components/metisMenu/dist/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('components/bootbox/bootbox.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('components/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/ajax-form/jquery.form.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/jquery-selectboxit/src/javascripts/jquery.selectBoxIt.js')); ?>"></script>
    <script src="<?php echo e(asset('components/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/jquery-validation/dist/additional-methods.js')); ?>"></script>
    <?php if(LaravelLocalization::getCurrentLocale()!='en'): ?><script src="<?php echo e(asset('components/jquery-validation/dist/localization/messages_'.LaravelLocalization::getCurrentLocale().'.min.js')); ?>"></script><?php endif; ?>
    <!-- DataTables JavaScript -->
    <script src="<?php echo e(asset('components/datatables/media/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('components/datatables-responsive/js/dataTables.responsive.js')); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo e(asset('assets/web/js/sb-admin.js')); ?>"></script>
    <?php $__env->startSection('script'); ?> <?php echo $__env->yieldSection(); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/web/js/lmcrm.js')); ?>"></script>

  <link rel="shortcut icon" href="<?php echo asset('site/ico/favicon.ico'); ?> ">
</head>
<body>
<div id="wrapper">
    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
