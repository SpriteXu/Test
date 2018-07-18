<?php
//超全局变量$_FILES同$_GET,$_POST一样都是二维关系型数组
//print_r($_FILES);
// Array ( [lol_hero] =>
//      Array(
//      [name] => 1.html
//      [type] => text/html
//      [tmp_name] => C:\Users\xl\AppData\Local\Temp\php4FBE.tmp
//      [error] => 0 [size] => 1865 ) )
//      上传的文件都是临时文件（.tmp）的储存在空间中，防止用户破坏服务器，副本文件会在脚本结束时消失
//      可以用sleep(time)；方法让php在几秒后执行完毕
//      需要文件上传后转为长期的文件\
//
//
print_r($_FILES);


move_uploaded_file($_FILES["lol_hero"]["tmp_name"],'./file/'.$_FILES["lol_hero"]["name"]);//第一个参数是临时文件;



 ?>
