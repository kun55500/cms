
    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> CMS主页</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    <link href="/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">CMS</strong>
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element">CMS
                    </div>
                </li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">管理员表</span>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">管理员</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('admin/create')}}">添加管理员</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('/admin')}}">管理员管理</a>
                        </li>

                    </ul>
                </li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">新闻分类</span>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">新闻分类</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('category/create')}}">添加新闻分类</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('/category')}}">新闻分类管理</a>
                        </li>

                    </ul>
                </li>

                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">新闻</span>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">新闻</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('news/create')}}">添加新闻</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('/news')}}">新闻管理</a>
                        </li>

                    </ul>
                </li>

                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">友情链接</span>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">友情链接</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('blog/create')}}">添加友链</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('/blog')}}">管理友链</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="javascript:;"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="javascript:;">
                        <div class="form-group">
                            <button  class="form-control" name="top-search" id="top-search">
                        </div>

                    </form>
                </div>


@if(!session('admin'))
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe id="J_iframe" width="100%" height="100%" src="{{url('/login')}}" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
    </div>
@else
        </div>
        <div class="row J_mainContent" id="content-main">
            欢迎 <b style="color: red">{{session('admin.uname')}}</b>  登录
            <a href="{{url('login/doLogin')}}"  class="btn btn-success">退出</a>
            <iframe id="J_iframe" width="100%" height="100%" src="{{url('/admin')}}" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
</div>
            @endif




    <!--右侧部分结束-->
</div>

<!-- 全局js -->
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/static/admin/js/hAdmin.js?v=4.1.0"></script>
<script type="text/javascript" src="/static/admin/js/index.js"></script>

<!-- 第三方插件 -->
<script src="/static/admin/js/plugins/pace/pace.min.js"></script>
<div style="text-align:center;">

</div>
</body>

</html>
