<?php
    session_start();
    $yzm=''; //验证码
    $image=imagecreatetruecolor(100,30);//创建新的真彩色图像
    $bgcolor=imagecolorallocate($image,0xFF,0xFF,0xFF); //白色背景
    imagefill($image,0,0,$bgcolor); //用白色背景填充图片
    //产生验证码的内容
    for($i=0;$i<4;$i++) {
        $fontsize=12; //字体大小
        $fontcolor=imagecolorallocate($image,0x00,0x00,0x00); //字体颜色-黑色
        $data='vw234fg89tus5xnhbkmjpqra7cde6y'; //内容字典
        $fontcontent=substr($data,rand(0,strlen($data)-1),1); //产生验证码内容
        $yzm.=$fontcontent;
        $x=($i*100/4)+rand(5,8); //x坐标
        $y=8; //y坐标
        imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor); //输出验证码的内容
    }
    $_SESSION["yzm"]=$yzm;
    //增加干扰点
    for($i=0;$i<200;$i++) {
        $pointcolor=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
        imagesetpixel($image,rand(0,200),rand(0,60),$pointcolor);
    }
    //增加干扰线
    for($i=0;$i<3;$i++) {
        $linecolor=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
        imageline($image,rand(0,100),rand(0,30),rand(0,100),rand(0,30),$linecolor);
    }
    header('Content-Type:image/png'); //发送原生HTTP头
    imagepng($image); //以png格式显示图片
    imagedestroy($image); //销毁图像
?>