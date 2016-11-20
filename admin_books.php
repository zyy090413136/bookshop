<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>管理—本子书店</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon" href="images/ico.ico">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		window.location="buyDel.php?id="+$('.alert-close').attr("id")+"&url=admin_books.php";
	});	  
});
</script>
</head>
<body>
<div class="header_top">
	<div class="container">
         <div class="cssmenu">
			<ul>
			    <li class="active">
			    <?php
					$username=$_SESSION['username'];
					if ($username!="admin") echo ('<script>window.location="index.php"</script>');

					if(!isset($username)){
 						echo "<a href='login.php'>登录</a>";
 						$cdt=false;
					}else{
						$sessin_id=file_get_contents('session_id/'.$username);

						if(session_id()!=$sessin_id){
 							unset($_SESSION['username']);
 							echo "<a href=''>您已在别处登录!</a><a href='login.php'>重新登录</a>";
						}else{
 							echo "<a href=''>欢迎您，".$username." </a>";
							echo "<a href='Tlogout.php?pre=admin_books.php'> 注销</a>";
							$cdt=true;
						}
					}
				?>
				</li> 
			</ul>
		 </div>
	</div>
</div>	
<div class="wrap-box"></div>
<div class="header_bottom men_border">
	    <div class="container">
			<div class="col-xs-9 header-bottom-left">
				<div class="col-xs-2 logo">
					<h1><a href="index.php"><span>本子</span>书店</a></h1>
				</div>
				<div class="col-xs-7 menu">
		            <ul class="megamenu skyblue">
				      <li class="active grid">
                      	<li class="grid"><a class="color1" href="admin_news.php">新闻管理</a></li>
				    	<li class="grid"><a class="color2" href="admin_books.php">图书管理</a></li>
					 	<li class="grid"><a class="color3" href="admin_users.php">用户管理</a></li>
					 </li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>		 
<div class="checkout">
  <div class="container">
  <table>
    <tbody>
    	<form method="post" action="Tadmin_books.php">
    		<tr><td width="50px">ID</td><td>书名</td><td>作者</td><td>价格</td><td>图片链接</td></tr>
    <?php
    	$file=fopen("js/bookdata.json","r");
		$str=fread($file,filesize("js/bookdata.json"));
		fclose($file);

		$data=json_decode($str,true);

		
        for($i=0;$i<count($data['books']);++$i){
        	echo '<tr><td>'.$data['books'][$i]["id"].'</td>
        			  <td><input type="text" name="n'.$i.'" value="'.$data['books'][$i]["name"].'"></td>
        			  <td><input type="text" name="a'.$i.'" value="'.$data['books'][$i]["author"].'"></td>
        			  <td><input type="text" name="m'.$i.'" value="'.$data['books'][$i]["much"].'"></td>
        			  <td><input type="text" name="u'.$i.'" value="'.$data['books'][$i]["url"].'"></td></tr>';
        	}
	  ?>
    </tbody>
  </table>
  <br>
   <!--<input type="submit" value="添加（见用户管理）" style="margin:-10px 0 20px 400px;width:150px" onclick="">-->
   <input type="submit" value="修改" style="margin:-10px 0 20px 470px;width:120px">
   </form>
  </div>
</div>      
<div class="footer">
	<div class="container">
	   <div class="footer_top">
		<div class="col-md-3 box_3">
			<h3>联系我们</h3>
			<address class="address">
              <p>江苏省苏州市常熟市<br>东南开发区湖山路99号</p>
              <dl>
                 <dt></dt>
                 <dd>电话:<span>&nbsp; +860512XXXXXXXX</span></dd>
                 <dd>E-mail:&nbsp; <a href="zero@example.com">zero@example.com</a></dd>
              </dl>
           </address>
           <ul class="footer_social">
			  <li><a href=""><i class="qq"> </i> </a></li>
			  <li><a href=""><i class="wx"> </i> </a></li>
			  <li><a href=""><i class="xl"> </i> </a></li>
			  <li><a href=""><i class="tx"> </i> </a></li>
		   </ul>
		</div>
		<div class="col-md-5 box_3">
			<h3>购物流程</h3>
			<p>1.浏览您要购买的商品，点击“加入购物车”，商品会自动添加到购物车里；</p>
			<p>2.如果您需要更改商品数量，需在商品数量框中输入购买数量；</p>
            <p>3.选好商品后点击“去结算”；</p>
            <p>4.详细填写收货人信息、支付方式、发票信息，核对送货清单等信息；</p>
            <p>5.确认无误后点击“提交订单”，生成新订单并显示订单编号；</p>
        </div>
		<div class="col-md-4 box_3">
			<h3>FAQ</h3>
			<ul class="list_1">
				<li><a href="#">货到付款</a></li>
				<li><a href="#">在线支付</a></li>
				<li><a href="#">分期付款</a></li>
				<li><a href="#">邮局汇款</a></li>
				<li><a href="#">公司转账</a></li>
			</ul>
			<ul class="list_1">
				<li><a href="#">售后服务</a></li>
				<li><a href="#">价格保护</a></li>
				<li><a href="#">退款说明</a></li>
				<li><a href="#">退修/退换货</a></li>
				<li><a href="#">取消订单</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="footer_bottom">
			<div class="copy">
                <p>Copyright &copy; 2016.09@Cheung.</p>	
	        </div>
	    </div>
	</div>
</div>
</body>
</html>		