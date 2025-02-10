<?php
function insert_log($user_id,$action,$action_id){
global $ip_address, $browser, $created_by;	
list($max_id) = mysqli_fetch_row(mysqli_query($link,"select max(id) as count from `log_tbl`"));
$max_id=$max_id+1;
$autoid="log-".$max_id;
$created_by = $_SESSION['userid'];
$description = "$action_id $action";
mysqli_query($link,"INSERT INTO `log_tbl` (`id`, `autoid`, `user_id`, `description`, `date`, `ip_address`, `browser`, `created_by`, `approved_by`) VALUES ('$id', '$autoid', '$user_id', '$description', NOW(), '$ip_address', '$browser', '$created_by', '')");
}
?>