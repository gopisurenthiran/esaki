<?php 
		include 'dbc.php';
		$err = array();
		foreach($_GET as $key => $value) {
		$get[$key] = filter($value); //get variables are filtered.
		}
		if ($_POST['submit']=='login')
		{
      
		foreach($_POST as $key => $value) {
		$data[$key] = $value; // post variables are filtered
		}
		$user_email = $data['user_email'];
		$pass = $data['pwd'];
		if (strpos($user_email,'@') === false) {
		$user_cond = "user_name='$user_email'";
		} else {
		$user_cond = "user_email='$user_email'";
		}
		$result =mysqli_query($link,"SELECT `id`,`pwd`,`first_name`,`approved`,`user_level`,`autoid` FROM users_tbl WHERE 
		$user_cond
		AND `banned` = '0'
		") or die (mysqli_error($link)); 

    
		$num = mysqli_num_rows($result);
		if ( $num > 0 ) { 
     
		list($id,$pwd,$first_name,$approved,$user_level,$userid) = mysqli_fetch_row($result);
		if(!$approved) {
		$err[] = "Account not activated. Please check your email for activation code";
		}
		if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
		if(empty($err)){			
		session_start();
		session_regenerate_id (true); //prevent against session fixation attacks.
		$_SESSION['id']= $id;  
		$_SESSION['user_name'] = $first_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['userid'] = $userid;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		$lastacces = date("M-d-Y H:i:s");
		mysqli_query($link,"update users_tbl set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
		mysqli_query($link,"update users_tbl set `last_access`='$lastacces' where id='$id'") or die(mysql_error());
		//set a cookie 
		if(isset($_POST['remember'])){
		setcookie("id", $_SESSION['id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
		setcookie("userid", $_SESSION['userid'], time()+60*60*24*COOKIE_TIME_OUT, "/");
		setcookie("user_level", $_SESSION['user_level'], time()+60*60*24*COOKIE_TIME_OUT, "/");
		setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
		setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
		}
		header("Location: index.php");
		}
		}else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Login. Please try again with correct user email and password.";
		//header("Location: login.php?msg=$msg");
		}
		} else {
		$err[] = "Error - Invalid login. No such user exists";
		}
		}
		?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Esaki Vidyaashram CBSE | Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" 
style="background:url('img/rm373batch15-bg-11.jpg') no-repeat; background-size:cover;"> 
<div class="login-box">
  <!-- /.login-logo --> 
  <div class="login-box-body">
	<center><a href="login.php" style="color:#fff;"><img src="../assets/images/logo.png" alt="LOGO" width = "323px" /></a></center>
  <br>
    <p class="login-box-msg">Sign in to start your session</p>
	<?php include 'display_msg.php'; ?>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" id="submit" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- <a href="forgot.php">I forgot my password</a> --><br>
    <!--<a href="register.html" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
