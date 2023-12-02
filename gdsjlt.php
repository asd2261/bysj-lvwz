<!DOCTYPE html>
<?php require 'conn.php';?>
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

  <title>当前位置&gt;&gt;视觉旅途</title>
    <style>
        .zxzx td {
            font-size: 14px;
            font-family: "微软雅黑";
            color: #666666;
        }

        .zxzx td a {
            font-size: 20px;
            text-decoration: none;
            color: black;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .zxzx td a:hover {
            color: red;
        }

        .zxzx1 td {
            font-size: 14px;
            font-family: "微软雅黑";
            color: #666666;
        }

        .zxzx1 td a {
            font-size: 16px;
            text-decoration: none;
            color: black;
        }

        .zxzx1 td a:hover {
            color: red;
        }
        
        @media only screen and (max-width: 768px) {
            .zxzx td a {
                font-size: 16px;
            }
        }
        .card-body .card-title a {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <?php require 'banner.php';?>
    <div class="container mt-5">
         <h5 title="单击 即可返回首页 ！！">
                <img src="images/zxtb.fw.png" width="28" height="25" alt="">&nbsp; &nbsp;
                <a href="index.php" class="ml-auto" style="color: #000; text-decoration: none;"
                    onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">当前位置&gt;&gt;视觉旅途
            </a></h5>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row">
                            <?php
                            $pagenums = 6;
                            $page = $_GET["page"];
                            $pagestart = ($page - 1) * $pagenums;
                            $_sql = "select * from img";
                            $_result = mysqli_query($conn, $_sql);
                            $nums = mysqli_num_rows($_result);
                            $pages = ceil($nums / $pagenums);
                            $sql3 = "select * from img  order by date desc limit $pagestart,$pagenums";
                            $result3 = mysqli_query($conn, $sql3);

                            $i = 1;
                            while ($rows3 = mysqli_fetch_array($result3)) {
                                echo '<div class="col-md-4">';
                                echo '<div class="card mb-4">';
                                // 将整个卡片内容包裹在 <a> 标签中
                                echo '<a href="sjltdt.php?id=' . $rows3['id'] . '" class="card-link">';
                                echo '<img class="card-img-top" src="admin/' . $rows3['img'] . '" alt="" style="width: 100%; height: 200px; object-fit: cover;">';
                                echo '<div class="card-body">';
                                
                                // 修改标题显示，最多13个字符
                                $trimmedTitle = mb_substr($rows3['title'], 0, 13, 'UTF-8');
                                echo '<h5 class="card-title">' . $trimmedTitle . '</h5>';
                                
                             
                                echo '</div>';
                                echo '</a>'; // 关闭 <a> 标签
                                echo '</div>';
                                echo '</div>';

                                if ($i % 3 == 0) {
                                    echo '</div><div class="row">';
                                }

                                $i++;
                            }
                            ?>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="gdsjlt.php?page=1" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php
                                for ($i = 1; $i <= $pages; $i++) {
                                    echo '<li class="page-item ' . (($page == $i) ? 'active' : '') . '"><a class="page-link" href="gdsjlt.php?page=' . $i . '">' . $i . '</a></li>';
                                }
                                ?>
                                <li class="page-item <?php echo ($page == $pages) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="gdsjlt.php?page=<?php echo $pages; ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php';?>
</body>
</html>
