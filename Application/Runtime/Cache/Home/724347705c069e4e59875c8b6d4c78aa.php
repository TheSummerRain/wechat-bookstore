<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>微书店主页</title>
	<link rel="stylesheet" href="/Public/mobile/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="/Public/styles/swiper-3.3.0.min.css">
	<link rel="stylesheet" href="/Public/styles/home.css">
</head>

<body>

	<div data-role="page">
		<header data-role="header">
			
		</header>

		<!-- begin main-->
		<main data-role="main" class="ui-content">
			
		</main><!-- // end main -->

		
		    <!-- begin footer-->
    <footer data-role="footer" data-position="fixed">
		<div class="nav-menu" data-role="navbar" data-iconpos="top">  
			<ul>
				<li><a href="/Home/Main/index" <?php if((ACTION_NAME) == "index"): ?>class='ui-btn-active'<?php endif; ?> data-icon="grid">所有商品</a></li>
				<li><a href="/Home/Main/category" <?php if((ACTION_NAME) == "category"): ?>class='ui-btn-active'<?php endif; ?> data-icon="navigation">图书分类</a></li>
				<li><a href="/Home/Main/cart" <?php if((ACTION_NAME) == "cart"): ?>class='ui-btn-active'<?php endif; ?> data-icon="shop">购物车</a></li>
				<li><a href="/Home/Main/user"  <?php if((ACTION_NAME) == "user"): ?>class='ui-btn-active'<?php endif; ?> data-icon="user">用户中心</a></li>
			</ul>  
		</div>
	</footer><!-- // end footer -->

	</div>

	<script src="/Public/scripts/jquery.min.js"></script>
	<script src="/Public/mobile/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>