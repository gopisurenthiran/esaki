<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
   $page = 'Facilities';
   
  if(isset($_POST['s1'])){
    if($_POST['s1']=="Save"){

      $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $title = mysqli_real_escape_string($link,$_POST['title']);
      $short = mysqli_real_escape_string($link,$_POST['short']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      $status = mysqli_real_escape_string($link,$_POST['status']);
      $main_menu = mysqli_real_escape_string($link,$_POST['main_menu']);
      
      $upload_picture = $_FILES['upload_picture']['name'];
  if(isset($_FILES['upload_picture'])) 
  {
         

      $insert = mysqli_query($link,"insert into facility(autoid,title,short_desc,description,sort,status,main_menu)values('$autoid','$title','$short','$description','$sort','$status','$main_menu')");
      if($insert){
        if($upload_picture != "")
        {
          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/facility/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
          mysqli_query($link,"UPDATE `facility` SET `home_image` = '$upload_pic' WHERE autoid ='$autoid'");
        }
        $upload_picture1 = $_FILES['upload_picture1']['name'];
        if($upload_picture1 != "")
        {
          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/facility/";
            $upload_pic = $uploaddir.$secondname.$upload_picture1;     
          copy($_FILES['upload_picture1']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
          mysqli_query($link,"UPDATE `facility` SET `imgurl` = '$upload_pic' WHERE autoid ='$autoid'");
        }
        header("location:facilities_add.php?msg=1");
      }
    
  }
}
    if($_POST['s1']=="Update"){

       $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $title = mysqli_real_escape_string($link,$_POST['title']);
      $short = mysqli_real_escape_string($link,$_POST['short']);
      $description = mysqli_real_escape_string($link,$_POST['description']);
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      $status = mysqli_real_escape_string($link,$_POST['status']);
      $main_menu = mysqli_real_escape_string($link,$_POST['main_menu']);
      $id = mysqli_real_escape_string($link,$_POST['id']);
      
      $update = mysqli_query($link,"update facility set title='$title',short_desc='$short',description='$description',sort='$sort',status='$status',main_menu='$main_menu' where autoid='$autoid'");
     
     
      $upload_picture = $_FILES['upload_picture']['name'];
      if(isset($_FILES['upload_picture'])) 
      {
        if($upload_picture != "")
        {
        $secondname=rand(0,10000000000);
        $uploaddir = "uploads/facility/";
        $upload_pic = $uploaddir.$secondname.$upload_picture;     
        copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
        chmod("$upload_pic",0777);
        mysqli_query($link,"UPDATE `facility` SET `home_image` = '$upload_pic' where autoid='$autoid'");
      }
      }   
      $upload_picture1 = $_FILES['upload_picture1']['name'];
      if(isset($_FILES['upload_picture1'])) 
      {
        if($upload_picture1 != "")
        {
        $secondname=rand(0,10000000000);
        $uploaddir = "uploads/facility/";
        $upload_pic = $uploaddir.$secondname.$upload_picture1;     
        copy($_FILES['upload_picture1']['tmp_name'], $upload_pic);
        chmod("$upload_pic",0777);
        mysqli_query($link,"UPDATE `facility` SET `imgurl` = '$upload_pic' where autoid='$autoid'");
      }
      }   
      header("location:facilities_add.php?pid=$id&msg=2"); 
    }
  }
  
  ?>
<?php include 'header.php'; ?>
<style type="text/css">
  .margin-left-50{
      margin-left: 50% !important;
}
.del_btn{
  background: red;
  color: white;
  padding: 4px 3px;
  border-radius: 50%;
  position: relative;
  top: -19px;
  right: 23px;
}
.del_btn:hover{
  color: white;
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
                  $sel_rw = mysqli_query($link,"select * from facility where id=$id"); 
                  $row = mysqli_fetch_object($sel_rw);

                  $autoid=$row->autoid; 

                }else{

                    list($max) = mysqli_fetch_row(mysqli_query($link,"SELECT MAX(id) AS max FROM `facility`"));
    
                    $max=$max+1;
                    $autoid="FA-".$max. "";

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
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                  </div>
                </div>
              </div>
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
                        <label class="margin-left-50" for="childcategory_id"> Home Image </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture">
                          <img src="<?php echo $row->home_image; ?>" height="100">
                      </div>
                    </div> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id"> Image </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture1">
                          <img src="<?php echo $row->imgurl; ?>" height="100">
                      </div>
                    </div> 
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Display Menu</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <select name="main_menu" class="form-control">
                          <option value="Active" <?php if($row->main_menu=="Active"){ echo "selected"; } ?> >Active</option>
                          <option value="Disabled" <?php if($row->main_menu=="Disabled"){ echo "selected"; } ?>>Disabled</option>
                        </select>
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
                </div>
                <div class="row">
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
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Short Description</label>
                      </div> 
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <textarea name="short" class="form-control"><?php echo $row->short_desc; ?></textarea>
                      </div>
                    </div>
                  </div>
                  
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id"> Description</label>
                      </div> 
                      <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <textarea name="description" id="editor" class="form-control"><?php echo $row->description; ?></textarea>
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