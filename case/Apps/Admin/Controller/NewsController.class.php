<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of NewsController
 * 资讯模块
 * @author Administrator
 */
class NewsController extends Controller {
    //put your code here
    public function index() {
    	$news = M('news');
    	//引入Page类
    	import('Org.Util.Page');
    	$count = $news->count();
    	$Page = new \Think\Page($count,10);
    	$show = $Page->show();
    	$list = $news->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);
    	$this->assign('page',$show);
        $this->display();
    }
    
    public function detail() {
    	$id = I('id');
    	$news = M('news')->find($id);
    	// p($news);
    	// die();
    	$this->assign('news',$news);
    	$this->display();
    }

    public function addNews() {
        $this->display();
    }

    public function editNews() {
    	$id = I('id');
    	$news = M('news')->find($id);
    	// p($news);
    	// die();
    	$this->assign('news',$news);
    	$this->display();
    }

    public function save() {
    	$id = I('id');
    	// p($id);
    	// die();
    	$data = array(
    		'theme' 		=> I('theme'),
    		'content'		=> I('content'),
    		'introduction'	=> I('introduction'),
    		'user'			=> I('user'),
    		'email'			=> I('email'),
    		'add_time'		=> date('Y-m-d H:i:s')
    		);
    	$news = M('news')->find($id);
    	if ($news) {
    		$result = M('news')->where('id='.$id)->save($data);
            if ($result || $result === 0) {
                echo '<script>alert("修改成功");location.href="./index.html"</script>';
            } else {
                echo '<script>alert("修改失败");location.href="./index.html"</script>';
            }
    	} else {
    		$result = M('news')->add($data);
            if ($result) {
                echo '<script>alert("添加成功");location.href="./index.html"</script>';
            } else {
                echo '<script>alert("添加失败");location.href="./index.html"</script>';
            }
    	}
    }

    public function delete() {
        $id = I('id');
        $result = M('news')->delete($id);
        if ($result) {
            $this->success('删除成功!');
        } else {
            $this->error('删除失败!');
        }
    }
}
