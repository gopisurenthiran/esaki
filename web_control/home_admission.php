<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
   $page = 'Home Admission';
  if(isset($_POST['s1'])){
    
    if($_POST['s1']=="Update"){

      $title = mysqli_real_escape_string($link,$_POST['title']);
      $btn_name = mysqli_real_escape_string($link,$_POST['btn_name']);
      $url = mysqli_real_escape_string($link,$_POST['btn_url']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
     
      $update = mysqli_query($link,"update admission set title='$title',btn_name='$btn_name',url='$url',description='$description'");

      

      	$upload_picture = $_FILES['upload_picture']['name'];
	  	if(!empty($upload_picture)) 
	  	{
    
          	$secondname=rand(0,10000000000);
            $uploaddir = "uploads/about/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          	copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          	chmod("$upload_pic",0777);
      		mysqli_query($link,"UPDATE `admission` SET `image1` = '$upload_pic'");
  		}


  $upload_picture1 = $_FILES['upload_picture1']['name'];
  if(!empty($upload_picture1)) 
  {
    

          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/about/";
            $upload_pic = $uploaddir.$secondname.$upload_picture1;     
          copy($_FILES['upload_picture1']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
        mysqli_query($link,"UPDATE `admission` SET `image2` = '$upload_pic'");   
      
  }

  if($update){
        header("location:home_admission.php?msg=2");
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

                  $sel_rw = mysqli_query($link,"select * from admission"); 
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
              </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Button Name</label>
                      </div> 
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="btn_name" value="<?php echo $row->btn_name; ?>">
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                <div class="form-group">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                    <label class="margin-left-50" for="childcategory_id">Button URL </label>
                  </div> 
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="btn_url" value="<?php echo $row->url; ?>">
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
                        
                          <img src="<?php echo $row->image1; ?>" height="100">
                      

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
                        
                          <img src="<?php echo $row->image2; ?>" height="100">
                      

                      </div>
                    </div> 
                  </div>
                  </div>
            <div class="row">
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