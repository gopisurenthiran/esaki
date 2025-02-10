<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
 
  if(isset($_POST['s1'])){
   
    if($_POST['s1']=="Update"){

      $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
      $email = mysqli_real_escape_string($link,$_POST['email']);
      $address = $_POST['address'];
      
      $update = mysqli_query($link,"update contact_details set mobile='$mobile',email='$email',address='$address'");
      if($update){

        header("location:contact_details.php?msg=2");
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
        Contact Details
        <small>Update Contact Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Contact Details</a></li>
        
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
                    <h3 class="box-title">Update Contact Details</h3>
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

                
                  $sel_rw = mysqli_query($link,"select * from contact_details"); 
                  $row = mysqli_fetch_object($sel_rw);

                    ?>
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Mobile Number</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="text" class="form-control" name="mobile" value="<?php echo $row->mobile; ?>">
                       
                      </div>
                    </div> 
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Email</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" required>
                      </div>
                    </div> 
                  </div>
                </div>

               
                <div class="row">
                 
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Address</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 no-pad">
                        <textarea class="form-control" id="editor" name="address" rows="7" required><?php echo $row->address; ?></textarea>
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