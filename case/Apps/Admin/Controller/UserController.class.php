<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller {

	public function index() {
		$user = M('user');

		import('Org.Util.Page');

		$count = $user->count();
		        //实例化分页类 传入总记录数和每页显示的记录数
		$Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $list = $user->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);		

        $this->display();
	}

	public function add() {
		$data = array(
			'uname'			=> I('uname'),
			'pwd'			=> I('pwd'),
			'status'		=> I('status'),
			'role_id'		=> I('role_id'),
			'create_time'	=> date('Y-m-d H:i:s'),
			);
		// p($data);
		// die();
		$result = M('user')->add($data);
		if ($result) {
			$this->success("添加成功!");
		} else {
			$this->error("添加失败!");
		}
	}

	public function delete() {
		$id = I('id');
		$result = M('user')->delete($id);
		if ($result) {
			$this->success('删除成功!');
		} else {
			$this->error('删除失败!');
		}
	}

	public function edit() {
		$id = I('id');
		$list = M('user')->find($id);
		$this->assign('list',$list);
		$this->display('editUser');
	}

	public function save() {
		$id = I('id');
		$data = array(
			'uname'		=> I('uname'),
			'pwd'		=> I('pwd'),
			'status'	=> I('status'),
			'role_id'	=> I('role_id'),
			'last_time'	=> date('Y-m-d H:i:s'),
			);
		$result = M('user')->where('id='.$id)->save($data);
		if ($result) {
			$this->success('操作成功!');
		} else {
			$this->error('操作失败!');
		}
	}

	public function setStatus() {
		$id 	= I('id');
		$status = I('status');
		$data 	= array(
			'status' => $status,
			'last_time'	=> date('Y-m-d H:i:s'),
			);
		$result = M('user')->where('id='.$id)->setField($data);
		if ($result) {
			$this->success('操作成功!');
		} else {
			$this->error('操作失败!');
		}
	}

}