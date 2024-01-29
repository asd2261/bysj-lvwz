<?php require_once('yz.php'); ?>
<?php
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	date_default_timezone_set("PRC");
	$title=$_POST["title"];
	$hxid=$_POST["hx"];
	$fgid=$_POST["fg"];
	$kjid=$_POST["kj"];
	$jgid=$_POST["jg"];
	$mjid=$_POST["mj"];
	$sjsm=$_POST["sjsm"];
	$rq=$_POST["rq"];
	$file=$_FILES["img"];
	if($file["size"]>0 && $file["size"]<4096*4096){
		$dir="upload/images/";
		$name=$file["name"];
		$rand=rand(0,5000);
		$name=$rand.date("YmdHis").$name;
		$path=$dir.$name;
		if(!is_dir($dir)){
			mkdir($dir,0777,true);
		}
		$i=move_uploaded_file($file["tmp_name"],$path);
		if($i==true){
			$insert="insert into img(title,hxid,fgid,kjid,img,jg,mj,date,sjsm) values('$title',$hxid,$fgid,$kjid,'$path',$jgid,$mjid,'$rq','$sjsm')";
			$result=mysqli_query($conn,$insert);
			if($result){
				echo "<script>alert('效果图添加成功！'); window.location='addimages.php';</script>";
			}
			else
			{
				echo "<script>alert('效果图添加失败！'); window.location='addimages.php';</script>";
			}
		}
		else{
			echo "<script>alert('图片上传失败！'); window.location='addimages.php';</script>";
		}
	}
	else{
		echo "<script>alert('图片大小不符合网站要求！'); window.location='addimages.php';</script>";
	}
	?>
</body>
</html>