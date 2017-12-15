<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends Controller {
    /**
     * Blog list
     */
    public function index() {
        $blog = M('blog');

        import('Org.Util.Page');

        $count = $blog->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $list = $blog->where(['remove'=>0])->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function getDetail() {
        $id = I('id');
        $detail = M('blog')->find($id);
        $this->assign('detail',$detail);
        $this->display('getDetail');
    }

    /**
     * 新增博文
     */
    public function addBlog() {
        $this->display();
    }
    
    /**
     * 编辑博文
     */
    public function editBlog() {
        $id = I('id');
        $blog = M('blog')->find($id);
        p($blog);
        die();
        $this->assign('blog',$blog);
        $this->display();
    }

    /**
     * [save description]
     * @return [type] [description]
     */
    public function save() {
        $id = I('id');
        $data = array(
            'title'     => I('title'),
            'author'    => I('author'),
            'category_id'   => I('category_id'),
            'content'       => I('content'),
            'label'         => I('label'),
            'status'        => I('status'),
            'add_time'      => date('Y-m-d H:i:s')
            );
        p($data);
        die();
    }

    /**
     * 分类列表
     */
    public function cateList() {
        $this->display();
    }
    
    /**
     * 增加分类
     */
    public function addCate() {
        $this->display();
    }
    
    /**
     * 编辑分类
     */
    public function editCate() {
        $this->display();
    }
    
    public function delete() {
        $id = I('id');
        $result = M('blog')->delete($id);
        if ($result) {
            $this->success("删除成功!");
        } else {
            $this->error("删除失败!");
        }
    }

    public function remove() {
        $id     = I('id');
        $remove = I('remove');
        $data = array(
            'remove'    => $remove,
            'last_time' => date('Y-m-d H:i:s')
            );
        $result = M('blog')->where(['id'=>$id])->setField($data);
        if ($result) {
            $this->success('操作成功!');
        } else {
            $this->error('操作失败!');
        }
    }

    public function setStatus() {
        $id     = I('id');
        $status = I('status');
        $data   = array(
            'status'    => $status,
            'last_time' => date('Y-m-d H:i:s')
            );
        $result = M('blog')->where('id='.$id)->setField($data);
        if ($result) {
            $this->success('操作成功!');
        } else {
            $this->error('操作失败!');
        }
    }

    /**
     * 
     */
    public function recycle() {
        $blog = M('blog');

        import('Org.Util.Page');

        $count = $blog->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $list = $blog->where(['remove'=>1])->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    
}
