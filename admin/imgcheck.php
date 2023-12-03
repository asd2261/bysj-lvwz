<?php require_once('yz.php'); ?>
<?php
   	include("conn.php");
	$title=$_POST["title"];
	$kj=$_POST["kj"];
	$hx=$_POST["hx"];
	$fg=$_POST["fg"];
	$kj=$_POST["kj"];
	$jq=$_POST["jg"];
	$mj=$_POST["mj"];
	$sjsm=$_POST["sjsm"];
    $rq=$_POST["rq"];
    $files=$_FILES["img"];
if($files["size"]>0 && $files["size"]<4096*4096){
$dir="upload/images/";//保存目录
	$name=$files["name"];//获取上传文件名
	$rand=rand(0,5000);//随机0-5000
	$name=$rand.date("YmdHis").$name;//重命名
	$path=$dir.$name;//组合文完整目录（目录+文件名）
	if(!is_dir($dir)){//如果没有该目录
		mkdir($dir,077,true);//创建目录
	}
	$i=move_uploaded_file($files["tmp_name"],$path);//复制文件上传
	if($i==true){//上传成功添加数据库
     $sql="insert into img(title,hxid,fgid,kjid,img,jg,mj,date,sjsm) values ({$title},{$hx},'{$fg}','{$kj}','{$path}','{$jq}','{$mj}'),'{$rq}','{$sjsm}')";
	$result=mysqli_query($conn,$sql);
		if($result){//结果
		 echo"<script>alert('图片添加成功');location.href='addimages.php';</script>";
		}
		else{
		echo"<script>alert('图片添加失败');location.href='addimages.php';</script>";
		}
	}
	else{
	echo"<script>alert('图片上传失败');location.href='addimages.php';</script>";
	}
}
else{
echo"<script>alert('图片不符合网站要求');location.href='addimages.php';</script>";

}
	
?>