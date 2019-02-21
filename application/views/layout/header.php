<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/styles.css">
        <link href="<?php echo base_url();?>public/css/all.min.css" rel="stylesheet"> <!--load all styles -->
        <script src="<?php echo base_url();?>public/js/jquery-3.3.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top p-0 shadow flex-md-nowrap"> -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top p-0 shadow flex-md-nowrap">
            <a class="navbar-brand col-md-2 mr-0" href="#">
                <span class="long-brand">Ticket Admin</span>
                <span class="short-brand">
                    <div class="textA">
                       <span></span>
                       <span></span>
                       <span></span>
                    </div>
                </span>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$this->session->userdata('email'); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=base_url()?>logout">Log out</a>
                    </div>
                </li>
            </ul>
        </nav><!-- navbar -->
        <div class="container-fluid">
            <div class="row">

                <!-- <nav class="col-md-2 d-none d-md-block sidebar"> -->
                <nav class="col-md-2 sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item active">
                                <a href="#homeSubmenu" data-toggle="collapse">
                                    <i class="fas fa-calendar-alt"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#ticketSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <i class="fas fa-ticket-alt"></i>
                                    Tickets
                                </a>
                                <ul class="collapse list-unstyled" id="ticketSubmenu">
                                    <li>
                                        <a href="#"> <i class="fas fa-plus"></i> Crear Ticket</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#consultasSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <i class="fas fa-search"></i>
                                    Consultas
                                </a>
                                <ul class="collapse list-unstyled" id="consultasSubmenu">
                                    <li>
                                        <a href="#">Tickets</a>
                                    </li>
                                    <li>
                                        <a href="#">Clientes</a>
                                    </li>
                                </ul>
                            </li>
                            <?php if($this->session->userdata('permissions') == 1){ ?>
                                <li class="nav-item">
                                    <a href="#">
                                        <i class="fas fa-user-cog"></i>
                                        Admin
                                    </a>
                                </li>
                            <?php }/* endif */ ?>
                        </ul>
                    </div>
                </nav><!-- sidebar -->

                <!-- <div class="main col-md-11 col-lg-10 ml-sm-auto px-4"> -->
                <div class="main">
                    <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h4">Main</h1>
                    </div>
                        
                    
