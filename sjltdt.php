<!DOCTYPE html>
<?php require 'conn.php';?>
<?php
$sql = "SELECT * FROM news WHERE id = 1 ORDER BY date DESC LIMIT 1";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- 引入bootstrap 样式文件 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- 引入字体图标样式 -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- 引入我们自己的首页样式文件 -->
    <link rel="stylesheet" href="css/style.css">

    <title>当前位置&gt;&gt;视觉旅途&gt;&gt;详情</title>

<style>
    /* 设置卡片为Flexbox布局 */
    .card {
        height: auto;
        min-height: 100%;
    }

    /* 卡片内容区域自动填充卡片空间 */
    .card-body {
        /* 内容区内边距 */
        padding: 2rem; /* 调整内边距 */
        margin-bottom: 20px; /* 添加底部边距 */
    }

    /* 图片样式 */
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    /* 文字内容样式 */
    .card-text {
        font-size: 16px;
        line-height: 1.6;
    }
    

    
</style>

</head>

<body>
    <?php require 'banner.php'; ?>

    <div class="container mt-5">
        <div class="d-flex align-items-center">
            <h5 title="单击 即可返回上一页 ！！">
                <img src="images/zxtb.fw.png" width="28" height="25" alt="">&nbsp; &nbsp;
                <a href="gdsjlt.php?page=1" class="ml-auto" style="color: #000; text-decoration: none;"
                    onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">当前位置&gt;&gt;视觉旅途&gt;&gt;详情
                </a>
            </h5>
        </div>

        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body text-center">
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="zxzx">
                            <?php
                            $id = $_GET["id"];
                            $sql3 = "select * from img where id=$id";
                            $result3 = mysqli_query($conn, $sql3);
                            while ($rows3 = mysqli_fetch_array($result3)) {
                            ?>
                            <tr>
                                <tr>
    <td align="center" style="font-size: 20px; padding-bottom: 25px;">
        风景名字:<?php echo $rows3["title"]; ?>&nbsp;
        <?php
        $uid = $rows3['hxid'];
        $sql4 = "select classname from class where id=$uid";
        $result4 = mysqli_query($conn, $sql4);
        $rows4 = mysqli_fetch_array($result4);
        $uid = $rows3['fgid'];
        $sql5 = "select classname from class where id=$uid";
        $result5 = mysqli_query($conn, $sql5);
        $rows5 = mysqli_fetch_array($result5);
        $uid = $rows3['kjid'];
        $sql6 = "select classname from class where id=$uid";
        $result6 = mysqli_query($conn, $sql6);
        $rows6 = mysqli_fetch_array($result6);
        ?>
        &nbsp;地区:<?php echo $rows4["classname"]; ?>&nbsp;
        出行方式:<?php echo $rows5["classname"]; ?>&nbsp;
        季节:<?php echo $rows6["classname"]; ?>&nbsp;
        时长:<?php echo $rows3["mj"]; ?>天
        &nbsp;价格:<?php echo $rows3["jg"]; ?>￥
        &nbsp; 时间:<?php echo $rows3["date"]; ?>
    </td>
</tr>
<tr>
<?php
// 检查 $rows3["sjsm"] 是否包含图片标签
if (preg_match('/<img\s.*?>/', $rows3["sjsm"])) {
    // 提取图片URL
    preg_match('/<img\s.*?src="(.*?)".*?>/', $rows3["sjsm"], $matches);
    $imgUrls = $matches[1];
    // 将图片URL放入数组中
    $images = explode(',', $imgUrls);
    ?>
    <!-- 轮播容器 -->
    <div id="imageCarousel" class="carousel">
        <!-- 默认图片 -->
        <img src="AAAA/<?php echo $rows3['img']; ?>" class="img-fluid" alt="Image">
        <!-- 轮播中的图片 -->
        <?php foreach ($images as $imgUrl) { ?>
            <img src="<?php echo $imgUrl; ?>" class="img-fluid" alt="Image" style="display: none;">
        <?php } ?>
    </div>
    <!-- JavaScript：轮播逻辑 -->
    <script>
    var currentIndex = 0;
    var images = document.querySelectorAll('#imageCarousel .img-fluid');
    setInterval(function() {
        // 隐藏当前图片
        images[currentIndex].style.display = 'none';
        // 计算下一张图片的索引
        currentIndex = (currentIndex + 1) % images.length;
        // 显示下一张图片
        images[currentIndex].style.display = 'block';
    }, 3000); // 每3000毫秒切换一次图片
    </script>
    <?php
} else {
    // 如果不包含图片，则只显示默认图片
    ?>
    <img src="AAAA/<?php echo $rows3['img']; ?>" class="img-fluid" alt="Image">
    <?php
}
?>


</tr>

                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--侧边一键分享-->
       <script type="text/javascript" id="bdshare_js" data="type=slide&img=6&pos=right&uid=39728" src="//www.pc6.com/static/js/bds_s_v2.js?cdnversion=430667"></script>

    <table width="1400" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td height="60">&nbsp;</td>
            </tr>
        </tbody>
    </table>

    <?php require 'footer.php'; ?>

    
</body>

</html>
