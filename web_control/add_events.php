<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
   $page = 'Events';
   if(isset($_GET['gid'])){
    $gid = $_GET['gid'];
    mysqli_query($link,"delete from event_gallery where id='$gid'");

   }
  if(isset($_POST['s1'])){
    if($_POST['s1']=="Save"){

      $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $title = mysqli_real_escape_string($link,$_POST['title']);
      $date = $_POST['date'];
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      $home = mysqli_real_escape_string($link,$_POST['home']);
      
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
      if(!empty($upload_picture)){
        if(!in_array($image_properties[mime], $acceptable)){
            $err[] = 'Invalid file type. Only JPG, GIF and PNG types are accepted.';
        }

        if(($_FILES['upload_picture']['size'] >= $maxsize) || ($_FILES["upload_picture"]["size"] == 0)) {
            $err[] = 'File too large. File must be less than 2 megabytes.';
        }
      }


    if(count($err) === 0) {
      

      $insert = mysqli_query($link,"insert into events(autoid,date,sort,status,title,home)values('$autoid','$date','$sort','$status','$title','$home')");
      if($insert){
        $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["upload_picture1"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["upload_picture1"]["name"][$key];
            $file_tmp=$_FILES["upload_picture1"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
              
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["upload_picture1"]["tmp_name"][$key],"uploads/events/".$newFileName);
                    $img = "uploads/events/".$newFileName;
                $insert1 = mysqli_query($link,"insert into event_gallery(event_id,imgurl)values('$autoid','$img')"); 
            }
            else {
                array_push($error,"$file_name, ");
            }
        }
      }

      if($upload_picture != "")
        {
          $secondname=rand(0,10000000000);
            $uploaddir = "uploads/events/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
          mysqli_query($link,"UPDATE `events` SET `imgurl` = '$upload_pic' WHERE autoid ='$autoid'");
        }

      header("location:add_events.php?msg=1");
    }
  }
}
    if($_POST['s1']=="Update"){

      $autoid = mysqli_real_escape_string($link,$_POST['autoid']);
      $title = mysqli_real_escape_string($link,$_POST['title']);
      $date = $_POST['date'];
      $sort = mysqli_real_escape_string($link,$_POST['sort']);
      $home = mysqli_real_escape_string($link,$_POST['home']);
      
      $status = mysqli_real_escape_string($link,$_POST['status']);
      $id = mysqli_real_escape_string($link,$_POST['id']);
      
      
      $update = mysqli_query($link,"update events set date='$date',sort='$sort',status='$status',title='$title',home='$home' where autoid='$autoid'");
     
if($update){
  $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["upload_picture1"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["upload_picture1"]["name"][$key];
            $file_tmp=$_FILES["upload_picture1"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
              
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["upload_picture1"]["tmp_name"][$key],"uploads/events/".$newFileName);
                    $img = "uploads/events/".$newFileName;
                $insert1 = mysqli_query($link,"insert into event_gallery(event_id,imgurl)values('$autoid','$img')"); 
            }
            else {
                array_push($error,"$file_name, ");
            }
        }
}
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
            $uploaddir = "uploads/events/";
            $upload_pic = $uploaddir.$secondname.$upload_picture;     
          copy($_FILES['upload_picture']['tmp_name'], $upload_pic);
          chmod("$upload_pic",0777);
      mysqli_query($link,"UPDATE `events` SET `imgurl` = '$upload_pic' where autoid='$autoid'");
    }
        header("location:add_events.php?pid=$id&msg=2");
  }else{
        header("location:add_events.php?pid=$id&msg=2");
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
                  $sel_rw = mysqli_query($link,"select * from events where id=$id"); 
                  $row = mysqli_fetch_object($sel_rw);

                  $autoid=$row->autoid; 

                }else{

                    list($max) = mysqli_fetch_row(mysqli_query($link,"SELECT MAX(id) AS max FROM `events`"));
    
                    $max=$max+1;
                    $autoid="E-".$max. "";

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
                        <label class="" for="childcategory_id">Event Name</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>">
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="margin-left-50" for="childcategory_id">Date</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                    <input type="date" class="form-control" name="date" value="<?php echo $row->date; ?>">
                  </div>
                </div>
              </div>
           
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="" for="childcategory_id"> Image </label>
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
                        <label class="" for="childcategory_id">Display Home Page</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <select name="home" class="form-control">
                          <option value="Active" <?php if($row->home=="Active"){ echo "selected"; } ?> >Active</option>
                          <option value="Disabled" <?php if($row->home=="Disabled"){ echo "selected"; } ?>>Disabled</option>
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
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                    <div class="form-group">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-pad">
                        <label class="" for="childcategory_id"> Event Gallery </label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-pad">
                        <input type="file" class="form-control" name="upload_picture1[]" multiple>
                      </div>
                    </div> 
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <?php $sel_rw1 = mysqli_query($link,"select * from event_gallery where event_id='$autoid'"); 
                  while($row1 = mysqli_fetch_object($sel_rw1)){ ?>
                    <img src="<?php echo $row1->imgurl; ?>" width="100">
                    <a class="del_btn" href="add_events.php?gid=<?php echo $row1->id; ?>&pid=<?php echo $row->id; ?>"><i class="fa fa-close"></i></a>
                 <?php } ?>
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