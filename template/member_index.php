<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
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
        <h3 class="muted">成员管理系统</h3>
        <hr>
      </div>
      <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">常规搜索</a></li>
    <li><a href="#tab2" data-toggle="tab">快速搜索</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p> <form class="form-search" action="member.php" method="post" >
  <div class="input-append">
    <input type="text" class="span2 search-query" name="name">
    <button type="submit" class="btn" >名字</button>
     <input type="text" class="span2 search-query" name="gender">
    <button type="submit" class="btn" >性别</button>
     <input type="text" class="span2 search-query" name="major">
    <button type="submit" class="btn" >专业</button>
    <input type="text" class="span2 search-query"  name="email">
    <button type="submit" class="btn">邮箱</button>
     <input type="text" class="span2 search-query" name="phone">
    <button type="submit" class="btn" >电话</button>
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
  ?>
  <tr class="error">
   <td>1</td>
    <td>Manson</td>
    <td>Male</td>
    <td>Actuarial Science</td>
    <td>9176787827</td>
    <td>xiangyiwei1993@163.com</td>
  </tr>
    <tr class="warning">
	<td>2</td>
    <td>Yuanzhi Huang</td>
    <td>Female</td>
    <td>Risk management</td>
   <td>9176787827</td>
    <td>xiangyiwei1993@163.com</td>
  </tr>
</table>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-transition.js"></script>
  <script src="js/bootstrap-alert.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-scrollspy.js"></script>
  <script src="js/bootstrap-tab.js"></script>
  <script src="js/bootstrap-tooltip.js"></script>
  <script src="js/bootstrap-popover.js"></script>
  <script src="js/bootstrap-button.js"></script>
  <script src="js/bootstrap-collapse.js"></script>
  <script src="js/bootstrap-carousel.js"></script>
  <script src="js/bootstrap-typeahead.js"></script>
  </body>
</html>