<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>本子书店—书香之家</title>
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
		window.location="buyDel.php?id="+$('.alert-close').attr("id")+"&url=index.php";
	});	  
});
</script>
<body>
<div class="header_top">
	<div class="container">
         <div class="cssmenu">
			<ul>
			    <li class="active">
			    <?php
					$username=$_SESSION['username'];

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
							echo "<a href='Tlogout.php?pre=index.php'> 注销</a>";
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
                      	<li class="grid">
                        <a class="color1" href="index.php">文学</a>
                        <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">作品集</a></li>
										<li><a href="list.php">散文随笔</a></li>
										<li><a href="list.php">文学评论与鉴赏</a></li>
										<li><a href="list.php">诗歌词曲</a></li>
										<li><a href="list.php">名家作品及欣赏</a></li>
										<li><a href="list.php">纪实文学</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">文学史</a></li>
										<li><a href="list.php">民间文学</a></li>
										<li><a href="list.php">文学理论</a></li>
										<li><a href="list.php">戏剧与曲艺</a></li>
										<li><a href="list.php">影视文学</a></li>
										<li><a href="list.php">期刊杂志</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《百年孤独》</a></li>
										<li><a href="list.php">《乖,摸摸头》</a></li>
										<li><a href="list.php">《皮囊》</a></li>
										<li><a href="list.php">《目送》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">经济</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">企业经营</a></li>
										<li><a href="list.php">投资理财</a></li>
										<li><a href="list.php">贸易经济</a></li>
										<li><a href="list.php">市场营销</a></li>
										<li><a href="list.php">电子商务</a></li>
										<li><a href="list.php">证券</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">行业经济</a></li>
										<li><a href="list.php">金融体质</a></li>
										<li><a href="list.php">会计审计</a></li>
										<li><a href="list.php">统计学</a></li>
										<li><a href="list.php">管理学</a></li>
										<li><a href="list.php">货币概论</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《谷歌是如何运营的》</a></li>
										<li><a href="list.php">《如何完成比难更难的事》</a></li>
										<li><a href="list.php">《经济学原理》</a></li>
										<li><a href="list.php">《生活、工作与思维的大变革》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li class="grid"><a class="color3" href="#">人文</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">历史</a></li>
										<li><a href="list.php">哲学</a></li>
										<li><a href="list.php">考古</a></li>
										<li><a href="list.php">政治</a></li>
										<li><a href="list.php">军事</a></li>
										<li><a href="list.php">心理学</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">法律</a></li>
										<li><a href="list.php">党政读物</a></li>
										<li><a href="list.php">风俗习惯</a></li>
										<li><a href="list.php">理论</a></li>
										<li><a href="list.php">词典</a></li>
										<li><a href="list.php">四库全书</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《知中·山水》</a></li>
										<li><a href="list.php">《西方的衰落》</a></li>
										<li><a href="list.php">《宫崎市定中国史》</a></li>
										<li><a href="list.php">《鱼羊野史》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li class="grid"><a class="color4" href="#">教育</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">中小学教辅</a></li>
										<li><a href="list.php">高等教育</a></li>
										<li><a href="list.php">资格考试</a></li>
										<li><a href="list.php">外语</a></li>
										<li><a href="list.php">工具书</a></li>
										<li><a href="list.php">励志</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">社会科学</a></li>
										<li><a href="list.php">烹饪</a></li>
										<li><a href="list.php">孕产育儿</a></li>
										<li><a href="list.php">旅游</a></li>
										<li><a href="list.php">时尚</a></li>
										<li><a href="list.php">医学</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《一本书读懂财报》</a></li>
										<li><a href="list.php">《西方美学史》</a></li>
										<li><a href="list.php">《概率论与数理统计》</a></li>
										<li><a href="list.php">《影响力》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
                <li class="grid"><a class="color5" href="#">科技</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">建筑</a></li>
										<li><a href="list.php">农业林业</a></li>
										<li><a href="list.php">电工科技</a></li>
										<li><a href="list.php">金属工艺</a></li>
										<li><a href="list.php">手工艺</a></li>
										<li><a href="list.php">矿业工程</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">汽车与交通运输</a></li>
										<li><a href="list.php">水利工程</a></li>
										<li><a href="list.php">能源与动力工程</a></li>
										<li><a href="list.php">冶金工业</a></li>
										<li><a href="list.php">原子能技术</a></li>
										<li><a href="list.php">化学工业</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《C++ Primer》</a></li>
										<li><a href="list.php">《Java编程思想》</a></li>
										<li><a href="list.php">《Java核心技术》</a></li>
										<li><a href="list.php">《R语言实战》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
                <li class="grid"><a class="color6" href="#">艺术</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">绘画</a></li>
										<li><a href="list.php">书法</a></li>
										<li><a href="list.php">摄影</a></li>
										<li><a href="list.php">音乐</a></li>
										<li><a href="list.php">体育</a></li>
										<li><a href="list.php">舞蹈</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="list.php">动画</a></li>
										<li><a href="list.php">戏剧</a></li>
										<li><a href="list.php">雕塑</a></li>
										<li><a href="list.php">影视</a></li>
										<li><a href="list.php">篆刻</a></li>
										<li><a href="list.php">鉴赏</a></li>
									</ul>	
								</div>							
							</div>
							<div class="hot">
								<div class="h_nav">
									<h4>热销排行</h4>
									<ul>
										<li><a href="list.php">《蒋勋艺术美学》</a></li>
										<li><a href="list.php">《艺术的故事》</a></li>
										<li><a href="list.php">《30天学会绘画》</a></li>
										<li><a href="list.php">《19天》</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
			  </ul> 
			</div>
		</div>
	    <div class="col-xs-3 header-bottom-right">
	       <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <h3>购物车</h3>
						  <div class="shopping_cart">
							  <?php
							    $s=0;
							    $arr=$_SESSION["mycar"];
							  	foreach($arr as $a){
							  		$s=$s+$a["num"]*$a["money"];
							  ?>
							  <div class="cart_box">
							   	 <div class="message">
							   	    <?php echo '<div class="alert-close" id="'.$a["pid"].'"></div>' ?> 
					                <div class="list_img"> <?php echo '<img src="'.$a["url"].'" class="img-responsive" alt=""/>' ?> </div>
								    <div class="list_desc"><h4><a href="#"><?php echo $a["name"]?></a></h4><?php echo $a["num"]?> x<span class="actual">
		                             ￥<?php echo $a["money"]?></span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                           <?php
	                           		}
	                           ?>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">总计 : </div>
	                        	<div class="total_right">￥<?php echo $s ?></div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <?php 
							  		if ($cdt) echo '<div class="login_button"><a href="checkout.php">结账</a></div>';
							  			else  echo '<div class="login_button"><a href="login.php">登录</a></div>';
							  ?>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
					 </li>
		      </ul>
              <div class="search">	  
				<input type="text" name="s" class="textbox" value="搜索" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		     </div>
             <div class="clearfix"></div>
          </div>
        <div class="clearfix"></div>
	 </div>
</div>
<div class="banner">
	<div class="container">
		<div class="banner_desc">
			<h1>弘扬古典文化 传播古典艺术</h1>
			<h2>一波古典风暴已经出现</h2>
			<div class="button">
			      <a href="single.php?id=1" class="hvr-shutter-out-horizontal">立即 购买</a>
			    </div>
		</div>
	</div>
</div>
<div class="content_top">
	<h3 class="m_1">新 书 来 袭</h3>
	<div class="container">
	   <div class="box_1">
	       <div class="col-md-7">
			    <div class="section group">
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder">
		                         <div class="product-img">
		                            <a href="single.php?id=12">
		                                <img width="225" height="265" src="images/pic1.jpg" class="img-responsive"  alt="item4">		                            </a>
		                            <a href="" class="button "></a>		                         </div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <div><a href="single.php?id=12" rel="tag">漫画</a></div>
		                            <h3><a href="single.php?id=12">SQ从你的名字开始</a></h3>
		                            <span><span class="amount">￥35.90</span></span>
		                    </div>
						</div>
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder">
		                         <div class="product-img">
		                            <a href="single.php?id=13">
		                                <img width="225" height="265" src="images/pic2.jpg" class="img-responsive"  alt="item4">		                            </a>
		                            <a href="" class="button "></a>		                         </div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <div><a href="single.php?id=13" rel="tag">小说</a></div>
		                            <h3><a href="single.php?id=13">我还是想你，妈妈</a></h3>
		                            <span><span class="amount">￥26.00</span></span>
		                    </div>
						</div>
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder">
		                         <div class="product-img">
		                            <a href="single.php?id=14">
		                                <img width="225" height="265" src="images/pic3.jpg" class="img-responsive"  alt="item4">		                            </a>
		                            <a href="" class="button "></a>		                         </div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <div><a href="single.php?id=14" rel="tag">小说</a></div>
		                            <h3><a href="single.php?id=14">生活与命运</a></h3>
		                            <span><span class="amount">￥83.70</span></span>
		                    </div>
						</div>
						<div class="clearfix"></div> 
				</div>
		</div>
		<div class="col-md-5 row_3">
			<div class="about-block-content">
		       <div class="border-add"></div>
				<h4>the news of book</h4>
				<p id="news1"></p>
				<p id="news2"></p>
				<p id="news3"></p>
				<p id="news4"></p>
				<p id="news5"></p>
				<p id="news6"></p>
				<p id="news7"></p>
				<p id="news8"></p>
				<p id="news9"></p>
				<p id="news10"></p>
			   </div>
				
	    </div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="content_bottom">
<div class="container">
	<h2 class="m_3">热 销 图 书</h2>
	<div class="grid_1">
		<div class="col-md-6 blog_1">
			<div class="item-inner"> 
				<a href="single.php?id=18">
				<img src="images/pic7.jpg" class="img-responsive" alt=""/></a>																	
					<div class="date-comments">
						<div class="time"><span class="date"><span class="word1">15</span> <span class="word2">十月</span> </span></div>											 
						<div class="comments">
						<span><span class="word1">5,689</span>
						<span class="word2">销量</span></span>
						</div>
					 </div>
			</div>   
		</div>
		<div class="col-md-6 row_2">
			<div class="item-inner"> 
				<a href="single.php?id=19">
				<img src="images/pic8.jpg" class="img-responsive" alt=""/></a>															
					<div class="date-comments">
						<div class="time"><span class="date"><span class="word1">15</span> <span class="word2">十月</span> </span></div>											 
						<div class="comments">
						<span><span class="word1">5,183</span>
						<span class="word2">销量</span></span>
						</div>
					 </div>
			</div>   
	    </div>
		<div class="clearfix"></div>
	</div>
</div>	
</div>
<div class="content_bottom-grid">
	<div class="col-md-6 row_4"></div>
	 <div class="col-md-6">
		<div class="row_5">
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder1">
		                        <a href="single.php?id=15"><img src="images/pic4.jpg" class="img-responsive" alt=""/></a>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <h3><a href="single.php?id=15">自控力</a></h3>
		                            <span><span class="amount">￥22.70</span></span>
		                    </div>
						</div>
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder1">
		                        <a href="single.php?id=16"><img src="images/pic5.jpg" class="img-responsive" alt=""/></a>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <h3><a href="single.php?id=16">一个人的朝圣</a></h3>
		                            <span><span class="amount">￥18.70</span></span>
		                    </div>
						</div>
						<div class="col_1_of_3 span_1_of_3">
							<div class="shop-holder1">
		                        <a href="single.php?id=17"><img src="images/pic6.jpg" class="img-responsive" alt=""/></a>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <h3><a href="single.php?id=17">岛上书店</a></h3>
		                            <span><span class="amount">￥23.90</span></span>
		                    </div>
						</div>
						<div class="clearfix"></div> 
					</div>
	</div>
	<div class="clearfix"> </div>
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
<script type="text/javascript" src="js/news.js"></script>
</html>		