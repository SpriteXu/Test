<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>	
	
	.navbar-inverse{
		margin-bottom: 0 !important;
	}
     span{
     	display: block;
     	width: 50px;
     	color: orange;

     }
     img{
        
     	width: 300px;
     	height: 200px !important;
     }
	.panel-body{

		background: #87CEFF;
	}
</style>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOL英雄</a>
</nav>


  <div class="panel-body">
   <div class="container-fluid">
   	<div class="row">
    <?php
     include '1.php';  


    		for($i=0;$i<count($arr);$i++){
 		echo'
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

      <img src="'.$arr[$i]["src"].'" alt="...">
       <h3 style="text-align:center">'.$arr[$i]["name"].'</h3>
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">购买</a> <a href="#" class="btn btn-default" role="button">加入购物车</a></p>
      </div>
    </div>
 
</div>';
 	}   

    ?>
</div>
  </div>
 </div>

	
</body>
</html>