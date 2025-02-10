<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
   $page = 'Home About Us';
  if(isset($_POST['s1'])){
    
    if($_POST['s1']=="Update"){

      $title = mysqli_real_escape_string($link,$_POST['title']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
      $students = mysqli_real_escape_string($link,$_POST['students']);
      $award = mysqli_real_escape_string($link,$_POST['award']);
      $instructor = mysqli_real_escape_string($link,$_POST['instructor']);
      
      $update = mysqli_query($link,"update home_about set title='$title',students='$students',description='$description',award='$award',instructor='$instructor'");

      

      $upload_picture = $_FILES['upload_picture']['name'];
  if(isset($_FILES['upload_picture'])) 
  {
    if($upload_picture != "")
        {
    $err     = array();
      $maxsize    = 2097152;
      $acceptable = array(
          'image/jpeg',
          'image/jpg',
          'image/gif',
          'image/png' 
      );
    
      $image_properties = getimagesize($_FILES['upload_picture']['tmp_name']);
      
      if(!in_array($image_properties[mime], $acceptable)){
          $err[] = 'Invalid file type. Only JPG, GIF and PNG types are accepted.';
      }

      if(($_FILES['upload_picture']['size'] >= $maxsize) || ($_FILES["upload_picture"]["size"] == 0)) {
          $err[] = 'File too large. File must be less than 2 megabytes.';
      }

    if(count($err) === 0) {
      
          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/about/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
      mysqli_query($link,"UPDATE `home_about` SET `imgurl1` = '$upload_pic'");
    }
       
    }
  }

  $upload_picture1 = $_FILES['upload_picture1']['name'];
  if(isset($_FILES['upload_picture1'])) 
  {
    if($upload_picture1 != "")
    {

          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/about/";
            $upload_pic = $uploaddir.$secondname.$upload_picture1;     
          copy($_FILES['upload_picture1']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
        mysqli_query($link,"UPDATE `home_about` SET `imgurl2` = '$upload_pic'");   
      }
  }

  if($update){
        header("location:home_about.php?msg=2");
      }
     
  }
  }
  
  ?>
<?php include 'header.php'; ?>
<style type="text/css">
  .margin-left-50{
      margin-left: 50% !important;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'top_header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'side_menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $page; ?>
        <small>Update <?php echo $page; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update <?php echo $page; ?></a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- Table start -->
            <div class="box">
              <div class="box-header">
                <div class="row">
                  <div class="col-sm-10">
                    <h3 class="box-title">Update <?php echo $page; ?></h3>
                  </div>
                  
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php
                  foreach($err as $err_msg){
                  ?>
                  <div class="alert alert-danger alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                       <?php echo $err_msg; ?>
                    </div>
                  <?php } ?>
                <?php if(isset($_REQUEST['msg'])){
                 if($_REQUEST['msg']==1){ ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 
                  <?php echo "Successfully saved!"; ?>
                </div>
                <?php } if($_REQUEST['msg']==2){ ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 
                  <?php echo "Successfully Updated!"; ?>
                </div>
                <?php } } 

                  $sel_rw = mysqli_query($link,"select * from home_about"); 
                  $row = mysqli_fetch_object($sel_rw);

                    ?>
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Title</label>
                      </div> 
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Students</label>
                      </div> 
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="students" value="<?php echo $row->students; ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                <div class="form-group">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                    <label class="margin-left-50" for="childcategory_id">Winning Award </label>
                  </div> 
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="award" value="<?php echo $row->award; ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                <div class="form-group">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                    <label class="margin-left-50" for="childcategory_id">Instructor</label>
                  </div> 
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="instructor" value="<?php echo $row->instructor; ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id"> Image1 </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture">

                        <br>
                        
                          <img src="<?php echo $row->imgurl1; ?>" height="100">
                      

                      </div>
                    </div> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id"> Image2 </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture1">

                        <br>
                        
                          <img src="<?php echo $row->imgurl2; ?>" height="100">
                      

                      </div>
                    </div> 
                  </div>
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Description</label>
                      </div>
                      <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 no-pad">
                        <textarea class="form-control" name="description" rows="7" required><?php echo $row->description; ?></textarea>
                      </div>
                    </div> 
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      
                      <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 no-pad">
                        
                        <br><br>
                        <center>
                         
                          <input class="btn btn-primary"  type="submit" name="s1" value="Update">
                          
                        </center>
                      </div>
                    </div> 
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    </section>
  </div>
</div>
<?php include 'footer.php'; ?>
  <!-- Datatables -->
    <script>
        initSample();
    </script>
    <!-- /Datatables -->