<?php
require('../include/init.php');
$conn = mysql_connect("localhost","root","") or die("error");
  
  mysql_select_db("cssa",$conn);
  mysql_query("set names utf8;");//设置编码
 $sql="SELECT * FROM `member` WHERE 1 LIMIT 0 , 300";//获取前300个
 $list=mysql_query($sql,$conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CSSA-成员管理系统后台-V0.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
<div class="container-narrow">
<hr>
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">成员管理</a></li>
          <li><a href="#">活动管理</a></li>
          <li><a href="#">内部管理</a></li>
        </ul>
          <h3 class="muted"><img src="http://sjucssa.com/bbs/static/image/common/logo.png">成员管理系统后台</h3>
        <hr>
      </div>
      <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">常规搜索(关闭)</a></li>
    <li><a href="#tab2" data-toggle="tab">快速搜索</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p> <form class="form-search" action="#" method="post" >
  <div class="input-append">
    <input type="text" class="span2 search-query" name="name">
    <button type="submit" class="btn" name="name">名字</button>
     <input type="text" class="span2 search-query" name="gender">
    <button type="submit" class="btn" name="gender">性别</button>
     <input type="text" class="span2 search-query" name="major">
    <button type="submit" class="btn" name="major" >专业</button>
    <input type="text" class="span2 search-query"  name="email">
    <button type="submit" class="btn" name="email">邮箱</button>
     <input type="text" class="span2 search-query" name="phone">
    <button type="submit" class="btn" name="phone">电话</button>
  </div>
</form></p>
    </div>
    <div class="tab-pane" id="tab2">
    
  <p> 按键Ctrl+F 可以快速查看</p>
  </div>
</form></p>
    </div>
  </div>

<hr>
<table class="table table-bordered">
<tr class="info">
    <td>ID</td>
    <td>名字</td>
    <td>性别</td>
    <td>专业</td>
    <td>电话</td>
    <td>邮箱</td>
  </tr>
  <?php 
   while($row = mysql_fetch_array($list))
 {
	 if($row["id"]%2 !=0 )
	 {?>
  <tr class="error">
   <td><a href="memberbyid.php?id=<?=$row["id"]?>" target="_blank"><?=$row["id"]?></a></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["gender"]?></td>
    <td><?=$row["major"]?></td>
    <td><?=$row["phone"]?></td>
    <td><?=$row["email"]?></td>
  </tr>
  <?php
  }
  else
  {
  ?>
    <tr class="warning">
	  <td><a href="memberbyid.php?id=<?=$row["id"]?>" target="_blank"><?=$row["id"]?></a></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["gender"]?></td>
    <td><?=$row["major"]?></td>
    <td><?=$row["phone"]?></td>
    <td><?=$row["email"]?></td>
  </tr>
 <?php
  }}
?>
</table>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../template/js/bootstrap.min.js"></script>
  <script src="../template/js/jquery.js"></script>
  <script src="../template/js/bootstrap-transition.js"></script>
  <script src="../template/js/bootstrap-alert.js"></script>
  <script src="../template/js/bootstrap-modal.js"></script>
  <script src="../template/js/bootstrap-dropdown.js"></script>
  <script src="../template/js/bootstrap-scrollspy.js"></script>
  <script src="../template/js/bootstrap-tab.js"></script>
  <script src="../template/js/bootstrap-tooltip.js"></script>
  <script src="../template/js/bootstrap-popover.js"></script>
  <script src="../template/js/bootstrap-button.js"></script>
  <script src="../template/js/bootstrap-collapse.js"></script>
  <script src="../template/js/bootstrap-carousel.js"></script>
  <script src="../template/js/bootstrap-typeahead.js"></script>
  </body>
</html>