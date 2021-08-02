<!DOCTYPE>
<html lang="en">
        <head>
                <title>RooReview</title>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
                <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        </head>
        <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home">RooReview</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a id="nav" class="nav-link" href="<?php echo base_url(); ?>home"> Home </a>
            </li>
            <li class="nav-item">
                <a id="nav" class="nav-link" href="about"> About </a>
            </li>
        </ul>
        <li id="nav" class="nav-item mr-auto"> <?php 
            if ($this->session->userdata('name')) {
                echo "Welcome ";
                echo $this->session->userdata('name');
            } else {
                echo "Welcome potential reviewer";
            }
            ?>
        </li>
        
        
        <ul class="navbar-nav">
        <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
                <a id="nav" class="nav-link"  href="<?php echo base_url(); ?>login"> Login </a>
            </li>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
                <li class="nav-item">
                <a id="nav" class="nav-link"  href="<?php echo base_url(); ?>login/logout"> Logout </a>
            </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav">
        <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
            <a id="nav" class="nav-link"  href="<?php echo base_url(); ?>profile">Profile</a>
            </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav">
        <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
                <a id="nav" class="nav-link" href="<?php echo base_url(); ?>user"> Sign Up </a>
            </li>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
            <?php endif; ?>
        </ul>

    </div>
    
</nav>
<div class="container">

<style>
    a {
        font-weight: bold;
    
    }

    #nav {
        color: white;
        font-weight: normal;
    }

</style>