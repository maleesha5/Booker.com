<html>
   <head>
      <title>Booker.com</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/booker-home.css">
      <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/x-icon">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/images/magnifier_glass_32.png">Booker.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
        <!--a class="nav-link" href="about">About</a-->
        <a class="navbar-brand" href="#" style="font-size:100%"><img src="<?php echo base_url(); ?>/assets/images/cart.png">Shopping cart</a>
    </li>
    <?php if (!$this->session->userdata('login_status')): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/login">Login</a>
    </li>
    <?php endif;?>
    <?php if ($this->session->userdata('login_status')): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/logout">Logout</a>
    </li>
    <?php endif;?>
    </ul>
  </div>
</nav>
<div class="container mb-4">
  <!-- Flash messages -->
  <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
      <?php endif;?>
      <?php if ($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
      <?php endif;?>
      <?php if ($this->session->flashdata('user_logout')): ?>
        <?php echo '<p class="alert alert-info">' . $this->session->flashdata('user_logout') . '</p>'; ?>
      <?php endif;?>
