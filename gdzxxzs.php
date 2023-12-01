<!--更多装修小知识-->
<?php require 'conn.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>旅游路线</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/tpqh.css" rel="stylesheet" type="text/css">
	<script>
    var imgIndex = 0;
    var imgDivArr = document.getElementsByClassName("imgdiv");
    var dotArr = document.getElementsByClassName("dot");
    /**
     *  播放图片
     *  参数r：是否正放，若为true，正放。若为false，倒放
     */
    function picplay(r) {
        for (let i = 0; i < imgDivArr.length; i++) {
            imgDivArr[i].style.display = "none";
            dotArr[i].className = "dot";
        }
        if (r) {
            imgIndex++;
            imgIndex = (imgIndex >= imgDivArr.length) ? 0 : imgIndex;
        } else {
            imgIndex--;
            imgIndex = (imgIndex < 0) ? imgDivArr.length - 1 : imgIndex;
        }
        imgDivArr[imgIndex].style.display = "block";
        dotArr[imgIndex].className = "dot active";
    }
    setInterval(picplay, 3000, true);

</script>
</head>

<body>
<?php include("header1.php");?>
	<table><tr><td height="35"></td></tr></table>
	<table width="1400" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td width="350" height="600" valign="top" class="ybk1"> 
            
                <?php include("zdh.php");?>

            
            </td>
			<td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tbody>
			    <tr>
			      <td height="40"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			        <tbody>
			          <tr>
			            <td width="350" height="40" align="center" class="zxbk2"><table width="90%" border="0" cellspacing="0" cellpadding="0">
			              <tbody>
			                <tr>
			                  <td width="30"><img src="images/zxtb.fw.png" width="25" height="22" alt=""/></td>
			                  <td>当前位置&gt;&gt;旅游路线</td>
			                  </tr>
			                </tbody>
			              </table></td>
			            <td align="right" class="zxbk1">&nbsp;</td>
			            </tr>
			          </tbody>
			        </table></td>
		        </tr>
			    <tr>
			      <td valign="top">
					  <table><tr><td height="10"></td></tr></table>
					  <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" class="zxzx">
						  <?php
						  $pagenums=10;
						  $page=$_GET["page"];
						  $pagestart=($page-1)*$pagenums;
					      $_sql="select * from news where uid=4";
					      $_result=mysqli_query($conn,$_sql);
					      $nums=mysqli_num_rows($_result);
						  $pages=ceil($nums/$pagenums);
						  $sql3="select id,title,date from news where uid=4 order by date desc limit $pagestart,$pagenums";
						  $result3=mysqli_query($conn,$sql3);
						  while($rows3=mysqli_fetch_array($result3)){
						  ?>
						  <tr>
						  <td width="20" height="35">&hearts;</td>
						  <td><a href="gdxzschak.php?id=<?php echo $rows3['id']?>"><?php  echo $rows3["title"]; ?></a></td>
						  <td><?php echo $rows3["date"]?></td>
					    </tr>
						  <?php }?>
					</table>
					  <table width="350" align="center" border="0" cellpadding="0" cellspacing="0" class="zxzx">
					  <tr>
						<td height="25"></td>  
					  </tr>
					  <tr>
						<td height="35">第<?php echo $page?>页/共<?php echo $pages?>页</td>  
						<td>共<?php echo $nums?>条资讯</td>
						<?php
						  if($page==1){
						  ?>
						  <td>首页</td>
						  <td>上一页</td>
						  <?php }
						  else{
						  ?>
						  <td><a href="gdzxxzs.php?page=1">首页</a></td>
						  <td><a href="gdzxxzs.php?page=<?php echo $page-1;?>">上一页</a></td>
						  <?php }
						  if($page==$pages){?>
						  <td>下一页</td>
						  <td>尾页</td>
						  <?php }
							else{?>
						  <td><a href="gdzxxzs.php?page=<?php echo $page+1;?>">下一页</a></td>
						  <td><a href="gdzxxzs.php?page=<?php echo $pages;?>">尾页</a></td>
						  <?php }?>
					  </tr>
					  </table>
				  </td>
		        </tr>
		      </tbody>
		    </table></td>
		</tr>
	</table>
	<?php include("bottom.php");?>
</body>
</html>