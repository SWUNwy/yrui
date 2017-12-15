<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>WyEcho管理系统</title>
    <meta name="keywords" content="WyEcho管理系统">
    <meta name="description" content="WyEcho管理系统">

    <link rel="shortcut icon" href="/yrui/case/public/Admin/img/favicon.ico">
    <link href="/yrui/case/public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="/yrui/case/public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <script src="/yrui/case/public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
    <script src="/yrui/case/public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
    <script src="/yrui/case/public/Admin/js/content.mine209.js?v=1.0.0"></script>
    <script src="/yrui/case/public/Admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="/yrui/case/public/Admin/js/demo/bootstrap-table-demo.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/summernote/summernote.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/summernote/summernote-zh-CN.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/yrui/case/public/Admin/js/demo/peity-demo.min.js"></script>
    <script src="/yrui/case/public/Admin/js/plugins/peity/jquery.peity.min.js"></script>
    <link href="/yrui/case/public/Admin/css/plugins/webuploader/webuploader.css" rel="stylesheet">
    <script src="/yrui/case/public/Admin/js/plugins/webuploader/webuploader.js"></script>
    <script src="/yrui/case/public/Admin/js/layer/layer.js"></script>
    <script src="/yrui/case/public/Admin/js/laydate/laydate.js"></script>
    <script src="http://tajs.qq.com/stats?sId=9051096" type="text/javascript"  charset="UTF-8"></script>
</head>

<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>用户列表</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3" style="float: right;">
                            <!-- <div class="input-group">
                                <input type="text" placeholder="请输入用户名" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>用户名</th>
                                <th>角色</th>
                                <th>最后登录IP</th>
                                <th>最后登录时间</th>
                                <th>创建时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($userlist["id"]); ?>">
                                    </td>
                                    <td><?php echo ($list["id"]); ?></td>
                                    <td><?php echo ($list["uname"]); ?></td>
                                    <td><?php echo ($list["name"]); ?></td>
                                    <td>
                                        <?php echo ($list["last_ip"]); ?>
                                    </td>
                                    <td>
                                        <?php if(($list['last_time'] != '')): echo ($list["last_time"]); endif; ?>
                                    </td>
                                    <td>
                                        <?php echo ($list["create_time"]); ?>
                                    </td>
                                    <td>
                                        <?php if(($list['status'] == 1)): ?><span style="color:green;">启用</span><?php endif; ?>
                                        <?php if(($list['status'] == 0)): ?><span style="color:red;">禁用</span><?php endif; ?>
                                    </td>
                                    <?php if(($list['role_id'] != 1)): ?><td>
                                            <?php if($list['status'] == 1): ?><a href="<?php echo U('User/setStatus',['id'=>$list['id'],'status'=>0]);?>" class="ajax-status"><button type="button" class="btn btn-outline btn-danger btn-xs">禁用</button></a>
                                                <?php else: ?>
                                                <a href="<?php echo U('User/setStatus',['id'=>$list['id'],'status'=>1]);?>" class="ajax-status"><button type="button" class="btn btn-outline btn-primary btn-xs">启用</button></a><?php endif; ?>
                                            <a href="<?php echo U('User/edit',['id'=>$list['id']]);?>"><button type="button" class="btn btn-outline btn-default btn-xs">编辑</button></a>
                                            <a href="<?php echo U('User/delete',['id'=>$list['id']]);?>" class="ajax-delete"><button type="button" class="btn btn-outline btn-warning btn-xs">删除</button></a>
                                        </td>
                                    <?php else: ?>
                                        <td>
                                            <span style="color: red;">不能操作超级管理员!</span>
                                        </td><?php endif; ?>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center;"><?php echo ($page); ?></div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="/yrui/case/public/Admin/js/http/ajax.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>