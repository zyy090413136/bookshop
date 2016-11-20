<?php
	session_start();

	$nnn=$_GET["id"];

	$file=fopen("js/bookdata.json","r");
	$str=fread($file,filesize("js/bookdata.json"));
	fclose($file);

	$data=json_decode($str,true);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>无声告白—本子书店</title>
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
		window.location="buyDel.php?id="+$('.alert-close').attr("id")+"&url=single.php";
	});	  
});
</script>

<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.easydropdown.js"></script>
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true
				});

			});
</script>
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
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
							echo "<a href='Tlogout.php?pre=single.php'> 注销</a>";
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
							  		$s=$s+$a["money"];
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
<div class="single_top">
	 <div class="container"> 
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<img class="etalage_thumb_image" src="images/s1.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/s1.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/s2.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="images/s2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/s3.jpg" class="img-responsive"  />
                                <img class="etalage_source_image" src="images/s3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/s4.jpg" class="img-responsive"  />
                              	<img class="etalage_source_image" src="images/s4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<ul class="back">
                	  <li><i class="back_arrow"> </i>返回 <a href="index.php">上一页</a></li>
                    </ul>
					<?php echo "<h1>无声告白".$data['books'][$nnn]["name"]."</h1>" ?>
                    <ul class="price_single">
                      <?php echo '<li class="head"><h2>￥'.24.20.'</h2></li>' ?>
					  <li class="head_desc"><a href="#">723 热点投票	</a><img src="images/review.png" alt=""/></li>
					  <div class="clearfix"></div>
					</ul>
                    <p>伍绮诗 (作者), 孙璐 (译者)</p>
                    <br>
					<p>《无声告白》内容简介：莉迪亚死了，可他们还不知道。
莉迪亚是家中老二，李先生和李太太的掌上明珠，她遗传了母亲的蓝眼睛和父亲的黑头发。父母深信，莉迪亚一定能实现他们无法实现的梦想。莉迪亚的尸体被发现后，她的父亲内疚不已，母亲则一心报复。莉迪亚的哥哥觉得，隔壁的坏小子铁定脱不了关系，只有莉迪亚的妹妹看得一清二楚，而且，她很可能是唯一知道真相的人……</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">平装</option>	
							<option value="1">精装</option>
							<option value="2">Kindle电子书</option>
			             </select>
			            </div>
						 <div class="clearfix"></div>
			         </div>
			         <a href="#" class="btn1 btn2 btn-primary1"><span>添加到购物车</span></a>
				</div>
          	    <div class="clearfix"></div>
          	   </div>
			 <ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images/product_arrow.png">基本信息</a>
                        <ul>
                            <li>出版社: 江苏凤凰文艺出版社; 第1版 (2015年7月1日)</li>
                            <li>外文书名: Everything I Never Told You</li>
                            <li>语种： 简体中文</li>
                            <li>开本: 32</li>
                            <li>ISBN: 9787539982830, 7539982837</li>
                            <li>条形码: 9787539982830</li>
                            <li>商品尺寸: 21.2 x 15 x 1.8 cm</li>
                            <li>商品重量: 381 g</li>
                            <li>品牌: 上海读客</li>
                            <li>ASIN: B00ZHXYT7U</li>
                        </ul>
				</li>
				<li class="item2"><a href="#"><img src="images/product_arrow.png">编辑推荐</a>
					<ul>
					    <li>我们终此一生，就是要摆脱他人的期待，找到真正的自己。征服欧美文坛的华裔作家，凭借处女作夺得2014美国亚马逊年度最佳图书第1名！击败斯蒂芬•金、村上春树等99位大牌作家，横扫欧美所有榜单！“即使我们熟知身边有这类故事，也从来没在美国小说中见过，起码，在伍绮诗之前，没有谁处理过这类故事。这部小说写的是成为“异类”的那种负担与压力，这种负担与压力，通常会摧毁一个人，而不是塑造一个人。”——《纽约时报书评》</li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/product_arrow.png">内容推荐</a>
					<ul>
					        <li>关于爱与失去，以及我们未曾向最亲爱的人说出口的秘密</li>
                            <li>“莉迪亚死了，可他们还不知道。”</li>
                            <li>1977年，生活在美国的华裔五口之家中，莉迪亚是家中老二，是李先生和李太太的掌上明珠，她遗传了母亲的蓝眼睛和父亲的黑头发。她的父母深信，莉迪亚将来一定能实现他们当年无法实现的梦想。</li>
                            <li>莉迪亚的尸体在当地的湖里被发现后，李家过去努力维持的和乐安康便濒临崩溃。她的父亲内疚不已，母亲则一心报复。莉迪亚的哥哥觉得，这件事跟隔壁的坏小子铁定脱不了关系，但所有人都不知道，只有莉迪亚的妹妹看得一清二楚，而且，她很可能是唯一知道真相的人。</li>
                            <li>同在一个屋檐下，你对我的了解有多深？</li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/product_arrow.png">作者简介</a>
					<ul>
					        <li>伍绮诗（Celeste Ng）在美国宾夕法尼亚州和俄亥俄州长大，父母均为科学家的她，是香港移民第二代。在出版《无声告白》前，她已写作多年，小说及散文作品多见于各类文学期刊杂志。</li>
                            <li>《无声告白》是伍绮诗耗时六年写就的第一本长篇小说，糅杂了美国华裔移民、亲子关系、女性身份认同等多重主题，故事编排精妙细致，文笔沉稳内敛，一经出版便广受好评，成为2014年度最具实力且众望所归的黑马，不仅跃升为《纽约时报》畅销书，还获得包括亚马逊网站在内的无数媒体评选出的2014年度最佳图书。</li>
                            <li>伍绮诗如今与家人一起在马塞诸塞州的剑桥生活。</li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images/product_arrow.png">媒体评论</a>
					<ul>
                            <li>即使我们熟知身边有这类故事，也从来没在美国小说中见过，起码，在伍绮诗之前，没有谁处理过这类故事。这部小说写的是成为“异类”的那种负担与压力，这种负担与压力，通常会摧毁一个人，而不是塑造一个人。

——《纽约时报书评》
</li>
                            <li>2014美国亚马逊年度最佳图书第一名——《无声告白》探索了身份危机、人生成就、种族、性别、家庭以及个人道路。并且，这本小说没有任何一处落笔是粗疏的。我唯一担心的是，我对《无声告白》的刻骨崇拜，会导致读者对这本书抱有太高的期待。但这本书就是好得这么极致！深情力透纸背，刺痛你心，用词精准而克制，文风温婉而细腻。

——美国亚马逊编辑推荐语</li>
                            <li>爆发力惊人的处女作,笔触闪烁着散文的美感与精准，观察与洞见则像社会学家一样深刻。伍绮诗的小说从第一页开始就吸引住了读者，我们迫不及待要了解莉迪亚之死背后的故事……而小说最终揭示的真相，振聋发聩。

——《赫芬顿邮报》</li>
                            <li>情节展开极为机智，处处撩动你的情绪……伍绮诗用扣人心弦、精彩得让人拍手叫好的故事，讲述了一个关于性别与种族的严肃主题。这样严肃的主题竟然可以被剖析得如此透彻，而且故事的节奏，竟然还可以越来越快，越来越惊心动魄，直到最后真相大白，好像有阳光铺满房间。

——《奥普拉》</li>
                            <li>伍绮诗这部处女作，令人惊叹地包容了各种复杂情绪，以一种罕见的洞察力，表达了文化与文化之间的冲突，时代与时代之间的冲突，而这种表达，完全是一位精通写作的大师的杰出手笔。伍绮诗值得期待。

——《书目》</li>
                            <li>这部情感真挚、充沛的处女作小说，是以一个年轻女孩的死亡开始的。莉迪亚，生于上世纪七十年代美国的一个混血家庭，被给予无限厚望和父母的憧憬，她不幸的少女生活没有任何一盎司的陈词滥调。伍绮诗的行文，是如此准确和敏锐，她刻画的人物入木三分。

——《出版人周刊》</li>
                            <li>一部温柔的小说处女作……这部小说可能会触发无数的悲伤，关于每个人内心深处的秘密以及一个悲剧是如何影响了一个家族的故事。

——《TIMEOUT 纽约》</li>
                            <li>在这本书中，伍绮诗深入地谱写和揭晓了詹姆斯一家的秘密……这些隐藏已久，安静而具有爆炸性的真相，加之种族和性别等议题的探讨，慢慢地带领读者见识到伍绮诗文字的多愁善感和引人入胜，直至读到最后一页，深深的触动仍在心间回荡。伍绮诗的首部小说，情感复杂，仿佛一股吸引人的强劲水流，拖着你随着急流向前，直到抵达最后的秘密。

——《科克斯书评》</li>
                            <li>异常优秀，非常完整的一部处女作……这个故事令人心痛，伍绮诗非常巧妙地将这部复杂、跨越多个年代小说的线索串联在一起。《无声告白》是一部难得的佳作，独具魅力，她深入写出了这个美国家庭里每个人内心的秘密。读完的时候，仍让人泪流不止。

——《洛杉矶时报》</li>
                            <li>神奇！感人！感情充沛，描述准确！围绕身份焦虑和巨大悲恸，作者出色地、漂亮地展开了故事……本书会和每一个人取得共鸣，只要你曾经向家人撒过哪怕一个微不足道的小谎。

——《波士顿环球报》</li>
					</ul>
				</li>
	 		</ul>
   </div>
   <h3 class="m_2">热 卖 推 荐</h3>
	     <div class="container">
          		<div class="box_hot">
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.php">
			   	          <img src="images/pic6.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.php">岛上书店</a></h4>
				    <p>￥23.90</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.php">
			   	          <img src="images/pic2.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.php">我还是想你，妈妈</a></h4>
				    <p>￥26.00</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.php">
			   	          <img src="images/pic4.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.php">自控力</a></h4>
				    <p>￥22.70</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.php">
			   	          <img src="images/pic5.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.php">一个人的朝圣</a></h4>
				    <p>￥18.70</p>
			        </div>
			        <div class="clearfix"> </div>
          		</div>
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