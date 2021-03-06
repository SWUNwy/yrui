var disenable;
var enable;
var remove;
$(document).ready(function(){
    $(".i-checks").iCheck({
        checkboxClass:"icheckbox_square-green",
        radioClass:"iradio_square-green",
    });

    disenable = function(data){
        var id = data;
        $.ajax({
            url:GV.news_setstatus,
            type:'post',
            data:{'id':id,'status':1,'tableName':'news','tableField':'status'},
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('禁用成功');
                }else{
                    delay('禁用失败');
                }
            }
        });
    }

    enable = function(data){
        var id = data;
        $.ajax({
            url:GV.news_setstatus,
            type:'post',
            data:{'id':id,'status':0,'tableName':'news','tableField':'status'},
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('启用成功');
                }else{
                    delay('启用失败');
                }
            }
        });
    }

    remove = function(data){
        var id = data;
        $.ajax({
            url:GV.news_setstatus,
            type:'post',
            data:{'id':id,'status':1,'tableName':'news','tableField':'remove'},
            complete:refresh,
            success:function(data){
                //console.log(data);
                if(data.status == 1){
                    delay('移除成功');
                }else{
                    delay('移除失败');
                }
            }
        });
    }

    //刷新当前页面
    function refresh(){
        setTimeout(function(){
            window.location.reload();
        },1000);
    }

    //延时1s
    function delay($msg){
        setTimeout(function(){
            layer.msg($msg);
        },0);
    }
});