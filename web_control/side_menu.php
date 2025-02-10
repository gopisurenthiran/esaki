<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
    <?php if (isset($_SESSION['userid'])) { 
      $sel = mysqli_query($link,"select * from users_tbl where autoid='".$userid."'");
      $fetch_photo = mysqli_fetch_object($sel);
      $photo = $fetch_photo->profile_pic;
      $last_access = $fetch_photo->last_access;
            if(!empty($photo)){
            ?>
      <a class="img-circle" href="dashboard.php"> <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo $photo;?>" style="width:50px; height:50px;"></a>
      <?php  } else { ?>
      <a class="img-circle" href="dashboard.php"> <img class="media-object img-thumbnail user-img" alt="User Picture" src="images/user.png" style="width:50px; height:50px;"><!-- <span class="label label-danger user-label">16</span>--> </a>
      <?php } }?>
        </div>
        <div class="pull-left info">
          <p>Welcome <?php echo $_SESSION['user_name']; ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php if(checkAdmin()){ ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
    <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
              <i class="fa fa-home"></i> <span>Home</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>Slider</a>
              <ul class="treeview-menu">
                <li><a href="slider.php"><i class="fa fa-circle-o"></i>View Slider</a></li>
                <li><a href="slider_add.php"><i class="fa fa-circle-o"></i>Add Slider</a></li>
              </ul>
            </li>

           <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>Magazine</a>
              <ul class="treeview-menu">
                <li><a href="magazine_add.php"><i class="fa fa-circle-o"></i>Add Magazine</a></li>
                <li><a href="magazine.php"><i class="fa fa-circle-o"></i>View Magazine</a></li> 
              </ul>
            </li> 
            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>Popular Facilities</a>
              <ul class="treeview-menu">
                <li><a href="facility_add.php"><i class="fa fa-circle-o"></i>Add Facilities</a></li>
                <li><a href="facility.php"><i class="fa fa-circle-o"></i>View Facilities</a></li> 
              </ul>
            </li>
            <li><a href="home_about.php"><i class="fa fa-circle-o"></i>About US</a></li> 
            <li><a href="home_admission.php"><i class="fa fa-circle-o"></i>Admission</a></li> 
            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>Fees Structure</a>
              <ul class="treeview-menu">
                <li><a href="fee_structure_add.php"><i class="fa fa-circle-o"></i>Add Fees Structure</a></li>
                <li><a href="fee_structure.php"><i class="fa fa-circle-o"></i>View Fees Structure</a></li> 
              </ul>
            </li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
              <i class="fa fa-building"></i> <span>School</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="about.php"><i class="fa fa-circle-o"></i>About Us</a></li>
            <li><a href="school_system.php"><i class="fa fa-circle-o"></i> School System</a></li>
            <li><a href="messages.php"><i class="fa fa-circle-o"></i> Messages</a></li>
            <li><a href="downloads.php"><i class="fa fa-circle-o"></i> Downloads</a></li>
            <li><a href="fees.php"><i class="fa fa-circle-o"></i> Fees Structure</a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
              <i class="fa fa-building"></i> <span>Facilities</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="facilities_add.php"><i class="fa fa-circle-o"></i> Add Facilities</a></li>
            <li><a href="facilities.php"><i class="fa fa-circle-o"></i> View Facilities</a></li>
            
          </ul>
        </li>

        <li><a href="gallery.php?page=Gallery"><i class="fa fa-photo"></i> Gallery</a></li>
        
        <li><a href="events.php"><i class="fa fa-file-text-o"></i> News & Events</a></li>
        <li><a href="faculty.php"><i class="fa fa-user-circle"></i> Our Faculty</a></li>

      <li>
        <a href="contact_details.php">
          <i class="fa fa-phone"></i> <span>Contact</span>
        </a>
      </li>
 
      <li>
        <a href="change_pwd.php">
          <i class="fa fa-key"></i> <span>Change Password</span> 
        </a>
      </li>
  
      <li>
        <a href="logout.php">
          <i class="fa fa-lock"></i> <span>Logout</span>
        </a>
      </li>
  
    </ul>
      <?php } ?>
      </section>
    <!-- /.sidebar -->
  </aside>
<!-- </div> -->