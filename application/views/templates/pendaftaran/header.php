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
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/jqvmap/jqvmap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/datatables/css/dataTables.bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/select2/css/select2.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/bootstrap-slider/css/bootstrap-slider.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?> " type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/pendaftaran.css') ?> " type="text/css" />

</head>

<body>



    <div class="be-wrapper be-nosidebar-left">
        <nav class="navbar navbar-default navbar-fixed-top be-top-header">
            <div class="container-fluid">
                <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>

                <a href="#" data-toggle="collapse" data-target="#be-navbar-collapse" class="be-toggle-top-header-menu collapsed">Menu</a>
                <div id="be-navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href=<?= base_url('Home'); ?>>Home</a></li>
                        <li><a href=<?= base_url('login'); ?>>Login</a></li>
                        <li><a href=<?= base_url('pendaftaran'); ?>>Daftar</a></li>

                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>