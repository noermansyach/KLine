    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo ucfirst($title) ?> | Artshop Kayu</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>">

    <?php 
        if ($css != "") {
            $this->load->view($css);
        }
    ?>

    <!-- Sweet Alert Bootstrap 4 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/toastr/css/toastr.min.css') ?>">

    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/demo_1/style.css') ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />