<?php 
include 'dbc.php'; 
page_protect(); 
$created_by = $_SESSION['userid'];
$approved_by = "";
?>
<?php
if($_POST['submit'] == "Change Password"){
	$user = $_SESSION['userid'];
	$password = $_POST['password'];
	$retype_password = $_POST['retype_password'];
	//$password = GenPwd();
	if($password != ""){
		if($password == $retype_password){
				$hash = PwdHash($password);

				$query = mysqli_query($link,"update users_tbl set pwd='$hash' where autoid='$user'");

        if($query){
          $msg[]="Password reset done successfully!";
        }else{
          $err[]="Failed!";
        }
		}
	}
	
}
?>
<?php include 'header.php'; ?>
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
        Change Password
        <small>Password Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#" class="active">Change Password</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<div class="col-md-12">
	<?php
	foreach($err as $err_msg){
	?>
	<div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-ban"></i> Alert!</h4>
       <?php echo $err_msg; ?>
    </div>
	<?php } ?>
	<?php
	foreach($msg as $new_msg){
	?>
	<div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-check"></i> Alert!</h4>
       <?php echo $new_msg; ?>
    </div>
    <?php } ?>          
</div>
<?php
//$userid = mysqli_real_escape_string($link,$_GET['userid']);
?>
<div class="box-body">
								<div class="col-md-12">
								
									<form class="form-horizontal tabular-form" action="" method="post">
									<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>">
										<div class="form-group  bootstro" data-bootstro-title='Password' data-bootstro-content="Keyin Password" data-bootstro-width="400px" data-bootstro-placement='bottom' data-bootstro-step='4'>
											<label for="form-password" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-8 tabular-border">
												<input type="password" class="form-control" name="password" id="form-password" placeholder="Password">
											</div>
										</div>
										
										
										<div class="form-group bootstro" data-bootstro-title='Confirm Password' data-bootstro-content="Keyin Confirm Password" data-bootstro-width="400px" data-bootstro-placement='bottom' data-bootstro-step='5'>
											<label for="form-confirmpass" class="col-sm-2 control-label">Confirm Password</label>
											<div class="col-sm-8 tabular-border">
												<input type="password" class="form-control" name="retype_password" id="form-confirmpass" placeholder="Password">
											</div>
										</div>
									
                            
                            <center><input type="submit" name="submit" id="submit" value="Change Password" class="btn btn-primary btn-raised bootstro" data-bootstro-title='Change Password' data-bootstro-content="Click this button to Change Password" data-bootstro-width="400px" data-bootstro-placement='bottom' data-bootstro-step='6'></center>
                            
                        
										
									</form>	
								</div>
							</div>
						
</div>
          <!-- /.box -->
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'footer.php'; ?>