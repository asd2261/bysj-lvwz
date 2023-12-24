<?php
/**
* Author:sqlgun
* Email:sqlgun@qq.com
* Date: 2011-5-28
* http://hi.baidu.com/sqlgun
*/
//if(!defined('GUY')){
//	exit('getout!');
//}

function echoalert($_info) {
	echo"<script type='text/javascript'>alert('$_info');</script>";
}

function echoalerthistory($_info){
	echo"<script type='text/javascript'>alert('$_info');history.back();</script>;";
}

function tree($_id,$_num){
$_sql="select id,classname from class where uptypeid={$_id}";
$_results=mysqli_query($conn,$_sql);
while($_row=mysqli_fetch_array($_results)){
echo "<option value='".$_row['classname']."'>".str_repeat('　',$_num)."|-{$_row['classname']}</option>";
tree($_row['id'],$_num+1);
}
}

function trees($_id,$_num){
include("conn.php");
$_sql="select id,classname from class where uid={$_id}";
$_results=mysqli_query($conn,$_sql);
while($_row=mysqli_fetch_array($_results)){
echo "<option value='".$_row['id']."'>".str_repeat('　',$_num)."|-{$_row['classname']}</option>";
trees($_row['id'],$_num+1);
}
}

?>