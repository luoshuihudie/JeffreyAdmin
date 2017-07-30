<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>
	<meta name="description" content="overview &amp; stats"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
	<!-- page specific plugin styles -->
	<!-- text fonts -->
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/fonts.googleapis.com.css')}}"/>
	<!-- ace styles -->
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style"/>
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet"/>
	<![endif]-->
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/ace-skins.min.css')}}"/>
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/ace-rtl.min.css')}}"/>
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="{{asset(config('static.dir.admin').'/assets/css/ace-ie.min.css')}}"/>
	<![endif]-->
	<!-- inline styles related to this page -->
	<!-- ace settings handler -->
	<script src="{{asset(config('static.dir.admin').'/assets/js/ace-extra.min.js')}}"></script>
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
	<!--[if lte IE 8]>
	<script src="{{asset(config('static.dir.admin').'/assets/js/html5shiv.min.js')}}"></script>
	<script src="{{asset(config('static.dir.admin').'/assets/js/respond.min.js')}}"></script><![endif]-->
	@yield('head')
</head>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="navbar-header pull-left">
			<a href="{{route('admin.index.index')}}" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					Jeffrey Admin
				</small>
			</a>
		</div>
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="grey dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-tasks"></i>
						<span class="badge badge-grey">4</span>
					</a>
					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-check"></i>
							4 Tasks to complete
						</li>
						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar">
								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>
										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown-footer">
							<a href="#">See tasks with details
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>
				<li class="purple dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						<span class="badge badge-important">8</span>
					</a>
					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-exclamation-triangle"></i>
							8 Notifications
						</li>
						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar navbar-pink">
								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left"><i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>New Comments</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown-footer">
							<a href="#">See all notifications
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>
				<li class="green dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
						<span class="badge badge-success">5</span>
					</a>
					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-envelope-o"></i>
							5 Messages
						</li>
						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar">
								<li>
									<a href="#" class="clearfix">
										<img src="{{asset(config('static.dir.admin').'/assets/images/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar"/>
										<span class="msg-body"><span class="msg-title"><span class="blue">Alex:</span>Ciao sociis natoque penatibus et auctor ...</span><span class="msg-time"><i class="ace-icon fa fa-clock-o"></i><span>a moment ago</span></span></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown-footer">
							<a href="inbox.html">See all messages
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>
				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="{{asset(config('static.dir.admin').'/assets/images/avatars/user.jpg')}}" alt="Jason's Photo"/>
						<span class="user-info"><small>Welcome,</small>Jason</span>
						<i class="ace-icon fa fa-caret-down"></i>
					</a>
					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="#">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li>
						<li>
							<a href="profile.html">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="{{url('/')}}" target="_blank">
								<span class="fa fa-reply"></span>
								返回前台
							</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="fa fa-window-close"></i>
								<span>注销登录</span>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /导航栏 -->
</div>
<div class="main-container ace-save-state" id="main-container">
	<div id="sidebar" class="sidebar responsive ace-save-state">
		<!-- 侧边栏快捷按钮 -->
		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>
				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>
				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>
				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>
			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-warning"></span>
				<span class="btn btn-danger"></span>
			</div>
		</div>
		<!-- /侧边栏快捷按钮 -->
		<ul class="nav nav-list">
			<?php
			function genMenu($menus)
			{
				$html = '';
				$li_one = '<li>
					<a href="%s">
						<i class="menu-icon %s"></i>
						<span class="menu-text"> %s </span>
					</a>
					<b class="arrow"></b>
					</li>';
				$li_sub = '<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon %s"></i>
					<span class="menu-text"> %s </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				%s
			</li>';
				foreach ($menus as $menu) {
					if (!$menu->submenus->isEmpty()) {
						// 有子菜单
						$sub = "<ul class='submenu'>" . genMenu($menu->submenus) . "</ul>";
						$html .= sprintf($li_sub, $menu->icon_class, $menu->text, $sub);
					} else {
						// 单个菜单
						$menu_url = $menu->route_name != null ? call_user_func_array('route', [$menu->route_name]) : $menu->url;
						$html .= sprintf($li_one, $menu_url, $menu->icon_class, $menu->text);
					}
				}
				return $html;
			}
			?>
			{!! genMenu($adminMenu) !!}
		</ul>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">Dashboard</li>
				</ul>
				<!-- /.breadcrumb -->
				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon"><input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"/><i class="ace-icon fa fa-search nav-search-icon"></i></span>
					</form>
				</div>
				<!-- /.nav-search -->
			</div>
			<div class="page-content">
				<!-- 页面设置 -->
				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="ace-icon fa fa-cog bigger-130"></i>
					</div>
					<div class="ace-settings-box clearfix" id="ace-settings-box">
						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<div class="pull-left">
									<select id="skin-colorpicker" class="hide">
										<option data-skin="no-skin" value="#438EB9">#438EB9</option>
										<option data-skin="skin-1" value="#222A2D">#222A2D</option>
										<option data-skin="skin-2" value="#C6487E">#C6487E</option>
										<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
									</select>
								</div>
								<span>&nbsp; Choose Skin</span>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off"/>
								<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off"/>
								<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off"/>
								<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off"/>
								<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off"/>
								<label class="lbl" for="ace-settings-add-container">Inside
									<b>.container</b>
								</label>
							</div>
						</div>
						<!-- /.pull-left -->
						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off"/>
								<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off"/>
								<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off"/>
								<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
							</div>
						</div>
						<!-- /.pull-left -->
					</div>
					<!-- /.ace-settings-box -->
				</div>
				<!-- /页面设置 -->
				<!-- 页面主体头部 -->
				<div class="page-header">
					<h1>
						@yield('title')
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							overview &amp; stats
						</small>
					</h1>
				</div>
				<!-- /页面主体头部 -->
				<!-- 页面主体 -->
				<div>
					@yield('content')
				</div>
				<!-- /页面主体 -->
			</div>
		</div>
	</div>
	<!-- /.main-content -->
	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder">Jeffrey</span>
					<span>Application &copy; 2017</span>
					<span>
						@if(date('Y')!=2017)
							-
							{{date('Y')}}
						@endif
					</span>
				</span>
			</div>
		</div>
	</div>
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div>
<!-- /.main-container -->
<!-- basic scripts -->
<!--[if !IE]> -->
<script src="{{asset(config('static.dir.admin').'/assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="{{asset(config('static.dir.admin').'/assets/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) {
		document.write("<script src='{{asset(config('static.dir.admin').'/assets/js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
	}
</script>
<script src="{{asset(config('static.dir.admin').'/assets/js/bootstrap.min.js')}}"></script>
<!-- page specific plugin scripts -->
<!--[if lte IE 8]>
<script src="{{asset(config('static.dir.admin').'/assets/js/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset(config('static.dir.admin').'/assets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset(config('static.dir.vendor').'/jquery-form/jquery.form.min.js')}}"></script>
{{--<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.easypiechart.min.js')}}"></script>--}}
{{--<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.sparkline.index.min.js')}}"></script>--}}
{{--<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.flot.min.js')}}"></script>--}}
{{--<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.flot.pie.min.js')}}"></script>--}}
{{--<script src="{{asset(config('static.dir.admin').'/assets/js/jquery.flot.resize.min.js')}}"></script>--}}
<script src="{{asset(config('static.dir.vendor').'/layui/layui.js')}}"></script>
<!-- ace scripts -->
<script src="{{asset(config('static.dir.admin').'/assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset(config('static.dir.admin').'/assets/js/ace.min.js')}}"></script>
<!-- My Scripts -->
<script src="{{asset('/js/myAjax.js')}}"></script>
<script>
	//获取layer实例
	$().ready(function () {
		window.csrfToken = "{{csrf_token()}}";
		layui.use(['layer'], function () {
			window.layer = layui.layer;
		});
	});
</script>
@yield('foot')
</body>
</html>