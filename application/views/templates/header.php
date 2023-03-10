<html>
	<head>
		<title>ciBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

  </head>
	<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
          <nav class="navbar navbar-dark bg-dark fixed">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">CiBLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Links here -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item"> 
                    <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts">Blogs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
                  </li>

                  <?php if(!$this->session->userdata('logged_in')): ?>
                  <?php echo $this->session->userdata('logged_in'); ?>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                  </li> 
                  <?php endif; ?>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                  </li> 
  
                </ul>
                <form class="d-flex mt-3" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </div>
      </nav>

    <div class="container">

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ;?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ;?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>' ;?>
    <?php endif; ?>
    
    <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>' ;?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>' ;?>
    <?php endif; ?>
    
    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ;?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>' ;?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ;?>
    <?php endif; ?>

