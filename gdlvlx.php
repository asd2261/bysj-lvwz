<!DOCTYPE html>
<html lang="en">
<?php require 'conn.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  
    <title>当前位置&gt;&gt;旅游路线</title>
    <style>
        /* 设置卡片为Flexbox布局 */
        .card {
            display: flex;
            flex-direction: column;
            height: auto;
            min-height: 100%;
        }

        /* 卡片内容区域自动填充卡片空间 */
        .card-body {
            flex: 1 1 auto;
            /* 内容区内边距 */
            padding: 30px;
            
            
        }

.zxzx td {
font-size:14px;
font-family:"微软雅黑";
color: #666666;
}
.zxzx td a{
font-size:20px;
text-decoration: none;
color: black;
}
.zxzx td a:hover{
    color: red;
}
  .zxzx1 td {
font-size:14px;
font-family:"微软雅黑";
color: #666666;
}
.zxzx1 td a{
font-size:16px;
text-decoration: none;
color: black;
}
.zxzx1 td a:hover{
    color: red;
}      
        
        
    </style>
</head>

<body>
      <?php require 'banner.php';?>
    
    <div class="container mt-5">
        <div class="d-flex align-items-center">
            <h5 title="单击 即可返回首页 ！！">
                <img src="images/zxtb.fw.png" width="28" height="25" alt="">&nbsp; &nbsp;
                <a href="index.php" class="ml-auto" style="color: #000; text-decoration: none;"
                    onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">当前位置
                &gt;&gt;旅游路线
            </a></h5>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body text-center">
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
						  <td style="text-align: left !important; padding-left: 25px; padding-top: 7px; padding-bottom: 7px;"><a href="xqlylx.php?id=<?php echo $rows3['id']?>"><?php  echo $rows3["title"]; ?></a></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    
     <table width="1400" border="0" cellspacing="0" cellpadding="0">
		  <tbody>
		    <tr>
		      <td height="60">&nbsp;</td>
	        </tr>
	      </tbody>
	    </table> 

    <?php require 'footer.php';?>
</body>

</html>
