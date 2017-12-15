<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of MemberController
 *
 * @author Administrator
 */
class MemberController extends Controller {
    //put your code here
    public function index() {
        $member = M('member');
        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $member->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $list = $member->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    
    public function addMember() {
        $this->display();
    }

    public function getDetail() {
        $member = M('member')->where(['id'=>I('get.id')])->find();
        $this->assign('member',$member);
        $this->display();
    }

    public function editMember() {
        $id = I('id');
        $member = M('member')->find($id);
        $this->assign('member',$member);
        $this->display();
    }

    public function save() {
        $id = I('id');
        // p($id);
        $data = array(
            'uname'     => I('uname'),
            'sex'       => I('sex'),
            'email'     => I('email'),
            'phone'     => I('phone'),
            'introduct' => I('introduct'),
            'ip'        => $_SERVER["REMOTE_ADDR"],
            'last_time' => date('Y-m-d H:i:s')
            );
        // p($data);
        $member = M('member')->find($id);
        if ($member) {
            $result = M('member')->where('id='.$id)->save($data);
            if ($result || $result === 0) {
                echo '<script>alert("修改成功");location.href="./index.html"</script>';
            } else {
                echo '<script>alert("修改失败");location.href="./index.html"</script>';
            }
         } else {
            $result = M('member')->add($data);
            if ($result) {
                echo '<script>alert("添加成功");location.href="./index.html"</script>';
            } else {
                echo '<script>alert("添加失败");location.href="./index.html"</script>';
            }
         }

    }

    /**
     * 删除
     * @param $id
     * @param $tableName
     */
    public function delete($id){
        $id = I('id');
        $res = M('member')->where('id='.$id)->delete();
        if($res){
            $this->success('删除成功!');
        }else{
            $this->error('删除失败!');
        }
    }    

    
}
