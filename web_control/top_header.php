<header class="main-header"> 
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../assets/images/logo.png" alt="" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../assets/images/logo.png" class="img-responsive" 
        style="width: 196px;" /></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <li style="margin:5px; padding:5px; color:#fff;"><?php echo date('d-m-Y', strtotime($today)); ?></li>
          <!-- Messages: style can be found in dropdown.less-->
		  <?php // include "header_msg.php"; ?>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php // include "header_notification.php";?>
		  <!-- Tasks: style can be found in dropdown.less -->
          <?php // include "header_task.php"; ?>
		  <!-- User Account: style can be found in dropdown.less -->
          <?php // include "header_users.php"; ?>
		  <!-- Control Sidebar Toggle Button -->
          <?php //include "header_settings.php"; ?>
        </ul>
      </div>
    </nav>
  </header>
  