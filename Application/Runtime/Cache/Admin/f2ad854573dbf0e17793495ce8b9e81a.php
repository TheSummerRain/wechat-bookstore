<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="在线图书销售系统">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{title}——图书销售管理系统</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link href="http://fonts.lug.ustc.edu.cn/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="http://fonts.lug.ustc.edu.cn/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/tp3/Public/styles/material.min.css">
    <link rel="stylesheet" href="/tp3/Public/styles/styles.css">
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--cyan-500">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">{微书店}管理平台</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">输入图书名称...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">关于我们</li>
            <li class="mdl-menu__item">联系方式</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--cyan-500 mdl-color-text--white">
        <header class="demo-drawer-header">
          <img src="/tp3/Public/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Admin [ 超级管理员 ]</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">个人信息</li>
              <li class="mdl-menu__item">注销账户</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--cyan-300 mdl-color-text--white">
          <a class="mdl-navigation__link" href="<?php echo U('Admin/Index/index');?>"><i class="mdl-color-text--white material-icons" role="presentation">home</i>主页</a>
          <a class="mdl-navigation__link" href="<?php echo U('Admin/Index/category');?>"><i class="mdl-color-text--white material-icons" role="presentation">more</i>图书分类</a>
		  <a class="mdl-navigation__link" href="<?php echo U('Admin/Index/book');?>"><i class="mdl-color-text--white material-icons" role="presentation">local_library</i>图书管理</a>
		  <a class="mdl-navigation__link selected" href="<?php echo U('Admin/Index/user');?>"><i class="mdl-color-text--white material-icons" role="presentation">people</i>会员中心</a>
          <a class="mdl-navigation__link" href="<?php echo U('Admin/Index/order');?>"><i class="mdl-color-text--white material-icons" role="presentation">shopping_cart</i>订单管理</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="">&copy;2016 微书店科技</a>
        </nav>
      </div>


      <main class="mdl-layout__content mdl-color--grey-100">

        <!-- start mdl grid -->
        <div class="mdl-cell--11-col mdl-grid" style="margin: 20px auto; ">

			<div class="mdl-cell--8-col mdl-cell--8-col-phone mdl-cell" >
				<span><b>当前位置 > </b> 用户管理 </span>
			</div>
			<div class="mdl-cell--4-col mdl-cell--4-col-phone mdl-cell" style="text-align: right;">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-color--cyan-300 mdl-color-text--white">添加</button>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-color--cyan-300 mdl-color-text--white">删除</button>
			</div>
		</div>

        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-cell--11-col" style="margin: 0 auto;">
			<thead>
			  <tr>
				<th class="mdl-data-table__cell--non-numeric">分类编号</th>
				<th class="mdl-data-table__cell--non-numeric">图书分类名称</th>
				<th class="mdl-data-table__cell--non-numeric">创建时间</th>
				<th class="mdl-data-table__cell--non-numeric">操作</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">计算机/网络 </td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">医学</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">外语</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">历史</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">社会科学</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">哲学/宗教</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">政治/军事 </td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">保健/心理健康</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			    <tr>
				<td class="mdl-data-table__cell--non-numeric">1</td>
				<td class="mdl-data-table__cell--non-numeric">计算机类</td>
				<td class="mdl-data-table__cell--non-numeric">2015-12-12</td>
				<td class="mdl-data-table__cell--non-numeric">
				  <a href="">修改</a>
				  <a href="">删除</a>
				</td>
			  </tr>
			</tbody>
        </table>

		<div class="mdl-cell--11-col" style="margin: 30px auto 30px auto; text-align: center;">
			<button class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">skip_previous</i></button>
			<button class="mdl-button mdl-js-button mdl-button--icon">1</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">2</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">3</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">4</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">5</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">6</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">7</button>
			<button class="mdl-button mdl-js-button mdl-button--icon">8</button>
			<button class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">skip_next</i></button>
		</div>
      </main>
    </div>
    <script src="/tp3/Public/scripts/material.min.js"></script>
  </body>
</html>