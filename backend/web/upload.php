
<?php

echo $_POST['name'];
$file = $_FILES['file'];//得到传输的数据
//得到文件名称
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg','jpeg','gif','png');  //定义允许上传的类型
//判断文件类型是否被允许上传

if(!in_array($type, $allow_type)){
    //如果不被允许，则直接停止程序运行
    return ;
}
//判断是否是通过HTTP POST上传的
if(!is_uploaded_file($file['tmp_name'])){
   //如果不是通过HTTP POST上传的
   return ;
}
$upload_path = "/var/www/html/newblog/frontend/web/css_assets/images/";  //上传文件的存放路径
//开始移动文件到相应的文件夹
if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
    echo "Successfully!";

    $con =mysqli_connect('localhost', 'root', 'root');
    mysqli_query($con, "set names utf8");  


if (!$con){
	die('Could.....');
}else{
 
    $db = 'yii2';
    mysqli_select_db($con, $db) or die('+++++....');

    $sql = "insert into album(pc_root) values('".$file['name']."')";
    echo $sql;
    
    if (mysqli_query($con, $sql)){
    	echo "5555";
    }
    else echo "123123123";
}

}else{
    echo "Failed!";
}


