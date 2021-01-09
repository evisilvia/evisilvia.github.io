<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo-saung.png'); ?>">
    <title><?= $title; ?></title>

    <!-- select search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/lib/select2/js/select2.min.js') ?>" type='text/javascript'></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') ?>" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/jqvmap/jqvmap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/datatables/css/dataTables.bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/select2/css/select2.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/bootstrap-slider/css/bootstrap-slider.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?> " type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/user.css') ?> " type="text/css" />
    <!-- <style>
        @media (-webkit-min-device-pixel-ratio: 2),
        not all,
        (min-resolution: 192dpi) {
            .be-top-header .navbar-header .navbar-brand {
                background-image: url('/assets/img/logo-saung.png');
                background-size: 102px 27px;
            }
        }



        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #9AC640;
        }

        /* @media (min-width: 992px) .col-md-7 {
            width: 48.333333%;
        } */

        .col-md-7 {
            width: 44.333333%;
        }

        .panel-body {
            padding: 8px 20px 0px;
        }

        .be-radio-icon input[type="radio"]:checked+label {
            border-color: #9AC600;
            color: #9AC600;
        }

        .fuelux .wizard>.steps li.active {
            color: #9AC600;
        }

        .fuelux .wizard>.steps li.complete {
            background-color: #9AC600;
            background: #9AC600;
        }

        .fuelux .wizard>.steps li.complete .chevron:before {
            border-left: 14px solid #9AC600;
        }

        .filter-table-label {
            white-space: nowrap;
            margin-right: -25px;
        }

        .be-user-nav>li.dropdown .dropdown-menu .user-info {
            background-color: #808080;
        }

        .be-top-header .be-user-nav>li.dropdown .dropdown-menu:after {
            border-bottom-color: #808080;
        }

        .be-top-header .navbar-nav>li.dropdown .dropdown-menu>li>a:hover {
            background-color: #9AC600;
        }

        .filter {
            margin-top: 6px;
        }

        .dataTables_filter {
            text-align: right;
        }

        .be-datatable-header>.col-sm-6 {
            padding: 0;
        }

        .panel-border-color {
            border-color: #fff;
        }

        .btn-success {
            background-color: #9AC600;
            border-color: #9AC600;
        }

        .btn-primary {
            background-color: #9AC600;
            border-color: #9AC600;
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:focus {
            background-color: #9AC600;
            border-color: #9AC600;
        }

        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            box-shadow: inset 0 2px 0 #9AC600;
        }

        .btn-primary:hover,
        .btn-primary.hover {
            box-shadow: #9AC640;
        }

        .btn-primary:active:hover,
        .btn-primary.active:hover,
        .open>.dropdown-toggle.btn-primary:hover,
        .btn-primary:active:focus,
        .btn-primary.active:focus,
        .open>.dropdown-toggle.btn-primary:focus,
        .btn-primary:active.focus,
        .btn-primary.active.focus,
        .open>.dropdown-toggle.btn-primary.focus {
            color: #fff;
            background-color: #9AC640;
            border-color: transparent;
            border-top-color: #9AC640;
            box-shadow: inset 0 2px 0 #9AC600;
        }

        .be-top-header .navbar-nav>li.open>a:focus,
        .be-top-header .navbar-nav>li.open>a:active,
        .be-top-header .navbar-nav>li.open>a:hover {
            color: #9AC600;
        }

        .be-top-header .navbar-nav>li>.dropdown-menu>li>a:hover {
            background-color: #9AC600;
        }

        .form-control:focus {
            border-color: #9AC600;
        }

        .select2-selection .select2-selection--single:focus {
            border-color: #9AC600;
        }

        .be-checkbox input[type="checkbox"]:checked+label:before,
        .be-radio input[type="checkbox"]:checked+label:before,
        .be-checkbox input[type="radio"]:checked+label:before,
        .be-radio input[type="radio"]:checked+label:before {
            color: #9AC640;
            border-color: #9AC640;
        }

        .btn-default>a {
            color: #9AC640;
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            background-color: #9AC600;
            border-color: #9AC600;
        }

        .be-datatable-header {
            padding-left: 0;
            padding-right: 0;
        }

        th {
            text-align: center;
        }

        .be-datatable-footer {
            background-color: white;
            border-top: none;
            margin: 0px -15px;
        }

        .tab-content {
            margin-bottom: 0px;
        }

        .page-head {
            padding: 0px 12px 0px;
        }

        .row {
            /* margin-left: -15px;
            margin-right: -15px; */
            margin-top: 5px;
            margin-bottom: 30px;
            /* padding-top: inherit; */
        }

        .panel-body {
            padding: 0px 18px 0px;

        }

        .user-info-list table {
            width: 35%;
            table-layout: fixed;
        }

        .user-info-list table tr td.item {
            width: 50%;
        }

        .user-info-list table tr td {
            padding: 17px 0;
        }

        .user-info-list table {
            width: 50%;
            table-layout: fixed;
        }

        .be-right-navbar {
            background-color: #9AC600;
        }

        @media (max-width: 767px) {
            .be-top-header .be-right-navbar {
                background-color: #9AC600;
            }

            .panel {
                margin-top: 20px;
            }


        }
    </style> -->

</head>

<body>
    <div class="be-wrapper be-nosidebar-left">
        <nav class="navbar navbar-default navbar-fixed-top be-top-header">
            <div class="container-fluid">
                <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav navbar-right be-user-nav">
                        <ul class="nav navbar-nav navbar-right be-user-nav">

                            <li><a href=<?= base_url('login/logout'); ?>><span class="icon mdi mdi-power"></span> Logout</a></li>

                        </ul>

                    </ul>

                </div>
                <a href="#" data-toggle="collapse" data-target="#be-navbar-collapse" class="be-toggle-top-header-menu collapsed">Menu</a>
                <div id="be-navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href=<?= base_url('user'); ?>>Home</a></li>
                        <li><a href=<?= base_url('user/profil'); ?>>Profil</a></li>
                        <li><a href=<?= base_url('user/pengumuman'); ?>>Pengumuman</a></li>

                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>