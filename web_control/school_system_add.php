<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
   $page = 'School System';
  if(isset($_POST['s1'])){
    if($_POST['s1']=="Save"){

      $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      
      $status = mysqli_real_escape_string($link,$_POST['status']);
      
      $upload_picture = $_FILES['upload_picture']['name'];
  if(isset($_FILES['upload_picture'])) 
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
      

      $insert = mysqli_query($link,"insert into school_system(autoid,description,sort,status)values('$autoid','$description','$sort','$status')");

      if($upload_picture != "")
        {
          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/about/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
          mysqli_query($link,"UPDATE `school_system` SET `imgurl` = '$upload_pic' WHERE autoid ='$autoid'");
        }

      header("location:school_system_add.php?page=".$page."&msg=1");
    }
  }
}
    if($_POST['s1']=="Update"){

      $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      
      $status = mysqli_real_escape_string($link,$_POST['status']);
      
      $update = mysqli_query($link,"update school_system set description='$description',sort='$sort',status='$status' where autoid='$autoid'");

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
      mysqli_query($link,"UPDATE `school_system` SET `imgurl` = '$upload_pic' where autoid='$autoid'");
    }
        header("location:school_system_add.php?msg=2");
  }else{
        header("location:school_system_add.php?msg=2");
      }


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
        <small>Add/Update <?php echo $page; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add/Update <?php echo $page; ?></a></li>
        
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
                    <h3 class="box-title">Add/Update <?php echo $page; ?></h3>
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
                if(isset($_REQUEST['pid'])){
                    $id = $_REQUEST['pid'];
                  $sel_rw = mysqli_query($link,"select * from school_system where id=$id"); 
                  $row = mysqli_fetch_object($sel_rw);

                  $autoid=$row->autoid; 

                }else{

                    list($max) = mysqli_fetch_row(mysqli_query($link,"SELECT MAX(id) AS max FROM `school_system`"));
    
                    $max=$max+1;
                    $autoid="STS-".$max. "";

                  } ?>
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
                  <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">ID</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="autoid" value="<?php echo $autoid; ?>">
                  </div>
                </div>
              </div>
           
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id"> Image </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture">


                          <img src="<?php echo $row->imgurl; ?>" height="100">
                      

                      </div>
                    </div> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Status</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <select name="status" class="form-control">
                          <option value="Active" <?php if($row->status=="Active"){ echo "selected"; } ?> >Active</option>
                          <option value="Disabled" <?php if($row->status=="Disabled"){ echo "selected"; } ?>>Disabled</option>
                        </select>
                      </div>
                    </div> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Sort Order</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="text" class="form-control" name="sort" value="<?php if(isset($_REQUEST['pid'])){ echo $row->sort; } ?>">
                      </div>
                    </div> 
                 
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Description</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 no-pad">
                        <textarea class="form-control" id="editor" name="description" rows="7" required><?php echo $row->description; ?></textarea>
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
                         <?php if(isset($_REQUEST['pid'])){ ?>
                          <input class="btn btn-primary"  type="submit" name="s1" value="Update">
                          <?php }else{ ?>
                             <input class="btn btn-primary"  type="submit" name="s1" value="Save">
                          <?php } ?>
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