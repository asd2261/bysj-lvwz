<?php
// 允许上传的图片类型
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

// 指定上传文件夹
$uploadFolder = 'uploads/';

// 生成唯一的文件名
$filename = uniqid() . '_' . $_FILES['upload']['name'];

// 获取文件后缀
$fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

// 检查文件类型是否允许
if (in_array(strtolower($fileExtension), $allowedExtensions)) {
    // 拼接文件保存路径
    $filePath = $uploadFolder . $filename;

    // 移动上传的文件到指定目录
    move_uploaded_file($_FILES['upload']['tmp_name'], $filePath);

    // 返回文件路径，CKEditor 将使用此路径显示图片
    echo json_encode(['uploaded' => true, 'url' => $filePath]);
} else {
    echo json_encode(['uploaded' => false, 'error' => 'Invalid file type.']);
}
?>
