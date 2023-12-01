<!--更多装修案例图片-->
<?php require 'conn.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更多视觉旅图</title>
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
<table>
<tr><td height="35"></td></tr></table>
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
			                  <td>当前位置&gt;&gt;视觉旅图</td>
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
						  $pagenums=6;
						  $page=$_GET["page"];
						  $pagestart=($page-1)*$pagenums;
					      $_sql="select * from img";
					      $_result=mysqli_query($conn,$_sql);
					      $nums=mysqli_num_rows($_result);
						  $pages=ceil($nums/$pagenums);
						  $sql3="select * from img  order by date desc limit $pagestart,$pagenums";
						  $result3=mysqli_query($conn,$sql3);
						  
	
$i = 1;
echo '<table>';

while ($rows3 = mysqli_fetch_array($result3)) {
    if ($i % 3 == 1) {
        echo '<tr>';
    }

    echo '<td>';
    echo '<table style="width:100%;  text-align:center; font-size:10px; padding-right:65px; padding-top:30px; padding-left:65px; ">';
    
echo '<tr><td colspan="2"><a href="aldtu.php?id=' . $rows3['id'] . '"><img src="admin/' . $rows3['img'] . '" width="200" height="200"></a></td></tr>';    
    echo '<tr><td colspan="2">' . $rows3['title'] . '</td></tr>';

    $uid = $rows3['hxid'];
    $sql4 = "select classname from class where id=$uid";
    $result4 = mysqli_query($conn, $sql4);
    $rows4 = mysqli_fetch_array($result4);

    echo '<tr><td style="text-align:left;">地区：' . $rows4['classname'] . '</td>';

    $uid = $rows3['fgid'];
    $sql5 = "select classname from class where id=$uid";
    $result5 = mysqli_query($conn, $sql5);
    $rows5 = mysqli_fetch_array($result5);

    echo '<td>风格：' . $rows5['classname'] . '</td></tr>';
    echo '<tr><td style="text-align:left;">时间：' . $rows3['mj'] . '天</td>';
    echo '<td>预算：' . $rows3['jg'] . '元</td></tr>';
    echo '</table>';
    echo '</td>';

    if ($i % 3 == 0) {
        echo '</tr>';
    }

    $i++;
}

if ($i % 3 != 1) { // 最后一行不足三个元素，需要补齐
    echo '<td colspan="' . (3 - ($i - 1) % 3) . '"></td>';
    echo '</tr>';
}

echo '</table>';
?>

					
						  
					</table>
					  <table width="350" height="100" align="center" border="0" cellpadding="0" cellspacing="0" class="zxzx">
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
						  <td><a href="gdzxal1.php?page=<?php echo $pages-1;?>">首页</a></td>
						  <td><a href="gdzxal1.php?page=<?php echo $page-1;?>">上一页</a></td>
						  <?php }
						  if($page==$pages){?>
						  <td>下一页</td>
						  <td>尾页</td>
						  <?php }
							else{?>
						  <td><a href="gdzxal1.php?page=<?php echo $page+1;?>">下一页</a></td>
						  <td><a href="gdzxal1.php?page=<?php echo $pages;?>">尾页</a></td>
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