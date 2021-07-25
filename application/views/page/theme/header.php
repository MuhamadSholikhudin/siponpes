<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="<?= base_url("assets/theme/") ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="<?= base_url("assets/theme/") ?>css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url("assets/theme/") ?>css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">

    <style>
        .main-register {
            /* background-image: url("<?= base_url('assets/theme/img/blog/1.jpg') ?>"); */
            background-color: #deedf2;
        }

        /* .beranda {
            background-image: url("<?= base_url('assets/theme/img/blog/1.jpg') ?>");
            background-repeat: no-repeat, repeat;

        } */
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- header -->
        <header>
            <!-- navigation -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png" alt="Logo" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url('page/beranda/') ?>">Beranda</a></li>
                            <li><a href="<?= base_url('page/tentang/') ?>">Tentang</a></li>
                            <li><a href="<?= base_url('page/kontak/') ?>">Kontak</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">How It Works <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?= base_url("page/login") ?>">Login</a></li>
                            <li><a href="<?= base_url("page/registration") ?>">Pendaftaran</a></li>
                        </ul>
                        <!-- <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>