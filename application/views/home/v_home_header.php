<?php
	$page_title = "Zetcil Coder";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->config->item('website_title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url();?>assets/admin/dist/img/ZetcilLogo.png" alt="ZetcilLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->
  
  <script>
  /** add active class and stay opened when selected */
  var url = window.location;
  const allLinks = document.querySelectorAll('.nav-item a');
  const currentLink = [...allLinks].filter(e => {
    return e.href == url;
  });

  if (currentLink.length > 0) { //this filter because some links are not from menu
      currentLink[0].classList.add("menu-open");
      //currentLink[0].closest(".nav-treeview").style.display = "block";
      //currentLink[0].closest(".has-treeview").classList.add("active");
  }
</script>

  <!-- Main Sidebar Container -->
  <?php $_SESSION['theme'] = "background-color:#303030"; ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="<?php echo $_SESSION['theme']; ?>">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url();?>assets/admin/dist/img/ZetcilLogo.png" alt="ZetcilLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $this->config->item('website_title'); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

		  <!-- HOME -->
          <li <?php if($this->uri->segment(1)=="home"){ echo "class='nav-item menu-open'";}else {echo "class='nav-item'";} ?>>
			  <a href="<?php echo base_url();?>home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
		  
		  <?php if ($this->session->userdata('hide')) { ?>
		  
		  <!-- AVATAR -->
          <li <?php if($this->uri->segment(1)=="avatar"){ echo "class='nav-item menu-open'";}else {echo "class='nav-item'";} ?>>
			  <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Avatar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>avatar/create" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>avatar/model" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Model</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>avatar/sticker" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Sticker</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>avatar/download" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Download</p>
                </a>
              </li>
            </ul>
		  </li>		  

		  <!-- WORLD -->
          <li <?php if($this->uri->segment(1)=="world"){ echo "class='nav-item menu-open'";}else {echo "class='nav-item'";} ?>>
			  <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                World
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>world/room?q=<?php echo $this->session->userdata('TOKEN');?>" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Room</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a target="_blank" href="https://www.spatial.io/s/Metaversity-Expo-6428e77c701e44cfac97d7ae?share=1933923307915985754" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
            </ul>
		  </li>		  
		  
		  <?php } ?>

		  <!-- DATA -->
          <li <?php if($this->uri->segment(1)=="data"){ echo "class='nav-item menu-open'";}else {echo "class='nav-item'";} ?>>
			  <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>data/users" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>data/progress" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Progress</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>data/leaderboard" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Leaderboard</p>
                </a>
              </li>
            </ul>
		  </li>
		  
		  <!-- LOGOUT -->
          <li class="nav-header">Logout</li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>auth/logout" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
