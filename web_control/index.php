<?php
include "dbc.php";
page_protect();
include "header.php";

list($facility) = mysqli_fetch_row(mysqli_query($link,"select count(id) from facility"));
list($gallery) = mysqli_fetch_row(mysqli_query($link,"select count(id) from gallery"));

list($events) = mysqli_fetch_row(mysqli_query($link,"select count(id) from events"));
list($faculty) = mysqli_fetch_row(mysqli_query($link,"select count(id) from faculty"));

?> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "top_header.php"; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include "side_menu.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3 class="color_white"><?php echo $facility; ?></h3>

              <p>Facility</p>
            </div>
            <div class="icon">

              <i class="fa fa-building" style="margin-top:20px"></i>
            </div>
            <a href="facility.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 class="color_white"><?php echo $gallery; ?></h3>

              <p>Gallery</p>
            </div>
            <div class="icon">
              <i class="fa fa-photo" style="margin-top:20px"></i>
            </div>
            <a href="gallery.php?page=Gallery" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
              <h3 class="color_white"><?php echo $events; ?></h3>

              <p>News & Events</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o" style="margin-top:20px"></i>
            </div>
            <a href="events.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		  
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 class="color_white"><?php echo $faculty; ?></h3>

              <p>Faculty</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-circle" style="margin-top:20px"></i>
            </div>
            <a href="faculty.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       


        
	     </div>
	 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php"; ?>
