<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Taman Usaha Politeknik Negeri Jember</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img') ?>/TamanUsaha.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.css" type="text/css" media="all" />  
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.theme.css" type="text/   css" media="all" />
     
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-new {
            margin-top: 0;
        }

        .navbar {
            background-color: #414a5c;
        }

        footer.page-footer {
            background-color: #414a5c;
            margin-top: 2rem;
        }

        .list-group-item.active {
            background-color: #2bbbad;
            border-color: #2bbbad
        }

        .list-group-item:not(.active) {
            color: #222;
        }

        .list-group-item:not(.active):hover {
            color: #666;
        }
        .card {
            font-weight: 300;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        #img-upload{
            width: 25%;
            height: 25%;
        }
        .reviews {
            text-align: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .price {
            position: absolute;
            left: 0;
            top: 0;
            margin-top: -2px;
        }

        .price .tag {
            margin: 0;
        }
    </style>

        
</head>

<body class="rgba-grey-slight">


    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">TamuPoltek</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori 
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($cat as $cat){?>
                                <a class="dropdown-item" href="<?php echo base_url()?>index.php/welcome/pilih_cat?id=<?php echo $cat->CAT_ID?>&name=<?php echo $cat->CAT_NAME?>"><?php echo $cat->CAT_NAME?>
                                </a>
                            <?php }?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline" method="post" action="<?php echo base_url()?>index.php/welcome/search_prod">
                                <input class="form-control mr-lg-6" size="60" type="text" placeholder="Search" aria-label="Search" name="name" id="id">
                                    <button class="btn btn-outline btn-sm my-0 rgba-grey-slight" type="submit"><i class="fa fa-search mr-1"></i></button>
                        </li>
                       
                        </form>
                    </ul>
                    <ul class="navbar-nav" style="margin-right: 50px;">
                    <?php if(isset($_SESSION['email_sess'])){?>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/seller/seller_default.jpg" class="img-fluid rounded-circle z-depth-0" height="30px" width="30px">&nbsp&nbsp <?php echo $_SESSION['email_sess'];?></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5">
                                <a class="dropdown-item" href="<?php echo base_url('index.php/seller'); ?>">Akun Anda</a>
                                <a class="dropdown-item" href="<?php echo base_url('index.php/product'); ?>">Kelola Produk</a>
                                <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout'); ?>">Keluar</a>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/register'); ?>">Daftar <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/login'); ?>">Login</a>
                        </li> 
                    <?php }?>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>