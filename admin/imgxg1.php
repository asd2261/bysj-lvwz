<?php

include("conn.php");

$select = mysqli_select_db($conn, "img");
$title = $_POST["title"];
$hx = $_POST["hx"];
$fg = $_POST["fg"];
$kj = $_POST["kj"];
$jg = $_POST["jg"];
$mj = $_POST["mj"];
$date = $_POST["rq"];
$sjsm = $_POST["sjsm"];
$id = $_GET["id"];

$files = $_FILES["img"];

if ($files['name']=='') {
    // 为空，不修改图片，使用之前默认的图片
    $query = "update img set hxid='{$hx}',fgid='{$fg}',kjid='{$kj}',title='{$title}',jg='{$jg}',mj='{$mj}',date='{$date}',sjsm='{$sjsm}' where id={$id}";
	$result=mysqli_query($conn,$query);
		if($result){
			echo"<script>alert('成功');location.href='imglook.php?page=1';</script>";
		}
		else{
			echo"<script>alert('kong失败');location.href='modifyimg.php?page=1';</script>";
		}
} 

else {
    // 不为空，使用新上传的图片进行修改
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
    
            $query = "update img set hxid='{$hx}',fgid='{$fg}',kjid='{$kj}',title='{$title}',jg='{$jg}',mj='{$mj}',img='{$path}',date='{$date}',sjsm='{$sjsm}' where id={$id}";
			$result=mysqli_query($conn,$query);
		if($result){
			echo"<script>alert('成功');location.href='imglook.php?page=1';</script>";
		}
		else{
			echo"<script>alert('失败');location.href='modifyimg.php?page=1';</script>";
		}
			
		} 
		else {
            echo "<script>alert('图片上传失败');location.href='addimages.php';</script>";
        }
    } else {
        echo "<script>alert('图片不符合网站要求');location.href='addimages.php';</script>";
    }
}

?>