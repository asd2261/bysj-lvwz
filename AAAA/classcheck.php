<?php require_once('yz.php'); ?>
<?php
   	include("conn.php");
	$id = $_POST["typeid"];
	$classname = $_POST["name"];
if($classname==NULL){
echo"<script>alert('不能为空');location.href='addclass.php';</script>";
}
   else{
    $sql3="select classname from class where classname='{$classname}'";
    $result3=mysqli_query($conn,$sql3);
    $num=mysqli_num_rows($result3);
      if($num!=0){
       echo"<script>alert('分类,内容有重复');location.href='addclass.php';</script>";
      }
       else{
	       if($id=="one"){
		     $sql = "insert into class(uid,typeid,classname) values(0,1,'{$classname}')";
		     $result=mysqli_query($conn,$sql);
	          }
              else{
   		       $sql1="select typeid from class where id='{$id}'";
		       $result1=mysqli_query($conn,$sql1);
		       $rows1 = mysqli_fetch_array($result1);
		       $typeid=$rows1["typeid"]+1;
		       $sql="insert into class(uid,typeid,classname) values ('{$id}','{$typeid}','{$classname}')";
		      $result=mysqli_query($conn,$sql);
                
			}
	          if($result){
	            echo"<script>alert('添加成功');location.href='addclass.php';</script>";
                }
                  else{
		      echo"<script>alert('添加失败');location.href='addclass.php';</script>";
			 
			
                       }
             }
       }	
?>