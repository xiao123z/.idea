<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="shortcut icon" href="image/LOGO.jpg" type="image/x-icon" />

		<link rel="stylesheet" href="test.css"/>
		<script src="jQuery-1.12.4min.js"></script>
		<script src="test.js"></script>
		<script src="swiper.min.js"></script>
		<link rel="stylesheet" href="swiper.min.css"/>
	</head>
	<body>
		<!-- <iframe src="test1.html" width="100%" height="800px"></iframe>
		 -->
		 <div class="nav" name="#top">
		 				   <?php
		 			session_start (); 
		 			if (isset ( $_SESSION ["code"] )) {//判断code存不存在，如果不存在，说明异常登录 
		 			 ?> 
		 			<span onmouseover="this.style.color='#0000FF'" onmouseout="this.style.color='#fff'" class="header_black" style="margin-left: 20px; color:white;" >欢迎:
		 			<?php
		 			 echo "${_SESSION["username"]}";//显示登录用户名 
		 			 ?>
		 			</span>
		 			<?php
		 			} 
		 			?> 

<a href="logout.php" style="float: right;margin-right: 50px; ">退出登录</a>
<a href="#" class="bj">
	<img src="image/clothes.png" alt="" style="float: right;margin-right: 40px;margin-top: 8px;">
</a>
<div class="pf">
	<a href="#" class="lv"><b style="background: #9BBB59;width: 15px;height: 15px; position: absolute;top: 12px;" ></b><span style="margin-left: 20px;">蔓藤绿</span></a>
<a href="#" class="hei"><b style="background:#3A4759;width: 15px;height: 15px; position: absolute;top: 43px;" ></b><span style="margin-left: 20px;">经典黑</span></a>
<a href="#" class="fen"><b style="background:#F382A0;width: 15px;height: 15px; position: absolute;top: 74px;" ></b><span style="margin-left: 20px;">粉色</span></a>
	<a href="#"  class="chen"><b style="background: #E89237;width: 15px;height: 15px; position: absolute;top: 103px;" ></b><span style="margin-left: 20px;">橙色</span></a>
</div>
		
		 </div>
		 <div id="box">
		 <div class="swiper-container">
		 	<div class="swiper-wrapper">
		 		<div class="swiper-slide"><img src="image/1.jpg" class="img"></div>
		 			<div class="swiper-slide "><img src="image/2.jpg" class="img"></div>
		 			<div class="swiper-slide "><img src="image/3.jpg" class="img"></div>
						<div class="swiper-slide "><img src="image/4.jpg" class="img"></div>
					<div class="swiper-slide "><img src="image/5.jpg" class="img"></div>
					<div class="swiper-slide "><img src="image/6.jpg" class="img"></div>
		 
		 	</div>
		 	<div class="swiper-pagination"></div>
		 </div>
		 	<div class="left">
		 		<div class="menu"><span>操作菜单</span></div>
		 		<ul>
		 			<li  class="menu"><span>添加图书</span></li>
		 			<li  class="menu"><span>管理图书</span></li>
		 			<li  class="menu"><span>添加管理员</span></li>
		 			<li  class="menu"><span>管理管理员</span></li>
		 
		 		</ul>
		 	</div>
		 
		 	<div id="suoye">
		 
		 
		 		<div class="top"><span>图书信息管理系统><a href="#">关于本系统</a></span></div>
		 		<div class="center">
		 			<span>关于本系统</span>
		 			<hr class="hr" /><br>
		 			<p>图书销售管理系统是在线网上销售图书的电子商务平台</p>
		 			<br>
		 
		 		</div>
		 	</div>
		 
		 	<div id="tianjia">
		 
		 
		 		<div class="top"><span>图书信息管理系统><a href="#">添加图书</a></span></div>
		 		<div class="center">
		 			<hr class="hr" />
		 			<div class="center_input">
		 				<label>图书名称</label>&nbsp;<input type="text" /><br>
		 				<label>图书编号</label>&nbsp;<input type="text" />
		 				<br>
		 				<label style="margin-left: 45px;">上传图片</label>&nbsp;<input type="text" /><input type="button" value="上传" style="margin-left: 10px;" />
		 				<br>
		 				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作 者</label>&nbsp;<input type="text" />
		 				<br>
		 				<label>出&nbsp;版&nbsp;社</label>&nbsp;<input type="text" /><br>
		 				<label>图书简介</label>
		 				<textarea style="margin-top:10px;" rows="3" cols="21"></textarea>
		 				<br>
		 				<input type="submit" id="" name="" value="保存" style="padding: 5px;" />
		 			</div>
		 		</div>
		 
		 	</div>
		 	<div id="guanli">
		 
		 		<div class="top"><span>图书信息管理系统><a href="#">管理图书</a></span></div>
		 		<div class="center">
		 			<span>管理图书</span>
		 			<hr class="hr" /><br>
		 			<table border="1" cellspacing="1" cellpadding="20" align="center" style="margin: auto;">
		 				<tr>
		 					<td>选择</td>
		 					<td>图书名称</td>
		 					<td>图书编号</td>
		 					<td>作者</td>
		 					<td>出版社</td>
		 					<td>操作</td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>JSP程序设计</td>
		 					<td>978-7-115-43793-3</td>
		 					<td>贾志城</td>
		 					<td>人民邮电出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>C#程序设计</td>
		 					<td>978-3-205-48766-8</td>
		 					<td>贾志城</td>
		 					<td>机械工业出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>Java程序设计</td>
		 					<td>978-7-615-41043-</td>
		 					<td>贾志城</td>
		 					<td>人民邮电出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>JavaScript脚本语言</td>
		 					<td>978-7-115-51778-</td>
		 					<td>陈赫</td>
		 					<td>清华大学出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>管理信息系统</td>
		 					<td>978-7-125-71763-</td>
		 					<td>张欣</td>
		 					<td>人民邮电出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>C语言程序设计</td>
		 					<td>978-7-185-47560-9</td>
		 					<td>刘程曦</td>
		 					<td>同济大学出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>IT市场营销</td>
		 					<td>978-7-121-41763-1</td>
		 					<td>文露</td>
		 					<td>电子工业出版社</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 
		 			</table>
		 			<br>
		 
		 		</div>
		 	</div>
		 	<div id="tianjiaguanli">
		 
		 
		 		<div class="top"><span>图书信息管理系统><a href="#">添加图书</a></span></div>
		 		<div class="center">
		 			<hr class="hr" />
		 			<div class="center_input">
		 				<label>&nbsp;用&nbsp;户&nbsp;名</label><input type="text" /><br>
		 				<label>&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码&nbsp;</label><input type="text" />
		 				<br>
		 				<label>确认密码</label>&nbsp;<input type="text" />
		 				<br>
		 				<label>电子邮箱</label>&nbsp;<input type="text" />
		 				<br>
		 
		 				<input type="submit" id="" name="" value="保存" style="padding: 5px;" />
		 			</div>
		 		</div>
		 
		 	</div>
		 	<div id="glgly">
		 
		 		<div class="top"><span>图书信息管理系统><a href="#">管理图书</a></span></div>
		 		<div class="center">
		 			<span>管理图书</span>
		 			<hr class="hr" /><br>
		 			<table border="1" cellspacing="1" cellpadding="20" align="center" style="margin: auto;">
		 				<tr>
		 					<td>选择</td>
		 					<td>编号</td>
		 					<td>用户名</td>
		 					<td>密码</td>
		 					<td>添加时间</td>
		 					<td>操作</td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>1001</td>
		 					<td>admin</td>
		 					<td>admin</td>
		 					<td>2019-5-30</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 				<tr>
		 					<td><input type="checkbox" name="" id="" value="" /></td>
		 					<td>1002</td>
		 					<td>123</td>
		 					<td>123</td>
		 					<td>2019-5-30</td>
		 					<td><span>修改</span>&nbsp;<span>删除</span></td>
		 				</tr>
		 
		 
		 			</table>
		 			<br>
		 
		 		</div>
		 	</div>
			<div class="bottom"><span>版权信息</span></div>

		 </div>
		 
		
		 <div id="tob" >
			 
			
				 <div id="topbar1" ><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1449240911&site=qq&menu=yes"><img src="image/qq.png" ></a></div>
				 <div id="topbar" > <a href="#top"><img src="image/up.png" ></a></div>
	
	
</div>
<!-- <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1449240911&site=qq&menu=yes"> -->
	<div class="guanggao">
		
			<img src="image/clock.png" class="clock">
		</div>
		</a>
	</body>
</html>
