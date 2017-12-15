<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:31:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--<title><?php echo (C("system_title")); ?></title>-->

    <meta name="keywords" content="<?php echo (C("system_title")); ?>">
    <meta name="description" content="<?php echo (C("system_title")); ?>">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="/yrui/case/public/Admin/img/favicon.ico">
    <link href="/yrui/case/public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
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
                            <span>
                                <?php if(($images == '')): ?><img alt="image" class="img-circle" src="/yrui/case/public/Admin/img/profile_small.jpg" />
                                <?php else: ?>
                                    <img alt="image" class="img-circle" style="width: 64px;height: 64px;" src="<?php echo getImage($images);?>" /><?php endif; ?>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($username); ?></strong></span>
                                <span class="text-muted text-xs block"><?php echo ($rolename); ?><b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <?php if(($user_id != 1)): ?><li><a class="J_menuItem" href="<?php echo U('User/edituser',['id'=>$user_id]);?>">修改资料</a>
                                </li>
                                <li class="divider"></li><?php endif; ?>
                                <li><a href="<?php echo U('Login/logout');?>" onclick="logout();">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">*^_^*
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/main');?>" class="J_menuItem">
                            <i class="fa fa-home" style="font-size: 18px;"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>

                    <?php if(in_array('23',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#user">
                            <i class="fa fa-user" style="font-size: 17px;"></i>
                            <span class="nav-label">&nbsp;管理员管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('24',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('User/addUser');?>">新增管理员</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('25',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href=<?php echo U('User/index');?>">管理员列表</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('26',$auth)||$auth==''){ ?>
                    <li>
                        <a href="##unlock-alt">
                            <i class="fa fa-unlock-alt" style="font-size: 18px;"></i>
                            <span class="nav-label">&nbsp;权限管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('27',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Role/index');?>">角色管理</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('28',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Auth/index');?>">权限列表</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->

        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                    </div>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo U('Login/logout');?>" onclick="" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('Index/main');?>" frameborder="0" data-id="<?php echo U('Index/main');?>" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2017
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
    <script src="/yrui/case/public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
    <script src="/yrui/case/public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
    <script src="/yrui/case/public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/layer/layer.min.js"></script>
    <script src="/yrui/case/public/Admin/js/hplus.min862f.js?v=4.1.0"></script>
    <script src="/yrui/case/public/Admin/js/contabs.min.js" type="text/javascript"></script>
    <script src="/yrui/case/public/Admin/js/plugins/pace/pace.min.js"></script>
    <script src="/yrui/case/public/Admin/js/layer/layer.js"></script>
<!--     <script>
        定义全局变量
        var GV = {
            login_logout : "<?php echo U('Login/logout');?>",
            login_index : "<?php echo U('Login/index');?>"
        };
    </script> -->
    <!-- <script src="/yrui/case/public/Admin/js/http/index/index.js"></script> -->
</body>

<!-- Mirrored from www.zi-han.net/theme/hplus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:31:16 GMT -->
</html>