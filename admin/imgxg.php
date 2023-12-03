<?php require_once('yz.php'); ?>
<!doctype html>

<?php
include"conn.php";
?>

<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	$select=mysqli_select_db($conn,"img");
        $title=$_POST["title"];
        $hx=$_POST["hx"];
        $fg=$_POST["fg"];
        $kj=$_POST["kj"];
        $jg=$_POST["jg"];
        $mj=$_POST["mj"];
        $date=$_POST["rq"];
        $sjsm=$_POST["sjsm"];
        $id=$_GET["id"];
    
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
        
    $sql="select * from class  where classname='{$hx}'";
	$result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    $hxid=$rows['id'];
     $sql1="select * from class  where classname='{$fg}'";
	$result1=mysqli_query($conn,$sql1);
    $rows1=mysqli_fetch_array($result1);
    $fgid=$rows1['id'];
    $sql2="select * from class  where classname='{$kj}'";
	$result2=mysqli_query($conn,$sql2);
    $rows2=mysqli_fetch_array($result2);
    $kjid=$rows2['id'];
    
	$query="update img set hxid='{$hxid}',fgid='{$fgid}',kjid='{$kjid}',title='{$title}',jg='{$jg}',mj='{$mj}',img='{$path}',date='{$date}',sjsm='{$sjsm}'where id={$id}";
		$result=mysqli_query($conn,$query);
		if($result){
			echo"<script>alert('成功');location.href='imglook.php?page=1';</script>";
		}
		else{
			echo"<script>alert('失败');location.href='modifyimg.php?page=1';</script>";
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
</body>
</html>