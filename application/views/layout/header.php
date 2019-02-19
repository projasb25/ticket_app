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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-1">
        <a class="navbar-brand" href="<?=base_url()?>">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$this->session->userdata('email'); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Change Password</a>
                <a class="dropdown-item" href="<?=base_url()?>logout">Log out</a>
                </div>
            </li>
            </ul>
        </div>
    </nav><!-- /navbar -->
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse">
                        <i class="fas fa-calendar-alt"></i>
                        Inicio
                    </a>
                </li>
                <li>
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
                <li>
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
                    <li>
                        <a href="#">
                            <i class="fas fa-user-cog"></i>
                            Admin
                        </a>
                    </li>
                <?php }/* endif */ ?>
            </ul>
        </nav><!-- /sidebar -->
        <ul></ul>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button type="button" id="sidebarCollapse" class="btn btn-info" style="margin-right:20px">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <a class="navbar-brand" href="#"><?=$sub_title?></a>
            </nav>
            <br>
