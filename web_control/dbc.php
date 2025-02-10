<?php ob_start();
error_reporting (0);
include("db.class.php");
include("browser.php");
// Open the base (construct the object):


//Local Database Details
	// $base="esakvidy_db";
	// $server="localhost";
	// $username="esakvidy_db";
	// $pass="4DpfO%P{*,fJ";

	$base="esakvidy_db";
	$server="localhost";
	$username="root";
	$pass="";



//Connect Database
	$link = new mysqli($server, $username, $pass,$base) or die("Couldn't make connection.");
	

$user_registration = 1;  // set 0 or 1
$sendemail = 1;
$sendsms = 0;

//default details for insert
$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
$ip_address = $_SERVER['REMOTE_ADDR'];
$ua = getBrowser();
$browser = "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];

$host1  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host1);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$dir = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
  $dir .= $parts[$i] . "/";
}
$host = $dir;

$mail_mode = "PHP MAIL"; //PHP MAIL OR SMTP MAIL
$from_admin = "support@".$host;
$date = date("Y-m-d");
$last_access = date("Y-m-d h:m:i");
define("COOKIE_TIME_OUT", 10); //specify cookie timeout in days (default is 10 days)
define('SALT_LENGTH', 9); // salt for password

//define ("ADMIN_NAME", "admin"); // sp

/* Specify user levels */
define ("ADMIN_LEVEL", 5);
define ("EMPLOYEE_LEVEL", 3);
define ("CLIENT_LEVEL", 2);
define ("USER_LEVEL", 1);

/*************** reCAPTCHA KEYS****************/
$publickey = "6LchkM4SAAAAAF1n0zYoHy_Umv1niH1JddGshDzx";
$privatekey = "6LchkM4SAAAAAG7BAPaXEl8C0y8_TF4TpyfSBV3O";


/**** PAGE PROTECT CODE  ********************************
This code protects pages to only logged in users. If users have not logged in then it will redirect to login page.
If you want to add a new page and want to login protect, COPY this from this to END marker.
Remember this code must be placed on very top of any html or php page.
********************************************************/

function page_protect() {
  
session_start();

global $link; 
  
/* Secure against Session Hijacking by checking user agent */
if (isset($_SESSION['HTTP_USER_AGENT']))
{
    if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT']))
    {
        logout();
        exit;
    }
}

// before we allow sessions, we need to check authentication key - ckey and ctime stored in database

/* If session not set, check for cookies set by Remember me */
if (!isset($_SESSION['id']) && !isset($_SESSION['user_name']) ) 
{
	if(isset($_COOKIE['id']) && isset($_COOKIE['user_key'])){
	/* we double check cookie expiry time against stored in database */
	
	$cookie_id  = filter($_COOKIE['id']);
	$rs_ctime = mysqli_query($link,"select `ckey`,`ctime` from `users_tbl` where `id` ='$cookie_id'") or die(mysql_error());
	list($ckey,$ctime) = mysqli_fetch_row($rs_ctime);
	// coookie expiry
	if( (time() - $ctime) > 60*60*24*COOKIE_TIME_OUT) {

		logout();
		}
/* Security check with untrusted cookies - dont trust value stored in cookie. 		
/* We also do authentication check of the `ckey` stored in cookie matches that stored in database during login*/

	 if( !empty($ckey) && is_numeric($_COOKIE['id']) && isUserID($_COOKIE['user_name']) && $_COOKIE['user_key'] == sha1($ckey)  ) {
	 	  session_regenerate_id(); //against session fixation attacks.
	
		  $_SESSION['id'] = $_COOKIE['id'];
		  $_SESSION['user_name'] = $_COOKIE['user_name'];
		  $_SESSION['user_level'] = $_COOKIE['user_level'];
		  $_SESSION['userid'] = $_COOKIE['userid'];
		  $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		  
	   } else {
	   logout();
	   }

  } else {
	header("Location: login.php");
	exit();
	}
}

}
function filter($data) {
	$data = trim(htmlentities(strip_tags($data)));
	global $link;
	if (get_magic_quotes_gpc())
		$data = stripslashes($data);
	
	$data = mysqli_real_escape_string($link,$data);
	
	return $data;
}

function display_text($data){
	$data = ucfirst($data);
	return $data;
}

function EncodeURL($url)
{
$new = strtolower(ereg_replace(' ','_',$url));
return($new);
}

function DecodeURL($url)
{
$new = ucwords(ereg_replace('_',' ',$url));
return($new);
}

function ChopStr($str, $len) 
{
    if (strlen($str) < $len)
        return $str;

    $str = substr($str,0,$len);
    if ($spc_pos = strrpos($str," "))
            $str = substr($str,0,$spc_pos);

    return $str . "...";
}	

function isEmail($email){
  return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}

function isUserID($username)
{
	if (preg_match('/^[a-z\d_]{5,20}$/i', $username)) {
		return true;
	} else {
		return false;
	}
 }	
 
function isURL($url) 
{
	if (preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url)) {
		return true;
	} else {
		return false;
	}
} 

function checkPwd($x,$y) 
{
if(empty($x) || empty($y) ) { return false; }
if (strlen($x) < 4 || strlen($y) < 4) { return false; }

if (strcmp($x,$y) != 0) {
 return false;
 } 
return true;
}

function GenPwd($length = 7)
{
  $password = "";
  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; //no vowels
  
  $i = 0; 
    
  while ($i < $length) { 

    
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
       
    
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }

  }

  return $password;

}

function GenKey($length = 7)
{
  $password = "";
  $possible = "0123456789abcdefghijkmnopqrstuvwxyz"; 
  
  $i = 0; 
    
  while ($i < $length) { 

    
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
       
    
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }

  }

  return $password;

}


function logout()
{

global $link;
session_start();

$user_level = $_SESSION['user_level'];
/************ Delete the sessions****************/
unset($_SESSION['id']);
unset($_SESSION['userid']);
unset($_SESSION['user_name']);
unset($_SESSION['user_level']);
unset($_SESSION['HTTP_USER_AGENT']);

session_unset();
session_destroy(); 

/* Delete the cookies*******************/
setcookie("id", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
setcookie("userid", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
setcookie("user_name", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
setcookie("user_level", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
setcookie("user_key", '', time()-60*60*24*COOKIE_TIME_OUT, "/");


header("location: login.php");

if(isset($_SESSION['id']) || isset($_COOKIE['id'])) {
mysqli_query($link,"update `users_tbl` 
			set `ckey`= '', `ctime`= '' 
			where `id`='$_SESSION[id]' OR  `id` = '$_COOKIE[id]'") or die(mysqli_error($link));
}			

}

// Password and salt generation
function PwdHash($pwd, $salt = null)
{
    if ($salt === null)     {
        $salt = substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
    }
    else     {
        $salt = substr($salt, 0, SALT_LENGTH);
    }
    return $salt . sha1($pwd . $salt);
}

function checkAdmin() {
if($_SESSION['user_level'] == ADMIN_LEVEL) {
return 1;
} else { return 0 ;
}
}

function checkEmployee() {
if($_SESSION['user_level'] == EMPLOYEE_LEVEL) {
return 1;
} else { return 0 ;
}
}

function checkClient() {
if($_SESSION['user_level'] == CLIENT_LEVEL) {
return 1;
} else { return 0 ;
}
}

function checkUser() {

if($_SESSION['user_level'] == USER_LEVEL) {
return 1;
} else { return 0 ;
}
}

function checkadmin_function(){
session_start();

global $link; 

/* Secure against Session Hijacking by checking user agent */
if (isset($_SESSION['HTTP_USER_AGENT']))
{
    if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT']))
    {
        logout();
        exit;
    }
}

// before we allow sessions, we need to check authentication key - ckey and ctime stored in database

/* If session not set, check for cookies set by Remember me */
if (!isset($_SESSION['id']) && !isset($_SESSION['user_name']) ) 
{
	if(isset($_COOKIE['id']) && isset($_COOKIE['user_key'])){
	/* we double check cookie expiry time against stored in database */
	
	$cookie_id  = filter($_COOKIE['id']);
	$rs_ctime = mysqli_query($link,"select `ckey`,`ctime` from `users_tbl` where `id` ='$cookie_id'") or die(mysql_error());
	list($ckey,$ctime) = mysqli_fetch_row($rs_ctime);
	// coookie expiry
	if( (time() - $ctime) > 60*60*24*COOKIE_TIME_OUT) {

		logout();
		}
/* Security check with untrusted cookies - dont trust value stored in cookie. 		
/* We also do authentication check of the `ckey` stored in cookie matches that stored in database during login*/

	 if( !empty($ckey) && is_numeric($_COOKIE['id']) && isUserID($_COOKIE['user_name']) && $_COOKIE['user_key'] == sha1($ckey)  ) {
	 	  session_regenerate_id(); //against session fixation attacks.
	
		  $_SESSION['id'] = $_COOKIE['id'];
		  $_SESSION['user_name'] = $_COOKIE['user_name'];
		  $_SESSION['user_level'] = $_COOKIE['user_level'];
		  $_SESSION['userid'] = $_COOKIE['userid'];
		  $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		  
	   } else {
	   logout();
	   }
	   

  } 
}
}
function getIndianCurrency($number)
{
    //$number = 190908100.25;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  $return = $result . "Rupees  " . $points . " Paise";
  return($return);
}
include 'functions.php';
?>