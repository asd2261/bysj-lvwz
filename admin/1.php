<?php
include("conn.php");

$sql="select*from class";
$result=mysqli_query($conn,$sql);

?>
<!doctype html>
<html>
<head>

    <!-- 设置文档字符集为utf-8 -->
    <meta charset="utf-8">

    <!-- 针对IE浏览器使用最新的渲染引擎 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 设置视口，使页面在不同设备上具有一致的显示效果 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- 页面描述信息 -->
    <meta name="description" content="">

    <!-- 页面作者信息 -->
    <meta name="author" content="">

    <!-- 页面标题 -->
    <title>SB Admin 2 - Tables</title>

    <!-- 为模板引入自定义字体 -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- 引入自定义样式 -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- 引入数据表格的自定义样式 -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


<body id="page-top">
    <!-- 页面包装器 -->
    <div class="container-fluid">

        <!-- 数据表格示例 -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- 数据表格标题 -->
                <h6 class="m-0 font-weight-bold text-primary">数据表格示例</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- 数据表格 -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <table>
                    <thead>
                                       <tr>
<th>分类编号id</th><th>分类名称name</th><th>分类级别type</th><th>父类编号uid</th><th>操作</th>
</tr>
                                    </thead
    <?php
	  while ($rows=mysqli_fetch_array($result)){
          $id=$rows["id"];
	  ?>
<tr>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["classname"]; ?></td>
<td><?php echo $rows["typeid"]; ?></td>
<td><?php echo $rows["uid"]; ?></td>
<td><a href="modifyclass.php?id=<?php echo $id?>">编辑</a>&nbsp;&nbsp;<a href="classdelete.php?id=<?php echo $id?>">删除</a></td>
</tr>
<?php
	  }
	  ?>
</table>
                                      
                                        
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>

    
<!-- Bootstrap核心JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- 核心插件JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>





    
</body>
</html>